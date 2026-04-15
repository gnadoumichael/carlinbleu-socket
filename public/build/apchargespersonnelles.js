(self["webpackChunk"] = self["webpackChunk"] || []).push([["apchargespersonnelles"],{

/***/ "./assets/apchargespersonnelles.js":
/*!*****************************************!*\
  !*** ./assets/apchargespersonnelles.js ***!
  \*****************************************/
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
/* harmony import */ var _components_chantiers_ChargesPersonnelles_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./components/chantiers/ChargesPersonnelles.js */ "./assets/components/chantiers/ChargesPersonnelles.js");















/***/ }),

/***/ "./assets/components/chantiers/ChargesPersonnelles.js":
/*!************************************************************!*\
  !*** ./assets/components/chantiers/ChargesPersonnelles.js ***!
  \************************************************************/
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







var ChargesPersonnelles = function ChargesPersonnelles() {
  var _useState = (0,react__WEBPACK_IMPORTED_MODULE_30__.useState)([]),
    _useState2 = _slicedToArray(_useState, 2),
    persos = _useState2[0],
    setPersos = _useState2[1];
  var _useState3 = (0,react__WEBPACK_IMPORTED_MODULE_30__.useState)([]),
    _useState4 = _slicedToArray(_useState3, 2),
    caissperso = _useState4[0],
    setCaissPerso = _useState4[1];
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
  var fetchCaissePerso = /*#__PURE__*/function () {
    var _ref2 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee2() {
      var dedo;
      return _regeneratorRuntime().wrap(function _callee2$(_context2) {
        while (1) switch (_context2.prev = _context2.next) {
          case 0:
            dedo = JSON.parse(jquery__WEBPACK_IMPORTED_MODULE_35___default()('#caisseperso').val());
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
  (0,react__WEBPACK_IMPORTED_MODULE_30__.useEffect)(function () {
    fetchPersos();
    fetchCaissePerso();
  }, []);
  jquery__WEBPACK_IMPORTED_MODULE_35___default()("#checkedPerso").change(function () {
    if (this.checked) {
      jquery__WEBPACK_IMPORTED_MODULE_35___default().each(jquery__WEBPACK_IMPORTED_MODULE_35___default()("input[name='pers']"), function () {
        this.checked = true;
      });
    } else {
      jquery__WEBPACK_IMPORTED_MODULE_35___default().each(jquery__WEBPACK_IMPORTED_MODULE_35___default()("input[name='pers']"), function () {
        this.checked = false;
      });
    }
  });
  jquery__WEBPACK_IMPORTED_MODULE_35___default()("#editPerso").off().on("click", function () {
    jquery__WEBPACK_IMPORTED_MODULE_35___default().each(jquery__WEBPACK_IMPORTED_MODULE_35___default()("input[name='pers']:checked"), function () {
      window.$('#Traitement').modal('show');
      window.location.href = '/crm/personnel/edit/person/' + jquery__WEBPACK_IMPORTED_MODULE_35___default()(this).val();
      return false;
    });
  });
  jquery__WEBPACK_IMPORTED_MODULE_35___default()("#delPerso").off().on("click", function () {
    jquery__WEBPACK_IMPORTED_MODULE_35___default().each(jquery__WEBPACK_IMPORTED_MODULE_35___default()("input[name='pers']:checked"), function () {
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
  var rpcount = 0;
  var rpdebit = 0;
  var rpcredit = 0;
  var renderRelePerso = caissperso.map(function (caiss) {
    if (caiss.personnel["corbeille"] == null) {
      if (caiss.corbeille === null && caiss.etat === "valide") {
        rpcount = rpcount + 1;
        if (caiss.operation === "debit") {
          rpdebit = rpdebit + caiss.montant;
        }
        if (caiss.operation === "credit") {
          rpcredit = rpcredit + caiss.montant;
        }
      }
      var ed = 0;
      var ec = 0;
      if (caiss.operation === "debit") {
        ed = caiss.montant;
      }
      if (caiss.operation === "credit") {
        ec = caiss.montant;
      }
      return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, caiss.corbeille === null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, caiss.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
        key: caiss.id,
        className: "paginate11"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
        className: "text-center"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react_moment__WEBPACK_IMPORTED_MODULE_34___default()), {
        format: "DD/MM/YYYY"
      }, caiss.date)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
        href: "/crm/caisse/".concat(caiss.id, "/").concat(caiss.chantier.id)
      }, caiss.numcaisse)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
        dangerouslySetInnerHTML: {
          __html: caiss.caissereference
        }
      }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
        className: "text-right"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
        numb: ed
      })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
        className: "text-right"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
        numb: ec
      })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
        className: "text-left pri bolo600 nowrape"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
        className: "fa fa-user pri"
      }), " \xA0", caiss.dobyuser.nom.toUpperCase() + ' ', " ", caiss.dobyuser.prenoms.toUpperCase()))));
    }
    return null;
  });
  var perscount = 0;
  var frepersoto = 0;
  var frepersuto = 0;
  var renderPersos = persos.map(function (perso) {
    var caisses = perso.caisses;
    var culen = 0;
    var freperso = 0;
    var frepersu = 0;
    if (perso.type === 'personnelle') {
      perscount = perscount + 1;
    }
    var renderCaisPe = caisses.map(function (caisse) {
      if (caisse.corbeille === null && caisse.chantier.type === "personnel") {
        if (caisse.etat === "valide") {
          if (caisse.operation === "debit") {
            freperso = freperso + caisse.montant;
            frepersoto = frepersoto + caisse.montant;
          } else {
            frepersu = frepersu + caisse.montant;
            frepersuto = frepersuto + caisse.montant;
          }
          culen = culen + 1;
        }
        var ddeb = 0;
        var ccred = 0;
        if (caisse.operation === "debit") {
          ddeb = caisse.montant;
        }
        if (caisse.operation === "credit") {
          ccred = caisse.montant;
        }
        return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
          key: caisse.id,
          className: perso.id + 'periso' + ' hide'
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
          className: "text-left bolo600 ml30 borde"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react_moment__WEBPACK_IMPORTED_MODULE_34___default()), {
          format: "DD/MM/YYYY"
        }, caisse.date)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
          className: "borde",
          style: {
            whiteSpace: "nowrap"
          }
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
        }, "Caisse N\xB0 ", caisse.numcaisse)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
          className: "text-right borde"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
          numb: ddeb
        })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
          className: "text-right borde"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
          numb: ccred
        })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
          className: "text-left ml30 borde",
          colSpan: "2",
          dangerouslySetInnerHTML: {
            __html: caisse.caissereference
          }
        }));
      } else {
        return null;
      }
    });
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, perso.type === 'personnelle' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, perso.corbeille === null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
      className: "paginate4",
      onClick: function onClick() {
        showBonPerso(perso.id);
      }
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "mw30 text-center"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("input", {
      className: "form-check-input",
      type: "checkbox",
      value: perso.id,
      name: "pers"
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-left"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("b", {
      className: "col-blue"
    }, "(", culen, ")"), perso.noms), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-right p-r-15"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
      numb: freperso
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-right p-r-15"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
      numb: frepersu
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-left p-r-15"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
      numb: freperso - frepersu
    }))), renderCaisPe)));
  });
  var pretcount = 0;
  var pretsoto = 0;
  var pretsuto = 0;
  var renderPersoPrets = persos.map(function (perso) {
    var caisses = perso.caisses;
    var pretculen = 0;
    var pretperso = 0;
    var pretpersu = 0;
    if (perso.type === 'personnelle') {
      pretcount = pretcount + 1;
    }
    var renderCaisPretPerso = caisses.map(function (caisse) {
      if (caisse.corbeille === null && caisse.chantier.type === "personnel") {
        if (caisse.genre === "pret") {
          if (caisse.etat === "valide") {
            if (caisse.operation === "debit") {
              pretperso = pretperso + caisse.montant;
              pretsoto = pretsoto + caisse.montant;
            } else {
              pretpersu = pretpersu + caisse.montant;
              pretsuto = pretsuto + caisse.montant;
            }
            pretculen = pretculen + 1;
          }
          var dpdeb = 0;
          var cpcred = 0;
          if (caisse.operation === "debit") {
            dpdeb = caisse.montant;
          }
          if (caisse.operation === "credit") {
            cpcred = caisse.montant;
          }
          return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
            key: caisse.id,
            className: perso.id + 'periso' + ' hide'
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
          }, "Caisse N\xB0 ", caisse.numcaisse)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
            className: "text-right borde"
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
            numb: dpdeb
          })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
            className: "text-right borde"
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
            numb: cpcred
          })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
            className: "text-left ml30 borde",
            dangerouslySetInnerHTML: {
              __html: caisse.caissereference
            }
          }));
        }
        return null;
      } else {
        return null;
      }
    });
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, perso.type === 'personnelle' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, perso.corbeille === null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
      className: "paginate4",
      onClick: function onClick() {
        showBonPerso(perso.id);
      }
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "mw30 text-center"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("input", {
      className: "form-check-input",
      type: "checkbox",
      value: perso.id,
      name: "pers"
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-left"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("b", {
      className: "col-blue"
    }, "(", pretculen, ")"), perso.noms), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-right p-r-15"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
      numb: pretperso
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-right p-r-15"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
      numb: pretpersu
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-left p-r-15"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
      numb: pretperso - pretpersu
    }))), renderCaisPretPerso)));
  });
  var avcount = 0;
  var avsoto = 0;
  var avsuto = 0;
  var renderPersoAvances = persos.map(function (perso) {
    var caisses = perso.caisses;
    var avculen = 0;
    var avperso = 0;
    var avpersu = 0;
    if (perso.type === 'personnelle') {
      avcount = avcount + 1;
    }
    var renderCaisAvancesPerso = caisses.map(function (caisse) {
      if (caisse.corbeille === null && caisse.chantier.type === "personnel") {
        if (caisse.genre === "avance") {
          if (caisse.etat === "valide") {
            if (caisse.operation === "debit") {
              avperso = avperso + caisse.montant;
              avsoto = avsoto + caisse.montant;
            } else {
              avpersu = avpersu + caisse.montant;
              avsuto = avsuto + caisse.montant;
            }
            avculen = avculen + 1;
          }
          var dddeb = 0;
          var cccred = 0;
          if (caisse.operation === "debit") {
            dddeb = caisse.montant;
          }
          if (caisse.operation === "credit") {
            cccred = caisse.montant;
          }
          return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
            key: caisse.id,
            className: perso.id + 'perisos' + ' hide'
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
            className: "text-left bolo600 ml30 borde"
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react_moment__WEBPACK_IMPORTED_MODULE_34___default()), {
            format: "DD/MM/YYYY"
          }, caisse.date)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
            className: "borde",
            style: {
              whiteSpace: "nowrap"
            }
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
          }, "Caisse N\xB0 ", caisse.numcaisse)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
            className: "text-right borde"
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
            numb: dddeb
          })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
            className: "text-right borde"
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
            numb: cccred
          })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
            className: "text-left ml30 borde",
            dangerouslySetInnerHTML: {
              __html: caisse.caissereference
            }
          }));
        }
        return null;
      } else {
        return null;
      }
    });
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, perso.type === 'personnelle' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, perso.corbeille === null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
      className: "paginate4",
      onClick: function onClick() {
        showBonPersos(perso.id);
      }
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "mw30 text-center"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("input", {
      className: "form-check-input",
      type: "checkbox",
      value: perso.id,
      name: "pers"
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-left"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("b", {
      className: "col-blue"
    }, "(", avculen, ") "), perso.noms), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-right p-r-15"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
      numb: avperso
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-right p-r-15"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
      numb: avpersu
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-left p-r-15"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
      numb: avperso - avpersu
    }))), renderCaisAvancesPerso)));
  });
  var sacount = 0;
  var sasoto = 0;
  var sasuto = 0;
  var renderPersoSalaires = persos.map(function (perso) {
    var caisses = perso.caisses;
    var saculen = 0;
    var saperso = 0;
    var sapersu = 0;
    if (perso.type === 'personnelle') {
      sacount = sacount + 1;
    }
    var renderCaisSalairePerso = caisses.map(function (caisse) {
      if (caisse.corbeille === null && caisse.chantier.type === "personnel") {
        if (caisse.genre === "salaire") {
          if (caisse.etat === "valide") {
            if (caisse.operation === "debit") {
              saperso = saperso + caisse.montant;
              sasoto = sasoto + caisse.montant;
            } else {
              sapersu = sapersu + caisse.montant;
              sasuto = sasuto + caisse.montant;
            }
            saculen = saculen + 1;
          }
          var dadeb = 0;
          var cacred = 0;
          if (caisse.operation === "debit") {
            dadeb = caisse.montant;
          }
          if (caisse.operation === "credit") {
            cacred = caisse.montant;
          }
          return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
            key: caisse.id,
            className: perso.id + 'periso' + ' hide'
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
          }, "Caisse N\xB0 ", caisse.numcaisse)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
            className: "text-right borde"
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
            numb: dadeb
          })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
            className: "text-right borde"
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
            numb: cacred
          })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
            className: "text-left ml30 borde",
            dangerouslySetInnerHTML: {
              __html: caisse.caissereference
            }
          }));
        }
        return null;
      } else {
        return null;
      }
    });
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, perso.type === 'personnelle' && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, perso.corbeille === null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
      className: "paginate4",
      onClick: function onClick() {
        showBonPerso(perso.id);
      }
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "mw30 text-center"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("input", {
      className: "form-check-input",
      type: "checkbox",
      value: perso.id,
      name: "pers"
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-left"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("b", {
      className: "col-blue"
    }, "(", saculen, ")"), perso.noms), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-right p-r-15"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
      numb: saperso
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-right p-r-15"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
      numb: sapersu
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
      className: "text-left p-r-15"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
      numb: saperso - sapersu
    }))), renderCaisSalairePerso)));
  });
  var handlePersos = function handlePersos(event) {
    var filter = event.target.value.toLowerCase();
    jquery__WEBPACK_IMPORTED_MODULE_35___default()("#persoos tbody tr.paginate4").filter(function () {
      jquery__WEBPACK_IMPORTED_MODULE_35___default()(this).toggle(jquery__WEBPACK_IMPORTED_MODULE_35___default()(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1);
    });
  };
  var showBonPerso = function showBonPerso(id) {
    if (jquery__WEBPACK_IMPORTED_MODULE_35___default()('.' + id + 'periso').hasClass("hide")) {
      jquery__WEBPACK_IMPORTED_MODULE_35___default()('.' + id + 'periso').removeClass('hide');
    } else {
      jquery__WEBPACK_IMPORTED_MODULE_35___default()('.' + id + 'periso').addClass('hide');
    }
  };
  var showBonPersos = function showBonPersos(id) {
    if (jquery__WEBPACK_IMPORTED_MODULE_35___default()('.' + id + 'perisos').hasClass("hide")) {
      jquery__WEBPACK_IMPORTED_MODULE_35___default()('.' + id + 'perisos').removeClass('hide');
    } else {
      jquery__WEBPACK_IMPORTED_MODULE_35___default()('.' + id + 'perisos').addClass('hide');
    }
  };
  var handleRelePerso = function handleRelePerso(event) {
    var filter = event.target.value.toLowerCase();
    jquery__WEBPACK_IMPORTED_MODULE_35___default()("#relePerso tr.paginate11").filter(function () {
      jquery__WEBPACK_IMPORTED_MODULE_35___default()(this).toggle(jquery__WEBPACK_IMPORTED_MODULE_35___default()(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1);
    });
  };
  jquery__WEBPACK_IMPORTED_MODULE_35___default()('#adderCaissePersonnel').off().on("click", function (event) {
    event.preventDefault();
    if (jquery__WEBPACK_IMPORTED_MODULE_35___default()(this).closest('form').valid()) {
      jquery__WEBPACK_IMPORTED_MODULE_35___default()('#adderCaissePersonnel').hide();
      jquery__WEBPACK_IMPORTED_MODULE_35___default()('#closerCaissePersonnel').hide();
      jquery__WEBPACK_IMPORTED_MODULE_35___default()('#loaderCaissePersonnel').css('display', '');
      jquery__WEBPACK_IMPORTED_MODULE_35___default()('#editor20').val(CKEDITOR.instances['editor20'].getData());
      jquery__WEBPACK_IMPORTED_MODULE_35___default().ajax({
        type: 'POST',
        url: '/crm/caisse/personnel/add',
        data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_35___default()('#addCaissePersonnelForm').serializeObject()),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function success(respdata, textStatus, jqXHR) {
          jquery__WEBPACK_IMPORTED_MODULE_35___default()('#modalCaissePerso').modal('toggle');
          window.location.href = '/crm/caisse/' + respdata['result'][0]['numcaisse'] + '/' + respdata['result'][0]['idchantier'];
        },
        error: function error(xhr, resp, text) {
          jquery__WEBPACK_IMPORTED_MODULE_35___default()('#modalCaissePerso').modal('toggle');
          jquery__WEBPACK_IMPORTED_MODULE_35___default()('#ModalErreur').modal('show');
        }
      });
    }
  });
  jquery__WEBPACK_IMPORTED_MODULE_35___default()(function () {
    jquery__WEBPACK_IMPORTED_MODULE_35___default()(".js-example-basic-multiple").select2();
    jquery__WEBPACK_IMPORTED_MODULE_35___default()(".js-example-basic-single").select2();
    jquery__WEBPACK_IMPORTED_MODULE_35___default()("#persoos").simplePagination('tbody .paginate4');
  });
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "col-md-12",
    style: {
      paddingLeft: "0"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("button", {
    type: "button",
    "data-color": "blue",
    className: "btn bg-blue-grey text-white bolo600 waves-effect",
    "data-toggle": "modal",
    "data-target": "#modalCaissePerso"
  }, "+ BON DE CAISSE POUR LE PERSONNEL"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel-group",
    id: "accordion_2",
    role: "tablist",
    "aria-multiselectable": "true"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel panel-pri shadow m-t-5",
    style: {
      marginTop: "20px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel-heading",
    role: "tab",
    id: "headingPers"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("h4", {
    className: "panel-title"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
    className: "collapsed  outai col-white",
    role: "button",
    "data-toggle": "collapse",
    "data-parent": "#accordionPers",
    href: "#collapsePers",
    "aria-expanded": "false",
    "aria-controls": "collapsePers"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
    className: "material-icons col-white",
    style: {
      fontSize: "18px",
      "float": "left"
    }
  }, "keyboard_arrow_down"), "Le Personnel", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("span", {
    className: "badge bg-pink float-right"
  }, perscount)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    id: "collapsePers",
    className: "panel-collapse collapse",
    role: "tabpanel",
    "aria-labelledby": "headingPers"
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
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("h4", {
    className: "bolo700 col-blue"
  }, "LE PERSONNEL"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "row"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "col-md-8",
    style: {
      paddingTop: "20px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("span", {
    className: "m-r-5 vareact"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("input", {
    type: "checkbox",
    name: "checkPersos",
    id: "checkedPerso"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
    href: "#",
    id: "editPerso",
    className: "m-r-5 vareact"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
    className: "fa fa fa-edit  col-green"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
    href: "#",
    id: "delPerso",
    className: "m-r-5 vareact"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
    className: "fa fa fa-trash col-pink "
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_32__["default"], {
    id: "test-table-xls-button",
    className: "btn badge badge-pill col-green m-r-5 float-left vareact",
    table: "persoos",
    title: "G\xE9n\xE9rer un fichier Excel",
    filename: "LE PERSONNEL",
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
    onChange: handlePersos,
    placeholder: "Rechercher"
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("table", {
    id: "persoos",
    className: "table-striped table-hover display nowrap",
    style: {
      width: "100%",
      overflowX: 'scroll',
      marginBottom: "10px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
    style: {
      borderBottom: "1px solid #000"
    },
    className: "bg-light"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    rowSpan: "2",
    className: "mw30 text-center"
  }, "#"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    rowSpan: "2"
  }, "NOM & PR\xC9NOMS"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    colSpan: "3",
    className: "text-center"
  }, "ENREGISTREMENTS")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
    style: {
      borderBottom: "1px solid #000"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "bg-light text-right"
  }, "SORTIE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "bg-light text-right"
  }, "ENTR\xC9E"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "bg-light text-left"
  }, "SOLDE / R\xC9F\xC9RENCE"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tbody", null, renderPersos), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
    style: {
      borderBottom: "1px solid #000"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "text-right col-white bg-blue p20",
    style: {
      whiteSpace: "nowrap"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
    numb: frepersoto
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "text-right col-white bg-blue p20",
    style: {
      whiteSpace: "nowrap"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
    numb: frepersuto
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "text-left col-white bg-blue p20",
    style: {
      whiteSpace: "nowrap"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
    numb: frepersoto - frepersuto
  })))))))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel panel-pri shadow"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel-heading",
    role: "tab",
    id: "headingAvsal"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("h4", {
    className: "panel-title"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
    className: "collapsed  outai col-white",
    role: "button",
    "data-toggle": "collapse",
    "data-parent": "#accordionAvsal",
    href: "#collapseAvsal",
    "aria-expanded": "false",
    "aria-controls": "collapseAvsal"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
    className: "material-icons col-white",
    style: {
      fontSize: "18px",
      "float": "left"
    }
  }, "keyboard_arrow_down"), "Avances sur salaire", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("span", {
    className: "badge bg-pink float-right"
  }, perscount)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    id: "collapseAvsal",
    className: "panel-collapse collapse",
    role: "tabpanel",
    "aria-labelledby": "headingAvsal"
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
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("h4", {
    className: "bolo700 col-blue"
  }, "AVANCES SUR SALAIRE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "row"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "col-md-8",
    style: {
      paddingTop: "20px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_32__["default"], {
    id: "test-table-xls-button",
    className: "btn badge badge-pill col-green m-r-5 float-left vareact",
    table: "persoos",
    title: "G\xE9n\xE9rer un fichier Excel",
    filename: "LE PERSONNEL",
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
    onChange: handlePersos,
    placeholder: "Rechercher"
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("table", {
    id: "persoos",
    className: "table-striped table-hover display nowrap",
    style: {
      width: "100%",
      overflowX: 'scroll',
      marginBottom: "10px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
    style: {
      borderBottom: "1px solid #000"
    },
    className: "bg-light"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    rowSpan: "2",
    className: "mw30 text-center"
  }, "#"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    rowSpan: "2"
  }, "NOM & PR\xC9NOMS"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    colSpan: "3",
    className: "text-center"
  }, "ENREGISTREMENTS")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
    style: {
      borderBottom: "1px solid #000"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "bg-light text-right"
  }, "SORTIE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "bg-light text-right"
  }, "ENTR\xC9E"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "bg-light text-left"
  }, "SOLDE / R\xC9F\xC9RENCE"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tbody", null, renderPersoAvances), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
    style: {
      borderBottom: "1px solid #000"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "text-right col-white bg-blue",
    style: {
      whiteSpace: "nowrap"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
    numb: avsoto
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "text-right col-white bg-blue",
    style: {
      whiteSpace: "nowrap"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
    numb: avsuto
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "text-left col-white bg-blue",
    style: {
      whiteSpace: "nowrap"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
    numb: avsoto - avsuto
  })))))))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel panel-pri shadow"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel-heading",
    role: "tab",
    id: "headingPrInt"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("h4", {
    className: "panel-title"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
    className: "collapsed  outai col-white",
    role: "button",
    "data-toggle": "collapse",
    "data-parent": "#accordionPrInt",
    href: "#collapsePrInt",
    "aria-expanded": "false",
    "aria-controls": "collapsePrInt"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
    className: "material-icons col-white",
    style: {
      fontSize: "18px",
      "float": "left"
    }
  }, "keyboard_arrow_down"), "Pr\xEAts internes", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("span", {
    className: "badge bg-pink float-right"
  }, perscount)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    id: "collapsePrInt",
    className: "panel-collapse collapse",
    role: "tabpanel",
    "aria-labelledby": "headingPrInt"
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
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("h4", {
    className: "bolo700 col-blue"
  }, "PR\xCATS INTERNES"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "row"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "col-md-8",
    style: {
      paddingTop: "20px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("span", {
    className: "m-r-5 vareact"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("input", {
    type: "checkbox",
    name: "checkPersos",
    id: "checkedPerso"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
    href: "#",
    id: "editPerso",
    className: "m-r-5 vareact"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
    className: "fa fa fa-edit  col-green"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
    href: "#",
    id: "delPerso",
    className: "m-r-5 vareact"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
    className: "fa fa fa-trash col-pink "
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_32__["default"], {
    id: "test-table-xls-button",
    className: "btn badge badge-pill col-green m-r-5 float-left vareact",
    table: "persoos",
    title: "G\xE9n\xE9rer un fichier Excel",
    filename: "LE PERSONNEL",
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
    onChange: handlePersos,
    placeholder: "Rechercher"
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("table", {
    id: "persoos",
    className: "table-striped table-hover display nowrap",
    style: {
      width: "100%",
      overflowX: 'scroll',
      marginBottom: "10px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
    style: {
      borderBottom: "1px solid #000"
    },
    className: "bg-light"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    rowSpan: "2",
    className: "mw30 text-center"
  }, "#"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    rowSpan: "2"
  }, "NOM & PR\xC9NOMS"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    colSpan: "3",
    className: "text-center"
  }, "ENREGISTREMENTS")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
    style: {
      borderBottom: "1px solid #000"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "bg-light text-right"
  }, "SORTIE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "bg-light text-right"
  }, "ENTR\xC9E"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "bg-light text-left"
  }, "SOLDE / R\xC9F\xC9RENCE"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tbody", null, renderPersoPrets), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
    style: {
      borderBottom: "1px solid #000"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "text-right col-white bg-blue",
    style: {
      whiteSpace: "nowrap"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
    numb: pretsoto
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "text-right col-white bg-blue",
    style: {
      whiteSpace: "nowrap"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
    numb: pretsuto
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "text-left col-white bg-blue",
    style: {
      whiteSpace: "nowrap"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
    numb: pretsoto - pretsuto
  })))))))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel panel-pri shadow"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel-heading",
    role: "tab",
    id: "headingPeSal"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("h4", {
    className: "panel-title"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
    className: "collapsed  outai col-white",
    role: "button",
    "data-toggle": "collapse",
    "data-parent": "#accordionPeSal",
    href: "#collapsePeSal",
    "aria-expanded": "false",
    "aria-controls": "collapsePeSal"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
    className: "material-icons col-white",
    style: {
      fontSize: "18px",
      "float": "left"
    }
  }, "keyboard_arrow_down"), "Salaires", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("span", {
    className: "badge bg-pink float-right"
  }, perscount)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    id: "collapsePeSal",
    className: "panel-collapse collapse",
    role: "tabpanel",
    "aria-labelledby": "headingPeSal"
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
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("h4", {
    className: "bolo700 col-blue"
  }, "SALAIRES"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "row"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "col-md-8",
    style: {
      paddingTop: "20px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("span", {
    className: "m-r-5 vareact"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("input", {
    type: "checkbox",
    name: "checkPersos",
    id: "checkedPerso"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
    href: "#",
    id: "editPerso",
    className: "m-r-5 vareact"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
    className: "fa fa fa-edit  col-green"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
    href: "#",
    id: "delPerso",
    className: "m-r-5 vareact"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
    className: "fa fa fa-trash col-pink "
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_32__["default"], {
    id: "test-table-xls-button",
    className: "btn badge badge-pill col-green m-r-5 float-left vareact",
    table: "persoos",
    title: "G\xE9n\xE9rer un fichier Excel",
    filename: "LE PERSONNEL",
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
    onChange: handlePersos,
    placeholder: "Rechercher"
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("table", {
    id: "persoos",
    className: "table-striped table-hover display nowrap",
    style: {
      width: "100%",
      overflowX: 'scroll',
      marginBottom: "10px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
    style: {
      borderBottom: "1px solid #000"
    },
    className: "bg-light"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    rowSpan: "2",
    className: "mw30 text-center"
  }, "#"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    rowSpan: "2"
  }, "NOM & PR\xC9NOMS"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    colSpan: "3",
    className: "text-center"
  }, "ENREGISTREMENTS")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
    style: {
      borderBottom: "1px solid #000"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "bg-light text-right"
  }, "SORTIE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "bg-light text-right"
  }, "ENTR\xC9E"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "bg-light text-left"
  }, "SOLDE / R\xC9F\xC9RENCE"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tbody", null, renderPersoSalaires), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
    style: {
      borderBottom: "1px solid #000"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "text-right col-white bg-blue",
    style: {
      whiteSpace: "nowrap"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
    numb: sasoto
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "text-right col-white bg-blue",
    style: {
      whiteSpace: "nowrap"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
    numb: sasuto
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "text-left col-white bg-blue",
    style: {
      whiteSpace: "nowrap"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
    numb: sasoto - sasuto
  })))))))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel panel-pri shadow"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel-heading",
    role: "tab",
    id: "headingImpus"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("h4", {
    className: "panel-title"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("a", {
    className: "collapsed  col-white",
    role: "button",
    "data-toggle": "collapse",
    "data-parent": "#accordionImpus",
    href: "#collapseImpus",
    "aria-expanded": "false",
    "aria-controls": "collapseImpus"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
    className: "material-icons col-white",
    style: {
      fontSize: "18px",
      "float": "left"
    }
  }, "keyboard_arrow_down"), "R\xE9l\xE9v\xE9 des op\xE9rations du personnel", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("span", {
    className: "badge bg-pink float-right"
  }, rpcount)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    id: "collapseImpus",
    className: "panel-collapse collapse",
    role: "tabpanel",
    "aria-labelledby": "headingImpus"
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
    table: "relePerso",
    title: "G\xE9n\xE9rer un fichier Excel",
    filename: "R\xC9L\xC9V\xC9 DES FRAIS PERSONNELS",
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
    onChange: handleRelePerso,
    placeholder: "Rechercher"
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("table", {
    className: "table-striped table-hover display nowrap",
    style: {
      width: "100%",
      marginBottom: "10px"
    },
    id: "relePerso"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null, "DATE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null, "N\xBA DE BON"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null, "R\xC9F\xC9RENCE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null, "SORTIE DE CAISSE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null, "ENTR\xC9E DE CAISSE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", null, "VALID\xC9 PAR"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tbody", null, renderRelePerso), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "text-center col-white bg-blue",
    style: {
      whiteSpace: "nowrap"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
    numb: rpdebit
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "text-center col-white bg-blue",
    style: {
      whiteSpace: "nowrap"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_33__["default"], {
    numb: rpcredit
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
    className: "text-left col-blue"
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("br", null))))))));
};
try {
  var root = (0,react_dom_client__WEBPACK_IMPORTED_MODULE_31__.createRoot)(document.getElementById('setchargespersonnelles'));
  root.render( /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(ChargesPersonnelles, null));
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
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_modules_es_array_concat_js-node_modules_core-js_modules_es_array-383511","vendors-node_modules_core-js_modules_es_array_from_js-node_modules_core-js_modules_es_array_i-c84b5d","vendors-node_modules_moment_locale_af_js-node_modules_moment_locale_ar-dz_js-node_modules_mom-582c96","vendors-node_modules_react-html-table-to-excel_index_js","vendors-node_modules_react-moment_dist_index_js","assets_js_datascript_js-assets_js_jquery_validate_js-assets_css_mdb_css","assets_js_admin_js-assets_js_bootstrap_js-assets_js_jquery_tableToExcel_js-assets_js_select2_-13fb9c"], () => (__webpack_exec__("./assets/apchargespersonnelles.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBLElBQUksK0JBQStCO0FBQ25DO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLFFBQVE7QUFDUjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsQ0FBQzs7Ozs7Ozs7Ozs7QUN0RUQ7QUFDQSxtQkFBTyxDQUFDLGlHQUFrQzs7Ozs7Ozs7Ozs7QUNEMUM7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOzs7QUFHQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvYXBjaGFyZ2VzcGVyc29ubmVsbGVzLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9jb21wb25lbnRzL2NoYW50aWVycy9DaGFyZ2VzUGVyc29ubmVsbGVzLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9mb25jdGlvbnMvTnVtYmVyRm9ybWF0LmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9qcXVlcnkuc2ltcGxlUGFnaW5hdGlvbi5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9tb2R1bGVzL2VzLnN0cmluZy5yZXBsYWNlLWFsbC5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9tb2R1bGVzL2VzbmV4dC5zdHJpbmcucmVwbGFjZS1hbGwuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvIHN5bmMgXlxcLlxcLy4qJCJdLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgJy4vY3NzL2Jvb3RzdHJhcC5jc3MnO1xyXG5pbXBvcnQgJy4vY3NzL21kYi5jc3MnO1xyXG5pbXBvcnQgJy4vY3NzL3dhdmVzLmNzcyc7XHJcbmltcG9ydCAnLi9jc3MvYWxsLXRoZW1lcy5jc3MnO1xyXG5pbXBvcnQgJy4vY3NzL3NlbGVjdDIubWluLmNzcyc7XHJcbmltcG9ydCAnLi9jc3Mvc3R5bGUuY3NzJztcclxuXHJcblxyXG5pbXBvcnQgJy4vanMvYm9vdHN0cmFwLmpzJztcclxuaW1wb3J0ICcuL2pzL2RhdGFzY3JpcHQuanMnO1xyXG5pbXBvcnQgJy4vanMvc2VsZWN0Mi5taW4uanMnO1xyXG5pbXBvcnQgJy4vanMvanF1ZXJ5LnRhYmxlVG9FeGNlbC5qcyc7XHJcbmltcG9ydCAnLi9qcy9qcXVlcnkudmFsaWRhdGUuanMnO1xyXG5pbXBvcnQgJy4vanMvYWRtaW4uanMnO1xyXG5pbXBvcnQgJy4vanMvanF1ZXJ5LnNpbXBsZVBhZ2luYXRpb24nO1xyXG5cclxuaW1wb3J0ICcuL2NvbXBvbmVudHMvY2hhbnRpZXJzL0NoYXJnZXNQZXJzb25uZWxsZXMuanMnO1xyXG5cclxuIiwiaW1wb3J0IFJlYWN0LCB7dXNlRWZmZWN0LCB1c2VTdGF0ZX0gZnJvbSBcInJlYWN0XCI7XG5pbXBvcnQge2NyZWF0ZVJvb3R9IGZyb20gJ3JlYWN0LWRvbS9jbGllbnQnO1xuaW1wb3J0IGF4aW9zIGZyb20gXCJheGlvc1wiO1xuaW1wb3J0IFJlYWN0SFRNTFRhYmxlVG9FeGNlbCBmcm9tICdyZWFjdC1odG1sLXRhYmxlLXRvLWV4Y2VsJztcbmltcG9ydCBOdW1iZXJGb3JtYXQgZnJvbSBcIi4uLy4uL2ZvbmN0aW9ucy9OdW1iZXJGb3JtYXRcIjtcbmltcG9ydCBNb21lbnQgZnJvbSAncmVhY3QtbW9tZW50JztcbmltcG9ydCAkIGZyb20gXCJqcXVlcnlcIjtcblxuY29uc3QgQ2hhcmdlc1BlcnNvbm5lbGxlcyA9ICgpID0+IHtcblxuICAgIGNvbnN0IFtwZXJzb3MsIHNldFBlcnNvc10gPSB1c2VTdGF0ZShbXSk7XG4gICAgY29uc3QgW2NhaXNzcGVyc28sIHNldENhaXNzUGVyc29dID0gdXNlU3RhdGUoW10pO1xuXG4gICAgY29uc3QgZmV0Y2hQZXJzb3MgPSBhc3luYyAoKSA9PiB7XG4gICAgICAgIGNvbnN0IGRlZGUgPSBKU09OLnBhcnNlKCQoJyNqc29ucGVyc29zJykudmFsKCkpO1xuICAgICAgICBzZXRQZXJzb3MoZGVkZSk7XG5cbiAgICB9O1xuICAgIGNvbnN0IGZldGNoQ2Fpc3NlUGVyc28gPSBhc3luYyAoKSA9PiB7XG4gICAgICAgIGNvbnN0IGRlZG8gPSBKU09OLnBhcnNlKCQoJyNjYWlzc2VwZXJzbycpLnZhbCgpKTtcbiAgICAgICAgc2V0Q2Fpc3NQZXJzbyhkZWRvKTtcbiAgICB9O1xuXG4gICAgdXNlRWZmZWN0KCgpID0+IHtcbiAgICAgICAgZmV0Y2hQZXJzb3MoKTtcbiAgICAgICAgZmV0Y2hDYWlzc2VQZXJzbygpO1xuICAgIH0sIFtdKTtcblxuICAgICQoXCIjY2hlY2tlZFBlcnNvXCIpLmNoYW5nZShmdW5jdGlvbiAoKSB7XG4gICAgICAgIGlmICh0aGlzLmNoZWNrZWQpIHtcbiAgICAgICAgICAgICQuZWFjaCgkKFwiaW5wdXRbbmFtZT0ncGVycyddXCIpLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgdGhpcy5jaGVja2VkID0gdHJ1ZTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgJC5lYWNoKCQoXCJpbnB1dFtuYW1lPSdwZXJzJ11cIiksIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICB0aGlzLmNoZWNrZWQgPSBmYWxzZTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG4gICAgfSk7XG4gICAgJChcIiNlZGl0UGVyc29cIikub2ZmKCkub24oXCJjbGlja1wiLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgICQuZWFjaCgkKFwiaW5wdXRbbmFtZT0ncGVycyddOmNoZWNrZWRcIiksIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgIHdpbmRvdy4kKCcjVHJhaXRlbWVudCcpLm1vZGFsKCdzaG93Jyk7XG4gICAgICAgICAgICB3aW5kb3cubG9jYXRpb24uaHJlZiA9ICcvY3JtL3BlcnNvbm5lbC9lZGl0L3BlcnNvbi8nICsgJCh0aGlzKS52YWwoKTtcbiAgICAgICAgICAgIHJldHVybiBmYWxzZTtcbiAgICAgICAgfSk7XG4gICAgfSk7XG4gICAgJChcIiNkZWxQZXJzb1wiKS5vZmYoKS5vbihcImNsaWNrXCIsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgJC5lYWNoKCQoXCJpbnB1dFtuYW1lPSdwZXJzJ106Y2hlY2tlZFwiKSwgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgd2luZG93LiQoJyNUcmFpdGVtZW50JykubW9kYWwoJ3Nob3cnKTtcbiAgICAgICAgICAgIGF4aW9zKHtcbiAgICAgICAgICAgICAgICBtZXRob2Q6ICdERUxFVEUnLCB1cmw6ICcvY3JtL3BlcnNvbm5lbC9kZWwvJyArICQodGhpcykudmFsKCksXG4gICAgICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5yZWxvYWQoKTtcbiAgICAgICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICAgICAgICAgICQoJyNUcmFpdGVtZW50JykubW9kYWwoJ2hpZGUnKTtcbiAgICAgICAgICAgICAgICAkKCcjTW9kYWxFcnJldXInKS5tb2RhbCgnc2hvdycpO1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH0pO1xuICAgIH0pO1xuXG5cbiAgICBjb25zdCBkZWxldGVDYWlzc2UgPSBhc3luYyAoaWQpID0+IHtcbiAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnc2hvdycpO1xuICAgICAgICBhd2FpdCBheGlvcyh7XG4gICAgICAgICAgICBtZXRob2Q6ICdERUxFVEUnLFxuICAgICAgICAgICAgdXJsOiAnL2NybS9jYWlzc2UvZGVsLycgKyBpZCxcbiAgICAgICAgICAgIGNvbnRlbnRUeXBlOiAnYXBwbGljYXRpb24vanNvbjsgY2hhcnNldD11dGYtOCcsXG4gICAgICAgICAgICBkYXRhVHlwZTogJ2pzb24nLFxuICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uLnJlbG9hZCgpO1xuICAgICAgICB9KS5jYXRjaChmdW5jdGlvbiAoZXJyb3IpIHtcbiAgICAgICAgfSk7XG4gICAgfVxuICAgIGNvbnN0IHZhbGlkZUNhaXNzZSA9IGFzeW5jIChpZCkgPT4ge1xuICAgICAgICAkKCcjVHJhaXRlbWVudCcpLm1vZGFsKCdzaG93Jyk7XG4gICAgICAgIGF3YWl0IGF4aW9zKHtcbiAgICAgICAgICAgIG1ldGhvZDogJ0dFVCcsXG4gICAgICAgICAgICB1cmw6ICcvY3JtL2NhaXNzZS92YWxpZGVyLycgKyBpZCxcbiAgICAgICAgICAgIGNvbnRlbnRUeXBlOiAnYXBwbGljYXRpb24vanNvbjsgY2hhcnNldD11dGYtOCcsXG4gICAgICAgICAgICBkYXRhVHlwZTogJ2pzb24nLFxuICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uLnJlbG9hZCgpO1xuICAgICAgICB9KS5jYXRjaChmdW5jdGlvbiAoZXJyb3IpIHtcbiAgICAgICAgfSk7XG4gICAgfVxuICAgIGNvbnN0IGRldmFsaWRlQ2Fpc3NlID0gYXN5bmMgKGlkKSA9PiB7XG4gICAgICAgICQoJyNUcmFpdGVtZW50JykubW9kYWwoJ3Nob3cnKTtcbiAgICAgICAgYXdhaXQgYXhpb3Moe1xuICAgICAgICAgICAgbWV0aG9kOiAnR0VUJyxcbiAgICAgICAgICAgIHVybDogJy9jcm0vY2Fpc3NlL2RldmFsaWRlci8nICsgaWQsXG4gICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgZGF0YVR5cGU6ICdqc29uJyxcbiAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5yZWxvYWQoKTtcbiAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIGxldCBycGNvdW50ID0gMDtcbiAgICBsZXQgcnBkZWJpdCA9IDA7XG4gICAgbGV0IHJwY3JlZGl0ID0gMDtcbiAgICBjb25zdCByZW5kZXJSZWxlUGVyc28gPSBjYWlzc3BlcnNvLm1hcCgoY2Fpc3MpID0+IHtcbiAgICAgICAgaWYoY2Fpc3MucGVyc29ubmVsW1wiY29yYmVpbGxlXCJdID09IG51bGwpe1xuICAgICAgICAgICAgaWYgKGNhaXNzLmNvcmJlaWxsZSA9PT0gbnVsbCAmJiBjYWlzcy5ldGF0ID09PSBcInZhbGlkZVwiKSB7XG4gICAgICAgICAgICAgICAgcnBjb3VudCA9IHJwY291bnQgKyAxO1xuICAgICAgICAgICAgICAgIGlmIChjYWlzcy5vcGVyYXRpb24gPT09IFwiZGViaXRcIikge1xuICAgICAgICAgICAgICAgICAgICBycGRlYml0ID0gcnBkZWJpdCArIGNhaXNzLm1vbnRhbnQ7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIGlmIChjYWlzcy5vcGVyYXRpb24gPT09IFwiY3JlZGl0XCIpIHtcbiAgICAgICAgICAgICAgICAgICAgcnBjcmVkaXQgPSBycGNyZWRpdCArIGNhaXNzLm1vbnRhbnQ7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICBsZXQgZWQgPSAwO1xuICAgICAgICAgICAgbGV0IGVjID0gMDtcbiAgICAgICAgICAgIGlmIChjYWlzcy5vcGVyYXRpb24gPT09IFwiZGViaXRcIikge1xuICAgICAgICAgICAgICBlZCA9IGNhaXNzLm1vbnRhbnQ7XG4gICAgICAgICAgICB9XG4gICAgICAgICAgICBpZiAoY2Fpc3Mub3BlcmF0aW9uID09PSBcImNyZWRpdFwiKSB7XG4gICAgICAgICAgICAgICBlYyA9IGNhaXNzLm1vbnRhbnQ7XG4gICAgICAgICAgICB9XG4gICAgICAgICAgICByZXR1cm4gKDw+XG4gICAgICAgICAgICAgICAge2NhaXNzLmNvcmJlaWxsZSA9PT0gbnVsbCAmJiA8PlxuICAgICAgICAgICAgICAgICAgICB7Y2Fpc3MuZXRhdCA9PT0gXCJ2YWxpZGVcIiAmJiA8dHIga2V5PXtjYWlzcy5pZH0gY2xhc3NOYW1lPVwicGFnaW5hdGUxMVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtY2VudGVyXCI+PE1vbWVudCBmb3JtYXQ9XCJERC9NTS9ZWVlZXCI+e2NhaXNzLmRhdGV9PC9Nb21lbnQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48YSBocmVmPXtgL2NybS9jYWlzc2UvJHtjYWlzcy5pZH0vJHtjYWlzcy5jaGFudGllci5pZH1gfT57Y2Fpc3MubnVtY2Fpc3NlfTwvYT48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBjYWlzcy5jYWlzc2VyZWZlcmVuY2V9fT48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHRcIj48TnVtYmVyRm9ybWF0IG51bWI9e2VkfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0XCI+PE51bWJlckZvcm1hdCBudW1iPXtlY30vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1sZWZ0IHByaSBib2xvNjAwIG5vd3JhcGVcIj48aSBjbGFzc05hbWU9XCJmYSBmYS11c2VyIHByaVwiPjwvaT4gJm5ic3A7e2NhaXNzLmRvYnl1c2VyLm5vbS50b1VwcGVyQ2FzZSgpICsgJyAnfSB7Y2Fpc3MuZG9ieXVzZXIucHJlbm9tcy50b1VwcGVyQ2FzZSgpfVxuICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgPC90cj59XG4gICAgICAgICAgICAgICAgPC8+fVxuICAgICAgICAgICAgPC8+KTtcbiAgICAgICAgfVxuICAgICAgICByZXR1cm4gbnVsbDtcblxuICAgIH0pO1xuXG4gICAgbGV0IHBlcnNjb3VudCA9IDA7XG4gICAgbGV0IGZyZXBlcnNvdG8gPSAwO1xuICAgIGxldCBmcmVwZXJzdXRvID0gMDtcbiAgICBjb25zdCByZW5kZXJQZXJzb3MgPSBwZXJzb3MubWFwKChwZXJzbykgPT4ge1xuICAgICAgICBsZXQgY2Fpc3NlcyA9IHBlcnNvLmNhaXNzZXM7XG4gICAgICAgIGxldCBjdWxlbiA9IDA7XG4gICAgICAgIGxldCBmcmVwZXJzbyA9IDA7XG4gICAgICAgIGxldCBmcmVwZXJzdSA9IDA7XG5cbiAgICAgICAgaWYgKHBlcnNvLnR5cGUgPT09ICdwZXJzb25uZWxsZScpIHtcbiAgICAgICAgICAgIHBlcnNjb3VudCA9IHBlcnNjb3VudCArIDE7XG4gICAgICAgIH1cbiAgICAgICAgY29uc3QgcmVuZGVyQ2Fpc1BlID0gY2Fpc3Nlcy5tYXAoKGNhaXNzZSkgPT4ge1xuICAgICAgICAgICAgaWYgKGNhaXNzZS5jb3JiZWlsbGUgPT09IG51bGwgJiYgY2Fpc3NlLmNoYW50aWVyLnR5cGUgPT09IFwicGVyc29ubmVsXCIpIHtcblxuICAgICAgICAgICAgICAgIGlmIChjYWlzc2UuZXRhdCA9PT0gXCJ2YWxpZGVcIikge1xuICAgICAgICAgICAgICAgICAgICBpZiAoY2Fpc3NlLm9wZXJhdGlvbiA9PT0gXCJkZWJpdFwiKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBmcmVwZXJzbyA9IGZyZXBlcnNvICsgY2Fpc3NlLm1vbnRhbnQ7XG4gICAgICAgICAgICAgICAgICAgICAgICBmcmVwZXJzb3RvID0gZnJlcGVyc290byArIGNhaXNzZS5tb250YW50O1xuICAgICAgICAgICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgICAgICAgICAgZnJlcGVyc3UgPSBmcmVwZXJzdSArIGNhaXNzZS5tb250YW50O1xuICAgICAgICAgICAgICAgICAgICAgICAgZnJlcGVyc3V0byA9IGZyZXBlcnN1dG8gKyBjYWlzc2UubW9udGFudDtcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICBjdWxlbiA9IGN1bGVuICsgMTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgbGV0IGRkZWIgPSAwO1xuICAgICAgICAgICAgICAgIGxldCBjY3JlZCA9IDA7XG4gICAgICAgICAgICAgICAgaWYgKGNhaXNzZS5vcGVyYXRpb24gPT09IFwiZGViaXRcIikge1xuICAgICAgICAgICAgICAgICAgICBkZGViID0gY2Fpc3NlLm1vbnRhbnQ7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIGlmIChjYWlzc2Uub3BlcmF0aW9uID09PSBcImNyZWRpdFwiKSB7XG4gICAgICAgICAgICAgICAgICAgICBjY3JlZCA9IGNhaXNzZS5tb250YW50O1xuICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgIHJldHVybiAoPHRyIGtleT17Y2Fpc3NlLmlkfSBjbGFzc05hbWU9e3BlcnNvLmlkICsgJ3BlcmlzbycgKyAnIGhpZGUnfT5cbiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtbGVmdCBib2xvNjAwIG1sMzAgYm9yZGVcIj48TW9tZW50XG4gICAgICAgICAgICAgICAgICAgICAgICBmb3JtYXQ9XCJERC9NTS9ZWVlZXCI+e2NhaXNzZS5kYXRlfTwvTW9tZW50PlxuICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiYm9yZGVcIiBzdHlsZT17e3doaXRlU3BhY2U6XCJub3dyYXBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAge2NhaXNzZS5ldGF0ID09PSBcInZhbGlkZVwiICYmIDxhIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBkZXZhbGlkZUNhaXNzZShjYWlzc2UuaWQpXG4gICAgICAgICAgICAgICAgICAgICAgICB9fSB0aXRsZT1cIkTDqXZhbGlkZXJcIiBjbGFzc05hbWU9XCJiYWRnZSBiYWRnZS1waWxsIGJnLWJsdWVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e21hcmdpblJpZ2h0OiBcIjVweFwifX0+VjwvYT59XG4gICAgICAgICAgICAgICAgICAgICAgICB7Y2Fpc3NlLmV0YXQgPT09IFwic2F2ZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFsaWRlQ2Fpc3NlKGNhaXNzZS5pZClcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0gdGl0bGU9XCJWYWxpZGVyXCIgY2xhc3NOYW1lPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiZy1ibHVlLWdyZXlcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e21hcmdpblJpZ2h0OiBcIjVweFwifX0+VjwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGVsZXRlQ2Fpc3NlKGNhaXNzZS5pZClcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0gc3R5bGU9e3ttYXJnaW5SaWdodDogXCI1cHhcIn19PjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYS10cmFzaCBjb2wtcGlua1wiIHRpdGxlPVwiU3VwcHJpbWVyXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtaGlkZGVuPVwidHJ1ZVwiPjwvaT48L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+fVxuICAgICAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj1cIiNcIiBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgc2hhc2hhKGNhaXNzZS5pZCwgJ2ltcHJpbWNhaXNzZScpXG4gICAgICAgICAgICAgICAgICAgICAgICB9fSBzdHlsZT17e21hcmdpblJpZ2h0OiBcIjVweFwifX0+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYS1leWUgY29sLWdyZWVuXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWhpZGRlbj1cInRydWVcIj48L2k+PC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj17YC9jcm0vY2Fpc3NlLyR7Y2Fpc3NlLmlkfS8ke2NhaXNzZS5jaGFudGllci5pZH1gfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwidGV4dC1sZWZ0IGNvbC1ibHVlLWdyZXkgYm9sbzYwMFwiPkNhaXNzZSBOwrAge2NhaXNzZS5udW1jYWlzc2V9PC9hPlxuICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBib3JkZVwiPjxOdW1iZXJGb3JtYXQgbnVtYj17ZGRlYn0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJvcmRlXCI+PE51bWJlckZvcm1hdCBudW1iPXtjY3JlZH0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnQgbWwzMCBib3JkZVwiIGNvbFNwYW49XCIyXCJcbiAgICAgICAgICAgICAgICAgICAgICAgIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBjYWlzc2UuY2Fpc3NlcmVmZXJlbmNlfX0+PC90ZD5cbiAgICAgICAgICAgICAgICA8L3RyPik7XG4gICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgIHJldHVybiBudWxsO1xuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICAgICAgcmV0dXJuICg8PlxuICAgICAgICAgICAge3BlcnNvLnR5cGUgPT09ICdwZXJzb25uZWxsZScgJiYgPD5cbiAgICAgICAgICAgICAgICB7cGVyc28uY29yYmVpbGxlID09PSBudWxsICYmXG4gICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dHIgY2xhc3NOYW1lPVwicGFnaW5hdGU0XCIgb25DbGljaz17KCkgPT4ge3Nob3dCb25QZXJzbyhwZXJzby5pZCl9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwibXczMCB0ZXh0LWNlbnRlclwiPjxpbnB1dCBjbGFzc05hbWU9XCJmb3JtLWNoZWNrLWlucHV0XCIgdHlwZT1cImNoZWNrYm94XCIgdmFsdWU9e3BlcnNvLmlkfSBuYW1lPVwicGVyc1wiLz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnRcIj48YiBjbGFzc05hbWU9XCJjb2wtYmx1ZVwiPih7IGN1bGVuIH0pPC9iPntwZXJzby5ub21zfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgcC1yLTE1XCI+PE51bWJlckZvcm1hdCBudW1iPXtmcmVwZXJzb30vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgcC1yLTE1XCI+PE51bWJlckZvcm1hdCBudW1iPXtmcmVwZXJzdX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtbGVmdCBwLXItMTVcIj48TnVtYmVyRm9ybWF0IG51bWI9e2ZyZXBlcnNvIC0gZnJlcGVyc3V9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgIHtyZW5kZXJDYWlzUGV9XG4gICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIDwvPn1cbiAgICAgICAgPC8+KTtcbiAgICB9KTtcblxuICAgIGxldCBwcmV0Y291bnQgPSAwO1xuICAgIGxldCBwcmV0c290byA9IDA7XG4gICAgbGV0IHByZXRzdXRvID0gMDtcbiAgICBjb25zdCByZW5kZXJQZXJzb1ByZXRzID0gcGVyc29zLm1hcCgocGVyc28pID0+IHtcbiAgICAgICAgbGV0IGNhaXNzZXMgPSBwZXJzby5jYWlzc2VzO1xuICAgICAgICBsZXQgcHJldGN1bGVuID0gMDtcbiAgICAgICAgbGV0IHByZXRwZXJzbyA9IDA7XG4gICAgICAgIGxldCBwcmV0cGVyc3UgPSAwO1xuXG4gICAgICAgIGlmIChwZXJzby50eXBlID09PSAncGVyc29ubmVsbGUnKSB7XG4gICAgICAgICAgICBwcmV0Y291bnQgPSBwcmV0Y291bnQgKyAxO1xuICAgICAgICB9XG4gICAgICAgIGNvbnN0IHJlbmRlckNhaXNQcmV0UGVyc28gPSBjYWlzc2VzLm1hcCgoY2Fpc3NlKSA9PiB7XG4gICAgICAgICAgICBpZiAoY2Fpc3NlLmNvcmJlaWxsZSA9PT0gbnVsbCAmJiBjYWlzc2UuY2hhbnRpZXIudHlwZSA9PT0gXCJwZXJzb25uZWxcIikge1xuICAgICAgICAgICAgICAgIGlmIChjYWlzc2UuZ2VucmUgPT09IFwicHJldFwiKSB7XG4gICAgICAgICAgICAgICAgICAgIGlmIChjYWlzc2UuZXRhdCA9PT0gXCJ2YWxpZGVcIikge1xuICAgICAgICAgICAgICAgICAgICAgICAgaWYgKGNhaXNzZS5vcGVyYXRpb24gPT09IFwiZGViaXRcIikge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHByZXRwZXJzbyA9IHByZXRwZXJzbyArIGNhaXNzZS5tb250YW50O1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHByZXRzb3RvID0gcHJldHNvdG8gKyBjYWlzc2UubW9udGFudDtcbiAgICAgICAgICAgICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgcHJldHBlcnN1ID0gcHJldHBlcnN1ICsgY2Fpc3NlLm1vbnRhbnQ7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgcHJldHN1dG8gPSBwcmV0c3V0byArIGNhaXNzZS5tb250YW50O1xuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgcHJldGN1bGVuID0gcHJldGN1bGVuICsgMTtcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICBsZXQgZHBkZWIgPSAwO1xuICAgICAgICAgICAgICAgICAgICBsZXQgY3BjcmVkID0gMDtcbiAgICAgICAgICAgICAgICAgICAgaWYgKGNhaXNzZS5vcGVyYXRpb24gPT09IFwiZGViaXRcIikge1xuICAgICAgICAgICAgICAgICAgICAgICAgZHBkZWIgPSBjYWlzc2UubW9udGFudDtcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICBpZiAoY2Fpc3NlLm9wZXJhdGlvbiA9PT0gXCJjcmVkaXRcIikge1xuICAgICAgICAgICAgICAgICAgICAgICAgY3BjcmVkID0gY2Fpc3NlLm1vbnRhbnQ7XG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgcmV0dXJuICg8dHIga2V5PXtjYWlzc2UuaWR9IGNsYXNzTmFtZT17cGVyc28uaWQgKyAncGVyaXNvJyArICcgaGlkZSd9PlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtbGVmdCBib2xvNjAwIG1sMzAgYm9yZGVcIj48TW9tZW50XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgZm9ybWF0PVwiREQvTU0vWVlZWVwiPntjYWlzc2UuZGF0ZX08L01vbWVudD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwibWwzMCBib3JkZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtjYWlzc2UuZXRhdCA9PT0gXCJ2YWxpZGVcIiAmJiA8YSBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRldmFsaWRlQ2Fpc3NlKGNhaXNzZS5pZClcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fSB0aXRsZT1cIkTDqXZhbGlkZXJcIiBjbGFzc05hbWU9XCJiYWRnZSBiYWRnZS1waWxsIGJnLWJsdWVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3ttYXJnaW5SaWdodDogXCI1cHhcIn19PlY8L2E+fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtjYWlzc2UuZXRhdCA9PT0gXCJzYXZlXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YWxpZGVDYWlzc2UoY2Fpc3NlLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0gdGl0bGU9XCJWYWxpZGVyXCIgY2xhc3NOYW1lPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiZy1ibHVlLWdyZXlcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3ttYXJnaW5SaWdodDogXCI1cHhcIn19PlY8L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGVsZXRlQ2Fpc3NlKGNhaXNzZS5pZClcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19IHN0eWxlPXt7bWFyZ2luUmlnaHQ6IFwiNXB4XCJ9fT48aVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImZhIGZhLXRyYXNoIGNvbC1waW5rXCIgdGl0bGU9XCJTdXBwcmltZXJcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtaGlkZGVuPVwidHJ1ZVwiPjwvaT48L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPVwiI1wiIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc2hhc2hhKGNhaXNzZS5pZCwgJ2ltcHJpbWNhaXNzZScpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0gc3R5bGU9e3ttYXJnaW5SaWdodDogXCI1cHhcIn19PjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImZhIGZhLWV5ZSBjb2wtZ3JlZW5cIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWhpZGRlbj1cInRydWVcIj48L2k+PC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9e2AvY3JtL2NhaXNzZS8ke2NhaXNzZS5pZH0vJHtjYWlzc2UuY2hhbnRpZXIuaWR9YH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJ0ZXh0LWxlZnQgY29sLWJsdWUtZ3JleSBib2xvNjAwXCI+Q2Fpc3NlIE7CsCB7Y2Fpc3NlLm51bWNhaXNzZX08L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgYm9yZGVcIj48TnVtYmVyRm9ybWF0IG51bWI9e2RwZGVifS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJvcmRlXCI+PE51bWJlckZvcm1hdCBudW1iPXtjcGNyZWR9Lz48L3RkPlxuXG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1sZWZ0IG1sMzAgYm9yZGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBjYWlzc2UuY2Fpc3NlcmVmZXJlbmNlfX0+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgPC90cj4pO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICByZXR1cm4gbnVsbDtcbiAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgcmV0dXJuIG51bGw7XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuICAgICAgICByZXR1cm4gKDw+XG4gICAgICAgICAgICB7cGVyc28udHlwZSA9PT0gJ3BlcnNvbm5lbGxlJyAmJiA8PlxuICAgICAgICAgICAgICAgIHtwZXJzby5jb3JiZWlsbGUgPT09IG51bGwgJiZcbiAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHIgY2xhc3NOYW1lPVwicGFnaW5hdGU0XCIgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc2hvd0JvblBlcnNvKHBlcnNvLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJtdzMwIHRleHQtY2VudGVyXCI+PGlucHV0IGNsYXNzTmFtZT1cImZvcm0tY2hlY2staW5wdXRcIiB0eXBlPVwiY2hlY2tib3hcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhbHVlPXtwZXJzby5pZH0gbmFtZT1cInBlcnNcIi8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnRcIj48YiBjbGFzc05hbWU9XCJjb2wtYmx1ZVwiPih7cHJldGN1bGVufSk8L2I+e3BlcnNvLm5vbXN9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgcC1yLTE1XCI+PE51bWJlckZvcm1hdCBudW1iPXtwcmV0cGVyc299Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgcC1yLTE1XCI+PE51bWJlckZvcm1hdCBudW1iPXtwcmV0cGVyc3V9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtbGVmdCBwLXItMTVcIj48TnVtYmVyRm9ybWF0IG51bWI9e3ByZXRwZXJzbyAtIHByZXRwZXJzdX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtyZW5kZXJDYWlzUHJldFBlcnNvfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIDwvPn1cbiAgICAgICAgPC8+KTtcbiAgICB9KTtcblxuICAgIGxldCBhdmNvdW50ID0gMDtcbiAgICBsZXQgYXZzb3RvID0gMDtcbiAgICBsZXQgYXZzdXRvID0gMDtcbiAgICBjb25zdCByZW5kZXJQZXJzb0F2YW5jZXMgPSBwZXJzb3MubWFwKChwZXJzbykgPT4ge1xuICAgICAgICBsZXQgY2Fpc3NlcyA9IHBlcnNvLmNhaXNzZXM7XG4gICAgICAgIGxldCBhdmN1bGVuID0gMDtcbiAgICAgICAgbGV0IGF2cGVyc28gPSAwO1xuICAgICAgICBsZXQgYXZwZXJzdSA9IDA7XG5cbiAgICAgICAgaWYgKHBlcnNvLnR5cGUgPT09ICdwZXJzb25uZWxsZScpIHtcbiAgICAgICAgICAgIGF2Y291bnQgPSBhdmNvdW50ICsgMTtcbiAgICAgICAgfVxuICAgICAgICBjb25zdCByZW5kZXJDYWlzQXZhbmNlc1BlcnNvID0gY2Fpc3Nlcy5tYXAoKGNhaXNzZSkgPT4ge1xuICAgICAgICAgICAgaWYgKGNhaXNzZS5jb3JiZWlsbGUgPT09IG51bGwgJiYgY2Fpc3NlLmNoYW50aWVyLnR5cGUgPT09IFwicGVyc29ubmVsXCIpIHtcbiAgICAgICAgICAgICAgICBpZiAoY2Fpc3NlLmdlbnJlID09PSBcImF2YW5jZVwiKSB7XG4gICAgICAgICAgICAgICAgICAgIGlmIChjYWlzc2UuZXRhdCA9PT0gXCJ2YWxpZGVcIikge1xuICAgICAgICAgICAgICAgICAgICAgICAgaWYgKGNhaXNzZS5vcGVyYXRpb24gPT09IFwiZGViaXRcIikge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGF2cGVyc28gPSBhdnBlcnNvICsgY2Fpc3NlLm1vbnRhbnQ7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgYXZzb3RvID0gYXZzb3RvICsgY2Fpc3NlLm1vbnRhbnQ7XG4gICAgICAgICAgICAgICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGF2cGVyc3UgPSBhdnBlcnN1ICsgY2Fpc3NlLm1vbnRhbnQ7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgYXZzdXRvID0gYXZzdXRvICsgY2Fpc3NlLm1vbnRhbnQ7XG4gICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICBhdmN1bGVuID0gYXZjdWxlbiArIDE7XG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgbGV0IGRkZGViID0gMDtcbiAgICAgICAgICAgICAgICAgICAgbGV0IGNjY3JlZCA9IDA7XG4gICAgICAgICAgICAgICAgICAgIGlmIChjYWlzc2Uub3BlcmF0aW9uID09PSBcImRlYml0XCIpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIGRkZGViID0gY2Fpc3NlLm1vbnRhbnQ7XG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgaWYgKGNhaXNzZS5vcGVyYXRpb24gPT09IFwiY3JlZGl0XCIpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIGNjY3JlZCA9IGNhaXNzZS5tb250YW50O1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIHJldHVybiAoPHRyIGtleT17Y2Fpc3NlLmlkfSBjbGFzc05hbWU9e3BlcnNvLmlkICsgJ3Blcmlzb3MnICsgJyBoaWRlJ30+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1sZWZ0IGJvbG82MDAgbWwzMCBib3JkZVwiPjxNb21lbnRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBmb3JtYXQ9XCJERC9NTS9ZWVlZXCI+e2NhaXNzZS5kYXRlfTwvTW9tZW50PlxuICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJib3JkZVwiIHN0eWxlPXt7d2hpdGVTcGFjZTpcIm5vd3JhcFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAge2NhaXNzZS5ldGF0ID09PSBcInZhbGlkZVwiICYmIDxhIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGV2YWxpZGVDYWlzc2UoY2Fpc3NlLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19IHRpdGxlPVwiRMOpdmFsaWRlclwiIGNsYXNzTmFtZT1cImJhZGdlIGJhZGdlLXBpbGwgYmctYmx1ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e21hcmdpblJpZ2h0OiBcIjVweFwifX0+VjwvYT59XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAge2NhaXNzZS5ldGF0ID09PSBcInNhdmVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhbGlkZUNhaXNzZShjYWlzc2UuaWQpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fSB0aXRsZT1cIlZhbGlkZXJcIiBjbGFzc05hbWU9XCJiYWRnZSBiYWRnZS1waWxsIGJnLWJsdWUtZ3JleVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e21hcmdpblJpZ2h0OiBcIjVweFwifX0+VjwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkZWxldGVDYWlzc2UoY2Fpc3NlLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0gc3R5bGU9e3ttYXJnaW5SaWdodDogXCI1cHhcIn19PjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtdHJhc2ggY29sLXBpbmtcIiB0aXRsZT1cIlN1cHByaW1lclwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYXJpYS1oaWRkZW49XCJ0cnVlXCI+PC9pPjwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9XCIjXCIgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzaGFzaGEoY2Fpc3NlLmlkLCAnaW1wcmltY2Fpc3NlJylcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fSBzdHlsZT17e21hcmdpblJpZ2h0OiBcIjVweFwifX0+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtZXllIGNvbC1ncmVlblwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtaGlkZGVuPVwidHJ1ZVwiPjwvaT48L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj17YC9jcm0vY2Fpc3NlLyR7Y2Fpc3NlLmlkfS8ke2NhaXNzZS5jaGFudGllci5pZH1gfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cInRleHQtbGVmdCBjb2wtYmx1ZS1ncmV5IGJvbG82MDBcIj5DYWlzc2UgTsKwIHtjYWlzc2UubnVtY2Fpc3NlfTwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBib3JkZVwiPjxOdW1iZXJGb3JtYXQgbnVtYj17ZGRkZWJ9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgYm9yZGVcIj48TnVtYmVyRm9ybWF0IG51bWI9e2NjY3JlZH0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1sZWZ0IG1sMzAgYm9yZGVcIiBkYW5nZXJvdXNseVNldElubmVySFRNTD17e19faHRtbDogY2Fpc3NlLmNhaXNzZXJlZmVyZW5jZX19PjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgIDwvdHI+KTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgcmV0dXJuIG51bGw7XG4gICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgIHJldHVybiBudWxsO1xuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICAgICAgcmV0dXJuICg8PlxuICAgICAgICAgICAge3BlcnNvLnR5cGUgPT09ICdwZXJzb25uZWxsZScgJiYgPD5cbiAgICAgICAgICAgICAgICB7cGVyc28uY29yYmVpbGxlID09PSBudWxsICYmXG4gICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBjbGFzc05hbWU9XCJwYWdpbmF0ZTRcIiBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzaG93Qm9uUGVyc29zKHBlcnNvLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJtdzMwIHRleHQtY2VudGVyXCI+PGlucHV0IGNsYXNzTmFtZT1cImZvcm0tY2hlY2staW5wdXRcIiB0eXBlPVwiY2hlY2tib3hcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhbHVlPXtwZXJzby5pZH0gbmFtZT1cInBlcnNcIi8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnRcIj48YiBjbGFzc05hbWU9XCJjb2wtYmx1ZVwiPih7YXZjdWxlbn0pIDwvYj57cGVyc28ubm9tc31cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBwLXItMTVcIj48TnVtYmVyRm9ybWF0IG51bWI9e2F2cGVyc299Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgcC1yLTE1XCI+PE51bWJlckZvcm1hdCBudW1iPXthdnBlcnN1fS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnQgcC1yLTE1XCI+PE51bWJlckZvcm1hdCBudW1iPXthdnBlcnNvIC0gYXZwZXJzdX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtyZW5kZXJDYWlzQXZhbmNlc1BlcnNvfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIDwvPn1cbiAgICAgICAgPC8+KTtcbiAgICB9KTtcblxuICAgIGxldCBzYWNvdW50ID0gMDtcbiAgICBsZXQgc2Fzb3RvID0gMDtcbiAgICBsZXQgc2FzdXRvID0gMDtcbiAgICBjb25zdCByZW5kZXJQZXJzb1NhbGFpcmVzID0gcGVyc29zLm1hcCgocGVyc28pID0+IHtcbiAgICAgICAgbGV0IGNhaXNzZXMgPSBwZXJzby5jYWlzc2VzO1xuICAgICAgICBsZXQgc2FjdWxlbiA9IDA7XG4gICAgICAgIGxldCBzYXBlcnNvID0gMDtcbiAgICAgICAgbGV0IHNhcGVyc3UgPSAwO1xuXG4gICAgICAgIGlmIChwZXJzby50eXBlID09PSAncGVyc29ubmVsbGUnKSB7XG4gICAgICAgICAgICBzYWNvdW50ID0gc2Fjb3VudCArIDE7XG4gICAgICAgIH1cbiAgICAgICAgY29uc3QgcmVuZGVyQ2Fpc1NhbGFpcmVQZXJzbyA9IGNhaXNzZXMubWFwKChjYWlzc2UpID0+IHtcbiAgICAgICAgICAgIGlmIChjYWlzc2UuY29yYmVpbGxlID09PSBudWxsICYmIGNhaXNzZS5jaGFudGllci50eXBlID09PSBcInBlcnNvbm5lbFwiKSB7XG4gICAgICAgICAgICAgICAgaWYgKGNhaXNzZS5nZW5yZSA9PT0gXCJzYWxhaXJlXCIpIHtcbiAgICAgICAgICAgICAgICAgICAgaWYgKGNhaXNzZS5ldGF0ID09PSBcInZhbGlkZVwiKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBpZiAoY2Fpc3NlLm9wZXJhdGlvbiA9PT0gXCJkZWJpdFwiKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgc2FwZXJzbyA9IHNhcGVyc28gKyBjYWlzc2UubW9udGFudDtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBzYXNvdG8gPSBzYXNvdG8gKyBjYWlzc2UubW9udGFudDtcbiAgICAgICAgICAgICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgc2FwZXJzdSA9IHNhcGVyc3UgKyBjYWlzc2UubW9udGFudDtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBzYXN1dG8gPSBzYXN1dG8gKyBjYWlzc2UubW9udGFudDtcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgIHNhY3VsZW4gPSBzYWN1bGVuICsgMTtcbiAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgIGxldCBkYWRlYiA9IDA7XG4gICAgICAgICAgICAgICAgICAgIGxldCBjYWNyZWQgPSAwO1xuICAgICAgICAgICAgICAgICAgICBpZiAoY2Fpc3NlLm9wZXJhdGlvbiA9PT0gXCJkZWJpdFwiKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBkYWRlYiA9IGNhaXNzZS5tb250YW50O1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIGlmIChjYWlzc2Uub3BlcmF0aW9uID09PSBcImNyZWRpdFwiKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBjYWNyZWQgPSBjYWlzc2UubW9udGFudDtcbiAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgIHJldHVybiAoPHRyIGtleT17Y2Fpc3NlLmlkfSBjbGFzc05hbWU9e3BlcnNvLmlkICsgJ3BlcmlzbycgKyAnIGhpZGUnfT5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnQgYm9sbzYwMCBtbDMwIGJvcmRlXCI+PE1vbWVudFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZvcm1hdD1cIkREL01NL1lZWVlcIj57Y2Fpc3NlLmRhdGV9PC9Nb21lbnQ+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cIm1sMzAgYm9yZGVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Y2Fpc3NlLmV0YXQgPT09IFwidmFsaWRlXCIgJiYgPGEgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkZXZhbGlkZUNhaXNzZShjYWlzc2UuaWQpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0gdGl0bGU9XCJEw6l2YWxpZGVyXCIgY2xhc3NOYW1lPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiZy1ibHVlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7bWFyZ2luUmlnaHQ6IFwiNXB4XCJ9fT5WPC9hPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Y2Fpc3NlLmV0YXQgPT09IFwic2F2ZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFsaWRlQ2Fpc3NlKGNhaXNzZS5pZClcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19IHRpdGxlPVwiVmFsaWRlclwiIGNsYXNzTmFtZT1cImJhZGdlIGJhZGdlLXBpbGwgYmctYmx1ZS1ncmV5XCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7bWFyZ2luUmlnaHQ6IFwiNXB4XCJ9fT5WPC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRlbGV0ZUNhaXNzZShjYWlzc2UuaWQpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fSBzdHlsZT17e21hcmdpblJpZ2h0OiBcIjVweFwifX0+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYS10cmFzaCBjb2wtcGlua1wiIHRpdGxlPVwiU3VwcHJpbWVyXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWhpZGRlbj1cInRydWVcIj48L2k+PC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz59XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj1cIiNcIiBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNoYXNoYShjYWlzc2UuaWQsICdpbXByaW1jYWlzc2UnKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19IHN0eWxlPXt7bWFyZ2luUmlnaHQ6IFwiNXB4XCJ9fT48aVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYS1leWUgY29sLWdyZWVuXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYXJpYS1oaWRkZW49XCJ0cnVlXCI+PC9pPjwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPXtgL2NybS9jYWlzc2UvJHtjYWlzc2UuaWR9LyR7Y2Fpc3NlLmNoYW50aWVyLmlkfWB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwidGV4dC1sZWZ0IGNvbC1ibHVlLWdyZXkgYm9sbzYwMFwiPkNhaXNzZSBOwrAge2NhaXNzZS5udW1jYWlzc2V9PC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJvcmRlXCI+PE51bWJlckZvcm1hdCBudW1iPXtkYWRlYn0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBib3JkZVwiPjxOdW1iZXJGb3JtYXQgbnVtYj17Y2FjcmVkfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnQgbWwzMCBib3JkZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IGNhaXNzZS5jYWlzc2VyZWZlcmVuY2V9fT48L3RkPlxuICAgICAgICAgICAgICAgICAgICA8L3RyPik7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIHJldHVybiBudWxsO1xuICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICByZXR1cm4gbnVsbDtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG4gICAgICAgIHJldHVybiAoPD5cbiAgICAgICAgICAgIHtwZXJzby50eXBlID09PSAncGVyc29ubmVsbGUnICYmIDw+XG4gICAgICAgICAgICAgICAge3BlcnNvLmNvcmJlaWxsZSA9PT0gbnVsbCAmJlxuICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBjbGFzc05hbWU9XCJwYWdpbmF0ZTRcIiBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzaG93Qm9uUGVyc28ocGVyc28uaWQpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cIm13MzAgdGV4dC1jZW50ZXJcIj48aW5wdXQgY2xhc3NOYW1lPVwiZm9ybS1jaGVjay1pbnB1dFwiIHR5cGU9XCJjaGVja2JveFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFsdWU9e3BlcnNvLmlkfSBuYW1lPVwicGVyc1wiLz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtbGVmdFwiPjxiIGNsYXNzTmFtZT1cImNvbC1ibHVlXCI+KHtzYWN1bGVufSk8L2I+e3BlcnNvLm5vbXN9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgcC1yLTE1XCI+PE51bWJlckZvcm1hdCBudW1iPXtzYXBlcnNvfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IHAtci0xNVwiPjxOdW1iZXJGb3JtYXQgbnVtYj17c2FwZXJzdX0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1sZWZ0IHAtci0xNVwiPjxOdW1iZXJGb3JtYXQgbnVtYj17c2FwZXJzbyAtIHNhcGVyc3V9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7cmVuZGVyQ2Fpc1NhbGFpcmVQZXJzb31cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICA8Lz59XG4gICAgICAgIDwvPik7XG4gICAgfSk7XG5cbiAgICBjb25zdCBoYW5kbGVQZXJzb3MgPSBldmVudCA9PiB7XG4gICAgICAgIGxldCBmaWx0ZXIgPSBldmVudC50YXJnZXQudmFsdWUudG9Mb3dlckNhc2UoKTtcbiAgICAgICAgJChcIiNwZXJzb29zIHRib2R5IHRyLnBhZ2luYXRlNFwiKS5maWx0ZXIoZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgJCh0aGlzKS50b2dnbGUoJCh0aGlzKS50ZXh0KCkudG9Mb3dlckNhc2UoKS5yZXBsYWNlQWxsKCcgJywgJycpLmluZGV4T2YoZmlsdGVyKSA+IC0xKVxuICAgICAgICB9KTtcbiAgICB9O1xuICAgIGNvbnN0IHNob3dCb25QZXJzbyA9IChpZCkgPT4ge1xuICAgICAgICBpZiAoJCgnLicgKyBpZCArICdwZXJpc28nKS5oYXNDbGFzcyhcImhpZGVcIikpIHtcbiAgICAgICAgICAgICQoJy4nICsgaWQgKyAncGVyaXNvJykucmVtb3ZlQ2xhc3MoJ2hpZGUnKTtcbiAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICQoJy4nICsgaWQgKyAncGVyaXNvJykuYWRkQ2xhc3MoJ2hpZGUnKTtcbiAgICAgICAgfVxuICAgIH1cbiAgICBjb25zdCBzaG93Qm9uUGVyc29zID0gKGlkKSA9PiB7XG4gICAgICAgIGlmICgkKCcuJyArIGlkICsgJ3Blcmlzb3MnKS5oYXNDbGFzcyhcImhpZGVcIikpIHtcbiAgICAgICAgICAgICQoJy4nICsgaWQgKyAncGVyaXNvcycpLnJlbW92ZUNsYXNzKCdoaWRlJyk7XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAkKCcuJyArIGlkICsgJ3Blcmlzb3MnKS5hZGRDbGFzcygnaGlkZScpO1xuICAgICAgICB9XG4gICAgfVxuICAgIGNvbnN0IGhhbmRsZVJlbGVQZXJzbyA9IGV2ZW50ID0+IHtcbiAgICAgICAgbGV0IGZpbHRlciA9IGV2ZW50LnRhcmdldC52YWx1ZS50b0xvd2VyQ2FzZSgpO1xuICAgICAgICAkKFwiI3JlbGVQZXJzbyB0ci5wYWdpbmF0ZTExXCIpLmZpbHRlcihmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAkKHRoaXMpLnRvZ2dsZSgkKHRoaXMpLnRleHQoKS50b0xvd2VyQ2FzZSgpLnJlcGxhY2VBbGwoJyAnLCAnJykuaW5kZXhPZihmaWx0ZXIpID4gLTEpXG4gICAgICAgIH0pO1xuICAgIH07XG5cbiAgICAkKCcjYWRkZXJDYWlzc2VQZXJzb25uZWwnKS5vZmYoKS5vbihcImNsaWNrXCIsIGZ1bmN0aW9uIChldmVudCkge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpXG4gICAgICAgIGlmICgkKHRoaXMpLmNsb3Nlc3QoJ2Zvcm0nKS52YWxpZCgpKSB7XG4gICAgICAgICAgICAkKCcjYWRkZXJDYWlzc2VQZXJzb25uZWwnKS5oaWRlKClcbiAgICAgICAgICAgICQoJyNjbG9zZXJDYWlzc2VQZXJzb25uZWwnKS5oaWRlKClcbiAgICAgICAgICAgICQoJyNsb2FkZXJDYWlzc2VQZXJzb25uZWwnKS5jc3MoJ2Rpc3BsYXknLCAnJylcbiAgICAgICAgICAgICQoJyNlZGl0b3IyMCcpLnZhbChDS0VESVRPUi5pbnN0YW5jZXNbJ2VkaXRvcjIwJ10uZ2V0RGF0YSgpKVxuICAgICAgICAgICAgJC5hamF4KHtcbiAgICAgICAgICAgICAgICB0eXBlOiAnUE9TVCcsXG4gICAgICAgICAgICAgICAgdXJsOiAnL2NybS9jYWlzc2UvcGVyc29ubmVsL2FkZCcsXG4gICAgICAgICAgICAgICAgZGF0YTogSlNPTi5zdHJpbmdpZnkoJCgnI2FkZENhaXNzZVBlcnNvbm5lbEZvcm0nKS5zZXJpYWxpemVPYmplY3QoKSksXG4gICAgICAgICAgICAgICAgY29udGVudFR5cGU6ICdhcHBsaWNhdGlvbi9qc29uOyBjaGFyc2V0PXV0Zi04JyxcbiAgICAgICAgICAgICAgICBkYXRhVHlwZTogJ2pzb24nLFxuICAgICAgICAgICAgICAgIHN1Y2Nlc3M6IGZ1bmN0aW9uIChyZXNwZGF0YSwgdGV4dFN0YXR1cywganFYSFIpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICQoJyNtb2RhbENhaXNzZVBlcnNvJykubW9kYWwoJ3RvZ2dsZScpO1xuICAgICAgICAgICAgICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uLmhyZWYgPSAnL2NybS9jYWlzc2UvJyArIHJlc3BkYXRhWydyZXN1bHQnXVswXVsnbnVtY2Fpc3NlJ10gKyAnLycgKyByZXNwZGF0YVsncmVzdWx0J11bMF1bJ2lkY2hhbnRpZXInXVxuICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAgZXJyb3I6IGZ1bmN0aW9uICh4aHIsIHJlc3AsIHRleHQpIHtcbiAgICAgICAgICAgICAgICAgICAgJCgnI21vZGFsQ2Fpc3NlUGVyc28nKS5tb2RhbCgndG9nZ2xlJylcbiAgICAgICAgICAgICAgICAgICAgJCgnI01vZGFsRXJyZXVyJykubW9kYWwoJ3Nob3cnKVxuICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICB9KVxuICAgICAgICB9XG4gICAgfSk7XG5cbiAgICAkKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgJChcIi5qcy1leGFtcGxlLWJhc2ljLW11bHRpcGxlXCIpLnNlbGVjdDIoKTtcbiAgICAgICAgJChcIi5qcy1leGFtcGxlLWJhc2ljLXNpbmdsZVwiKS5zZWxlY3QyKCk7XG4gICAgICAgICQoXCIjcGVyc29vc1wiKS5zaW1wbGVQYWdpbmF0aW9uKCgndGJvZHkgLnBhZ2luYXRlNCcpKTtcbiAgICB9KTtcblxuICAgIHJldHVybiAoPD5cbiAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbWQtMTJcIiBzdHlsZT17e3BhZGRpbmdMZWZ0OiBcIjBcIn19PlxuICAgICAgICAgICAgPGJ1dHRvbiB0eXBlPVwiYnV0dG9uXCIgZGF0YS1jb2xvcj1cImJsdWVcIiBjbGFzc05hbWU9XCJidG4gYmctYmx1ZS1ncmV5IHRleHQtd2hpdGUgYm9sbzYwMCB3YXZlcy1lZmZlY3RcIlxuICAgICAgICAgICAgICAgICAgICBkYXRhLXRvZ2dsZT1cIm1vZGFsXCIgZGF0YS10YXJnZXQ9XCIjbW9kYWxDYWlzc2VQZXJzb1wiPisgQk9OIERFIENBSVNTRSBQT1VSIExFIFBFUlNPTk5FTFxuICAgICAgICAgICAgPC9idXR0b24+XG4gICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsLWdyb3VwXCIgaWQ9XCJhY2NvcmRpb25fMlwiIHJvbGU9XCJ0YWJsaXN0XCIgYXJpYS1tdWx0aXNlbGVjdGFibGU9XCJ0cnVlXCI+XG4gICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbCBwYW5lbC1wcmkgc2hhZG93IG0tdC01XCIgc3R5bGU9e3ttYXJnaW5Ub3A6IFwiMjBweFwifX0+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwtaGVhZGluZ1wiIHJvbGU9XCJ0YWJcIiBpZD1cImhlYWRpbmdQZXJzXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICA8aDQgY2xhc3NOYW1lPVwicGFuZWwtdGl0bGVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBjbGFzc05hbWU9XCJjb2xsYXBzZWQgIG91dGFpIGNvbC13aGl0ZVwiIHJvbGU9XCJidXR0b25cIiBkYXRhLXRvZ2dsZT1cImNvbGxhcHNlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhLXBhcmVudD1cIiNhY2NvcmRpb25QZXJzXCIgaHJlZj1cIiNjb2xsYXBzZVBlcnNcIiBhcmlhLWV4cGFuZGVkPVwiZmFsc2VcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtY29udHJvbHM9XCJjb2xsYXBzZVBlcnNcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGkgY2xhc3NOYW1lPVwibWF0ZXJpYWwtaWNvbnMgY29sLXdoaXRlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tmb250U2l6ZTogXCIxOHB4XCIsIGZsb2F0OiBcImxlZnRcIn19PmtleWJvYXJkX2Fycm93X2Rvd248L2k+TGUgUGVyc29ubmVsPHNwYW5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYmFkZ2UgYmctcGluayBmbG9hdC1yaWdodFwiPntwZXJzY291bnR9PC9zcGFuPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvaDQ+XG4gICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICA8ZGl2IGlkPVwiY29sbGFwc2VQZXJzXCIgY2xhc3NOYW1lPVwicGFuZWwtY29sbGFwc2UgY29sbGFwc2VcIiByb2xlPVwidGFicGFuZWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtbGFiZWxsZWRieT1cImhlYWRpbmdQZXJzXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsLWJvZHkgXCIgc3R5bGU9e3tvdmVyZmxvdzogXCJzY3JvbGxcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwidGFibGUtcmVzcG9uc2l2ZSBzaGFkb3dcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJ0YWJsZS1yZXNwb25zaXZlIHNoYWRvdyBiZy13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tjb2xvcjogXCIjNTU1XCIsIG92ZXJmbG93OiBcInNjcm9sbFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDQgY2xhc3NOYW1lPVwiYm9sbzcwMCBjb2wtYmx1ZVwiPkxFIFBFUlNPTk5FTDwvaDQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInJvd1wiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLW1kLThcIiBzdHlsZT17e3BhZGRpbmdUb3A6IFwiMjBweFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBjbGFzc05hbWU9XCJtLXItNSB2YXJlYWN0XCI+PGlucHV0IHR5cGU9XCJjaGVja2JveFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBuYW1lPVwiY2hlY2tQZXJzb3NcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWQ9XCJjaGVja2VkUGVyc29cIi8+PC9zcGFuPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPVwiI1wiIGlkPVwiZWRpdFBlcnNvXCIgY2xhc3NOYW1lPVwibS1yLTUgdmFyZWFjdFwiPjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYSBmYS1lZGl0ICBjb2wtZ3JlZW5cIi8+PC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPVwiI1wiIGlkPVwiZGVsUGVyc29cIiBjbGFzc05hbWU9XCJtLXItNSB2YXJlYWN0XCI+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImZhIGZhIGZhLXRyYXNoIGNvbC1waW5rIFwiLz48L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxSZWFjdEhUTUxUYWJsZVRvRXhjZWxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkPVwidGVzdC10YWJsZS14bHMtYnV0dG9uXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJ0biBiYWRnZSBiYWRnZS1waWxsIGNvbC1ncmVlbiBtLXItNSBmbG9hdC1sZWZ0IHZhcmVhY3RcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGFibGU9XCJwZXJzb29zXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRpdGxlPVwiR8OpbsOpcmVyIHVuIGZpY2hpZXIgRXhjZWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZmlsZW5hbWU9XCJMRSBQRVJTT05ORUxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc2hlZXQ9XCJ0YWJsZXhsc1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBidXR0b25UZXh0PVwiRXhcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbWQtNCBmbG9hdC1yaWdodFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImlucHV0LWdyb3VwXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImZvcm0tbGluZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbnB1dCB0eXBlPVwidGV4dFwiIGNsYXNzTmFtZT1cImZvcm0tY29udHJvbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uQ2hhbmdlPXtoYW5kbGVQZXJzb3N9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHBsYWNlaG9sZGVyPVwiUmVjaGVyY2hlclwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIGlkPVwicGVyc29vc1wiIGNsYXNzTmFtZT1cInRhYmxlLXN0cmlwZWQgdGFibGUtaG92ZXIgZGlzcGxheSBub3dyYXBcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7d2lkdGg6IFwiMTAwJVwiLCBvdmVyZmxvd1g6ICdzY3JvbGwnLCBtYXJnaW5Cb3R0b206IFwiMTBweFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoZWFkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBzdHlsZT17e2JvcmRlckJvdHRvbTogXCIxcHggc29saWQgIzAwMFwifX0gY2xhc3NOYW1lPVwiYmctbGlnaHRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHJvd1NwYW49XCIyXCJjbGFzc05hbWU9XCJtdzMwIHRleHQtY2VudGVyXCI+IzwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCByb3dTcGFuPVwiMlwiPk5PTSAmIFBSw4lOT01TPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNvbFNwYW49XCIzXCIgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXJcIj5FTlJFR0lTVFJFTUVOVFM8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyIHN0eWxlPXt7Ym9yZGVyQm90dG9tOiBcIjFweCBzb2xpZCAjMDAwXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJnLWxpZ2h0IHRleHQtcmlnaHRcIj5TT1JUSUU8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiYmctbGlnaHQgdGV4dC1yaWdodFwiPkVOVFLDiUU8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiYmctbGlnaHQgdGV4dC1sZWZ0XCI+U09MREUgLyBSw4lGw4lSRU5DRTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoZWFkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0Ym9keT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7cmVuZGVyUGVyc29zfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGJvZHk+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRmb290PlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyIHN0eWxlPXt7Ym9yZGVyQm90dG9tOiBcIjFweCBzb2xpZCAjMDAwXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwidGV4dC1yaWdodCBjb2wtd2hpdGUgYmctYmx1ZSBwMjBcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+PE51bWJlckZvcm1hdCBudW1iPXtmcmVwZXJzb3RvfS8+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgY29sLXdoaXRlIGJnLWJsdWUgcDIwXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PjxOdW1iZXJGb3JtYXQgbnVtYj17ZnJlcGVyc3V0b30vPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnQgY29sLXdoaXRlIGJnLWJsdWUgcDIwXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2ZyZXBlcnNvdG8gLSBmcmVwZXJzdXRvfS8+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGZvb3Q+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsIHBhbmVsLXByaSBzaGFkb3dcIj5cbiAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbC1oZWFkaW5nXCIgcm9sZT1cInRhYlwiIGlkPVwiaGVhZGluZ0F2c2FsXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICA8aDQgY2xhc3NOYW1lPVwicGFuZWwtdGl0bGVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBjbGFzc05hbWU9XCJjb2xsYXBzZWQgIG91dGFpIGNvbC13aGl0ZVwiIHJvbGU9XCJidXR0b25cIiBkYXRhLXRvZ2dsZT1cImNvbGxhcHNlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhLXBhcmVudD1cIiNhY2NvcmRpb25BdnNhbFwiIGhyZWY9XCIjY29sbGFwc2VBdnNhbFwiIGFyaWEtZXhwYW5kZWQ9XCJmYWxzZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYXJpYS1jb250cm9scz1cImNvbGxhcHNlQXZzYWxcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGkgY2xhc3NOYW1lPVwibWF0ZXJpYWwtaWNvbnMgY29sLXdoaXRlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tmb250U2l6ZTogXCIxOHB4XCIsIGZsb2F0OiBcImxlZnRcIn19PmtleWJvYXJkX2Fycm93X2Rvd248L2k+QXZhbmNlcyBzdXJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc2FsYWlyZTxzcGFuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJhZGdlIGJnLXBpbmsgZmxvYXQtcmlnaHRcIj57cGVyc2NvdW50fTwvc3Bhbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L2g0PlxuICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgPGRpdiBpZD1cImNvbGxhcHNlQXZzYWxcIiBjbGFzc05hbWU9XCJwYW5lbC1jb2xsYXBzZSBjb2xsYXBzZVwiIHJvbGU9XCJ0YWJwYW5lbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgYXJpYS1sYWJlbGxlZGJ5PVwiaGVhZGluZ0F2c2FsXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsLWJvZHkgXCIgc3R5bGU9e3tvdmVyZmxvdzogXCJzY3JvbGxcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwidGFibGUtcmVzcG9uc2l2ZSBzaGFkb3dcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJ0YWJsZS1yZXNwb25zaXZlIHNoYWRvdyBiZy13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tjb2xvcjogXCIjNTU1XCIsIG92ZXJmbG93OiBcInNjcm9sbFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDQgY2xhc3NOYW1lPVwiYm9sbzcwMCBjb2wtYmx1ZVwiPkFWQU5DRVMgU1VSIFNBTEFJUkU8L2g0PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJyb3dcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImNvbC1tZC04XCIgc3R5bGU9e3twYWRkaW5nVG9wOiBcIjIwcHhcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8UmVhY3RIVE1MVGFibGVUb0V4Y2VsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZD1cInRlc3QtdGFibGUteGxzLWJ1dHRvblwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJidG4gYmFkZ2UgYmFkZ2UtcGlsbCBjb2wtZ3JlZW4gbS1yLTUgZmxvYXQtbGVmdCB2YXJlYWN0XCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRhYmxlPVwicGVyc29vc1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0aXRsZT1cIkfDqW7DqXJlciB1biBmaWNoaWVyIEV4Y2VsXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZpbGVuYW1lPVwiTEUgUEVSU09OTkVMXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNoZWV0PVwidGFibGV4bHNcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYnV0dG9uVGV4dD1cIkV4XCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLW1kLTQgZmxvYXQtcmlnaHRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJpbnB1dC1ncm91cFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJmb3JtLWxpbmVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aW5wdXQgdHlwZT1cInRleHRcIiBjbGFzc05hbWU9XCJmb3JtLWNvbnRyb2xcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBvbkNoYW5nZT17aGFuZGxlUGVyc29zfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwbGFjZWhvbGRlcj1cIlJlY2hlcmNoZXJcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZSBpZD1cInBlcnNvb3NcIiBjbGFzc05hbWU9XCJ0YWJsZS1zdHJpcGVkIHRhYmxlLWhvdmVyIGRpc3BsYXkgbm93cmFwXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e3dpZHRoOiBcIjEwMCVcIiwgb3ZlcmZsb3dYOiAnc2Nyb2xsJywgbWFyZ2luQm90dG9tOiBcIjEwcHhcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aGVhZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHIgc3R5bGU9e3tib3JkZXJCb3R0b206IFwiMXB4IHNvbGlkICMwMDBcIn19IGNsYXNzTmFtZT1cImJnLWxpZ2h0XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCByb3dTcGFuPVwiMlwiY2xhc3NOYW1lPVwibXczMCB0ZXh0LWNlbnRlclwiPiM8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggcm93U3Bhbj1cIjJcIj5OT00gJiBQUsOJTk9NUzwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjb2xTcGFuPVwiM1wiIGNsYXNzTmFtZT1cInRleHQtY2VudGVyXCI+RU5SRUdJU1RSRU1FTlRTPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBzdHlsZT17e2JvcmRlckJvdHRvbTogXCIxcHggc29saWQgIzAwMFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJiZy1saWdodCB0ZXh0LXJpZ2h0XCI+U09SVElFPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJnLWxpZ2h0IHRleHQtcmlnaHRcIj5FTlRSw4lFPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJnLWxpZ2h0IHRleHQtbGVmdFwiPlNPTERFIC8gUsOJRsOJUkVOQ0U8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90aGVhZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGJvZHk+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge3JlbmRlclBlcnNvQXZhbmNlc31cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3Rib2R5PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0Zm9vdD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHIgc3R5bGU9e3tib3JkZXJCb3R0b206IFwiMXB4IHNvbGlkICMwMDBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGNvbC13aGl0ZSBiZy1ibHVlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PjxOdW1iZXJGb3JtYXQgbnVtYj17YXZzb3RvfS8+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgY29sLXdoaXRlIGJnLWJsdWVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+PE51bWJlckZvcm1hdCBudW1iPXthdnN1dG99Lz48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwidGV4dC1sZWZ0IGNvbC13aGl0ZSBiZy1ibHVlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e2F2c290byAtIGF2c3V0b30vPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3Rmb290PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbCBwYW5lbC1wcmkgc2hhZG93XCI+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwtaGVhZGluZ1wiIHJvbGU9XCJ0YWJcIiBpZD1cImhlYWRpbmdQckludFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgPGg0IGNsYXNzTmFtZT1cInBhbmVsLXRpdGxlXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgY2xhc3NOYW1lPVwiY29sbGFwc2VkICBvdXRhaSBjb2wtd2hpdGVcIiByb2xlPVwiYnV0dG9uXCIgZGF0YS10b2dnbGU9XCJjb2xsYXBzZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS1wYXJlbnQ9XCIjYWNjb3JkaW9uUHJJbnRcIiBocmVmPVwiI2NvbGxhcHNlUHJJbnRcIiBhcmlhLWV4cGFuZGVkPVwiZmFsc2VcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtY29udHJvbHM9XCJjb2xsYXBzZVBySW50XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpIGNsYXNzTmFtZT1cIm1hdGVyaWFsLWljb25zIGNvbC13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7Zm9udFNpemU6IFwiMThweFwiLCBmbG9hdDogXCJsZWZ0XCJ9fT5rZXlib2FyZF9hcnJvd19kb3duPC9pPlByw6p0cyBpbnRlcm5lczxzcGFuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJhZGdlIGJnLXBpbmsgZmxvYXQtcmlnaHRcIj57cGVyc2NvdW50fTwvc3Bhbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L2g0PlxuICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgPGRpdiBpZD1cImNvbGxhcHNlUHJJbnRcIiBjbGFzc05hbWU9XCJwYW5lbC1jb2xsYXBzZSBjb2xsYXBzZVwiIHJvbGU9XCJ0YWJwYW5lbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgYXJpYS1sYWJlbGxlZGJ5PVwiaGVhZGluZ1BySW50XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsLWJvZHkgXCIgc3R5bGU9e3tvdmVyZmxvdzogXCJzY3JvbGxcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwidGFibGUtcmVzcG9uc2l2ZSBzaGFkb3dcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJ0YWJsZS1yZXNwb25zaXZlIHNoYWRvdyBiZy13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tjb2xvcjogXCIjNTU1XCIsIG92ZXJmbG93OiBcInNjcm9sbFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDQgY2xhc3NOYW1lPVwiYm9sbzcwMCBjb2wtYmx1ZVwiPlBSw4pUUyBJTlRFUk5FUzwvaDQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInJvd1wiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLW1kLThcIiBzdHlsZT17e3BhZGRpbmdUb3A6IFwiMjBweFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBjbGFzc05hbWU9XCJtLXItNSB2YXJlYWN0XCI+PGlucHV0IHR5cGU9XCJjaGVja2JveFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBuYW1lPVwiY2hlY2tQZXJzb3NcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWQ9XCJjaGVja2VkUGVyc29cIi8+PC9zcGFuPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPVwiI1wiIGlkPVwiZWRpdFBlcnNvXCIgY2xhc3NOYW1lPVwibS1yLTUgdmFyZWFjdFwiPjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYSBmYS1lZGl0ICBjb2wtZ3JlZW5cIi8+PC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPVwiI1wiIGlkPVwiZGVsUGVyc29cIiBjbGFzc05hbWU9XCJtLXItNSB2YXJlYWN0XCI+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImZhIGZhIGZhLXRyYXNoIGNvbC1waW5rIFwiLz48L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxSZWFjdEhUTUxUYWJsZVRvRXhjZWxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkPVwidGVzdC10YWJsZS14bHMtYnV0dG9uXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJ0biBiYWRnZSBiYWRnZS1waWxsIGNvbC1ncmVlbiBtLXItNSBmbG9hdC1sZWZ0IHZhcmVhY3RcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGFibGU9XCJwZXJzb29zXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRpdGxlPVwiR8OpbsOpcmVyIHVuIGZpY2hpZXIgRXhjZWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZmlsZW5hbWU9XCJMRSBQRVJTT05ORUxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc2hlZXQ9XCJ0YWJsZXhsc1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBidXR0b25UZXh0PVwiRXhcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbWQtNCBmbG9hdC1yaWdodFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImlucHV0LWdyb3VwXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImZvcm0tbGluZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbnB1dCB0eXBlPVwidGV4dFwiIGNsYXNzTmFtZT1cImZvcm0tY29udHJvbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uQ2hhbmdlPXtoYW5kbGVQZXJzb3N9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHBsYWNlaG9sZGVyPVwiUmVjaGVyY2hlclwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIGlkPVwicGVyc29vc1wiIGNsYXNzTmFtZT1cInRhYmxlLXN0cmlwZWQgdGFibGUtaG92ZXIgZGlzcGxheSBub3dyYXBcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7d2lkdGg6IFwiMTAwJVwiLCBvdmVyZmxvd1g6ICdzY3JvbGwnLCBtYXJnaW5Cb3R0b206IFwiMTBweFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoZWFkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBzdHlsZT17e2JvcmRlckJvdHRvbTogXCIxcHggc29saWQgIzAwMFwifX0gY2xhc3NOYW1lPVwiYmctbGlnaHRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHJvd1NwYW49XCIyXCJjbGFzc05hbWU9XCJtdzMwIHRleHQtY2VudGVyXCI+IzwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCByb3dTcGFuPVwiMlwiPk5PTSAmIFBSw4lOT01TPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNvbFNwYW49XCIzXCIgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXJcIj5FTlJFR0lTVFJFTUVOVFM8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyIHN0eWxlPXt7Ym9yZGVyQm90dG9tOiBcIjFweCBzb2xpZCAjMDAwXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJnLWxpZ2h0IHRleHQtcmlnaHRcIj5TT1JUSUU8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiYmctbGlnaHQgdGV4dC1yaWdodFwiPkVOVFLDiUU8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwiYmctbGlnaHQgdGV4dC1sZWZ0XCI+U09MREUgLyBSw4lGw4lSRU5DRTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoZWFkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0Ym9keT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7cmVuZGVyUGVyc29QcmV0c31cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3Rib2R5PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0Zm9vdD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHIgc3R5bGU9e3tib3JkZXJCb3R0b206IFwiMXB4IHNvbGlkICMwMDBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGNvbC13aGl0ZSBiZy1ibHVlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PjxOdW1iZXJGb3JtYXQgbnVtYj17cHJldHNvdG99Lz48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwidGV4dC1yaWdodCBjb2wtd2hpdGUgYmctYmx1ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT48TnVtYmVyRm9ybWF0IG51bWI9e3ByZXRzdXRvfS8+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cInRleHQtbGVmdCBjb2wtd2hpdGUgYmctYmx1ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT48TnVtYmVyRm9ybWF0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iPXtwcmV0c290byAtIHByZXRzdXRvfS8+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGZvb3Q+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsIHBhbmVsLXByaSBzaGFkb3dcIj5cbiAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbC1oZWFkaW5nXCIgcm9sZT1cInRhYlwiIGlkPVwiaGVhZGluZ1BlU2FsXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICA8aDQgY2xhc3NOYW1lPVwicGFuZWwtdGl0bGVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBjbGFzc05hbWU9XCJjb2xsYXBzZWQgIG91dGFpIGNvbC13aGl0ZVwiIHJvbGU9XCJidXR0b25cIiBkYXRhLXRvZ2dsZT1cImNvbGxhcHNlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhLXBhcmVudD1cIiNhY2NvcmRpb25QZVNhbFwiIGhyZWY9XCIjY29sbGFwc2VQZVNhbFwiIGFyaWEtZXhwYW5kZWQ9XCJmYWxzZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYXJpYS1jb250cm9scz1cImNvbGxhcHNlUGVTYWxcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGkgY2xhc3NOYW1lPVwibWF0ZXJpYWwtaWNvbnMgY29sLXdoaXRlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tmb250U2l6ZTogXCIxOHB4XCIsIGZsb2F0OiBcImxlZnRcIn19PmtleWJvYXJkX2Fycm93X2Rvd248L2k+U2FsYWlyZXM8c3BhblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJiYWRnZSBiZy1waW5rIGZsb2F0LXJpZ2h0XCI+e3BlcnNjb3VudH08L3NwYW4+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9oND5cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgaWQ9XCJjb2xsYXBzZVBlU2FsXCIgY2xhc3NOYW1lPVwicGFuZWwtY29sbGFwc2UgY29sbGFwc2VcIiByb2xlPVwidGFicGFuZWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtbGFiZWxsZWRieT1cImhlYWRpbmdQZVNhbFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbC1ib2R5IFwiIHN0eWxlPXt7b3ZlcmZsb3c6IFwic2Nyb2xsXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInRhYmxlLXJlc3BvbnNpdmUgc2hhZG93XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwidGFibGUtcmVzcG9uc2l2ZSBzaGFkb3cgYmctd2hpdGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7Y29sb3I6IFwiIzU1NVwiLCBvdmVyZmxvdzogXCJzY3JvbGxcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGg0IGNsYXNzTmFtZT1cImJvbG83MDAgY29sLWJsdWVcIj5TQUxBSVJFUzwvaDQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInJvd1wiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLW1kLThcIiBzdHlsZT17e3BhZGRpbmdUb3A6IFwiMjBweFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBjbGFzc05hbWU9XCJtLXItNSB2YXJlYWN0XCI+PGlucHV0IHR5cGU9XCJjaGVja2JveFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBuYW1lPVwiY2hlY2tQZXJzb3NcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWQ9XCJjaGVja2VkUGVyc29cIi8+PC9zcGFuPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPVwiI1wiIGlkPVwiZWRpdFBlcnNvXCIgY2xhc3NOYW1lPVwibS1yLTUgdmFyZWFjdFwiPjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYSBmYS1lZGl0ICBjb2wtZ3JlZW5cIi8+PC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPVwiI1wiIGlkPVwiZGVsUGVyc29cIiBjbGFzc05hbWU9XCJtLXItNSB2YXJlYWN0XCI+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImZhIGZhIGZhLXRyYXNoIGNvbC1waW5rIFwiLz48L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxSZWFjdEhUTUxUYWJsZVRvRXhjZWxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkPVwidGVzdC10YWJsZS14bHMtYnV0dG9uXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJ0biBiYWRnZSBiYWRnZS1waWxsIGNvbC1ncmVlbiBtLXItNSBmbG9hdC1sZWZ0IHZhcmVhY3RcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGFibGU9XCJwZXJzb29zXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRpdGxlPVwiR8OpbsOpcmVyIHVuIGZpY2hpZXIgRXhjZWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZmlsZW5hbWU9XCJMRSBQRVJTT05ORUxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc2hlZXQ9XCJ0YWJsZXhsc1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBidXR0b25UZXh0PVwiRXhcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbWQtNCBmbG9hdC1yaWdodFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImlucHV0LWdyb3VwXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImZvcm0tbGluZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbnB1dCB0eXBlPVwidGV4dFwiIGNsYXNzTmFtZT1cImZvcm0tY29udHJvbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uQ2hhbmdlPXtoYW5kbGVQZXJzb3N9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHBsYWNlaG9sZGVyPVwiUmVjaGVyY2hlclwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIGlkPVwicGVyc29vc1wiIGNsYXNzTmFtZT1cInRhYmxlLXN0cmlwZWQgdGFibGUtaG92ZXIgZGlzcGxheSBub3dyYXBcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7d2lkdGg6IFwiMTAwJVwiLCBvdmVyZmxvd1g6ICdzY3JvbGwnLCBtYXJnaW5Cb3R0b206IFwiMTBweFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoZWFkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBzdHlsZT17e2JvcmRlckJvdHRvbTogXCIxcHggc29saWQgIzAwMFwifX0gY2xhc3NOYW1lPVwiYmctbGlnaHRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHJvd1NwYW49XCIyXCIgY2xhc3NOYW1lPVwibXczMCB0ZXh0LWNlbnRlclwiPiM8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggcm93U3Bhbj1cIjJcIj5OT00gJiBQUsOJTk9NUzwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjb2xTcGFuPVwiM1wiIGNsYXNzTmFtZT1cInRleHQtY2VudGVyXCI+RU5SRUdJU1RSRU1FTlRTPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBzdHlsZT17e2JvcmRlckJvdHRvbTogXCIxcHggc29saWQgIzAwMFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJiZy1saWdodCB0ZXh0LXJpZ2h0XCI+U09SVElFPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJnLWxpZ2h0IHRleHQtcmlnaHRcIj5FTlRSw4lFPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cImJnLWxpZ2h0IHRleHQtbGVmdFwiPlNPTERFIC8gUsOJRsOJUkVOQ0U8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90aGVhZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGJvZHk+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge3JlbmRlclBlcnNvU2FsYWlyZXN9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90Ym9keT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGZvb3Q+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHIgc3R5bGU9e3tib3JkZXJCb3R0b206IFwiMXB4IHNvbGlkICMwMDBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGNvbC13aGl0ZSBiZy1ibHVlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PjxOdW1iZXJGb3JtYXQgbnVtYj17c2Fzb3RvfS8+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgY29sLXdoaXRlIGJnLWJsdWVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+PE51bWJlckZvcm1hdCBudW1iPXtzYXN1dG99Lz48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwidGV4dC1sZWZ0IGNvbC13aGl0ZSBiZy1ibHVlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PjxOdW1iZXJGb3JtYXRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG51bWI9e3Nhc290byAtIHNhc3V0b30vPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3Rmb290PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbCBwYW5lbC1wcmkgc2hhZG93XCI+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwtaGVhZGluZ1wiIHJvbGU9XCJ0YWJcIiBpZD1cImhlYWRpbmdJbXB1c1wiPlxuICAgICAgICAgICAgICAgICAgICAgICAgPGg0IGNsYXNzTmFtZT1cInBhbmVsLXRpdGxlXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgY2xhc3NOYW1lPVwiY29sbGFwc2VkICBjb2wtd2hpdGVcIiByb2xlPVwiYnV0dG9uXCIgZGF0YS10b2dnbGU9XCJjb2xsYXBzZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS1wYXJlbnQ9XCIjYWNjb3JkaW9uSW1wdXNcIiBocmVmPVwiI2NvbGxhcHNlSW1wdXNcIiBhcmlhLWV4cGFuZGVkPVwiZmFsc2VcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtY29udHJvbHM9XCJjb2xsYXBzZUltcHVzXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpIGNsYXNzTmFtZT1cIm1hdGVyaWFsLWljb25zIGNvbC13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7Zm9udFNpemU6IFwiMThweFwiLCBmbG9hdDogXCJsZWZ0XCJ9fT5rZXlib2FyZF9hcnJvd19kb3duPC9pPlLDqWzDqXbDqSBkZXNcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb3DDqXJhdGlvbnNcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZHUgcGVyc29ubmVsPHNwYW4gY2xhc3NOYW1lPVwiYmFkZ2UgYmctcGluayBmbG9hdC1yaWdodFwiPntycGNvdW50fTwvc3Bhbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L2g0PlxuICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgPGRpdiBpZD1cImNvbGxhcHNlSW1wdXNcIiBjbGFzc05hbWU9XCJwYW5lbC1jb2xsYXBzZSBjb2xsYXBzZVwiIHJvbGU9XCJ0YWJwYW5lbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgYXJpYS1sYWJlbGxlZGJ5PVwiaGVhZGluZ0ltcHVzXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsLWJvZHkgXCIgc3R5bGU9e3tvdmVyZmxvdzogXCJzY3JvbGxcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwidGFibGUtcmVzcG9uc2l2ZSBzaGFkb3cgYmctd2hpdGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tjb2xvcjogXCIjNTU1XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJyb3dcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLW1kLThcIiBzdHlsZT17e3BhZGRpbmdUb3A6IFwiMjBweFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPFJlYWN0SFRNTFRhYmxlVG9FeGNlbFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZD1cInRlc3QtdGFibGUteGxzLWJ1dHRvblwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJ0biBiYWRnZSBiYWRnZS1waWxsIGNvbC1ncmVlbiBtLXItNSBmbG9hdC1sZWZ0IHZhcmVhY3RcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0YWJsZT1cInJlbGVQZXJzb1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRpdGxlPVwiR8OpbsOpcmVyIHVuIGZpY2hpZXIgRXhjZWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBmaWxlbmFtZT1cIlLDiUzDiVbDiSBERVMgRlJBSVMgUEVSU09OTkVMU1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNoZWV0PVwidGFibGV4bHNcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBidXR0b25UZXh0PVwiRXhcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLW1kLTQgZmxvYXQtcmlnaHRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImlucHV0LWdyb3VwXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiZm9ybS1saW5lXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aW5wdXQgdHlwZT1cInRleHRcIiBjbGFzc05hbWU9XCJmb3JtLWNvbnRyb2xcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uQ2hhbmdlPXtoYW5kbGVSZWxlUGVyc299XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcGxhY2Vob2xkZXI9XCJSZWNoZXJjaGVyXCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIGNsYXNzTmFtZT1cInRhYmxlLXN0cmlwZWQgdGFibGUtaG92ZXIgZGlzcGxheSBub3dyYXBcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3t3aWR0aDogXCIxMDAlXCIsIG1hcmdpbkJvdHRvbTogXCIxMHB4XCJ9fSBpZD1cInJlbGVQZXJzb1wiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoZWFkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD5EQVRFPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+TsK6IERFIEJPTjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPlLDiUbDiVJFTkNFPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+U09SVElFIERFIENBSVNTRTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPkVOVFLDiUUgREUgQ0FJU1NFPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+VkFMSUTDiSBQQVI8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGhlYWQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGJvZHk+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7cmVuZGVyUmVsZVBlcnNvfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90Ym9keT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0Zm9vdD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwidGV4dC1jZW50ZXIgY29sLXdoaXRlIGJnLWJsdWVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e3doaXRlU3BhY2U6IFwibm93cmFwXCJ9fT48TnVtYmVyRm9ybWF0IG51bWI9e3JwZGViaXR9Lz48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlciBjb2wtd2hpdGUgYmctYmx1ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJub3dyYXBcIn19PjxOdW1iZXJGb3JtYXQgbnVtYj17cnBjcmVkaXR9Lz48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnQgY29sLWJsdWVcIj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGZvb3Q+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgPC9kaXY+XG5cbiAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICA8L2Rpdj5cbiAgICA8Lz4pO1xufVxuXG50cnkge1xuICAgIGNvbnN0IHJvb3QgPSBjcmVhdGVSb290KGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdzZXRjaGFyZ2VzcGVyc29ubmVsbGVzJykpO1xuICAgIHJvb3QucmVuZGVyKDxDaGFyZ2VzUGVyc29ubmVsbGVzLz4pO1xufSBjYXRjaCAoZSkge1xufVxuIiwibGV0IE51bWJlckZvcm1hdDtcbmV4cG9ydCBkZWZhdWx0IE51bWJlckZvcm1hdCA9IChwcm9wcykgPT4ge1xuXG4gICAgY29uc3QgZm9ybWF0TnVtYmVyID0gKG51bSwgcHJlY2lzaW9uLCBzZXBhcmF0b3IpID0+IHtcbiAgICAgICAgbGV0IHBhcnRzO1xuICAgICAgICBudW0gPSBOdW1iZXIobnVtKTtcbiAgICAgICAgbnVtID0gKHR5cGVvZiBwcmVjaXNpb24gIT09ICd1bmRlZmluZWQnID8gbnVtLnRvRml4ZWQocHJlY2lzaW9uKSA6IG51bSkudG9TdHJpbmcoKTtcbiAgICAgICAgcGFydHMgPSBudW0uc3BsaXQoJy4nKTtcbiAgICAgICAgcGFydHNbMF0gPSBwYXJ0c1swXS50b1N0cmluZygpLnJlcGxhY2UoLyhcXGQpKD89KFxcZHszfSkrKD8hXFxkKSkvZywgJyQxJyArIChzZXBhcmF0b3IgfHwgJywnKSk7XG4gICAgICAgIHJldHVybiBwYXJ0cy5qb2luKCcsJyk7XG4gICAgfVxuXG4gICAgcmV0dXJuIChmb3JtYXROdW1iZXIocHJvcHMubnVtYiwyLCAnICcpKTtcblxufTtcblxuIiwiLyoqXG4gKiBqcXVlcnkuc2ltcGxlUGFnaW5hdGlvbi5qc1xuICogQHZlcnNpb246IHYxLjAuMFxuICogQGF1dGhvcjogU2ViYXN0aWFuIE1hcnVsYW5kYSBodHRwOi8vbWFydWxhbmRhLm1lXG4gKiBAc2VlOiBodHRwczovL2dpdGh1Yi5jb20vc21hcnVsYW5kYS9qcXVlcnkuc2ltcGxlUGFnaW5hdGlvblxuICovXG5cbihmdW5jdGlvbigkKSB7XG5cblx0JC5mbi5zaW1wbGVQYWdpbmF0aW9uID0gZnVuY3Rpb24ob3B0aW9ucykge1xuXG5cdFx0Y29uc3QgZGVmYXVsdHMgPSB7XG5cdFx0XHRwZXJQYWdlOiAyMCxcblx0XHRcdGNvbnRhaW5lckNsYXNzOiAnJyxcblx0XHRcdHByZXZpb3VzQnV0dG9uQ2xhc3M6ICcnLFxuXHRcdFx0bmV4dEJ1dHRvbkNsYXNzOiAnJyxcblx0XHRcdHByZXZpb3VzQnV0dG9uVGV4dDogJzwnLFxuXHRcdFx0bmV4dEJ1dHRvblRleHQ6ICc+Jyxcblx0XHRcdGN1cnJlbnRQYWdlOiAxXG5cdFx0fTtcblxuXHRcdGNvbnN0IHNldHRpbmdzID0gJC5leHRlbmQoe30sIGRlZmF1bHRzLCBvcHRpb25zKTtcblxuXHRcdHJldHVybiB0aGlzLmVhY2goZnVuY3Rpb24oKSB7XG5cdFx0XHRjb25zdCAkcm93cyA9ICQob3B0aW9ucywgdGhpcyk7XG5cdFx0XHRjb25zdCBwYWdlcyA9IE1hdGguY2VpbCgkcm93cy5sZW5ndGggLyBzZXR0aW5ncy5wZXJQYWdlKTtcblxuXHRcdFx0Y29uc3QgY29udGFpbmVyID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnZGl2Jyk7XG5cdFx0XHRjb25zdCBiUHJldmlvdXMgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdidXR0b24nKTtcblx0XHRcdGNvbnN0IGJOZXh0ID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnYnV0dG9uJyk7XG5cdFx0XHRjb25zdCBvZiA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ3NwYW4nKTtcblxuXG5cdFx0XHRiUHJldmlvdXMuaW5uZXJIVE1MID0gc2V0dGluZ3MucHJldmlvdXNCdXR0b25UZXh0O1xuXHRcdFx0Yk5leHQuaW5uZXJIVE1MID0gc2V0dGluZ3MubmV4dEJ1dHRvblRleHQ7XG5cblx0XHRcdGNvbnRhaW5lci5jbGFzc05hbWUgPSBzZXR0aW5ncy5jb250YWluZXJDbGFzcztcblx0XHRcdGJQcmV2aW91cy5jbGFzc05hbWUgPSBzZXR0aW5ncy5wcmV2aW91c0J1dHRvbkNsYXNzO1xuXHRcdFx0Yk5leHQuY2xhc3NOYW1lID0gc2V0dGluZ3MubmV4dEJ1dHRvbkNsYXNzO1xuXG5cdFx0XHRiUHJldmlvdXMuc3R5bGUubWFyZ2luUmlnaHQgPSAnOHB4Jztcblx0XHRcdGJQcmV2aW91cy5jbGFzc0xpc3QuYWRkKCdidG4nKTtcblx0XHRcdGJQcmV2aW91cy5jbGFzc0xpc3QuYWRkKCdiZy1ibHVlJyk7XG5cdFx0XHRiUHJldmlvdXMuY2xhc3NMaXN0LmFkZCgnYm9sbzcwMCcpO1xuXHRcdFx0Yk5leHQuc3R5bGUubWFyZ2luTGVmdCA9ICc4cHgnO1xuXHRcdFx0Yk5leHQuY2xhc3NMaXN0LmFkZCgnYnRuJyk7XG5cdFx0XHRiTmV4dC5jbGFzc0xpc3QuYWRkKCdiZy1ibHVlJyk7XG5cdFx0XHRiTmV4dC5jbGFzc0xpc3QuYWRkKCdib2xvNzAwJyk7XG5cdFx0XHRjb250YWluZXIuc3R5bGUudGV4dEFsaWduID0gXCJyaWdodFwiO1xuXHRcdFx0Y29udGFpbmVyLnN0eWxlLm1hcmdpbkJvdHRvbSA9ICcyMHB4JztcblxuXHRcdFx0Y29udGFpbmVyLmFwcGVuZENoaWxkKGJQcmV2aW91cyk7XG5cdFx0XHRjb250YWluZXIuYXBwZW5kQ2hpbGQob2YpO1xuXHRcdFx0Y29udGFpbmVyLmFwcGVuZENoaWxkKGJOZXh0KTtcblxuXHRcdFx0JCh0aGlzKS5hZnRlcihjb250YWluZXIpO1xuXG5cdFx0XHR1cGRhdGUoKTtcblxuXHRcdFx0JChiTmV4dCkuY2xpY2soZnVuY3Rpb24oKSB7XG5cdFx0XHRcdGlmIChzZXR0aW5ncy5jdXJyZW50UGFnZSArIDEgPiBwYWdlcykge1xuXHRcdFx0XHRcdHNldHRpbmdzLmN1cnJlbnRQYWdlID0gcGFnZXM7XG5cdFx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdFx0c2V0dGluZ3MuY3VycmVudFBhZ2UrKztcblx0XHRcdFx0fVxuXHRcdFx0XHR1cGRhdGUoKTtcblx0XHRcdH0pO1xuXG5cdFx0XHQkKGJQcmV2aW91cykuY2xpY2soZnVuY3Rpb24oKSB7XG5cdFx0XHRcdGlmIChzZXR0aW5ncy5jdXJyZW50UGFnZSAtIDEgPCAxKSB7XG5cdFx0XHRcdFx0c2V0dGluZ3MuY3VycmVudFBhZ2UgPSAxO1xuXHRcdFx0XHR9IGVsc2Uge1xuXHRcdFx0XHRcdHNldHRpbmdzLmN1cnJlbnRQYWdlLS07XG5cdFx0XHRcdH1cblx0XHRcdFx0dXBkYXRlKCk7XG5cdFx0XHR9KTtcblxuXHRcdFx0ZnVuY3Rpb24gdXBkYXRlKCkge1xuXHRcdFx0XHRjb25zdCBmcm9tID0gKChzZXR0aW5ncy5jdXJyZW50UGFnZSAtIDEpICogc2V0dGluZ3MucGVyUGFnZSkgKyAxO1xuXHRcdFx0XHRsZXQgdG8gPSBmcm9tICsgc2V0dGluZ3MucGVyUGFnZSAtIDE7XG5cblx0XHRcdFx0aWYgKHRvID4gJHJvd3MubGVuZ3RoKSB7XG5cdFx0XHRcdFx0dG8gPSAkcm93cy5sZW5ndGg7XG5cdFx0XHRcdH1cblxuXHRcdFx0XHQkcm93cy5oaWRlKCk7XG5cdFx0XHRcdCRyb3dzLnNsaWNlKChmcm9tLTEpLCB0bykuc2hvdygpO1xuXG5cdFx0XHRcdG9mLmlubmVySFRNTCA9IGZyb20gKyAnIMOgICcgKyB0byArICcgc3VyICcgKyAkcm93cy5sZW5ndGggKyAnIGxpZ25lcyc7XG5cblx0XHRcdFx0aWYgKCRyb3dzLmxlbmd0aCA8PSBzZXR0aW5ncy5wZXJQYWdlKSB7XG5cdFx0XHRcdFx0JChjb250YWluZXIpLmhpZGUoKTtcblx0XHRcdFx0fSBlbHNlIHtcblx0XHRcdFx0XHQkKGNvbnRhaW5lcikuc2hvdygpO1xuXHRcdFx0XHR9XG5cdFx0XHR9XG5cdFx0fSk7XG5cblx0fVxuXG59KGpRdWVyeSkpO1xuIiwiJ3VzZSBzdHJpY3QnO1xudmFyICQgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZXhwb3J0Jyk7XG52YXIgY2FsbCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9mdW5jdGlvbi1jYWxsJyk7XG52YXIgdW5jdXJyeVRoaXMgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZnVuY3Rpb24tdW5jdXJyeS10aGlzJyk7XG52YXIgcmVxdWlyZU9iamVjdENvZXJjaWJsZSA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9yZXF1aXJlLW9iamVjdC1jb2VyY2libGUnKTtcbnZhciBpc0NhbGxhYmxlID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2lzLWNhbGxhYmxlJyk7XG52YXIgaXNOdWxsT3JVbmRlZmluZWQgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvaXMtbnVsbC1vci11bmRlZmluZWQnKTtcbnZhciBpc1JlZ0V4cCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9pcy1yZWdleHAnKTtcbnZhciB0b1N0cmluZyA9IHJlcXVpcmUoJy4uL2ludGVybmFscy90by1zdHJpbmcnKTtcbnZhciBnZXRNZXRob2QgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZ2V0LW1ldGhvZCcpO1xudmFyIGdldFJlZ0V4cEZsYWdzID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL3JlZ2V4cC1nZXQtZmxhZ3MnKTtcbnZhciBnZXRTdWJzdGl0dXRpb24gPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZ2V0LXN1YnN0aXR1dGlvbicpO1xudmFyIHdlbGxLbm93blN5bWJvbCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy93ZWxsLWtub3duLXN5bWJvbCcpO1xudmFyIElTX1BVUkUgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvaXMtcHVyZScpO1xuXG52YXIgUkVQTEFDRSA9IHdlbGxLbm93blN5bWJvbCgncmVwbGFjZScpO1xudmFyICRUeXBlRXJyb3IgPSBUeXBlRXJyb3I7XG52YXIgaW5kZXhPZiA9IHVuY3VycnlUaGlzKCcnLmluZGV4T2YpO1xudmFyIHJlcGxhY2UgPSB1bmN1cnJ5VGhpcygnJy5yZXBsYWNlKTtcbnZhciBzdHJpbmdTbGljZSA9IHVuY3VycnlUaGlzKCcnLnNsaWNlKTtcbnZhciBtYXggPSBNYXRoLm1heDtcblxudmFyIHN0cmluZ0luZGV4T2YgPSBmdW5jdGlvbiAoc3RyaW5nLCBzZWFyY2hWYWx1ZSwgZnJvbUluZGV4KSB7XG4gIGlmIChmcm9tSW5kZXggPiBzdHJpbmcubGVuZ3RoKSByZXR1cm4gLTE7XG4gIGlmIChzZWFyY2hWYWx1ZSA9PT0gJycpIHJldHVybiBmcm9tSW5kZXg7XG4gIHJldHVybiBpbmRleE9mKHN0cmluZywgc2VhcmNoVmFsdWUsIGZyb21JbmRleCk7XG59O1xuXG4vLyBgU3RyaW5nLnByb3RvdHlwZS5yZXBsYWNlQWxsYCBtZXRob2Rcbi8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtc3RyaW5nLnByb3RvdHlwZS5yZXBsYWNlYWxsXG4kKHsgdGFyZ2V0OiAnU3RyaW5nJywgcHJvdG86IHRydWUgfSwge1xuICByZXBsYWNlQWxsOiBmdW5jdGlvbiByZXBsYWNlQWxsKHNlYXJjaFZhbHVlLCByZXBsYWNlVmFsdWUpIHtcbiAgICB2YXIgTyA9IHJlcXVpcmVPYmplY3RDb2VyY2libGUodGhpcyk7XG4gICAgdmFyIElTX1JFR19FWFAsIGZsYWdzLCByZXBsYWNlciwgc3RyaW5nLCBzZWFyY2hTdHJpbmcsIGZ1bmN0aW9uYWxSZXBsYWNlLCBzZWFyY2hMZW5ndGgsIGFkdmFuY2VCeSwgcmVwbGFjZW1lbnQ7XG4gICAgdmFyIHBvc2l0aW9uID0gMDtcbiAgICB2YXIgZW5kT2ZMYXN0TWF0Y2ggPSAwO1xuICAgIHZhciByZXN1bHQgPSAnJztcbiAgICBpZiAoIWlzTnVsbE9yVW5kZWZpbmVkKHNlYXJjaFZhbHVlKSkge1xuICAgICAgSVNfUkVHX0VYUCA9IGlzUmVnRXhwKHNlYXJjaFZhbHVlKTtcbiAgICAgIGlmIChJU19SRUdfRVhQKSB7XG4gICAgICAgIGZsYWdzID0gdG9TdHJpbmcocmVxdWlyZU9iamVjdENvZXJjaWJsZShnZXRSZWdFeHBGbGFncyhzZWFyY2hWYWx1ZSkpKTtcbiAgICAgICAgaWYgKCF+aW5kZXhPZihmbGFncywgJ2cnKSkgdGhyb3cgJFR5cGVFcnJvcignYC5yZXBsYWNlQWxsYCBkb2VzIG5vdCBhbGxvdyBub24tZ2xvYmFsIHJlZ2V4ZXMnKTtcbiAgICAgIH1cbiAgICAgIHJlcGxhY2VyID0gZ2V0TWV0aG9kKHNlYXJjaFZhbHVlLCBSRVBMQUNFKTtcbiAgICAgIGlmIChyZXBsYWNlcikge1xuICAgICAgICByZXR1cm4gY2FsbChyZXBsYWNlciwgc2VhcmNoVmFsdWUsIE8sIHJlcGxhY2VWYWx1ZSk7XG4gICAgICB9IGVsc2UgaWYgKElTX1BVUkUgJiYgSVNfUkVHX0VYUCkge1xuICAgICAgICByZXR1cm4gcmVwbGFjZSh0b1N0cmluZyhPKSwgc2VhcmNoVmFsdWUsIHJlcGxhY2VWYWx1ZSk7XG4gICAgICB9XG4gICAgfVxuICAgIHN0cmluZyA9IHRvU3RyaW5nKE8pO1xuICAgIHNlYXJjaFN0cmluZyA9IHRvU3RyaW5nKHNlYXJjaFZhbHVlKTtcbiAgICBmdW5jdGlvbmFsUmVwbGFjZSA9IGlzQ2FsbGFibGUocmVwbGFjZVZhbHVlKTtcbiAgICBpZiAoIWZ1bmN0aW9uYWxSZXBsYWNlKSByZXBsYWNlVmFsdWUgPSB0b1N0cmluZyhyZXBsYWNlVmFsdWUpO1xuICAgIHNlYXJjaExlbmd0aCA9IHNlYXJjaFN0cmluZy5sZW5ndGg7XG4gICAgYWR2YW5jZUJ5ID0gbWF4KDEsIHNlYXJjaExlbmd0aCk7XG4gICAgcG9zaXRpb24gPSBzdHJpbmdJbmRleE9mKHN0cmluZywgc2VhcmNoU3RyaW5nLCAwKTtcbiAgICB3aGlsZSAocG9zaXRpb24gIT09IC0xKSB7XG4gICAgICByZXBsYWNlbWVudCA9IGZ1bmN0aW9uYWxSZXBsYWNlXG4gICAgICAgID8gdG9TdHJpbmcocmVwbGFjZVZhbHVlKHNlYXJjaFN0cmluZywgcG9zaXRpb24sIHN0cmluZykpXG4gICAgICAgIDogZ2V0U3Vic3RpdHV0aW9uKHNlYXJjaFN0cmluZywgc3RyaW5nLCBwb3NpdGlvbiwgW10sIHVuZGVmaW5lZCwgcmVwbGFjZVZhbHVlKTtcbiAgICAgIHJlc3VsdCArPSBzdHJpbmdTbGljZShzdHJpbmcsIGVuZE9mTGFzdE1hdGNoLCBwb3NpdGlvbikgKyByZXBsYWNlbWVudDtcbiAgICAgIGVuZE9mTGFzdE1hdGNoID0gcG9zaXRpb24gKyBzZWFyY2hMZW5ndGg7XG4gICAgICBwb3NpdGlvbiA9IHN0cmluZ0luZGV4T2Yoc3RyaW5nLCBzZWFyY2hTdHJpbmcsIHBvc2l0aW9uICsgYWR2YW5jZUJ5KTtcbiAgICB9XG4gICAgaWYgKGVuZE9mTGFzdE1hdGNoIDwgc3RyaW5nLmxlbmd0aCkge1xuICAgICAgcmVzdWx0ICs9IHN0cmluZ1NsaWNlKHN0cmluZywgZW5kT2ZMYXN0TWF0Y2gpO1xuICAgIH1cbiAgICByZXR1cm4gcmVzdWx0O1xuICB9XG59KTtcbiIsIi8vIFRPRE86IFJlbW92ZSBmcm9tIGBjb3JlLWpzQDRgXG5yZXF1aXJlKCcuLi9tb2R1bGVzL2VzLnN0cmluZy5yZXBsYWNlLWFsbCcpO1xuIiwidmFyIG1hcCA9IHtcblx0XCIuL2FmXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hZi5qc1wiLFxuXHRcIi4vYWYuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FmLmpzXCIsXG5cdFwiLi9hclwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXIuanNcIixcblx0XCIuL2FyLWR6XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1kei5qc1wiLFxuXHRcIi4vYXItZHouanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLWR6LmpzXCIsXG5cdFwiLi9hci1rd1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXIta3cuanNcIixcblx0XCIuL2FyLWt3LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1rdy5qc1wiLFxuXHRcIi4vYXItbHlcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLWx5LmpzXCIsXG5cdFwiLi9hci1seS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItbHkuanNcIixcblx0XCIuL2FyLW1hXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1tYS5qc1wiLFxuXHRcIi4vYXItbWEuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLW1hLmpzXCIsXG5cdFwiLi9hci1wc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItcHMuanNcIixcblx0XCIuL2FyLXBzLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1wcy5qc1wiLFxuXHRcIi4vYXItc2FcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLXNhLmpzXCIsXG5cdFwiLi9hci1zYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItc2EuanNcIixcblx0XCIuL2FyLXRuXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci10bi5qc1wiLFxuXHRcIi4vYXItdG4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLXRuLmpzXCIsXG5cdFwiLi9hci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXIuanNcIixcblx0XCIuL2F6XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hei5qc1wiLFxuXHRcIi4vYXouanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2F6LmpzXCIsXG5cdFwiLi9iZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYmUuanNcIixcblx0XCIuL2JlLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9iZS5qc1wiLFxuXHRcIi4vYmdcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JnLmpzXCIsXG5cdFwiLi9iZy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYmcuanNcIixcblx0XCIuL2JtXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ibS5qc1wiLFxuXHRcIi4vYm0uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JtLmpzXCIsXG5cdFwiLi9iblwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYm4uanNcIixcblx0XCIuL2JuLWJkXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ibi1iZC5qc1wiLFxuXHRcIi4vYm4tYmQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JuLWJkLmpzXCIsXG5cdFwiLi9ibi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYm4uanNcIixcblx0XCIuL2JvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9iby5qc1wiLFxuXHRcIi4vYm8uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JvLmpzXCIsXG5cdFwiLi9iclwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYnIuanNcIixcblx0XCIuL2JyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ici5qc1wiLFxuXHRcIi4vYnNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JzLmpzXCIsXG5cdFwiLi9icy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYnMuanNcIixcblx0XCIuL2NhXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9jYS5qc1wiLFxuXHRcIi4vY2EuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2NhLmpzXCIsXG5cdFwiLi9jc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvY3MuanNcIixcblx0XCIuL2NzLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9jcy5qc1wiLFxuXHRcIi4vY3ZcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2N2LmpzXCIsXG5cdFwiLi9jdi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvY3YuanNcIixcblx0XCIuL2N5XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9jeS5qc1wiLFxuXHRcIi4vY3kuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2N5LmpzXCIsXG5cdFwiLi9kYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZGEuanNcIixcblx0XCIuL2RhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kYS5qc1wiLFxuXHRcIi4vZGVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2RlLmpzXCIsXG5cdFwiLi9kZS1hdFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZGUtYXQuanNcIixcblx0XCIuL2RlLWF0LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kZS1hdC5qc1wiLFxuXHRcIi4vZGUtY2hcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2RlLWNoLmpzXCIsXG5cdFwiLi9kZS1jaC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZGUtY2guanNcIixcblx0XCIuL2RlLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kZS5qc1wiLFxuXHRcIi4vZHZcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2R2LmpzXCIsXG5cdFwiLi9kdi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZHYuanNcIixcblx0XCIuL2VsXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbC5qc1wiLFxuXHRcIi4vZWwuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VsLmpzXCIsXG5cdFwiLi9lbi1hdVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tYXUuanNcIixcblx0XCIuL2VuLWF1LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1hdS5qc1wiLFxuXHRcIi4vZW4tY2FcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWNhLmpzXCIsXG5cdFwiLi9lbi1jYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tY2EuanNcIixcblx0XCIuL2VuLWdiXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1nYi5qc1wiLFxuXHRcIi4vZW4tZ2IuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWdiLmpzXCIsXG5cdFwiLi9lbi1pZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4taWUuanNcIixcblx0XCIuL2VuLWllLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1pZS5qc1wiLFxuXHRcIi4vZW4taWxcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWlsLmpzXCIsXG5cdFwiLi9lbi1pbC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4taWwuanNcIixcblx0XCIuL2VuLWluXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1pbi5qc1wiLFxuXHRcIi4vZW4taW4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWluLmpzXCIsXG5cdFwiLi9lbi1uelwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tbnouanNcIixcblx0XCIuL2VuLW56LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1uei5qc1wiLFxuXHRcIi4vZW4tc2dcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLXNnLmpzXCIsXG5cdFwiLi9lbi1zZy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tc2cuanNcIixcblx0XCIuL2VvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lby5qc1wiLFxuXHRcIi4vZW8uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VvLmpzXCIsXG5cdFwiLi9lc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXMuanNcIixcblx0XCIuL2VzLWRvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lcy1kby5qc1wiLFxuXHRcIi4vZXMtZG8uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VzLWRvLmpzXCIsXG5cdFwiLi9lcy1teFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXMtbXguanNcIixcblx0XCIuL2VzLW14LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lcy1teC5qc1wiLFxuXHRcIi4vZXMtdXNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VzLXVzLmpzXCIsXG5cdFwiLi9lcy11cy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXMtdXMuanNcIixcblx0XCIuL2VzLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lcy5qc1wiLFxuXHRcIi4vZXRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2V0LmpzXCIsXG5cdFwiLi9ldC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXQuanNcIixcblx0XCIuL2V1XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ldS5qc1wiLFxuXHRcIi4vZXUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2V1LmpzXCIsXG5cdFwiLi9mYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZmEuanNcIixcblx0XCIuL2ZhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mYS5qc1wiLFxuXHRcIi4vZmlcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZpLmpzXCIsXG5cdFwiLi9maS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZmkuanNcIixcblx0XCIuL2ZpbFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZmlsLmpzXCIsXG5cdFwiLi9maWwuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZpbC5qc1wiLFxuXHRcIi4vZm9cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZvLmpzXCIsXG5cdFwiLi9mby5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZm8uanNcIixcblx0XCIuL2ZyXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mci5qc1wiLFxuXHRcIi4vZnItY2FcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZyLWNhLmpzXCIsXG5cdFwiLi9mci1jYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZnItY2EuanNcIixcblx0XCIuL2ZyLWNoXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mci1jaC5qc1wiLFxuXHRcIi4vZnItY2guanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZyLWNoLmpzXCIsXG5cdFwiLi9mci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZnIuanNcIixcblx0XCIuL2Z5XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9meS5qc1wiLFxuXHRcIi4vZnkuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2Z5LmpzXCIsXG5cdFwiLi9nYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ2EuanNcIixcblx0XCIuL2dhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nYS5qc1wiLFxuXHRcIi4vZ2RcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dkLmpzXCIsXG5cdFwiLi9nZC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ2QuanNcIixcblx0XCIuL2dsXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nbC5qc1wiLFxuXHRcIi4vZ2wuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dsLmpzXCIsXG5cdFwiLi9nb20tZGV2YVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ29tLWRldmEuanNcIixcblx0XCIuL2dvbS1kZXZhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nb20tZGV2YS5qc1wiLFxuXHRcIi4vZ29tLWxhdG5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dvbS1sYXRuLmpzXCIsXG5cdFwiLi9nb20tbGF0bi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ29tLWxhdG4uanNcIixcblx0XCIuL2d1XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ndS5qc1wiLFxuXHRcIi4vZ3UuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2d1LmpzXCIsXG5cdFwiLi9oZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaGUuanNcIixcblx0XCIuL2hlLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9oZS5qc1wiLFxuXHRcIi4vaGlcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2hpLmpzXCIsXG5cdFwiLi9oaS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaGkuanNcIixcblx0XCIuL2hyXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9oci5qc1wiLFxuXHRcIi4vaHIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2hyLmpzXCIsXG5cdFwiLi9odVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaHUuanNcIixcblx0XCIuL2h1LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9odS5qc1wiLFxuXHRcIi4vaHktYW1cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2h5LWFtLmpzXCIsXG5cdFwiLi9oeS1hbS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaHktYW0uanNcIixcblx0XCIuL2lkXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9pZC5qc1wiLFxuXHRcIi4vaWQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2lkLmpzXCIsXG5cdFwiLi9pc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaXMuanNcIixcblx0XCIuL2lzLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9pcy5qc1wiLFxuXHRcIi4vaXRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2l0LmpzXCIsXG5cdFwiLi9pdC1jaFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaXQtY2guanNcIixcblx0XCIuL2l0LWNoLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9pdC1jaC5qc1wiLFxuXHRcIi4vaXQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2l0LmpzXCIsXG5cdFwiLi9qYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvamEuanNcIixcblx0XCIuL2phLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9qYS5qc1wiLFxuXHRcIi4vanZcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2p2LmpzXCIsXG5cdFwiLi9qdi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvanYuanNcIixcblx0XCIuL2thXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rYS5qc1wiLFxuXHRcIi4va2EuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2thLmpzXCIsXG5cdFwiLi9ra1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva2suanNcIixcblx0XCIuL2trLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ray5qc1wiLFxuXHRcIi4va21cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ttLmpzXCIsXG5cdFwiLi9rbS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva20uanNcIixcblx0XCIuL2tuXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rbi5qc1wiLFxuXHRcIi4va24uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2tuLmpzXCIsXG5cdFwiLi9rb1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva28uanNcIixcblx0XCIuL2tvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rby5qc1wiLFxuXHRcIi4va3VcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2t1LmpzXCIsXG5cdFwiLi9rdS1rbXJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2t1LWttci5qc1wiLFxuXHRcIi4va3Uta21yLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rdS1rbXIuanNcIixcblx0XCIuL2t1LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rdS5qc1wiLFxuXHRcIi4va3lcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2t5LmpzXCIsXG5cdFwiLi9reS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva3kuanNcIixcblx0XCIuL2xiXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9sYi5qc1wiLFxuXHRcIi4vbGIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2xiLmpzXCIsXG5cdFwiLi9sb1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbG8uanNcIixcblx0XCIuL2xvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9sby5qc1wiLFxuXHRcIi4vbHRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2x0LmpzXCIsXG5cdFwiLi9sdC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbHQuanNcIixcblx0XCIuL2x2XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9sdi5qc1wiLFxuXHRcIi4vbHYuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2x2LmpzXCIsXG5cdFwiLi9tZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbWUuanNcIixcblx0XCIuL21lLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tZS5qc1wiLFxuXHRcIi4vbWlcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21pLmpzXCIsXG5cdFwiLi9taS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbWkuanNcIixcblx0XCIuL21rXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tay5qc1wiLFxuXHRcIi4vbWsuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21rLmpzXCIsXG5cdFwiLi9tbFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbWwuanNcIixcblx0XCIuL21sLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tbC5qc1wiLFxuXHRcIi4vbW5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21uLmpzXCIsXG5cdFwiLi9tbi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbW4uanNcIixcblx0XCIuL21yXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tci5qc1wiLFxuXHRcIi4vbXIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21yLmpzXCIsXG5cdFwiLi9tc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXMuanNcIixcblx0XCIuL21zLW15XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tcy1teS5qc1wiLFxuXHRcIi4vbXMtbXkuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21zLW15LmpzXCIsXG5cdFwiLi9tcy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXMuanNcIixcblx0XCIuL210XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tdC5qc1wiLFxuXHRcIi4vbXQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL210LmpzXCIsXG5cdFwiLi9teVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXkuanNcIixcblx0XCIuL215LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9teS5qc1wiLFxuXHRcIi4vbmJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25iLmpzXCIsXG5cdFwiLi9uYi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbmIuanNcIixcblx0XCIuL25lXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9uZS5qc1wiLFxuXHRcIi4vbmUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25lLmpzXCIsXG5cdFwiLi9ubFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbmwuanNcIixcblx0XCIuL25sLWJlXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ubC1iZS5qc1wiLFxuXHRcIi4vbmwtYmUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25sLWJlLmpzXCIsXG5cdFwiLi9ubC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbmwuanNcIixcblx0XCIuL25uXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ubi5qc1wiLFxuXHRcIi4vbm4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25uLmpzXCIsXG5cdFwiLi9vYy1sbmNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL29jLWxuYy5qc1wiLFxuXHRcIi4vb2MtbG5jLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9vYy1sbmMuanNcIixcblx0XCIuL3BhLWluXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9wYS1pbi5qc1wiLFxuXHRcIi4vcGEtaW4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3BhLWluLmpzXCIsXG5cdFwiLi9wbFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcGwuanNcIixcblx0XCIuL3BsLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9wbC5qc1wiLFxuXHRcIi4vcHRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3B0LmpzXCIsXG5cdFwiLi9wdC1iclwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcHQtYnIuanNcIixcblx0XCIuL3B0LWJyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9wdC1ici5qc1wiLFxuXHRcIi4vcHQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3B0LmpzXCIsXG5cdFwiLi9yb1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcm8uanNcIixcblx0XCIuL3JvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9yby5qc1wiLFxuXHRcIi4vcnVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3J1LmpzXCIsXG5cdFwiLi9ydS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcnUuanNcIixcblx0XCIuL3NkXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zZC5qc1wiLFxuXHRcIi4vc2QuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NkLmpzXCIsXG5cdFwiLi9zZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2UuanNcIixcblx0XCIuL3NlLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zZS5qc1wiLFxuXHRcIi4vc2lcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NpLmpzXCIsXG5cdFwiLi9zaS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2kuanNcIixcblx0XCIuL3NrXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zay5qc1wiLFxuXHRcIi4vc2suanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NrLmpzXCIsXG5cdFwiLi9zbFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2wuanNcIixcblx0XCIuL3NsLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zbC5qc1wiLFxuXHRcIi4vc3FcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NxLmpzXCIsXG5cdFwiLi9zcS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3EuanNcIixcblx0XCIuL3NyXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zci5qc1wiLFxuXHRcIi4vc3ItY3lybFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3ItY3lybC5qc1wiLFxuXHRcIi4vc3ItY3lybC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3ItY3lybC5qc1wiLFxuXHRcIi4vc3IuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NyLmpzXCIsXG5cdFwiLi9zc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3MuanNcIixcblx0XCIuL3NzLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zcy5qc1wiLFxuXHRcIi4vc3ZcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3N2LmpzXCIsXG5cdFwiLi9zdi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3YuanNcIixcblx0XCIuL3N3XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zdy5qc1wiLFxuXHRcIi4vc3cuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3N3LmpzXCIsXG5cdFwiLi90YVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGEuanNcIixcblx0XCIuL3RhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90YS5qc1wiLFxuXHRcIi4vdGVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RlLmpzXCIsXG5cdFwiLi90ZS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGUuanNcIixcblx0XCIuL3RldFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGV0LmpzXCIsXG5cdFwiLi90ZXQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RldC5qc1wiLFxuXHRcIi4vdGdcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RnLmpzXCIsXG5cdFwiLi90Zy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGcuanNcIixcblx0XCIuL3RoXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90aC5qc1wiLFxuXHRcIi4vdGguanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RoLmpzXCIsXG5cdFwiLi90a1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGsuanNcIixcblx0XCIuL3RrLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90ay5qc1wiLFxuXHRcIi4vdGwtcGhcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RsLXBoLmpzXCIsXG5cdFwiLi90bC1waC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGwtcGguanNcIixcblx0XCIuL3RsaFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGxoLmpzXCIsXG5cdFwiLi90bGguanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RsaC5qc1wiLFxuXHRcIi4vdHJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RyLmpzXCIsXG5cdFwiLi90ci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdHIuanNcIixcblx0XCIuL3R6bFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdHpsLmpzXCIsXG5cdFwiLi90emwuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3R6bC5qc1wiLFxuXHRcIi4vdHptXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90em0uanNcIixcblx0XCIuL3R6bS1sYXRuXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90em0tbGF0bi5qc1wiLFxuXHRcIi4vdHptLWxhdG4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3R6bS1sYXRuLmpzXCIsXG5cdFwiLi90em0uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3R6bS5qc1wiLFxuXHRcIi4vdWctY25cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3VnLWNuLmpzXCIsXG5cdFwiLi91Zy1jbi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdWctY24uanNcIixcblx0XCIuL3VrXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91ay5qc1wiLFxuXHRcIi4vdWsuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3VrLmpzXCIsXG5cdFwiLi91clwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdXIuanNcIixcblx0XCIuL3VyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91ci5qc1wiLFxuXHRcIi4vdXpcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3V6LmpzXCIsXG5cdFwiLi91ei1sYXRuXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91ei1sYXRuLmpzXCIsXG5cdFwiLi91ei1sYXRuLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91ei1sYXRuLmpzXCIsXG5cdFwiLi91ei5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdXouanNcIixcblx0XCIuL3ZpXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS92aS5qc1wiLFxuXHRcIi4vdmkuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3ZpLmpzXCIsXG5cdFwiLi94LXBzZXVkb1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUveC1wc2V1ZG8uanNcIixcblx0XCIuL3gtcHNldWRvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS94LXBzZXVkby5qc1wiLFxuXHRcIi4veW9cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3lvLmpzXCIsXG5cdFwiLi95by5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUveW8uanNcIixcblx0XCIuL3poLWNuXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS96aC1jbi5qc1wiLFxuXHRcIi4vemgtY24uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3poLWNuLmpzXCIsXG5cdFwiLi96aC1oa1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvemgtaGsuanNcIixcblx0XCIuL3poLWhrLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS96aC1oay5qc1wiLFxuXHRcIi4vemgtbW9cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3poLW1vLmpzXCIsXG5cdFwiLi96aC1tby5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvemgtbW8uanNcIixcblx0XCIuL3poLXR3XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS96aC10dy5qc1wiLFxuXHRcIi4vemgtdHcuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3poLXR3LmpzXCJcbn07XG5cblxuZnVuY3Rpb24gd2VicGFja0NvbnRleHQocmVxKSB7XG5cdHZhciBpZCA9IHdlYnBhY2tDb250ZXh0UmVzb2x2ZShyZXEpO1xuXHRyZXR1cm4gX193ZWJwYWNrX3JlcXVpcmVfXyhpZCk7XG59XG5mdW5jdGlvbiB3ZWJwYWNrQ29udGV4dFJlc29sdmUocmVxKSB7XG5cdGlmKCFfX3dlYnBhY2tfcmVxdWlyZV9fLm8obWFwLCByZXEpKSB7XG5cdFx0dmFyIGUgPSBuZXcgRXJyb3IoXCJDYW5ub3QgZmluZCBtb2R1bGUgJ1wiICsgcmVxICsgXCInXCIpO1xuXHRcdGUuY29kZSA9ICdNT0RVTEVfTk9UX0ZPVU5EJztcblx0XHR0aHJvdyBlO1xuXHR9XG5cdHJldHVybiBtYXBbcmVxXTtcbn1cbndlYnBhY2tDb250ZXh0LmtleXMgPSBmdW5jdGlvbiB3ZWJwYWNrQ29udGV4dEtleXMoKSB7XG5cdHJldHVybiBPYmplY3Qua2V5cyhtYXApO1xufTtcbndlYnBhY2tDb250ZXh0LnJlc29sdmUgPSB3ZWJwYWNrQ29udGV4dFJlc29sdmU7XG5tb2R1bGUuZXhwb3J0cyA9IHdlYnBhY2tDb250ZXh0O1xud2VicGFja0NvbnRleHQuaWQgPSBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUgc3luYyByZWN1cnNpdmUgXlxcXFwuXFxcXC8uKiRcIjsiXSwibmFtZXMiOlsiUmVhY3QiLCJ1c2VFZmZlY3QiLCJ1c2VTdGF0ZSIsImNyZWF0ZVJvb3QiLCJheGlvcyIsIlJlYWN0SFRNTFRhYmxlVG9FeGNlbCIsIk51bWJlckZvcm1hdCIsIk1vbWVudCIsIiQiLCJDaGFyZ2VzUGVyc29ubmVsbGVzIiwicGVyc29zIiwic2V0UGVyc29zIiwiY2Fpc3NwZXJzbyIsInNldENhaXNzUGVyc28iLCJmZXRjaFBlcnNvcyIsImRlZGUiLCJKU09OIiwicGFyc2UiLCJ2YWwiLCJmZXRjaENhaXNzZVBlcnNvIiwiZGVkbyIsImNoYW5nZSIsImNoZWNrZWQiLCJlYWNoIiwib2ZmIiwib24iLCJ3aW5kb3ciLCJtb2RhbCIsImxvY2F0aW9uIiwiaHJlZiIsIm1ldGhvZCIsInVybCIsInRoZW4iLCJyZXNwb25zZSIsInJlbG9hZCIsImVycm9yIiwiZGVsZXRlQ2Fpc3NlIiwiaWQiLCJjb250ZW50VHlwZSIsImRhdGFUeXBlIiwidmFsaWRlQ2Fpc3NlIiwiZGV2YWxpZGVDYWlzc2UiLCJycGNvdW50IiwicnBkZWJpdCIsInJwY3JlZGl0IiwicmVuZGVyUmVsZVBlcnNvIiwibWFwIiwiY2Fpc3MiLCJwZXJzb25uZWwiLCJjb3JiZWlsbGUiLCJldGF0Iiwib3BlcmF0aW9uIiwibW9udGFudCIsImVkIiwiZWMiLCJkYXRlIiwiY2hhbnRpZXIiLCJudW1jYWlzc2UiLCJfX2h0bWwiLCJjYWlzc2VyZWZlcmVuY2UiLCJkb2J5dXNlciIsIm5vbSIsInRvVXBwZXJDYXNlIiwicHJlbm9tcyIsInBlcnNjb3VudCIsImZyZXBlcnNvdG8iLCJmcmVwZXJzdXRvIiwicmVuZGVyUGVyc29zIiwicGVyc28iLCJjYWlzc2VzIiwiY3VsZW4iLCJmcmVwZXJzbyIsImZyZXBlcnN1IiwidHlwZSIsInJlbmRlckNhaXNQZSIsImNhaXNzZSIsImRkZWIiLCJjY3JlZCIsIndoaXRlU3BhY2UiLCJtYXJnaW5SaWdodCIsInNoYXNoYSIsInNob3dCb25QZXJzbyIsIm5vbXMiLCJwcmV0Y291bnQiLCJwcmV0c290byIsInByZXRzdXRvIiwicmVuZGVyUGVyc29QcmV0cyIsInByZXRjdWxlbiIsInByZXRwZXJzbyIsInByZXRwZXJzdSIsInJlbmRlckNhaXNQcmV0UGVyc28iLCJnZW5yZSIsImRwZGViIiwiY3BjcmVkIiwiYXZjb3VudCIsImF2c290byIsImF2c3V0byIsInJlbmRlclBlcnNvQXZhbmNlcyIsImF2Y3VsZW4iLCJhdnBlcnNvIiwiYXZwZXJzdSIsInJlbmRlckNhaXNBdmFuY2VzUGVyc28iLCJkZGRlYiIsImNjY3JlZCIsInNob3dCb25QZXJzb3MiLCJzYWNvdW50Iiwic2Fzb3RvIiwic2FzdXRvIiwicmVuZGVyUGVyc29TYWxhaXJlcyIsInNhY3VsZW4iLCJzYXBlcnNvIiwic2FwZXJzdSIsInJlbmRlckNhaXNTYWxhaXJlUGVyc28iLCJkYWRlYiIsImNhY3JlZCIsImhhbmRsZVBlcnNvcyIsImV2ZW50IiwiZmlsdGVyIiwidGFyZ2V0IiwidmFsdWUiLCJ0b0xvd2VyQ2FzZSIsInRvZ2dsZSIsInRleHQiLCJyZXBsYWNlQWxsIiwiaW5kZXhPZiIsImhhc0NsYXNzIiwicmVtb3ZlQ2xhc3MiLCJhZGRDbGFzcyIsImhhbmRsZVJlbGVQZXJzbyIsInByZXZlbnREZWZhdWx0IiwiY2xvc2VzdCIsInZhbGlkIiwiaGlkZSIsImNzcyIsIkNLRURJVE9SIiwiaW5zdGFuY2VzIiwiZ2V0RGF0YSIsImFqYXgiLCJkYXRhIiwic3RyaW5naWZ5Iiwic2VyaWFsaXplT2JqZWN0Iiwic3VjY2VzcyIsInJlc3BkYXRhIiwidGV4dFN0YXR1cyIsImpxWEhSIiwieGhyIiwicmVzcCIsInNlbGVjdDIiLCJzaW1wbGVQYWdpbmF0aW9uIiwicGFkZGluZ0xlZnQiLCJtYXJnaW5Ub3AiLCJmb250U2l6ZSIsIm92ZXJmbG93IiwiY29sb3IiLCJwYWRkaW5nVG9wIiwid2lkdGgiLCJvdmVyZmxvd1giLCJtYXJnaW5Cb3R0b20iLCJib3JkZXJCb3R0b20iLCJyb290IiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsInJlbmRlciIsImUiLCJwcm9wcyIsImZvcm1hdE51bWJlciIsIm51bSIsInByZWNpc2lvbiIsInNlcGFyYXRvciIsInBhcnRzIiwiTnVtYmVyIiwidG9GaXhlZCIsInRvU3RyaW5nIiwic3BsaXQiLCJyZXBsYWNlIiwiam9pbiIsIm51bWIiLCJmbiIsIm9wdGlvbnMiLCJkZWZhdWx0cyIsInBlclBhZ2UiLCJjb250YWluZXJDbGFzcyIsInByZXZpb3VzQnV0dG9uQ2xhc3MiLCJuZXh0QnV0dG9uQ2xhc3MiLCJwcmV2aW91c0J1dHRvblRleHQiLCJuZXh0QnV0dG9uVGV4dCIsImN1cnJlbnRQYWdlIiwic2V0dGluZ3MiLCJleHRlbmQiLCIkcm93cyIsInBhZ2VzIiwiTWF0aCIsImNlaWwiLCJsZW5ndGgiLCJjb250YWluZXIiLCJjcmVhdGVFbGVtZW50IiwiYlByZXZpb3VzIiwiYk5leHQiLCJvZiIsImlubmVySFRNTCIsImNsYXNzTmFtZSIsInN0eWxlIiwiY2xhc3NMaXN0IiwiYWRkIiwibWFyZ2luTGVmdCIsInRleHRBbGlnbiIsImFwcGVuZENoaWxkIiwiYWZ0ZXIiLCJ1cGRhdGUiLCJjbGljayIsImZyb20iLCJ0byIsInNsaWNlIiwic2hvdyIsImpRdWVyeSJdLCJzb3VyY2VSb290IjoiIn0=