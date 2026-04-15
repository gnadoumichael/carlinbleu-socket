(self["webpackChunk"] = self["webpackChunk"] || []).push([["aptravauxjour"],{

/***/ "./assets/aptravauxjour.js":
/*!*********************************!*\
  !*** ./assets/aptravauxjour.js ***!
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
/* harmony import */ var _components_chantiers_TravauxJour__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./components/chantiers/TravauxJour */ "./assets/components/chantiers/TravauxJour.js");















/***/ }),

/***/ "./assets/components/chantiers/TravauxJour.js":
/*!****************************************************!*\
  !*** ./assets/components/chantiers/TravauxJour.js ***!
  \****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.map.js */ "./node_modules/core-js/modules/es.array.map.js");
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_parse_float_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.parse-float.js */ "./node_modules/core-js/modules/es.parse-float.js");
/* harmony import */ var core_js_modules_es_parse_float_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_parse_float_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.is-array.js */ "./node_modules/core-js/modules/es.array.is-array.js");
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.array.from.js */ "./node_modules/core-js/modules/es.array.from.js");
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_symbol_async_iterator_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.symbol.async-iterator.js */ "./node_modules/core-js/modules/es.symbol.async-iterator.js");
/* harmony import */ var core_js_modules_es_symbol_async_iterator_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_async_iterator_js__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var core_js_modules_es_symbol_to_string_tag_js__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/es.symbol.to-string-tag.js */ "./node_modules/core-js/modules/es.symbol.to-string-tag.js");
/* harmony import */ var core_js_modules_es_symbol_to_string_tag_js__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_to_string_tag_js__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var core_js_modules_es_json_to_string_tag_js__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! core-js/modules/es.json.to-string-tag.js */ "./node_modules/core-js/modules/es.json.to-string-tag.js");
/* harmony import */ var core_js_modules_es_json_to_string_tag_js__WEBPACK_IMPORTED_MODULE_19___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_json_to_string_tag_js__WEBPACK_IMPORTED_MODULE_19__);
/* harmony import */ var core_js_modules_es_math_to_string_tag_js__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! core-js/modules/es.math.to-string-tag.js */ "./node_modules/core-js/modules/es.math.to-string-tag.js");
/* harmony import */ var core_js_modules_es_math_to_string_tag_js__WEBPACK_IMPORTED_MODULE_20___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_math_to_string_tag_js__WEBPACK_IMPORTED_MODULE_20__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_21___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_21__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_22___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_22__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_23___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_23__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_24___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_24__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_25___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_25__);
/* harmony import */ var core_js_modules_es_array_reverse_js__WEBPACK_IMPORTED_MODULE_26__ = __webpack_require__(/*! core-js/modules/es.array.reverse.js */ "./node_modules/core-js/modules/es.array.reverse.js");
/* harmony import */ var core_js_modules_es_array_reverse_js__WEBPACK_IMPORTED_MODULE_26___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_reverse_js__WEBPACK_IMPORTED_MODULE_26__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_27__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_27___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_27__);
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_28__ = __webpack_require__(/*! react-dom/client */ "./node_modules/react-dom/client.js");
/* harmony import */ var react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_29__ = __webpack_require__(/*! react-html-table-to-excel */ "./node_modules/react-html-table-to-excel/index.js");
/* harmony import */ var _fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_30__ = __webpack_require__(/*! ../../fonctions/NumberFormat */ "./assets/fonctions/NumberFormat.js");
/* harmony import */ var react_moment__WEBPACK_IMPORTED_MODULE_31__ = __webpack_require__(/*! react-moment */ "./node_modules/react-moment/dist/index.js");
/* harmony import */ var react_moment__WEBPACK_IMPORTED_MODULE_31___default = /*#__PURE__*/__webpack_require__.n(react_moment__WEBPACK_IMPORTED_MODULE_31__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_32__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_32___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_32__);
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







var TravauxJour = function TravauxJour() {
  var _useState = (0,react__WEBPACK_IMPORTED_MODULE_27__.useState)([]),
    _useState2 = _slicedToArray(_useState, 2),
    devjour = _useState2[0],
    setDevJour = _useState2[1];
  var _useState3 = (0,react__WEBPACK_IMPORTED_MODULE_27__.useState)([]),
    _useState4 = _slicedToArray(_useState3, 2),
    bonjour = _useState4[0],
    setBonJour = _useState4[1];
  var _useState5 = (0,react__WEBPACK_IMPORTED_MODULE_27__.useState)([]),
    _useState6 = _slicedToArray(_useState5, 2),
    caisjour = _useState6[0],
    setCaisJour = _useState6[1];
  var _useState7 = (0,react__WEBPACK_IMPORTED_MODULE_27__.useState)([]),
    _useState8 = _slicedToArray(_useState7, 2),
    decjour = _useState8[0],
    setDecJour = _useState8[1];
  var _useState9 = (0,react__WEBPACK_IMPORTED_MODULE_27__.useState)([]),
    _useState10 = _slicedToArray(_useState9, 2),
    facjour = _useState10[0],
    setFacJour = _useState10[1];
  var fetchDevJour = /*#__PURE__*/function () {
    var _ref = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee() {
      var dd;
      return _regeneratorRuntime().wrap(function _callee$(_context) {
        while (1) switch (_context.prev = _context.next) {
          case 0:
            dd = JSON.parse(jquery__WEBPACK_IMPORTED_MODULE_32___default()('#jsondevis').val());
            setDevJour(dd);
          case 2:
          case "end":
            return _context.stop();
        }
      }, _callee);
    }));
    return function fetchDevJour() {
      return _ref.apply(this, arguments);
    };
  }();
  var fetchBonJour = /*#__PURE__*/function () {
    var _ref2 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee2() {
      var dd;
      return _regeneratorRuntime().wrap(function _callee2$(_context2) {
        while (1) switch (_context2.prev = _context2.next) {
          case 0:
            dd = JSON.parse(jquery__WEBPACK_IMPORTED_MODULE_32___default()('#jsonbon').val());
            setBonJour(dd);
          case 2:
          case "end":
            return _context2.stop();
        }
      }, _callee2);
    }));
    return function fetchBonJour() {
      return _ref2.apply(this, arguments);
    };
  }();
  var fetchCaisJour = /*#__PURE__*/function () {
    var _ref3 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee3() {
      var dd;
      return _regeneratorRuntime().wrap(function _callee3$(_context3) {
        while (1) switch (_context3.prev = _context3.next) {
          case 0:
            dd = JSON.parse(jquery__WEBPACK_IMPORTED_MODULE_32___default()('#jsoncaisse').val());
            setCaisJour(dd);
          case 2:
          case "end":
            return _context3.stop();
        }
      }, _callee3);
    }));
    return function fetchCaisJour() {
      return _ref3.apply(this, arguments);
    };
  }();
  var fetchDecJour = /*#__PURE__*/function () {
    var _ref4 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee4() {
      var dd;
      return _regeneratorRuntime().wrap(function _callee4$(_context4) {
        while (1) switch (_context4.prev = _context4.next) {
          case 0:
            dd = JSON.parse(jquery__WEBPACK_IMPORTED_MODULE_32___default()('#jsondec').val());
            setDecJour(dd);
          case 2:
          case "end":
            return _context4.stop();
        }
      }, _callee4);
    }));
    return function fetchDecJour() {
      return _ref4.apply(this, arguments);
    };
  }();
  var fetchFacJour = /*#__PURE__*/function () {
    var _ref5 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee5() {
      var dd;
      return _regeneratorRuntime().wrap(function _callee5$(_context5) {
        while (1) switch (_context5.prev = _context5.next) {
          case 0:
            dd = JSON.parse(jquery__WEBPACK_IMPORTED_MODULE_32___default()('#jsonfac').val());
            setFacJour(dd);
          case 2:
          case "end":
            return _context5.stop();
        }
      }, _callee5);
    }));
    return function fetchFacJour() {
      return _ref5.apply(this, arguments);
    };
  }();
  (0,react__WEBPACK_IMPORTED_MODULE_27__.useEffect)(function () {
    fetchDevJour();
    fetchBonJour();
    fetchCaisJour();
    fetchDecJour();
    fetchFacJour();
  }, []);
  var dejttc = 0;
  var dejht = 0;
  var devcount = 0;
  var renderDevJour = devjour.map(function (dev) {
    if (dev.corbeille === null && dev.type !== 'cps') {
      if (dev.type !== 'esti') {
        if (dev.client.corbeille === null) {
          dejttc = dev.totalttc + dejttc;
          dejht = dev.totalht + dejht;
          devcount = devcount + 1;
          return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement((react__WEBPACK_IMPORTED_MODULE_27___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tr", {
            key: dev.id
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
            className: "mw30 text-center"
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
            href: "#",
            onClick: function onClick() {
              shasha(dev.id, 'imprimdevis');
            },
            style: {
              marginRight: "5px"
            }
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("i", {
            className: "fa fa-eye col-green",
            "aria-hidden": "true"
          }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
            className: "text-left"
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement((react_moment__WEBPACK_IMPORTED_MODULE_31___default()), {
            format: "DD/MM/YYYY"
          }, dev.date)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null, dev.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
            onClick: function onClick() {
              devalideDevis(dev.id);
            },
            title: "D\xE9valider",
            className: "badge badge-pill badge-primary m-r-5"
          }, "V"), dev.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
            onClick: function onClick() {
              valideDevis(dev.id);
            },
            title: "Valider",
            className: "badge badge-pill bg-blue-grey m-r-5"
          }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
            href: "/crm/devis/".concat(dev.id, "/").concat(dev.chantier.id)
          }, " N\xB0 DEVIS ", dev.iddevis)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
            className: "text-right"
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_30__["default"], {
            numb: dev.totalht
          })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
            className: "text-right"
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_30__["default"], {
            numb: dev.totalttc
          })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
            dangerouslySetInnerHTML: {
              __html: dev.devreference
            }
          }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
            className: "text-left pri bolo600"
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("i", {
            className: "fa fa-user pri"
          }), "\xA0", dev.dobyuser.nom.toUpperCase() + ' ', " ", dev.dobyuser.prenoms.toUpperCase())));
        }
      }
    } else {
      return null;
    }
  });
  var bojttc = 0;
  var bojht = 0;
  var boncount = 0;
  var renderBonJour = bonjour.map(function (bon) {
    if (bon.corbeille === null && bon.type !== 'none') {
      if (bon.client.corbeille === null) {
        bojttc = bon.totalttc + bojttc;
        bojht = bon.totalht + bojht;
        boncount = boncount + 1;
        return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement((react__WEBPACK_IMPORTED_MODULE_27___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tr", {
          key: bon.id
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
          className: "mw30 text-center"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          href: "#",
          onClick: function onClick() {
            shasha(bon.id, 'imprimbon');
          },
          style: {
            marginRight: "5px"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("i", {
          className: "fa fa-eye col-green",
          "aria-hidden": "true"
        }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
          className: "text-left"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement((react_moment__WEBPACK_IMPORTED_MODULE_31___default()), {
          format: "DD/MM/YYYY"
        }, bon.date)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null, bon.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          onClick: function onClick() {
            devalideBon(bon.id);
          },
          title: "D\xE9valider",
          className: "badge badge-pill badge-primary m-r-5"
        }, "V"), bon.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          onClick: function onClick() {
            valideBon(bon.id);
          },
          title: "Valider",
          className: "badge badge-pill bg-blue-grey m-r-5"
        }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          href: "/crm/bon/".concat(bon.id, "/").concat(bon.chantier.id)
        }, bon.numbon)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null, bon.devis && bon.devis.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          onClick: function onClick() {
            devalideDevis(bon.devis.id);
          },
          title: "D\xE9valider",
          className: "badge badge-pill badge-primary m-r-5"
        }, "V"), bon.devis && bon.devis.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          onClick: function onClick() {
            valideDevis(bon.devis.id);
          },
          title: "Valider",
          className: "badge badge-pill bg-blue-grey m-r-5"
        }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          href: "/crm/devis/".concat(bon.devis.id, "/").concat(bon.chantier.id)
        }, bon.devis.iddevis)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
          className: "text-left"
        }, bon.fournisseur !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement((react__WEBPACK_IMPORTED_MODULE_27___default().Fragment), null, bon.fournisseur.fournisseur.toUpperCase())), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
          className: "text-right"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_30__["default"], {
          numb: bon.totalht
        })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
          className: "text-right"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_30__["default"], {
          numb: bon.totalttc
        })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
          dangerouslySetInnerHTML: {
            __html: bon.bonreference
          }
        }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
          className: "text-left pri bolo600"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("i", {
          className: "fa fa-user pri"
        }), "\xA0", bon.dobyuser.nom.toUpperCase() + ' ', " ", bon.dobyuser.prenoms.toUpperCase())));
      }
    } else {
      return null;
    }
  });
  var lvejttc = 0;
  var lvejht = 0;
  var livrecount = 0;
  var renderLivreJour = bonjour.map(function (bon) {
    if (bon.corbeille === null && bon.type === 'none') {
      lvejttc = bon.totalttc + lvejttc;
      lvejht = bon.totalht + lvejht;
      livrecount = livrecount + 1;
      return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement((react__WEBPACK_IMPORTED_MODULE_27___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tr", {
        key: bon.id
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
        className: "mw30 text-center"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
        href: "#",
        onClick: function onClick() {
          shasha(bon.id, 'imprimbon');
        },
        style: {
          marginRight: "5px"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("i", {
        className: "fa fa-eye col-green",
        "aria-hidden": "true"
      }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
        className: "text-left"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement((react_moment__WEBPACK_IMPORTED_MODULE_31___default()), {
        format: "DD/MM/YYYY"
      }, bon.date)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null, bon.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
        onClick: function onClick() {
          devalideBon(bon.id);
        },
        title: "D\xE9valider",
        className: "badge badge-pill badge-primary m-r-5"
      }, "V"), bon.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
        onClick: function onClick() {
          valideBon(bon.id);
        },
        title: "Valider",
        className: "badge badge-pill bg-blue-grey m-r-5"
      }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
        href: "/crm/bon/".concat(bon.id, "/").concat(bon.chantier.id)
      }, bon.numbon)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null, bon.devis.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
        onClick: function onClick() {
          devalideDevis(bon.devis.id);
        },
        title: "D\xE9valider",
        className: "badge badge-pill badge-primary m-r-5"
      }, "V"), bon.devis.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
        onClick: function onClick() {
          valideDevis(bon.devis.id);
        },
        title: "Valider",
        className: "badge badge-pill bg-blue-grey m-r-5"
      }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
        href: "/crm/devis/".concat(bon.devis.id, "/").concat(bon.chantier.id)
      }, bon.devis.iddevis)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
        className: "text-right"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_30__["default"], {
        numb: bon.totalht
      })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
        className: "text-right"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_30__["default"], {
        numb: bon.totalttc
      })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
        dangerouslySetInnerHTML: {
          __html: bon.bonreference
        }
      }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
        className: "text-left pri bolo600"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("i", {
        className: "fa fa-user pri"
      }), "\xA0", bon.dobyuser.nom.toUpperCase() + ' ', " ", bon.dobyuser.prenoms.toUpperCase())));
    } else {
      return null;
    }
  });
  var cajttc = 0;
  var caiscount = 0;
  var renderCaisJour = caisjour.map(function (cais) {
    if (cais.corbeille === null && cais.bon !== null) {
      if (cais.client.corbeille === null) {
        cajttc = cais.montant + cajttc;
        caiscount = caiscount + 1;
        return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement((react__WEBPACK_IMPORTED_MODULE_27___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tr", {
          key: cais.id
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
          className: "mw30 text-center"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          href: "#",
          onClick: function onClick() {
            shasha(cais.id, 'imprimcaisse');
          },
          style: {
            marginRight: "5px"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("i", {
          className: "fa fa-eye col-green",
          "aria-hidden": "true"
        }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
          className: "text-left"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement((react_moment__WEBPACK_IMPORTED_MODULE_31___default()), {
          format: "DD/MM/YYYY"
        }, cais.date)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null, cais.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          onClick: function onClick() {
            devalideCaisse(cais.id);
          },
          title: "D\xE9valider",
          className: "badge badge-pill badge-primary m-r-5"
        }, "V"), cais.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          onClick: function onClick() {
            valideCaisse(cais.id);
          },
          title: "Valider",
          className: "badge badge-pill bg-blue-grey m-r-5"
        }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          href: "/crm/caisse/".concat(cais.id, "/").concat(cais.chantier.id)
        }, cais.numcaisse)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null, cais.bon.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          onClick: function onClick() {
            devalideBon(cais.bon.id);
          },
          title: "D\xE9valider",
          className: "badge badge-pill badge-primary m-r-5"
        }, "V"), cais.bon.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          onClick: function onClick() {
            valideBon(cais.bon.id);
          },
          title: "Valider",
          className: "badge badge-pill bg-blue-grey m-r-5"
        }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          href: "/crm/bon/".concat(cais.bon.id, "/").concat(cais.chantier.id)
        }, cais.bon.numbon)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null, cais.bon.devis && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement((react__WEBPACK_IMPORTED_MODULE_27___default().Fragment), null, cais.bon.devis.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          onClick: function onClick() {
            devalideDevis(caisse.bon.devis.id);
          },
          title: "D\xE9valider",
          className: "badge badge-pill badge-primary m-r-5"
        }, "V"), cais.bon.devis.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          onClick: function onClick() {
            valideDevis(caisse.bon.devis.id);
          },
          title: "Valider",
          className: "badge badge-pill bg-blue-grey m-r-5"
        }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          href: "/crm/devis/".concat(cais.bon.devis.id, "/").concat(cais.chantier.id)
        }, cais.bon.devis.iddevis))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
          className: "text-left"
        }, cais.fournisseur.fournisseur.toUpperCase()), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
          className: "text-right"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_30__["default"], {
          numb: cais.montant
        })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
          dangerouslySetInnerHTML: {
            __html: cais.caissereference
          }
        }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
          className: "text-left pri bolo600"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("i", {
          className: "fa fa-user pri"
        }), "\xA0", cais.dobyuser.nom.toUpperCase() + ' ', " ", cais.dobyuser.prenoms.toUpperCase())));
      }
    }
    if (cais.corbeille === null && cais.personnel !== null) {
      if (cais.client.corbeille === null) {
        cajttc = cais.montant + cajttc;
        caiscount = caiscount + 1;
        return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement((react__WEBPACK_IMPORTED_MODULE_27___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tr", {
          key: cais.id
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
          className: "mw30 text-center"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          href: "#",
          onClick: function onClick() {
            shasha(cais.id, 'imprimcaisse');
          },
          style: {
            marginRight: "5px"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("i", {
          className: "fa fa-eye col-green",
          "aria-hidden": "true"
        }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
          className: "text-left"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement((react_moment__WEBPACK_IMPORTED_MODULE_31___default()), {
          format: "DD/MM/YYYY"
        }, cais.date)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null, cais.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          onClick: function onClick() {
            devalideCaisse(cais.id);
          },
          title: "D\xE9valider",
          className: "badge badge-pill badge-primary m-r-5"
        }, "V"), cais.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          onClick: function onClick() {
            valideCaisse(cais.id);
          },
          title: "Valider",
          className: "badge badge-pill bg-blue-grey m-r-5"
        }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          href: "/crm/caisse/".concat(cais.id, "/").concat(cais.chantier.id)
        }, cais.numcaisse)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
          className: "text-left"
        }, cais.personnel.noms.toUpperCase()), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
          className: "text-right"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_30__["default"], {
          numb: cais.montant
        })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
          dangerouslySetInnerHTML: {
            __html: cais.caissereference
          }
        }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
          className: "text-left pri bolo600"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("i", {
          className: "fa fa-user pri"
        }), "\xA0", cais.dobyuser.nom.toUpperCase() + ' ', " ", cais.dobyuser.prenoms.toUpperCase())));
      }
    }
    return null;
  });
  var decjttc = 0;
  var decjht = 0;
  var deccount = 0;
  var renderDecJour = decjour.map(function (dec) {
    if (dec.client.corbeille === null) {
      deccount = deccount + 1;
      decjttc = decjttc + parseFloat(dec.ttc);
      decjht = decjht + parseFloat(dec.apayer);
      return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement((react__WEBPACK_IMPORTED_MODULE_27___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tr", {
        key: dec.id
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
        className: "mw30 text-center"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
        href: "#",
        onClick: function onClick() {
          shasha(dec.id, 'imprimdecompte');
        },
        style: {
          marginRight: "5px"
        }
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("i", {
        className: "fa fa-eye col-green",
        "aria-hidden": "true"
      }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
        className: "text-left"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement((react_moment__WEBPACK_IMPORTED_MODULE_31___default()), {
        format: "DD/MM/YYYY"
      }, dec.date)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null, dec.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
        onClick: function onClick() {
          devalideDecompte(dec.id);
        },
        title: "D\xE9valider",
        className: "badge badge-pill badge-primary m-r-5"
      }, "V"), dec.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
        onClick: function onClick() {
          valideDecompte(dec.id);
        },
        title: "Valider",
        className: "badge badge-pill bg-blue-grey m-r-5"
      }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
        href: "/crm/decompte/".concat(dec.id, "/").concat(dec.chantier.id)
      }, dec.numdecompte)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null, dec.devis.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
        onClick: function onClick() {
          devalideDevis(dec.devis.id);
        },
        title: "D\xE9valider",
        className: "badge badge-pill badge-primary m-r-5"
      }, "V"), dec.devis.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
        onClick: function onClick() {
          valideDevis(dec.devis.id);
        },
        title: "Valider",
        className: "badge badge-pill bg-blue-grey m-r-5"
      }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
        href: "/crm/devis/".concat(dec.devis.id, "/").concat(dec.chantier.id)
      }, dec.devis.iddevis)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
        className: "text-right"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_30__["default"], {
        numb: dec.apayer
      })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
        className: "text-right"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_30__["default"], {
        numb: dec.ttc
      })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
        className: "text-left pri bolo600"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("i", {
        className: "fa fa-user pri"
      }), "\xA0", dec.dobyuser.nom.toUpperCase() + ' ', " ", dec.dobyuser.prenoms.toUpperCase())));
    }
  });
  var facttc = 0;
  var facht = 0;
  var faccount = 0;
  var renderFacJour = facjour.map(function (fac) {
    if (fac.corbeille === null) {
      if (fac.client.corbeille === null) {
        facttc = fac.totalttc + facttc;
        facht = fac.totalht + facht;
        faccount = faccount + 1;
        return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement((react__WEBPACK_IMPORTED_MODULE_27___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tr", {
          key: fac.id
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
          className: "mw30 text-center"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          href: "#",
          onClick: function onClick() {
            shasha(fac.id, 'imprimfacture');
          },
          style: {
            marginRight: "5px"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("i", {
          className: "fa fa-eye col-green",
          "aria-hidden": "true"
        }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
          className: "text-left"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement((react_moment__WEBPACK_IMPORTED_MODULE_31___default()), {
          format: "DD/MM/YYYY"
        }, fac.date)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null, fac.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          onClick: function onClick() {
            devalideFacture(fac.id);
          },
          title: "D\xE9valider",
          className: "badge badge-pill badge-primary m-r-5"
        }, "V"), fac.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          onClick: function onClick() {
            valideFacture(fac.id);
          },
          title: "Valider",
          className: "badge badge-pill bg-blue-grey m-r-5"
        }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          href: "/crm/facture/".concat(fac.id, "/").concat(fac.chantier.id)
        }, fac.numfacture)), fac.type === "devis" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement((react__WEBPACK_IMPORTED_MODULE_27___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null, fac.devis.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          onClick: function onClick() {
            devalideDevis(fac.devis.id);
          },
          title: "D\xE9valider",
          className: "badge badge-pill badge-primary m-r-5"
        }, "V"), fac.devis.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          onClick: function onClick() {
            valideDevis(fac.devis.id);
          },
          title: "Valider",
          className: "badge badge-pill bg-blue-grey m-r-5"
        }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          href: "/crm/devis/".concat(fac.devis.id, "/").concat(fac.chantier.id)
        }, fac.devis.iddevis)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null)), fac.type === "retenue" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement((react__WEBPACK_IMPORTED_MODULE_27___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null, fac.acompte.devis.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          onClick: function onClick() {
            devalideDevis(fac.acompte.devis.id);
          },
          title: "D\xE9valider",
          className: "badge badge-pill badge-primary m-r-5"
        }, "V"), fac.acompte.devis.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          onClick: function onClick() {
            valideDevis(fac.acompte.devis.id);
          },
          title: "Valider",
          className: "badge badge-pill bg-blue-grey m-r-5"
        }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          href: "/crm/devis/".concat(fac.acompte.devis.id, "/").concat(fac.chantier.id)
        }, fac.acompte.devis.iddevis)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null)), fac.type === "acompte" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement((react__WEBPACK_IMPORTED_MODULE_27___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null, fac.acompte.devis.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          onClick: function onClick() {
            devalideDevis(fac.acompte.devis.id);
          },
          title: "D\xE9valider",
          className: "badge badge-pill badge-primary m-r-5"
        }, "V"), fac.acompte.devis.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          onClick: function onClick() {
            valideDevis(fac.acompte.devis.id);
          },
          title: "Valider",
          className: "badge badge-pill bg-blue-grey m-r-5"
        }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          href: "/crm/devis/".concat(fac.acompte.devis.id, "/").concat(fac.chantier.id)
        }, fac.acompte.devis.iddevis)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null)), fac.type === "decompte" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement((react__WEBPACK_IMPORTED_MODULE_27___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null, fac.decompte.devis.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          onClick: function onClick() {
            devalideDevis(fac.decompte.devis.id);
          },
          title: "D\xE9valider",
          className: "badge badge-pill badge-primary m-r-5"
        }, "V"), fac.decompte.devis.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          onClick: function onClick() {
            valideDevis(fac.decompte.devis.id);
          },
          title: "Valider",
          className: "badge badge-pill bg-blue-grey m-r-5"
        }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          href: "/crm/devis/".concat(fac.decompte.devis.id, "/").concat(fac.chantier.id)
        }, fac.decompte.devis.iddevis)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null, fac.decompte.etat === "valide" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          onClick: function onClick() {
            devalideDecompte(fac.decompte.id);
          },
          title: "D\xE9valider",
          className: "badge badge-pill badge-primary m-r-5"
        }, "V"), fac.decompte.etat === "save" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          onClick: function onClick() {
            valideDecompte(fac.decompte.id);
          },
          title: "Valider",
          className: "badge badge-pill bg-blue-grey m-r-5"
        }, "V"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
          href: "/crm/decompte/".concat(fac.decompte.id, "/").concat(fac.chantier.id)
        }, fac.decompte.numdecompte))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
          className: "text-right"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_30__["default"], {
          numb: fac.totalht
        })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
          className: "text-right"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_30__["default"], {
          numb: fac.totalttc
        })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
          dangerouslySetInnerHTML: {
            __html: fac.factreference
          }
        }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
          className: "text-left pri bolo600"
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("i", {
          className: "fa fa-user pri"
        }), "\xA0", fac.dobyuser.nom.toUpperCase() + ' ', " ", fac.dobyuser.prenoms.toUpperCase())));
      }
    }
    return null;
  });
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement((react__WEBPACK_IMPORTED_MODULE_27___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "col-md-12",
    style: {
      paddingLeft: "0",
      marginTop: "20px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "row clearfix"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "col-sm-12 "
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("h4", {
    className: "bolo700"
  }, "Travaux du jour"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "panel-group",
    id: "accordion_2",
    role: "tablist",
    "aria-multiselectable": "true"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "panel panel-pri"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "panel-heading bg-pri",
    role: "tab",
    id: "headingDev"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("h5", {
    className: "panel-title "
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
    className: "collapsed text-white",
    role: "button",
    "data-toggle": "collapse",
    "data-parent": "#accordion_2",
    href: "#collapseDev",
    "aria-expanded": "false",
    "aria-controls": "collapseDev",
    style: {
      fontSize: "16px",
      fontWeight: "500"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("i", {
    className: "material-icons col-white",
    style: {
      fontSize: "18px",
      "float": "left"
    }
  }, "keyboard_arrow_down"), " Devis du jour", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("span", {
    className: "badge bg-pink float-right"
  }, devcount)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    id: "collapseDev",
    className: "panel-collapse collapse",
    role: "tabpanel",
    "aria-labelledby": "headingDev"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "panel-body",
    style: {
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "body"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "table-responsive"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement(react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_29__["default"], {
    id: "test-table-xls-button",
    className: "btn bg-green text-white m-r-5 float-right",
    table: "devjour",
    filename: "DEVIS DU JOUR",
    sheet: "tablexls",
    buttonText: "EXPORTER EN EXCEL"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "col-md-4"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("table", {
    className: "table-striped table-hover display nowrap",
    style: {
      width: "100%"
    },
    id: "devjour"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    className: "mw30"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    style: {
      minWidth: "80px"
    }
  }, "DATE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    style: {
      minWidth: "100px"
    }
  }, "N\xB0 DEVIS"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    style: {
      minWidth: "120px"
    }
  }, "TOTAL HT"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    style: {
      minWidth: "120px"
    }
  }, "TOTAL TTC"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", null, "R\xC9F\xC9RENCE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    style: {
      minWidth: "120px"
    }
  }, "CRE\xC9 PAR"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tbody", null, renderDevJour), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tr", {
    className: "bolderr"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
    className: "text-right bg-blue col-white"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_30__["default"], {
    numb: dejht
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
    className: "text-right bg-blue col-white"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_30__["default"], {
    numb: dejttc
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null))))))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "panel panel-pri"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "panel-heading bg-pri",
    role: "tab",
    id: "headingBon"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("h5", {
    className: "panel-title "
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
    className: "collapsed text-white",
    role: "button",
    "data-toggle": "collapse",
    "data-parent": "#accordion_2",
    href: "#collapseBon",
    "aria-expanded": "false",
    "aria-controls": "collapseBon",
    style: {
      fontSize: "16px",
      fontWeight: "500"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("i", {
    className: "material-icons col-white",
    style: {
      fontSize: "18px",
      "float": "left"
    }
  }, "keyboard_arrow_down"), " Bons de commande du jour", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("span", {
    className: "badge bg-pink float-right"
  }, boncount)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    id: "collapseBon",
    className: "panel-collapse collapse",
    role: "tabpanel",
    "aria-labelledby": "headingBon"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "panel-body",
    style: {
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "body"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "table-responsive"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("table", {
    className: "table-striped table-hover display nowrap",
    style: {
      width: "100%"
    },
    id: "bonjour"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    className: "mw30"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    style: {
      minWidth: "80px"
    }
  }, "DATE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    style: {
      minWidth: "120px"
    }
  }, "N\xB0 BON"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    style: {
      minWidth: "120px"
    }
  }, "N\xB0 DEVIS"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    style: {
      minWidth: "150px"
    }
  }, "FOURNISSEUR"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    style: {
      minWidth: "120px"
    }
  }, "TOTAL HT"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    style: {
      minWidth: "120px"
    }
  }, "TOTAL TTC"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", null, "R\xC9F\xC9RENCE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    style: {
      minWidth: "150px"
    }
  }, "CRE\xC9 PAR"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tbody", null, renderBonJour), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tr", {
    className: "bolderr"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
    className: "text-right bg-blue col-white"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_30__["default"], {
    numb: bojht
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
    className: "text-right bg-blue col-white"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_30__["default"], {
    numb: bojttc
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
    className: "mw150"
  }))))))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "panel panel-pri"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "panel-heading bg-pri",
    role: "tab",
    id: "headingBonLivre"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("h5", {
    className: "panel-title "
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
    className: "collapsed text-white",
    role: "button",
    "data-toggle": "collapse",
    "data-parent": "#accordion_2",
    href: "#collapseBonLivre",
    "aria-expanded": "false",
    "aria-controls": "collapseBonLivre",
    style: {
      fontSize: "16px",
      fontWeight: "500"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("i", {
    className: "material-icons col-white",
    style: {
      fontSize: "18px",
      "float": "left"
    }
  }, "keyboard_arrow_down"), " Bons de livraison du jour", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("span", {
    className: "badge bg-pink float-right"
  }, livrecount)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    id: "collapseBonLivre",
    className: "panel-collapse collapse",
    role: "tabpanel",
    "aria-labelledby": "headingBonLivre"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "panel-body",
    style: {
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "body"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "table-responsive"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("table", {
    className: "table-striped table-hover display nowrap",
    style: {
      width: "100%"
    },
    id: "livrejour"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    className: "mw30"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    style: {
      minWidth: "80px"
    }
  }, "DATE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    style: {
      minWidth: "120px"
    }
  }, "N\xB0 BON"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    style: {
      minWidth: "120px"
    }
  }, "N\xB0 DEVIS"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    style: {
      minWidth: "120px"
    }
  }, "TOTAL HT"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    style: {
      minWidth: "120px"
    }
  }, "TOTAL TTC"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", null, "R\xC9F\xC9RENCE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    style: {
      minWidth: "150px"
    }
  }, "CRE\xC9 PAR"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tbody", null, renderLivreJour), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tr", {
    className: "bolderr"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
    className: "text-right bg-blue col-white"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_30__["default"], {
    numb: lvejht
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
    className: "text-right bg-blue col-white"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_30__["default"], {
    numb: lvejttc
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
    className: "mw150"
  }))))))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "panel panel-pri"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "panel-heading bg-pri",
    role: "tab",
    id: "headingBonca"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("h5", {
    className: "panel-title "
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
    className: "collapsed text-white",
    role: "button",
    "data-toggle": "collapse",
    "data-parent": "#accordion_2",
    href: "#collapseBonca",
    "aria-expanded": "false",
    "aria-controls": "collapseBonca",
    style: {
      fontSize: "16px",
      fontWeight: "500"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("i", {
    className: "material-icons col-white",
    style: {
      fontSize: "18px",
      "float": "left"
    }
  }, "keyboard_arrow_down"), " Bons de caisse du jour", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("span", {
    className: "badge bg-pink float-right"
  }, caiscount)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    id: "collapseBonca",
    className: "panel-collapse collapse",
    role: "tabpanel",
    "aria-labelledby": "headingBonca"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "panel-body",
    style: {
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "body"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "table-responsive"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("table", {
    className: "table-striped table-hover display nowrap",
    style: {
      width: "100%"
    },
    id: "caisjour"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    className: "mw30"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", null, "DATE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    className: "mw120"
  }, "N\xB0 CAISSE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    className: "mw120"
  }, "N\xB0 BON"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    className: "mw120"
  }, "N\xB0 DEVIS"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", null, "FOURNISSEUR | CHARGE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    className: "mw120"
  }, "TOTAL TTC"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    className: "mw200"
  }, "R\xC9F\xC9RENCE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    className: "mw200"
  }, "CRE\xC9 PAR"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tbody", null, renderCaisJour), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tr", {
    className: "bolderr"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
    className: "text-right bg-blue col-white"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_30__["default"], {
    numb: cajttc
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null))))))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "panel panel-pri"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "panel-heading bg-pri",
    role: "tab",
    id: "headingDecjo"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("h5", {
    className: "panel-title "
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
    className: "collapsed text-white",
    role: "button",
    "data-toggle": "collapse",
    "data-parent": "#accordion_2",
    href: "#collapseDecjo",
    "aria-expanded": "false",
    "aria-controls": "collapseDecjo",
    style: {
      fontSize: "16px",
      fontWeight: "500"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("i", {
    className: "material-icons col-white",
    style: {
      fontSize: "18px",
      "float": "left"
    }
  }, "keyboard_arrow_down"), " D\xE9comptes du jour", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("span", {
    className: "badge bg-pink float-right"
  }, deccount)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    id: "collapseDecjo",
    className: "panel-collapse collapse",
    role: "tabpanel",
    "aria-labelledby": "headingDecjo"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "panel-body",
    style: {
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "body"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "table-responsive"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("table", {
    className: "table-striped table-hover display nowrap",
    style: {
      width: "100%"
    },
    id: "decjour"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    className: "mw30"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", null, "DATE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", null, "N\xB0 D\xC9COMPTE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", null, "N\xB0 DEVIS"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", null, "TOTAL HT"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", null, "TOTAL TTC"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", null, "CRE\xC9 PAR"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tbody", null, renderDecJour), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tr", {
    className: "bolderr"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
    className: "text-right bg-blue col-white"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_30__["default"], {
    numb: decjht
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
    className: "text-right bg-blue col-white"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_30__["default"], {
    numb: decjttc
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null))))))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "panel panel-pri"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "panel-heading bg-pri",
    role: "tab",
    id: "headingFacjo"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("h5", {
    className: "panel-title "
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("a", {
    className: "collapsed text-white",
    role: "button",
    "data-toggle": "collapse",
    "data-parent": "#accordion_2",
    href: "#collapseFacjo",
    "aria-expanded": "false",
    "aria-controls": "collapseFacjo",
    style: {
      fontSize: "16px",
      fontWeight: "500"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("i", {
    className: "material-icons col-white",
    style: {
      fontSize: "18px",
      "float": "left"
    }
  }, "keyboard_arrow_down"), " Factures du jour", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("span", {
    className: "badge bg-pink float-right"
  }, faccount)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    id: "collapseFacjo",
    className: "panel-collapse collapse",
    role: "tabpanel",
    "aria-labelledby": "headingFacjo"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "panel-body",
    style: {
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "body"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("div", {
    className: "table-responsive"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("table", {
    className: "table-striped table-hover display nowrap",
    style: {
      width: "100%"
    },
    id: "facjour"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    className: "mw30"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", null, "DATE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", null, "FACTURE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", null, "DEVIS"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", null, "D\xC9COMPTE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    style: {
      whiteSpace: "nowrap"
    }
  }, "TOTAL HT"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", {
    style: {
      whiteSpace: "nowrap"
    }
  }, "TOTAL TTC"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", null, "R\xC9F\xC9RENCE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("th", null, "CRE\xC9 PAR"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tbody", null, renderFacJour), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tfoot", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("tr", {
    className: "bolderr"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
    className: "text-right bg-blue col-white"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_30__["default"], {
    numb: facht
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", {
    className: "text-right bg-blue col-white"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement(_fonctions_NumberFormat__WEBPACK_IMPORTED_MODULE_30__["default"], {
    numb: facttc
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement("td", null))))))))))));
};
try {
  var root = (0,react_dom_client__WEBPACK_IMPORTED_MODULE_28__.createRoot)(document.getElementById('settravauxjour'));
  root.render( /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_27___default().createElement(TravauxJour, null));
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
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_modules_es_array_concat_js-node_modules_core-js_modules_es_array-383511","vendors-node_modules_core-js_modules_es_array_from_js-node_modules_core-js_modules_es_array_i-c84b5d","vendors-node_modules_moment_locale_af_js-node_modules_moment_locale_ar-dz_js-node_modules_mom-582c96","vendors-node_modules_react-html-table-to-excel_index_js","vendors-node_modules_react-moment_dist_index_js","assets_js_datascript_js-assets_js_jquery_validate_js-assets_css_mdb_css","assets_js_admin_js-assets_js_bootstrap_js-assets_js_jquery_tableToExcel_js-assets_js_select2_-13fb9c"], () => (__webpack_exec__("./assets/aptravauxjour.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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Q0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7O0FBR0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2FwdHJhdmF1eGpvdXIuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2NvbXBvbmVudHMvY2hhbnRpZXJzL1RyYXZhdXhKb3VyLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9mb25jdGlvbnMvTnVtYmVyRm9ybWF0LmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9qcXVlcnkuc2ltcGxlUGFnaW5hdGlvbi5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9pbnRlcm5hbHMvbnVtYmVyLXBhcnNlLWZsb2F0LmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9jb3JlLWpzL21vZHVsZXMvZXMucGFyc2UtZmxvYXQuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvIHN5bmMgXlxcLlxcLy4qJCJdLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgJy4vY3NzL2Jvb3RzdHJhcC5jc3MnO1xyXG5pbXBvcnQgJy4vY3NzL21kYi5jc3MnO1xyXG5pbXBvcnQgJy4vY3NzL3dhdmVzLmNzcyc7XHJcbmltcG9ydCAnLi9jc3MvYWxsLXRoZW1lcy5jc3MnO1xyXG5pbXBvcnQgJy4vY3NzL3NlbGVjdDIubWluLmNzcyc7XHJcbmltcG9ydCAnLi9jc3Mvc3R5bGUuY3NzJztcclxuXHJcblxyXG5pbXBvcnQgJy4vanMvYm9vdHN0cmFwLmpzJztcclxuaW1wb3J0ICcuL2pzL2RhdGFzY3JpcHQuanMnO1xyXG5pbXBvcnQgJy4vanMvc2VsZWN0Mi5taW4uanMnO1xyXG5pbXBvcnQgJy4vanMvanF1ZXJ5LnRhYmxlVG9FeGNlbC5qcyc7XHJcbmltcG9ydCAnLi9qcy9qcXVlcnkudmFsaWRhdGUuanMnO1xyXG5pbXBvcnQgJy4vanMvYWRtaW4uanMnO1xyXG5pbXBvcnQgJy4vanMvanF1ZXJ5LnNpbXBsZVBhZ2luYXRpb24nO1xyXG5cclxuaW1wb3J0ICcuL2NvbXBvbmVudHMvY2hhbnRpZXJzL1RyYXZhdXhKb3VyJztcclxuXHJcbiIsImltcG9ydCBSZWFjdCwge3VzZUVmZmVjdCwgdXNlU3RhdGV9IGZyb20gXCJyZWFjdFwiO1xuaW1wb3J0IHtjcmVhdGVSb290fSBmcm9tICdyZWFjdC1kb20vY2xpZW50JztcbmltcG9ydCBheGlvcyBmcm9tIFwiYXhpb3NcIjtcbmltcG9ydCBSZWFjdEhUTUxUYWJsZVRvRXhjZWwgZnJvbSAncmVhY3QtaHRtbC10YWJsZS10by1leGNlbCc7XG5pbXBvcnQgTnVtYmVyRm9ybWF0IGZyb20gXCIuLi8uLi9mb25jdGlvbnMvTnVtYmVyRm9ybWF0XCI7XG5pbXBvcnQgTW9tZW50IGZyb20gJ3JlYWN0LW1vbWVudCc7XG5pbXBvcnQgJCBmcm9tIFwianF1ZXJ5XCI7XG5cbmNvbnN0IFRyYXZhdXhKb3VyID0gKCkgPT4ge1xuICAgIGNvbnN0IFtkZXZqb3VyLCBzZXREZXZKb3VyXSA9IHVzZVN0YXRlKFtdKTtcbiAgICBjb25zdCBbYm9uam91ciwgc2V0Qm9uSm91cl0gPSB1c2VTdGF0ZShbXSk7XG4gICAgY29uc3QgW2NhaXNqb3VyLCBzZXRDYWlzSm91cl0gPSB1c2VTdGF0ZShbXSk7XG4gICAgY29uc3QgW2RlY2pvdXIsIHNldERlY0pvdXJdID0gdXNlU3RhdGUoW10pO1xuICAgIGNvbnN0IFtmYWNqb3VyLCBzZXRGYWNKb3VyXSA9IHVzZVN0YXRlKFtdKTtcblxuXG4gICAgY29uc3QgZmV0Y2hEZXZKb3VyID0gYXN5bmMgKCkgPT4ge1xuICAgICAgICBjb25zdCBkZCA9IEpTT04ucGFyc2UoJCgnI2pzb25kZXZpcycpLnZhbCgpKTtcbiAgICAgICAgc2V0RGV2Sm91cihkZCk7XG4gICAgfTtcbiAgICBjb25zdCBmZXRjaEJvbkpvdXIgPSBhc3luYyAoKSA9PiB7XG4gICAgICAgIGNvbnN0IGRkID0gSlNPTi5wYXJzZSgkKCcjanNvbmJvbicpLnZhbCgpKTtcbiAgICAgICAgc2V0Qm9uSm91cihkZCk7XG4gICAgfTtcbiAgICBjb25zdCBmZXRjaENhaXNKb3VyID0gYXN5bmMgKCkgPT4ge1xuICAgICAgICBjb25zdCBkZCA9IEpTT04ucGFyc2UoJCgnI2pzb25jYWlzc2UnKS52YWwoKSk7XG4gICAgICAgIHNldENhaXNKb3VyKGRkKTtcbiAgICB9O1xuICAgIGNvbnN0IGZldGNoRGVjSm91ciA9IGFzeW5jICgpID0+IHtcbiAgICAgICAgY29uc3QgZGQgPSBKU09OLnBhcnNlKCQoJyNqc29uZGVjJykudmFsKCkpO1xuICAgICAgICBzZXREZWNKb3VyKGRkKTtcbiAgICB9O1xuICAgIGNvbnN0IGZldGNoRmFjSm91ciA9IGFzeW5jICgpID0+IHtcbiAgICAgICAgY29uc3QgZGQgPSBKU09OLnBhcnNlKCQoJyNqc29uZmFjJykudmFsKCkpO1xuICAgICAgICBzZXRGYWNKb3VyKGRkKTtcbiAgICB9O1xuXG4gICAgdXNlRWZmZWN0KCgpID0+IHtcbiAgICAgICAgZmV0Y2hEZXZKb3VyKCk7XG4gICAgICAgIGZldGNoQm9uSm91cigpO1xuICAgICAgICBmZXRjaENhaXNKb3VyKCk7XG4gICAgICAgIGZldGNoRGVjSm91cigpO1xuICAgICAgICBmZXRjaEZhY0pvdXIoKTtcbiAgICB9LCBbXSk7XG5cblxuICAgIGxldCBkZWp0dGMgPSAwO1xuICAgIGxldCBkZWpodCA9IDA7XG4gICAgbGV0IGRldmNvdW50ID0gMDtcbiAgICBjb25zdCByZW5kZXJEZXZKb3VyID0gZGV2am91ci5tYXAoKGRldikgPT4ge1xuICAgICAgICBpZiAoZGV2LmNvcmJlaWxsZSA9PT0gbnVsbCAmJiBkZXYudHlwZSAhPT0gJ2NwcycpIHtcbiAgICAgICAgICAgIGlmIChkZXYudHlwZSAhPT0gJ2VzdGknKSB7XG4gICAgICAgICAgICAgICAgaWYgKGRldi5jbGllbnQuY29yYmVpbGxlID09PSBudWxsKSB7XG4gICAgICAgICAgICAgICAgICAgIGRlanR0YyA9IGRldi50b3RhbHR0YyArIGRlanR0YztcbiAgICAgICAgICAgICAgICAgICAgZGVqaHQgPSBkZXYudG90YWxodCArIGRlamh0O1xuICAgICAgICAgICAgICAgICAgICBkZXZjb3VudCA9IGRldmNvdW50ICsgMTtcbiAgICAgICAgICAgICAgICAgICAgcmV0dXJuICg8PlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRyIGtleT17ZGV2LmlkfT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwibXczMCB0ZXh0LWNlbnRlclwiPjxhIGhyZWY9XCIjXCIgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzaGFzaGEoZGV2LmlkLCAnaW1wcmltZGV2aXMnKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19IHN0eWxlPXt7bWFyZ2luUmlnaHQ6IFwiNXB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGkgY2xhc3NOYW1lPVwiZmEgZmEtZXllIGNvbC1ncmVlblwiIGFyaWEtaGlkZGVuPVwidHJ1ZVwiPjwvaT48L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1sZWZ0XCI+PE1vbWVudCBmb3JtYXQ9XCJERC9NTS9ZWVlZXCI+e2Rldi5kYXRlfTwvTW9tZW50PjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2LmV0YXQgPT09IFwidmFsaWRlXCIgJiYgPGEgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGV2YWxpZGVEZXZpcyhkZXYuaWQpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19IHRpdGxlPVwiRMOpdmFsaWRlclwiIGNsYXNzTmFtZT1cImJhZGdlIGJhZGdlLXBpbGwgYmFkZ2UtcHJpbWFyeSBtLXItNVwiPlY8L2E+fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZGV2LmV0YXQgPT09IFwic2F2ZVwiICYmIDxhIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhbGlkZURldmlzKGRldi5pZClcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0gdGl0bGU9XCJWYWxpZGVyXCIgY2xhc3NOYW1lPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiZy1ibHVlLWdyZXkgbS1yLTVcIj5WPC9hPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj17YC9jcm0vZGV2aXMvJHtkZXYuaWR9LyR7ZGV2LmNoYW50aWVyLmlkfWB9PiBOwrAgREVWSVMge2Rldi5pZGRldmlzfTwvYT48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0XCI+PE51bWJlckZvcm1hdCBudW1iPXtkZXYudG90YWxodH0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHRcIj48TnVtYmVyRm9ybWF0IG51bWI9e2Rldi50b3RhbHR0Y30vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBkZXYuZGV2cmVmZXJlbmNlfX0+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1sZWZ0IHByaSBib2xvNjAwXCI+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtdXNlciBwcmlcIj48L2k+Jm5ic3A7e2Rldi5kb2J5dXNlci5ub20udG9VcHBlckNhc2UoKSArICcgJ30ge2Rldi5kb2J5dXNlci5wcmVub21zLnRvVXBwZXJDYXNlKCl9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG5cbiAgICAgICAgICAgICAgICAgICAgPC8+KTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICByZXR1cm4gbnVsbDtcbiAgICAgICAgfVxuICAgIH0pO1xuXG4gICAgbGV0IGJvanR0YyA9IDA7XG4gICAgbGV0IGJvamh0ID0gMDtcbiAgICBsZXQgYm9uY291bnQgPSAwO1xuICAgIGNvbnN0IHJlbmRlckJvbkpvdXIgPSBib25qb3VyLm1hcCgoYm9uKSA9PiB7XG4gICAgICAgIGlmIChib24uY29yYmVpbGxlID09PSBudWxsICYmIGJvbi50eXBlICE9PSAnbm9uZScpIHtcbiAgICAgICAgICAgIGlmIChib24uY2xpZW50LmNvcmJlaWxsZSA9PT0gbnVsbCkge1xuICAgICAgICAgICAgICAgIGJvanR0YyA9IGJvbi50b3RhbHR0YyArIGJvanR0YztcbiAgICAgICAgICAgICAgICBib2podCA9IGJvbi50b3RhbGh0ICsgYm9qaHQ7XG4gICAgICAgICAgICAgICAgYm9uY291bnQgPSBib25jb3VudCArIDE7XG4gICAgICAgICAgICAgICAgcmV0dXJuICg8PlxuICAgICAgICAgICAgICAgICAgICA8dHIga2V5PXtib24uaWR9PlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cIm13MzAgdGV4dC1jZW50ZXJcIj48YSBocmVmPVwiI1wiIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBzaGFzaGEoYm9uLmlkLCAnaW1wcmltYm9uJylcbiAgICAgICAgICAgICAgICAgICAgICAgIH19IHN0eWxlPXt7bWFyZ2luUmlnaHQ6IFwiNXB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aSBjbGFzc05hbWU9XCJmYSBmYS1leWUgY29sLWdyZWVuXCIgYXJpYS1oaWRkZW49XCJ0cnVlXCI+PC9pPjwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1sZWZ0XCI+PE1vbWVudCBmb3JtYXQ9XCJERC9NTS9ZWVlZXCI+e2Jvbi5kYXRlfTwvTW9tZW50PjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5ldGF0ID09PSBcInZhbGlkZVwiICYmIDxhIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGV2YWxpZGVCb24oYm9uLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19IHRpdGxlPVwiRMOpdmFsaWRlclwiIGNsYXNzTmFtZT1cImJhZGdlIGJhZGdlLXBpbGwgYmFkZ2UtcHJpbWFyeSBtLXItNVwiPlY8L2E+fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtib24uZXRhdCA9PT0gXCJzYXZlXCIgJiYgPGEgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YWxpZGVCb24oYm9uLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19IHRpdGxlPVwiVmFsaWRlclwiIGNsYXNzTmFtZT1cImJhZGdlIGJhZGdlLXBpbGwgYmctYmx1ZS1ncmV5IG0tci01XCI+VjwvYT59XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj17YC9jcm0vYm9uLyR7Ym9uLmlkfS8ke2Jvbi5jaGFudGllci5pZH1gfT57Ym9uLm51bWJvbn08L2E+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmRldmlzICYmIGJvbi5kZXZpcy5ldGF0ID09PSBcInZhbGlkZVwiICYmIDxhIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGV2YWxpZGVEZXZpcyhib24uZGV2aXMuaWQpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0gdGl0bGU9XCJEw6l2YWxpZGVyXCIgY2xhc3NOYW1lPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiYWRnZS1wcmltYXJ5IG0tci01XCI+VjwvYT59XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAge2Jvbi5kZXZpcyAmJiBib24uZGV2aXMuZXRhdCA9PT0gXCJzYXZlXCIgJiYgPGEgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YWxpZGVEZXZpcyhib24uZGV2aXMuaWQpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0gdGl0bGU9XCJWYWxpZGVyXCIgY2xhc3NOYW1lPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiZy1ibHVlLWdyZXkgbS1yLTVcIj5WPC9hPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPXtgL2NybS9kZXZpcy8ke2Jvbi5kZXZpcy5pZH0vJHtib24uY2hhbnRpZXIuaWR9YH0+e2Jvbi5kZXZpcy5pZGRldmlzfTwvYT48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtbGVmdFwiPntib24uZm91cm5pc3NldXIgIT09IG51bGwgJiYgPD57Ym9uLmZvdXJuaXNzZXVyLmZvdXJuaXNzZXVyLnRvVXBwZXJDYXNlKCl9PC8+fTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodFwiPjxOdW1iZXJGb3JtYXQgbnVtYj17Ym9uLnRvdGFsaHR9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHRcIj48TnVtYmVyRm9ybWF0IG51bWI9e2Jvbi50b3RhbHR0Y30vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IGJvbi5ib25yZWZlcmVuY2V9fT48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtbGVmdCBwcmkgYm9sbzYwMFwiPjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtdXNlciBwcmlcIj48L2k+Jm5ic3A7e2Jvbi5kb2J5dXNlci5ub20udG9VcHBlckNhc2UoKSArICcgJ30ge2Jvbi5kb2J5dXNlci5wcmVub21zLnRvVXBwZXJDYXNlKCl9XG4gICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICA8L3RyPlxuXG4gICAgICAgICAgICAgICAgPC8+KTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgIHJldHVybiBudWxsO1xuICAgICAgICB9XG4gICAgfSk7XG5cbiAgICBsZXQgbHZlanR0YyA9IDA7XG4gICAgbGV0IGx2ZWpodCA9IDA7XG4gICAgbGV0IGxpdnJlY291bnQgPSAwO1xuICAgIGNvbnN0IHJlbmRlckxpdnJlSm91ciA9IGJvbmpvdXIubWFwKChib24pID0+IHtcbiAgICAgICAgaWYgKGJvbi5jb3JiZWlsbGUgPT09IG51bGwgJiYgYm9uLnR5cGUgPT09ICdub25lJykge1xuICAgICAgICAgICAgbHZlanR0YyA9IGJvbi50b3RhbHR0YyArIGx2ZWp0dGM7XG4gICAgICAgICAgICBsdmVqaHQgPSBib24udG90YWxodCArIGx2ZWpodDtcbiAgICAgICAgICAgIGxpdnJlY291bnQgPSBsaXZyZWNvdW50ICsgMTtcbiAgICAgICAgICAgIHJldHVybiAoPD5cbiAgICAgICAgICAgICAgICA8dHIga2V5PXtib24uaWR9PlxuICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwibXczMCB0ZXh0LWNlbnRlclwiPjxhIGhyZWY9XCIjXCIgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgc2hhc2hhKGJvbi5pZCwgJ2ltcHJpbWJvbicpXG4gICAgICAgICAgICAgICAgICAgIH19IHN0eWxlPXt7bWFyZ2luUmlnaHQ6IFwiNXB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxpIGNsYXNzTmFtZT1cImZhIGZhLWV5ZSBjb2wtZ3JlZW5cIiBhcmlhLWhpZGRlbj1cInRydWVcIj48L2k+PC9hPlxuICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1sZWZ0XCI+PE1vbWVudCBmb3JtYXQ9XCJERC9NTS9ZWVlZXCI+e2Jvbi5kYXRlfTwvTW9tZW50PjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgIDx0ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIHtib24uZXRhdCA9PT0gXCJ2YWxpZGVcIiAmJiA8YSBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgZGV2YWxpZGVCb24oYm9uLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgfX0gdGl0bGU9XCJEw6l2YWxpZGVyXCIgY2xhc3NOYW1lPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiYWRnZS1wcmltYXJ5IG0tci01XCI+VjwvYT59XG4gICAgICAgICAgICAgICAgICAgICAgICB7Ym9uLmV0YXQgPT09IFwic2F2ZVwiICYmIDxhIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YWxpZGVCb24oYm9uLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgfX0gdGl0bGU9XCJWYWxpZGVyXCIgY2xhc3NOYW1lPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiZy1ibHVlLWdyZXkgbS1yLTVcIj5WPC9hPn1cbiAgICAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9e2AvY3JtL2Jvbi8ke2Jvbi5pZH0vJHtib24uY2hhbnRpZXIuaWR9YH0+e2Jvbi5udW1ib259PC9hPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgIDx0ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIHtib24uZGV2aXMuZXRhdCA9PT0gXCJ2YWxpZGVcIiAmJiA8YSBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgZGV2YWxpZGVEZXZpcyhib24uZGV2aXMuaWQpXG4gICAgICAgICAgICAgICAgICAgICAgICB9fSB0aXRsZT1cIkTDqXZhbGlkZXJcIiBjbGFzc05hbWU9XCJiYWRnZSBiYWRnZS1waWxsIGJhZGdlLXByaW1hcnkgbS1yLTVcIj5WPC9hPn1cbiAgICAgICAgICAgICAgICAgICAgICAgIHtib24uZGV2aXMuZXRhdCA9PT0gXCJzYXZlXCIgJiYgPGEgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhbGlkZURldmlzKGJvbi5kZXZpcy5pZClcbiAgICAgICAgICAgICAgICAgICAgICAgIH19IHRpdGxlPVwiVmFsaWRlclwiIGNsYXNzTmFtZT1cImJhZGdlIGJhZGdlLXBpbGwgYmctYmx1ZS1ncmV5IG0tci01XCI+VjwvYT59XG4gICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPXtgL2NybS9kZXZpcy8ke2Jvbi5kZXZpcy5pZH0vJHtib24uY2hhbnRpZXIuaWR9YH0+e2Jvbi5kZXZpcy5pZGRldmlzfTwvYT48L3RkPlxuICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodFwiPjxOdW1iZXJGb3JtYXQgbnVtYj17Ym9uLnRvdGFsaHR9Lz48L3RkPlxuICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodFwiPjxOdW1iZXJGb3JtYXQgbnVtYj17Ym9uLnRvdGFsdHRjfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgPHRkIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBib24uYm9ucmVmZXJlbmNlfX0+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtbGVmdCBwcmkgYm9sbzYwMFwiPjxpXG4gICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYS11c2VyIHByaVwiPjwvaT4mbmJzcDt7Ym9uLmRvYnl1c2VyLm5vbS50b1VwcGVyQ2FzZSgpICsgJyAnfSB7Ym9uLmRvYnl1c2VyLnByZW5vbXMudG9VcHBlckNhc2UoKX1cbiAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICA8L3RyPlxuXG4gICAgICAgICAgICA8Lz4pO1xuICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgcmV0dXJuIG51bGw7XG4gICAgICAgIH1cbiAgICB9KTtcblxuICAgIGxldCBjYWp0dGMgPSAwO1xuICAgIGxldCBjYWlzY291bnQgPSAwO1xuICAgIGNvbnN0IHJlbmRlckNhaXNKb3VyID0gY2Fpc2pvdXIubWFwKChjYWlzKSA9PiB7XG4gICAgICAgIGlmIChjYWlzLmNvcmJlaWxsZSA9PT0gbnVsbCAmJiBjYWlzLmJvbiAhPT0gbnVsbCkge1xuICAgICAgICAgICAgaWYgKGNhaXMuY2xpZW50LmNvcmJlaWxsZSA9PT0gbnVsbCkge1xuICAgICAgICAgICAgICAgIGNhanR0YyA9IGNhaXMubW9udGFudCArIGNhanR0YztcbiAgICAgICAgICAgICAgICBjYWlzY291bnQgPSBjYWlzY291bnQgKyAxO1xuICAgICAgICAgICAgICAgIHJldHVybiAoPD5cbiAgICAgICAgICAgICAgICAgICAgPHRyIGtleT17Y2Fpcy5pZH0+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwibXczMCB0ZXh0LWNlbnRlclwiPjxhIGhyZWY9XCIjXCIgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNoYXNoYShjYWlzLmlkLCAnaW1wcmltY2Fpc3NlJylcbiAgICAgICAgICAgICAgICAgICAgICAgIH19IHN0eWxlPXt7bWFyZ2luUmlnaHQ6IFwiNXB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aSBjbGFzc05hbWU9XCJmYSBmYS1leWUgY29sLWdyZWVuXCIgYXJpYS1oaWRkZW49XCJ0cnVlXCI+PC9pPjwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1sZWZ0XCI+PE1vbWVudCBmb3JtYXQ9XCJERC9NTS9ZWVlZXCI+e2NhaXMuZGF0ZX08L01vbWVudD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtjYWlzLmV0YXQgPT09IFwidmFsaWRlXCIgJiYgPGEgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkZXZhbGlkZUNhaXNzZShjYWlzLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19IHRpdGxlPVwiRMOpdmFsaWRlclwiIGNsYXNzTmFtZT1cImJhZGdlIGJhZGdlLXBpbGwgYmFkZ2UtcHJpbWFyeSBtLXItNVwiPlY8L2E+fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtjYWlzLmV0YXQgPT09IFwic2F2ZVwiICYmIDxhIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFsaWRlQ2Fpc3NlKGNhaXMuaWQpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0gdGl0bGU9XCJWYWxpZGVyXCIgY2xhc3NOYW1lPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiZy1ibHVlLWdyZXkgbS1yLTVcIj5WPC9hPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPXtgL2NybS9jYWlzc2UvJHtjYWlzLmlkfS8ke2NhaXMuY2hhbnRpZXIuaWR9YH0+e2NhaXMubnVtY2Fpc3NlfTwvYT48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtjYWlzLmJvbi5ldGF0ID09PSBcInZhbGlkZVwiICYmIDxhIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGV2YWxpZGVCb24oY2Fpcy5ib24uaWQpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0gdGl0bGU9XCJEw6l2YWxpZGVyXCIgY2xhc3NOYW1lPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiYWRnZS1wcmltYXJ5IG0tci01XCI+VjwvYT59XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAge2NhaXMuYm9uLmV0YXQgPT09IFwic2F2ZVwiICYmIDxhIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFsaWRlQm9uKGNhaXMuYm9uLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19IHRpdGxlPVwiVmFsaWRlclwiIGNsYXNzTmFtZT1cImJhZGdlIGJhZGdlLXBpbGwgYmctYmx1ZS1ncmV5IG0tci01XCI+VjwvYT59XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj17YC9jcm0vYm9uLyR7Y2Fpcy5ib24uaWR9LyR7Y2Fpcy5jaGFudGllci5pZH1gfT57Y2Fpcy5ib24ubnVtYm9ufTwvYT48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtjYWlzLmJvbi5kZXZpcyAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2NhaXMuYm9uLmRldmlzLmV0YXQgPT09IFwidmFsaWRlXCIgJiYgPGEgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRldmFsaWRlRGV2aXMoY2Fpc3NlLmJvbi5kZXZpcy5pZClcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19IHRpdGxlPVwiRMOpdmFsaWRlclwiIGNsYXNzTmFtZT1cImJhZGdlIGJhZGdlLXBpbGwgYmFkZ2UtcHJpbWFyeSBtLXItNVwiPlY8L2E+fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2NhaXMuYm9uLmRldmlzLmV0YXQgPT09IFwic2F2ZVwiICYmIDxhIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YWxpZGVEZXZpcyhjYWlzc2UuYm9uLmRldmlzLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0gdGl0bGU9XCJWYWxpZGVyXCIgY2xhc3NOYW1lPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiZy1ibHVlLWdyZXkgbS1yLTVcIj5WPC9hPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9e2AvY3JtL2RldmlzLyR7Y2Fpcy5ib24uZGV2aXMuaWR9LyR7Y2Fpcy5jaGFudGllci5pZH1gfT57Y2Fpcy5ib24uZGV2aXMuaWRkZXZpc308L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnRcIj57Y2Fpcy5mb3Vybmlzc2V1ci5mb3Vybmlzc2V1ci50b1VwcGVyQ2FzZSgpfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodFwiPjxOdW1iZXJGb3JtYXQgbnVtYj17Y2Fpcy5tb250YW50fS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBkYW5nZXJvdXNseVNldElubmVySFRNTD17e19faHRtbDogY2Fpcy5jYWlzc2VyZWZlcmVuY2V9fT48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtbGVmdCBwcmkgYm9sbzYwMFwiPjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtdXNlciBwcmlcIj48L2k+Jm5ic3A7e2NhaXMuZG9ieXVzZXIubm9tLnRvVXBwZXJDYXNlKCkgKyAnICd9IHtjYWlzLmRvYnl1c2VyLnByZW5vbXMudG9VcHBlckNhc2UoKX1cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgIDwvdHI+XG5cbiAgICAgICAgICAgICAgICA8Lz4pO1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG4gICAgICAgIGlmIChjYWlzLmNvcmJlaWxsZSA9PT0gbnVsbCAmJiBjYWlzLnBlcnNvbm5lbCAhPT0gbnVsbCkge1xuICAgICAgICAgICAgaWYgKGNhaXMuY2xpZW50LmNvcmJlaWxsZSA9PT0gbnVsbCkge1xuICAgICAgICAgICAgICAgIGNhanR0YyA9IGNhaXMubW9udGFudCArIGNhanR0YztcbiAgICAgICAgICAgICAgICBjYWlzY291bnQgPSBjYWlzY291bnQgKyAxO1xuICAgICAgICAgICAgICAgIHJldHVybiAoPD5cbiAgICAgICAgICAgICAgICAgICAgPHRyIGtleT17Y2Fpcy5pZH0+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwibXczMCB0ZXh0LWNlbnRlclwiPjxhIGhyZWY9XCIjXCIgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNoYXNoYShjYWlzLmlkLCAnaW1wcmltY2Fpc3NlJylcbiAgICAgICAgICAgICAgICAgICAgICAgIH19IHN0eWxlPXt7bWFyZ2luUmlnaHQ6IFwiNXB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aSBjbGFzc05hbWU9XCJmYSBmYS1leWUgY29sLWdyZWVuXCIgYXJpYS1oaWRkZW49XCJ0cnVlXCI+PC9pPjwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1sZWZ0XCI+PE1vbWVudCBmb3JtYXQ9XCJERC9NTS9ZWVlZXCI+e2NhaXMuZGF0ZX08L01vbWVudD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtjYWlzLmV0YXQgPT09IFwidmFsaWRlXCIgJiYgPGEgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkZXZhbGlkZUNhaXNzZShjYWlzLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19IHRpdGxlPVwiRMOpdmFsaWRlclwiIGNsYXNzTmFtZT1cImJhZGdlIGJhZGdlLXBpbGwgYmFkZ2UtcHJpbWFyeSBtLXItNVwiPlY8L2E+fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtjYWlzLmV0YXQgPT09IFwic2F2ZVwiICYmIDxhIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFsaWRlQ2Fpc3NlKGNhaXMuaWQpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0gdGl0bGU9XCJWYWxpZGVyXCIgY2xhc3NOYW1lPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiZy1ibHVlLWdyZXkgbS1yLTVcIj5WPC9hPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPXtgL2NybS9jYWlzc2UvJHtjYWlzLmlkfS8ke2NhaXMuY2hhbnRpZXIuaWR9YH0+e2NhaXMubnVtY2Fpc3NlfTwvYT48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnRcIj57Y2Fpcy5wZXJzb25uZWwubm9tcy50b1VwcGVyQ2FzZSgpfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodFwiPjxOdW1iZXJGb3JtYXQgbnVtYj17Y2Fpcy5tb250YW50fS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBkYW5nZXJvdXNseVNldElubmVySFRNTD17e19faHRtbDogY2Fpcy5jYWlzc2VyZWZlcmVuY2V9fT48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtbGVmdCBwcmkgYm9sbzYwMFwiPjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtdXNlciBwcmlcIj48L2k+Jm5ic3A7e2NhaXMuZG9ieXVzZXIubm9tLnRvVXBwZXJDYXNlKCkgKyAnICd9IHtjYWlzLmRvYnl1c2VyLnByZW5vbXMudG9VcHBlckNhc2UoKX1cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgIDwvdHI+XG5cbiAgICAgICAgICAgICAgICA8Lz4pO1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG4gICAgICAgIHJldHVybiBudWxsO1xuICAgIH0pO1xuXG4gICAgbGV0IGRlY2p0dGMgPSAwO1xuICAgIGxldCBkZWNqaHQgPSAwO1xuICAgIGxldCBkZWNjb3VudCA9IDA7XG4gICAgY29uc3QgcmVuZGVyRGVjSm91ciA9IGRlY2pvdXIubWFwKChkZWMpID0+IHtcbiAgICAgICAgaWYgKGRlYy5jbGllbnQuY29yYmVpbGxlID09PSBudWxsKSB7XG5cbiAgICAgICAgICAgIGRlY2NvdW50ID0gZGVjY291bnQgKyAxO1xuICAgICAgICAgICAgZGVjanR0YyA9IGRlY2p0dGMgKyBwYXJzZUZsb2F0KGRlYy50dGMpO1xuICAgICAgICAgICAgZGVjamh0ID0gZGVjamh0ICsgcGFyc2VGbG9hdChkZWMuYXBheWVyKTtcbiAgICAgICAgICAgIHJldHVybiAoPD5cbiAgICAgICAgICAgICAgICA8dHIga2V5PXtkZWMuaWR9PlxuICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwibXczMCB0ZXh0LWNlbnRlclwiPjxhIGhyZWY9XCIjXCIgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgc2hhc2hhKGRlYy5pZCwgJ2ltcHJpbWRlY29tcHRlJylcbiAgICAgICAgICAgICAgICAgICAgfX0gc3R5bGU9e3ttYXJnaW5SaWdodDogXCI1cHhcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgPGkgY2xhc3NOYW1lPVwiZmEgZmEtZXllIGNvbC1ncmVlblwiIGFyaWEtaGlkZGVuPVwidHJ1ZVwiPjwvaT48L2E+XG4gICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnRcIj48TW9tZW50IGZvcm1hdD1cIkREL01NL1lZWVlcIj57ZGVjLmRhdGV9PC9Nb21lbnQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgPHRkPlxuICAgICAgICAgICAgICAgICAgICAgICAge2RlYy5ldGF0ID09PSBcInZhbGlkZVwiICYmIDxhIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBkZXZhbGlkZURlY29tcHRlKGRlYy5pZClcbiAgICAgICAgICAgICAgICAgICAgICAgIH19IHRpdGxlPVwiRMOpdmFsaWRlclwiIGNsYXNzTmFtZT1cImJhZGdlIGJhZGdlLXBpbGwgYmFkZ2UtcHJpbWFyeSBtLXItNVwiPlY8L2E+fVxuICAgICAgICAgICAgICAgICAgICAgICAge2RlYy5ldGF0ID09PSBcInNhdmVcIiAmJiA8YSBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFsaWRlRGVjb21wdGUoZGVjLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgfX0gdGl0bGU9XCJWYWxpZGVyXCIgY2xhc3NOYW1lPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiZy1ibHVlLWdyZXkgbS1yLTVcIj5WPC9hPn1cbiAgICAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9e2AvY3JtL2RlY29tcHRlLyR7ZGVjLmlkfS8ke2RlYy5jaGFudGllci5pZH1gfT57ZGVjLm51bWRlY29tcHRlfTwvYT48L3RkPlxuICAgICAgICAgICAgICAgICAgICA8dGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICB7ZGVjLmRldmlzLmV0YXQgPT09IFwidmFsaWRlXCIgJiYgPGEgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRldmFsaWRlRGV2aXMoZGVjLmRldmlzLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgfX0gdGl0bGU9XCJEw6l2YWxpZGVyXCIgY2xhc3NOYW1lPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiYWRnZS1wcmltYXJ5IG0tci01XCI+VjwvYT59XG4gICAgICAgICAgICAgICAgICAgICAgICB7ZGVjLmRldmlzLmV0YXQgPT09IFwic2F2ZVwiICYmIDxhIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YWxpZGVEZXZpcyhkZWMuZGV2aXMuaWQpXG4gICAgICAgICAgICAgICAgICAgICAgICB9fSB0aXRsZT1cIlZhbGlkZXJcIiBjbGFzc05hbWU9XCJiYWRnZSBiYWRnZS1waWxsIGJnLWJsdWUtZ3JleSBtLXItNVwiPlY8L2E+fVxuICAgICAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj17YC9jcm0vZGV2aXMvJHtkZWMuZGV2aXMuaWR9LyR7ZGVjLmNoYW50aWVyLmlkfWB9PntkZWMuZGV2aXMuaWRkZXZpc308L2E+PC90ZD5cblxuICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodFwiPjxOdW1iZXJGb3JtYXQgbnVtYj17ZGVjLmFwYXllcn0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0XCI+PE51bWJlckZvcm1hdCBudW1iPXtkZWMudHRjfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtbGVmdCBwcmkgYm9sbzYwMFwiPjxpXG4gICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYS11c2VyIHByaVwiPjwvaT4mbmJzcDt7ZGVjLmRvYnl1c2VyLm5vbS50b1VwcGVyQ2FzZSgpICsgJyAnfSB7ZGVjLmRvYnl1c2VyLnByZW5vbXMudG9VcHBlckNhc2UoKX1cbiAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICA8L3RyPlxuXG4gICAgICAgICAgICA8Lz4pO1xuICAgICAgICB9XG4gICAgfSk7XG5cbiAgICBsZXQgZmFjdHRjID0gMDtcbiAgICBsZXQgZmFjaHQgPSAwO1xuICAgIGxldCBmYWNjb3VudCA9IDA7XG4gICAgY29uc3QgcmVuZGVyRmFjSm91ciA9IGZhY2pvdXIubWFwKChmYWMpID0+IHtcbiAgICAgICAgaWYgKGZhYy5jb3JiZWlsbGUgPT09IG51bGwpIHtcbiAgICAgICAgICAgIGlmIChmYWMuY2xpZW50LmNvcmJlaWxsZSA9PT0gbnVsbCkge1xuICAgICAgICAgICAgICAgIGZhY3R0YyA9IGZhYy50b3RhbHR0YyArIGZhY3R0YztcbiAgICAgICAgICAgICAgICBmYWNodCA9IGZhYy50b3RhbGh0ICsgZmFjaHQ7XG4gICAgICAgICAgICAgICAgZmFjY291bnQgPSBmYWNjb3VudCArIDE7XG4gICAgICAgICAgICAgICAgcmV0dXJuICg8PlxuICAgICAgICAgICAgICAgICAgICA8dHIga2V5PXtmYWMuaWR9PlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cIm13MzAgdGV4dC1jZW50ZXJcIj48YSBocmVmPVwiI1wiIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBzaGFzaGEoZmFjLmlkLCAnaW1wcmltZmFjdHVyZScpXG4gICAgICAgICAgICAgICAgICAgICAgICB9fSBzdHlsZT17e21hcmdpblJpZ2h0OiBcIjVweFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGkgY2xhc3NOYW1lPVwiZmEgZmEtZXllIGNvbC1ncmVlblwiIGFyaWEtaGlkZGVuPVwidHJ1ZVwiPjwvaT48L2E+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWxlZnRcIj48TW9tZW50IGZvcm1hdD1cIkREL01NL1lZWVlcIj57ZmFjLmRhdGV9PC9Nb21lbnQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZmFjLmV0YXQgPT09IFwidmFsaWRlXCIgJiYgPGEgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkZXZhbGlkZUZhY3R1cmUoZmFjLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19IHRpdGxlPVwiRMOpdmFsaWRlclwiIGNsYXNzTmFtZT1cImJhZGdlIGJhZGdlLXBpbGwgYmFkZ2UtcHJpbWFyeSBtLXItNVwiPlY8L2E+fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtmYWMuZXRhdCA9PT0gXCJzYXZlXCIgJiYgPGEgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YWxpZGVGYWN0dXJlKGZhYy5pZClcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fSB0aXRsZT1cIlZhbGlkZXJcIiBjbGFzc05hbWU9XCJiYWRnZSBiYWRnZS1waWxsIGJnLWJsdWUtZ3JleSBtLXItNVwiPlY8L2E+fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9e2AvY3JtL2ZhY3R1cmUvJHtmYWMuaWR9LyR7ZmFjLmNoYW50aWVyLmlkfWB9PntmYWMubnVtZmFjdHVyZX08L2E+PC90ZD5cblxuICAgICAgICAgICAgICAgICAgICAgICAge2ZhYy50eXBlID09PSBcImRldmlzXCIgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZmFjLmRldmlzLmV0YXQgPT09IFwidmFsaWRlXCIgJiYgPGEgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRldmFsaWRlRGV2aXMoZmFjLmRldmlzLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0gdGl0bGU9XCJEw6l2YWxpZGVyXCIgY2xhc3NOYW1lPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiYWRnZS1wcmltYXJ5IG0tci01XCI+VjwvYT59XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZmFjLmRldmlzLmV0YXQgPT09IFwic2F2ZVwiICYmIDxhIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YWxpZGVEZXZpcyhmYWMuZGV2aXMuaWQpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fSB0aXRsZT1cIlZhbGlkZXJcIiBjbGFzc05hbWU9XCJiYWRnZSBiYWRnZS1waWxsIGJnLWJsdWUtZ3JleSBtLXItNVwiPlY8L2E+fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj17YC9jcm0vZGV2aXMvJHtmYWMuZGV2aXMuaWR9LyR7ZmFjLmNoYW50aWVyLmlkfWB9PntmYWMuZGV2aXMuaWRkZXZpc308L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPlxuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAge2ZhYy50eXBlID09PSBcInJldGVudWVcIiAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtmYWMuYWNvbXB0ZS5kZXZpcy5ldGF0ID09PSBcInZhbGlkZVwiICYmIDxhIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkZXZhbGlkZURldmlzKGZhYy5hY29tcHRlLmRldmlzLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0gdGl0bGU9XCJEw6l2YWxpZGVyXCIgY2xhc3NOYW1lPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiYWRnZS1wcmltYXJ5IG0tci01XCI+VjwvYT59XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7ZmFjLmFjb21wdGUuZGV2aXMuZXRhdCA9PT0gXCJzYXZlXCIgJiYgPGEgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhbGlkZURldmlzKGZhYy5hY29tcHRlLmRldmlzLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0gdGl0bGU9XCJWYWxpZGVyXCIgY2xhc3NOYW1lPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiZy1ibHVlLWdyZXkgbS1yLTVcIj5WPC9hPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9e2AvY3JtL2RldmlzLyR7ZmFjLmFjb21wdGUuZGV2aXMuaWR9LyR7ZmFjLmNoYW50aWVyLmlkfWB9PntmYWMuYWNvbXB0ZS5kZXZpcy5pZGRldmlzfTwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICB7ZmFjLnR5cGUgPT09IFwiYWNvbXB0ZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2ZhYy5hY29tcHRlLmRldmlzLmV0YXQgPT09IFwidmFsaWRlXCIgJiYgPGEgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRldmFsaWRlRGV2aXMoZmFjLmFjb21wdGUuZGV2aXMuaWQpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fSB0aXRsZT1cIkTDqXZhbGlkZXJcIiBjbGFzc05hbWU9XCJiYWRnZSBiYWRnZS1waWxsIGJhZGdlLXByaW1hcnkgbS1yLTVcIj5WPC9hPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtmYWMuYWNvbXB0ZS5kZXZpcy5ldGF0ID09PSBcInNhdmVcIiAmJiA8YSBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFsaWRlRGV2aXMoZmFjLmFjb21wdGUuZGV2aXMuaWQpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fSB0aXRsZT1cIlZhbGlkZXJcIiBjbGFzc05hbWU9XCJiYWRnZSBiYWRnZS1waWxsIGJnLWJsdWUtZ3JleSBtLXItNVwiPlY8L2E+fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj17YC9jcm0vZGV2aXMvJHtmYWMuYWNvbXB0ZS5kZXZpcy5pZH0vJHtmYWMuY2hhbnRpZXIuaWR9YH0+e2ZhYy5hY29tcHRlLmRldmlzLmlkZGV2aXN9PC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgIHtmYWMudHlwZSA9PT0gXCJkZWNvbXB0ZVwiICYmXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2ZhYy5kZWNvbXB0ZS5kZXZpcy5ldGF0ID09PSBcInZhbGlkZVwiICYmIDxhIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkZXZhbGlkZURldmlzKGZhYy5kZWNvbXB0ZS5kZXZpcy5pZClcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19IHRpdGxlPVwiRMOpdmFsaWRlclwiIGNsYXNzTmFtZT1cImJhZGdlIGJhZGdlLXBpbGwgYmFkZ2UtcHJpbWFyeSBtLXItNVwiPlY8L2E+fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge2ZhYy5kZWNvbXB0ZS5kZXZpcy5ldGF0ID09PSBcInNhdmVcIiAmJiA8YSBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFsaWRlRGV2aXMoZmFjLmRlY29tcHRlLmRldmlzLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0gdGl0bGU9XCJWYWxpZGVyXCIgY2xhc3NOYW1lPVwiYmFkZ2UgYmFkZ2UtcGlsbCBiZy1ibHVlLWdyZXkgbS1yLTVcIj5WPC9hPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9e2AvY3JtL2RldmlzLyR7ZmFjLmRlY29tcHRlLmRldmlzLmlkfS8ke2ZhYy5jaGFudGllci5pZH1gfT57ZmFjLmRlY29tcHRlLmRldmlzLmlkZGV2aXN9PC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtmYWMuZGVjb21wdGUuZXRhdCA9PT0gXCJ2YWxpZGVcIiAmJiA8YSBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGV2YWxpZGVEZWNvbXB0ZShmYWMuZGVjb21wdGUuaWQpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fSB0aXRsZT1cIkTDqXZhbGlkZXJcIiBjbGFzc05hbWU9XCJiYWRnZSBiYWRnZS1waWxsIGJhZGdlLXByaW1hcnkgbS1yLTVcIj5WPC9hPn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtmYWMuZGVjb21wdGUuZXRhdCA9PT0gXCJzYXZlXCIgJiYgPGEgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhbGlkZURlY29tcHRlKGZhYy5kZWNvbXB0ZS5pZClcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19IHRpdGxlPVwiVmFsaWRlclwiIGNsYXNzTmFtZT1cImJhZGdlIGJhZGdlLXBpbGwgYmctYmx1ZS1ncmV5IG0tci01XCI+VjwvYT59XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPXtgL2NybS9kZWNvbXB0ZS8ke2ZhYy5kZWNvbXB0ZS5pZH0vJHtmYWMuY2hhbnRpZXIuaWR9YH0+e2ZhYy5kZWNvbXB0ZS5udW1kZWNvbXB0ZX08L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0XCI+PE51bWJlckZvcm1hdCBudW1iPXtmYWMudG90YWxodH0vPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodFwiPjxOdW1iZXJGb3JtYXQgbnVtYj17ZmFjLnRvdGFsdHRjfS8+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBkYW5nZXJvdXNseVNldElubmVySFRNTD17e19faHRtbDogZmFjLmZhY3RyZWZlcmVuY2V9fT48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtbGVmdCBwcmkgYm9sbzYwMFwiPjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtdXNlciBwcmlcIj48L2k+Jm5ic3A7e2ZhYy5kb2J5dXNlci5ub20udG9VcHBlckNhc2UoKSArICcgJ30ge2ZhYy5kb2J5dXNlci5wcmVub21zLnRvVXBwZXJDYXNlKCl9XG4gICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICA8L3RyPlxuXG4gICAgICAgICAgICAgICAgPC8+KTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgICAgICByZXR1cm4gbnVsbDtcbiAgICB9KTtcblxuXG4gICAgcmV0dXJuICg8PlxuICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImNvbC1tZC0xMlwiIHN0eWxlPXt7cGFkZGluZ0xlZnQ6IFwiMFwiLCBtYXJnaW5Ub3A6IFwiMjBweFwifX0+XG4gICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInJvdyBjbGVhcmZpeFwiPlxuICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLXNtLTEyIFwiPlxuICAgICAgICAgICAgICAgICAgICA8aDQgY2xhc3NOYW1lPVwiYm9sbzcwMFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgVHJhdmF1eCBkdSBqb3VyXG4gICAgICAgICAgICAgICAgICAgIDwvaDQ+XG4gICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwtZ3JvdXBcIiBpZD1cImFjY29yZGlvbl8yXCIgcm9sZT1cInRhYmxpc3RcIiBhcmlhLW11bHRpc2VsZWN0YWJsZT1cInRydWVcIj5cbiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsIHBhbmVsLXByaVwiPlxuICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsLWhlYWRpbmcgYmctcHJpXCIgcm9sZT1cInRhYlwiIGlkPVwiaGVhZGluZ0RldlwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgPGg1IGNsYXNzTmFtZT1cInBhbmVsLXRpdGxlIFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGNsYXNzTmFtZT1cImNvbGxhcHNlZCB0ZXh0LXdoaXRlXCIgcm9sZT1cImJ1dHRvblwiIGRhdGEtdG9nZ2xlPVwiY29sbGFwc2VcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtcGFyZW50PVwiI2FjY29yZGlvbl8yXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBocmVmPVwiI2NvbGxhcHNlRGV2XCIgYXJpYS1leHBhbmRlZD1cImZhbHNlXCIgYXJpYS1jb250cm9scz1cImNvbGxhcHNlRGV2XCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e2ZvbnRTaXplOiBcIjE2cHhcIiwgZm9udFdlaWdodDogXCI1MDBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aSBjbGFzc05hbWU9XCJtYXRlcmlhbC1pY29ucyBjb2wtd2hpdGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e2ZvbnRTaXplOiBcIjE4cHhcIiwgZmxvYXQ6IFwibGVmdFwifX0+a2V5Ym9hcmRfYXJyb3dfZG93bjwvaT4gRGV2aXMgZHUgam91cjxzcGFuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJhZGdlIGJnLXBpbmsgZmxvYXQtcmlnaHRcIj57ZGV2Y291bnR9PC9zcGFuPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvaDU+XG4gICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICA8ZGl2IGlkPVwiY29sbGFwc2VEZXZcIiBjbGFzc05hbWU9XCJwYW5lbC1jb2xsYXBzZSBjb2xsYXBzZVwiIHJvbGU9XCJ0YWJwYW5lbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgYXJpYS1sYWJlbGxlZGJ5PVwiaGVhZGluZ0RldlwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbC1ib2R5XCIgc3R5bGU9e3tvdmVyZmxvdzogXCJzY3JvbGxcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiYm9keVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInRhYmxlLXJlc3BvbnNpdmVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxSZWFjdEhUTUxUYWJsZVRvRXhjZWxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZD1cInRlc3QtdGFibGUteGxzLWJ1dHRvblwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYnRuIGJnLWdyZWVuIHRleHQtd2hpdGUgbS1yLTUgZmxvYXQtcmlnaHRcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRhYmxlPVwiZGV2am91clwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZmlsZW5hbWU9XCJERVZJUyBEVSBKT1VSXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzaGVldD1cInRhYmxleGxzXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBidXR0b25UZXh0PVwiRVhQT1JURVIgRU4gRVhDRUxcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImNvbC1tZC00XCI+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIGNsYXNzTmFtZT1cInRhYmxlLXN0cmlwZWQgdGFibGUtaG92ZXIgZGlzcGxheSBub3dyYXBcIiBzdHlsZT17e3dpZHRoOiBcIjEwMCVcIn19XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWQ9XCJkZXZqb3VyXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoZWFkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cIm13MzBcIj48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3ttaW5XaWR0aDogXCI4MHB4XCJ9fT5EQVRFPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHN0eWxlPXt7bWluV2lkdGg6IFwiMTAwcHhcIn19Pk7CsCBERVZJUzwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBzdHlsZT17e21pbldpZHRoOiBcIjEyMHB4XCJ9fT5UT1RBTCBIVDwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBzdHlsZT17e21pbldpZHRoOiBcIjEyMHB4XCJ9fT5UT1RBTCBUVEM8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+UsOJRsOJUkVOQ0U8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3ttaW5XaWR0aDogXCIxMjBweFwifX0+Q1JFw4kgUEFSPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGhlYWQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRib2R5PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtyZW5kZXJEZXZKb3VyfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGJvZHk+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRmb290PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBjbGFzc05hbWU9XCJib2xkZXJyXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJnLWJsdWUgY29sLXdoaXRlXCI+PE51bWJlckZvcm1hdCBudW1iPXtkZWpodH0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBiZy1ibHVlIGNvbC13aGl0ZVwiPjxOdW1iZXJGb3JtYXQgbnVtYj17ZGVqdHRjfS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGZvb3Q+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsIHBhbmVsLXByaVwiPlxuICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsLWhlYWRpbmcgYmctcHJpXCIgcm9sZT1cInRhYlwiIGlkPVwiaGVhZGluZ0JvblwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgPGg1IGNsYXNzTmFtZT1cInBhbmVsLXRpdGxlIFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGNsYXNzTmFtZT1cImNvbGxhcHNlZCB0ZXh0LXdoaXRlXCIgcm9sZT1cImJ1dHRvblwiIGRhdGEtdG9nZ2xlPVwiY29sbGFwc2VcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtcGFyZW50PVwiI2FjY29yZGlvbl8yXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBocmVmPVwiI2NvbGxhcHNlQm9uXCIgYXJpYS1leHBhbmRlZD1cImZhbHNlXCIgYXJpYS1jb250cm9scz1cImNvbGxhcHNlQm9uXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e2ZvbnRTaXplOiBcIjE2cHhcIiwgZm9udFdlaWdodDogXCI1MDBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aSBjbGFzc05hbWU9XCJtYXRlcmlhbC1pY29ucyBjb2wtd2hpdGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e2ZvbnRTaXplOiBcIjE4cHhcIiwgZmxvYXQ6IFwibGVmdFwifX0+a2V5Ym9hcmRfYXJyb3dfZG93bjwvaT4gQm9ucyBkZSBjb21tYW5kZSBkdVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBqb3VyPHNwYW5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYmFkZ2UgYmctcGluayBmbG9hdC1yaWdodFwiPntib25jb3VudH08L3NwYW4+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9oNT5cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgaWQ9XCJjb2xsYXBzZUJvblwiIGNsYXNzTmFtZT1cInBhbmVsLWNvbGxhcHNlIGNvbGxhcHNlXCIgcm9sZT1cInRhYnBhbmVsXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWxhYmVsbGVkYnk9XCJoZWFkaW5nQm9uXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsLWJvZHlcIiBzdHlsZT17e292ZXJmbG93OiBcInNjcm9sbFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJib2R5XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwidGFibGUtcmVzcG9uc2l2ZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIGNsYXNzTmFtZT1cInRhYmxlLXN0cmlwZWQgdGFibGUtaG92ZXIgZGlzcGxheSBub3dyYXBcIiBzdHlsZT17e3dpZHRoOiBcIjEwMCVcIn19XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWQ9XCJib25qb3VyXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoZWFkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cIm13MzBcIj48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3ttaW5XaWR0aDogXCI4MHB4XCJ9fT5EQVRFPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHN0eWxlPXt7bWluV2lkdGg6IFwiMTIwcHhcIn19Pk7CsCBCT048L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3ttaW5XaWR0aDogXCIxMjBweFwifX0+TsKwIERFVklTPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHN0eWxlPXt7bWluV2lkdGg6IFwiMTUwcHhcIn19PkZPVVJOSVNTRVVSPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHN0eWxlPXt7bWluV2lkdGg6IFwiMTIwcHhcIn19PlRPVEFMIEhUPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHN0eWxlPXt7bWluV2lkdGg6IFwiMTIwcHhcIn19PlRPVEFMIFRUQzwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD5Sw4lGw4lSRU5DRTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBzdHlsZT17e21pbldpZHRoOiBcIjE1MHB4XCJ9fT5DUkXDiSBQQVI8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90aGVhZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGJvZHk+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge3JlbmRlckJvbkpvdXJ9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90Ym9keT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGZvb3Q+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyIGNsYXNzTmFtZT1cImJvbGRlcnJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBiZy1ibHVlIGNvbC13aGl0ZVwiPjxOdW1iZXJGb3JtYXQgbnVtYj17Ym9qaHR9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgYmctYmx1ZSBjb2wtd2hpdGVcIj48TnVtYmVyRm9ybWF0IG51bWI9e2JvanR0Y30vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cIm13MTUwXCI+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGZvb3Q+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwgcGFuZWwtcHJpXCI+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwtaGVhZGluZyBiZy1wcmlcIiByb2xlPVwidGFiXCIgaWQ9XCJoZWFkaW5nQm9uTGl2cmVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxoNSBjbGFzc05hbWU9XCJwYW5lbC10aXRsZSBcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBjbGFzc05hbWU9XCJjb2xsYXBzZWQgdGV4dC13aGl0ZVwiIHJvbGU9XCJidXR0b25cIiBkYXRhLXRvZ2dsZT1cImNvbGxhcHNlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhLXBhcmVudD1cIiNhY2NvcmRpb25fMlwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaHJlZj1cIiNjb2xsYXBzZUJvbkxpdnJlXCIgYXJpYS1leHBhbmRlZD1cImZhbHNlXCIgYXJpYS1jb250cm9scz1cImNvbGxhcHNlQm9uTGl2cmVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7Zm9udFNpemU6IFwiMTZweFwiLCBmb250V2VpZ2h0OiBcIjUwMFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpIGNsYXNzTmFtZT1cIm1hdGVyaWFsLWljb25zIGNvbC13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7Zm9udFNpemU6IFwiMThweFwiLCBmbG9hdDogXCJsZWZ0XCJ9fT5rZXlib2FyZF9hcnJvd19kb3duPC9pPiBCb25zIGRlIGxpdnJhaXNvblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkdVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBqb3VyPHNwYW5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYmFkZ2UgYmctcGluayBmbG9hdC1yaWdodFwiPntsaXZyZWNvdW50fTwvc3Bhbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L2g1PlxuICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgPGRpdiBpZD1cImNvbGxhcHNlQm9uTGl2cmVcIiBjbGFzc05hbWU9XCJwYW5lbC1jb2xsYXBzZSBjb2xsYXBzZVwiIHJvbGU9XCJ0YWJwYW5lbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgYXJpYS1sYWJlbGxlZGJ5PVwiaGVhZGluZ0JvbkxpdnJlXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsLWJvZHlcIiBzdHlsZT17e292ZXJmbG93OiBcInNjcm9sbFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJib2R5XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwidGFibGUtcmVzcG9uc2l2ZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIGNsYXNzTmFtZT1cInRhYmxlLXN0cmlwZWQgdGFibGUtaG92ZXIgZGlzcGxheSBub3dyYXBcIiBzdHlsZT17e3dpZHRoOiBcIjEwMCVcIn19XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWQ9XCJsaXZyZWpvdXJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGhlYWQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwibXczMFwiPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBzdHlsZT17e21pbldpZHRoOiBcIjgwcHhcIn19PkRBVEU8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3ttaW5XaWR0aDogXCIxMjBweFwifX0+TsKwIEJPTjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBzdHlsZT17e21pbldpZHRoOiBcIjEyMHB4XCJ9fT5OwrAgREVWSVM8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3ttaW5XaWR0aDogXCIxMjBweFwifX0+VE9UQUwgSFQ8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3ttaW5XaWR0aDogXCIxMjBweFwifX0+VE9UQUwgVFRDPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPlLDiUbDiVJFTkNFPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIHN0eWxlPXt7bWluV2lkdGg6IFwiMTUwcHhcIn19PkNSRcOJIFBBUjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoZWFkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0Ym9keT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7cmVuZGVyTGl2cmVKb3VyfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGJvZHk+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRmb290PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBjbGFzc05hbWU9XCJib2xkZXJyXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBiZy1ibHVlIGNvbC13aGl0ZVwiPjxOdW1iZXJGb3JtYXQgbnVtYj17bHZlamh0fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJnLWJsdWUgY29sLXdoaXRlXCI+PE51bWJlckZvcm1hdCBudW1iPXtsdmVqdHRjfS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwibXcxNTBcIj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90Zm9vdD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbCBwYW5lbC1wcmlcIj5cbiAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbC1oZWFkaW5nIGJnLXByaVwiIHJvbGU9XCJ0YWJcIiBpZD1cImhlYWRpbmdCb25jYVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgPGg1IGNsYXNzTmFtZT1cInBhbmVsLXRpdGxlIFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGNsYXNzTmFtZT1cImNvbGxhcHNlZCB0ZXh0LXdoaXRlXCIgcm9sZT1cImJ1dHRvblwiIGRhdGEtdG9nZ2xlPVwiY29sbGFwc2VcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtcGFyZW50PVwiI2FjY29yZGlvbl8yXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBocmVmPVwiI2NvbGxhcHNlQm9uY2FcIiBhcmlhLWV4cGFuZGVkPVwiZmFsc2VcIiBhcmlhLWNvbnRyb2xzPVwiY29sbGFwc2VCb25jYVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tmb250U2l6ZTogXCIxNnB4XCIsIGZvbnRXZWlnaHQ6IFwiNTAwXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGkgY2xhc3NOYW1lPVwibWF0ZXJpYWwtaWNvbnMgY29sLXdoaXRlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tmb250U2l6ZTogXCIxOHB4XCIsIGZsb2F0OiBcImxlZnRcIn19PmtleWJvYXJkX2Fycm93X2Rvd248L2k+IEJvbnMgZGUgY2Fpc3NlIGR1XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGpvdXI8c3BhblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJiYWRnZSBiZy1waW5rIGZsb2F0LXJpZ2h0XCI+e2NhaXNjb3VudH08L3NwYW4+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9oNT5cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgaWQ9XCJjb2xsYXBzZUJvbmNhXCIgY2xhc3NOYW1lPVwicGFuZWwtY29sbGFwc2UgY29sbGFwc2VcIiByb2xlPVwidGFicGFuZWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtbGFiZWxsZWRieT1cImhlYWRpbmdCb25jYVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbC1ib2R5XCIgc3R5bGU9e3tvdmVyZmxvdzogXCJzY3JvbGxcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiYm9keVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInRhYmxlLXJlc3BvbnNpdmVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZSBjbGFzc05hbWU9XCJ0YWJsZS1zdHJpcGVkIHRhYmxlLWhvdmVyIGRpc3BsYXkgbm93cmFwXCIgc3R5bGU9e3t3aWR0aDogXCIxMDAlXCJ9fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkPVwiY2Fpc2pvdXJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGhlYWQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwibXczMFwiPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD5EQVRFPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cIm13MTIwXCI+TsKwIENBSVNTRTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJtdzEyMFwiPk7CsCBCT048L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwibXcxMjBcIj5OwrAgREVWSVM8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+Rk9VUk5JU1NFVVIgfCBDSEFSR0U8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwibXcxMjBcIj5UT1RBTCBUVEM8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwibXcyMDBcIj5Sw4lGw4lSRU5DRTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJtdzIwMFwiPkNSRcOJIFBBUjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoZWFkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0Ym9keT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7cmVuZGVyQ2Fpc0pvdXJ9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90Ym9keT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGZvb3Q+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyIGNsYXNzTmFtZT1cImJvbGRlcnJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgYmctYmx1ZSBjb2wtd2hpdGVcIj48TnVtYmVyRm9ybWF0IG51bWI9e2NhanR0Y30vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3Rmb290PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90YWJsZT5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsIHBhbmVsLXByaVwiPlxuICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsLWhlYWRpbmcgYmctcHJpXCIgcm9sZT1cInRhYlwiIGlkPVwiaGVhZGluZ0RlY2pvXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICA8aDUgY2xhc3NOYW1lPVwicGFuZWwtdGl0bGUgXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgY2xhc3NOYW1lPVwiY29sbGFwc2VkIHRleHQtd2hpdGVcIiByb2xlPVwiYnV0dG9uXCIgZGF0YS10b2dnbGU9XCJjb2xsYXBzZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS1wYXJlbnQ9XCIjYWNjb3JkaW9uXzJcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGhyZWY9XCIjY29sbGFwc2VEZWNqb1wiIGFyaWEtZXhwYW5kZWQ9XCJmYWxzZVwiIGFyaWEtY29udHJvbHM9XCJjb2xsYXBzZURlY2pvXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e2ZvbnRTaXplOiBcIjE2cHhcIiwgZm9udFdlaWdodDogXCI1MDBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aSBjbGFzc05hbWU9XCJtYXRlcmlhbC1pY29ucyBjb2wtd2hpdGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e2ZvbnRTaXplOiBcIjE4cHhcIiwgZmxvYXQ6IFwibGVmdFwifX0+a2V5Ym9hcmRfYXJyb3dfZG93bjwvaT4gRMOpY29tcHRlcyBkdVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBqb3VyPHNwYW5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYmFkZ2UgYmctcGluayBmbG9hdC1yaWdodFwiPntkZWNjb3VudH08L3NwYW4+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9oNT5cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgaWQ9XCJjb2xsYXBzZURlY2pvXCIgY2xhc3NOYW1lPVwicGFuZWwtY29sbGFwc2UgY29sbGFwc2VcIiByb2xlPVwidGFicGFuZWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtbGFiZWxsZWRieT1cImhlYWRpbmdEZWNqb1wiPlxuICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbC1ib2R5XCIgc3R5bGU9e3tvdmVyZmxvdzogXCJzY3JvbGxcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiYm9keVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInRhYmxlLXJlc3BvbnNpdmVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZSBjbGFzc05hbWU9XCJ0YWJsZS1zdHJpcGVkIHRhYmxlLWhvdmVyIGRpc3BsYXkgbm93cmFwXCIgc3R5bGU9e3t3aWR0aDogXCIxMDAlXCJ9fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkPVwiZGVjam91clwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aGVhZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJtdzMwXCI+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPkRBVEU8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+TsKwIETDiUNPTVBURTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD5OwrAgREVWSVM8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+VE9UQUwgSFQ8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+VE9UQUwgVFRDPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPkNSRcOJIFBBUjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoZWFkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0Ym9keT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7cmVuZGVyRGVjSm91cn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3Rib2R5PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0Zm9vdD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHIgY2xhc3NOYW1lPVwiYm9sZGVyclwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtcmlnaHQgYmctYmx1ZSBjb2wtd2hpdGVcIj48TnVtYmVyRm9ybWF0IG51bWI9e2RlY2podH0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBiZy1ibHVlIGNvbC13aGl0ZVwiPjxOdW1iZXJGb3JtYXQgbnVtYj17ZGVjanR0Y30vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGZvb3Q+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwgcGFuZWwtcHJpXCI+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwtaGVhZGluZyBiZy1wcmlcIiByb2xlPVwidGFiXCIgaWQ9XCJoZWFkaW5nRmFjam9cIj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxoNSBjbGFzc05hbWU9XCJwYW5lbC10aXRsZSBcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBjbGFzc05hbWU9XCJjb2xsYXBzZWQgdGV4dC13aGl0ZVwiIHJvbGU9XCJidXR0b25cIiBkYXRhLXRvZ2dsZT1cImNvbGxhcHNlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhLXBhcmVudD1cIiNhY2NvcmRpb25fMlwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaHJlZj1cIiNjb2xsYXBzZUZhY2pvXCIgYXJpYS1leHBhbmRlZD1cImZhbHNlXCIgYXJpYS1jb250cm9scz1cImNvbGxhcHNlRmFjam9cIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7Zm9udFNpemU6IFwiMTZweFwiLCBmb250V2VpZ2h0OiBcIjUwMFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpIGNsYXNzTmFtZT1cIm1hdGVyaWFsLWljb25zIGNvbC13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7Zm9udFNpemU6IFwiMThweFwiLCBmbG9hdDogXCJsZWZ0XCJ9fT5rZXlib2FyZF9hcnJvd19kb3duPC9pPiBGYWN0dXJlcyBkdVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBqb3VyPHNwYW5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYmFkZ2UgYmctcGluayBmbG9hdC1yaWdodFwiPntmYWNjb3VudH08L3NwYW4+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9oNT5cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgaWQ9XCJjb2xsYXBzZUZhY2pvXCIgY2xhc3NOYW1lPVwicGFuZWwtY29sbGFwc2UgY29sbGFwc2VcIiByb2xlPVwidGFicGFuZWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtbGFiZWxsZWRieT1cImhlYWRpbmdGYWNqb1wiPlxuICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbC1ib2R5XCIgc3R5bGU9e3tvdmVyZmxvdzogXCJzY3JvbGxcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiYm9keVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInRhYmxlLXJlc3BvbnNpdmVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZSBjbGFzc05hbWU9XCJ0YWJsZS1zdHJpcGVkIHRhYmxlLWhvdmVyIGRpc3BsYXkgbm93cmFwXCIgc3R5bGU9e3t3aWR0aDogXCIxMDAlXCJ9fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkPVwiZmFjam91clwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aGVhZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJtdzMwXCI+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPkRBVEU8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+RkFDVFVSRTwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD5ERVZJUzwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD5Ew4lDT01QVEU8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+VE9UQUwgSFQ8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggc3R5bGU9e3t3aGl0ZVNwYWNlOiBcIm5vd3JhcFwifX0+VE9UQUwgVFRDPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPlLDiUbDiVJFTkNFPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPkNSRcOJIFBBUjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoZWFkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0Ym9keT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7cmVuZGVyRmFjSm91cn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3Rib2R5PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0Zm9vdD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHIgY2xhc3NOYW1lPVwiYm9sZGVyclwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0IGJnLWJsdWUgY29sLXdoaXRlXCI+PE51bWJlckZvcm1hdCBudW1iPXtmYWNodH0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwidGV4dC1yaWdodCBiZy1ibHVlIGNvbC13aGl0ZVwiPjxOdW1iZXJGb3JtYXQgbnVtYj17ZmFjdHRjfS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGZvb3Q+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICA8L2Rpdj5cbiAgICA8Lz4pO1xufVxuXG50cnkge1xuICAgIGNvbnN0IHJvb3QgPSBjcmVhdGVSb290KGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdzZXR0cmF2YXV4am91cicpKTtcbiAgICByb290LnJlbmRlcig8VHJhdmF1eEpvdXIvPik7XG59IGNhdGNoIChlKSB7XG59XG4iLCJsZXQgTnVtYmVyRm9ybWF0O1xuZXhwb3J0IGRlZmF1bHQgTnVtYmVyRm9ybWF0ID0gKHByb3BzKSA9PiB7XG5cbiAgICBjb25zdCBmb3JtYXROdW1iZXIgPSAobnVtLCBwcmVjaXNpb24sIHNlcGFyYXRvcikgPT4ge1xuICAgICAgICBsZXQgcGFydHM7XG4gICAgICAgIG51bSA9IE51bWJlcihudW0pO1xuICAgICAgICBudW0gPSAodHlwZW9mIHByZWNpc2lvbiAhPT0gJ3VuZGVmaW5lZCcgPyBudW0udG9GaXhlZChwcmVjaXNpb24pIDogbnVtKS50b1N0cmluZygpO1xuICAgICAgICBwYXJ0cyA9IG51bS5zcGxpdCgnLicpO1xuICAgICAgICBwYXJ0c1swXSA9IHBhcnRzWzBdLnRvU3RyaW5nKCkucmVwbGFjZSgvKFxcZCkoPz0oXFxkezN9KSsoPyFcXGQpKS9nLCAnJDEnICsgKHNlcGFyYXRvciB8fCAnLCcpKTtcbiAgICAgICAgcmV0dXJuIHBhcnRzLmpvaW4oJywnKTtcbiAgICB9XG5cbiAgICByZXR1cm4gKGZvcm1hdE51bWJlcihwcm9wcy5udW1iLDIsICcgJykpO1xuXG59O1xuXG4iLCIvKipcbiAqIGpxdWVyeS5zaW1wbGVQYWdpbmF0aW9uLmpzXG4gKiBAdmVyc2lvbjogdjEuMC4wXG4gKiBAYXV0aG9yOiBTZWJhc3RpYW4gTWFydWxhbmRhIGh0dHA6Ly9tYXJ1bGFuZGEubWVcbiAqIEBzZWU6IGh0dHBzOi8vZ2l0aHViLmNvbS9zbWFydWxhbmRhL2pxdWVyeS5zaW1wbGVQYWdpbmF0aW9uXG4gKi9cblxuKGZ1bmN0aW9uKCQpIHtcblxuXHQkLmZuLnNpbXBsZVBhZ2luYXRpb24gPSBmdW5jdGlvbihvcHRpb25zKSB7XG5cblx0XHRjb25zdCBkZWZhdWx0cyA9IHtcblx0XHRcdHBlclBhZ2U6IDIwLFxuXHRcdFx0Y29udGFpbmVyQ2xhc3M6ICcnLFxuXHRcdFx0cHJldmlvdXNCdXR0b25DbGFzczogJycsXG5cdFx0XHRuZXh0QnV0dG9uQ2xhc3M6ICcnLFxuXHRcdFx0cHJldmlvdXNCdXR0b25UZXh0OiAnPCcsXG5cdFx0XHRuZXh0QnV0dG9uVGV4dDogJz4nLFxuXHRcdFx0Y3VycmVudFBhZ2U6IDFcblx0XHR9O1xuXG5cdFx0Y29uc3Qgc2V0dGluZ3MgPSAkLmV4dGVuZCh7fSwgZGVmYXVsdHMsIG9wdGlvbnMpO1xuXG5cdFx0cmV0dXJuIHRoaXMuZWFjaChmdW5jdGlvbigpIHtcblx0XHRcdGNvbnN0ICRyb3dzID0gJChvcHRpb25zLCB0aGlzKTtcblx0XHRcdGNvbnN0IHBhZ2VzID0gTWF0aC5jZWlsKCRyb3dzLmxlbmd0aCAvIHNldHRpbmdzLnBlclBhZ2UpO1xuXG5cdFx0XHRjb25zdCBjb250YWluZXIgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdkaXYnKTtcblx0XHRcdGNvbnN0IGJQcmV2aW91cyA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2J1dHRvbicpO1xuXHRcdFx0Y29uc3QgYk5leHQgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdidXR0b24nKTtcblx0XHRcdGNvbnN0IG9mID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnc3BhbicpO1xuXG5cblx0XHRcdGJQcmV2aW91cy5pbm5lckhUTUwgPSBzZXR0aW5ncy5wcmV2aW91c0J1dHRvblRleHQ7XG5cdFx0XHRiTmV4dC5pbm5lckhUTUwgPSBzZXR0aW5ncy5uZXh0QnV0dG9uVGV4dDtcblxuXHRcdFx0Y29udGFpbmVyLmNsYXNzTmFtZSA9IHNldHRpbmdzLmNvbnRhaW5lckNsYXNzO1xuXHRcdFx0YlByZXZpb3VzLmNsYXNzTmFtZSA9IHNldHRpbmdzLnByZXZpb3VzQnV0dG9uQ2xhc3M7XG5cdFx0XHRiTmV4dC5jbGFzc05hbWUgPSBzZXR0aW5ncy5uZXh0QnV0dG9uQ2xhc3M7XG5cblx0XHRcdGJQcmV2aW91cy5zdHlsZS5tYXJnaW5SaWdodCA9ICc4cHgnO1xuXHRcdFx0YlByZXZpb3VzLmNsYXNzTGlzdC5hZGQoJ2J0bicpO1xuXHRcdFx0YlByZXZpb3VzLmNsYXNzTGlzdC5hZGQoJ2JnLWJsdWUnKTtcblx0XHRcdGJQcmV2aW91cy5jbGFzc0xpc3QuYWRkKCdib2xvNzAwJyk7XG5cdFx0XHRiTmV4dC5zdHlsZS5tYXJnaW5MZWZ0ID0gJzhweCc7XG5cdFx0XHRiTmV4dC5jbGFzc0xpc3QuYWRkKCdidG4nKTtcblx0XHRcdGJOZXh0LmNsYXNzTGlzdC5hZGQoJ2JnLWJsdWUnKTtcblx0XHRcdGJOZXh0LmNsYXNzTGlzdC5hZGQoJ2JvbG83MDAnKTtcblx0XHRcdGNvbnRhaW5lci5zdHlsZS50ZXh0QWxpZ24gPSBcInJpZ2h0XCI7XG5cdFx0XHRjb250YWluZXIuc3R5bGUubWFyZ2luQm90dG9tID0gJzIwcHgnO1xuXG5cdFx0XHRjb250YWluZXIuYXBwZW5kQ2hpbGQoYlByZXZpb3VzKTtcblx0XHRcdGNvbnRhaW5lci5hcHBlbmRDaGlsZChvZik7XG5cdFx0XHRjb250YWluZXIuYXBwZW5kQ2hpbGQoYk5leHQpO1xuXG5cdFx0XHQkKHRoaXMpLmFmdGVyKGNvbnRhaW5lcik7XG5cblx0XHRcdHVwZGF0ZSgpO1xuXG5cdFx0XHQkKGJOZXh0KS5jbGljayhmdW5jdGlvbigpIHtcblx0XHRcdFx0aWYgKHNldHRpbmdzLmN1cnJlbnRQYWdlICsgMSA+IHBhZ2VzKSB7XG5cdFx0XHRcdFx0c2V0dGluZ3MuY3VycmVudFBhZ2UgPSBwYWdlcztcblx0XHRcdFx0fSBlbHNlIHtcblx0XHRcdFx0XHRzZXR0aW5ncy5jdXJyZW50UGFnZSsrO1xuXHRcdFx0XHR9XG5cdFx0XHRcdHVwZGF0ZSgpO1xuXHRcdFx0fSk7XG5cblx0XHRcdCQoYlByZXZpb3VzKS5jbGljayhmdW5jdGlvbigpIHtcblx0XHRcdFx0aWYgKHNldHRpbmdzLmN1cnJlbnRQYWdlIC0gMSA8IDEpIHtcblx0XHRcdFx0XHRzZXR0aW5ncy5jdXJyZW50UGFnZSA9IDE7XG5cdFx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdFx0c2V0dGluZ3MuY3VycmVudFBhZ2UtLTtcblx0XHRcdFx0fVxuXHRcdFx0XHR1cGRhdGUoKTtcblx0XHRcdH0pO1xuXG5cdFx0XHRmdW5jdGlvbiB1cGRhdGUoKSB7XG5cdFx0XHRcdGNvbnN0IGZyb20gPSAoKHNldHRpbmdzLmN1cnJlbnRQYWdlIC0gMSkgKiBzZXR0aW5ncy5wZXJQYWdlKSArIDE7XG5cdFx0XHRcdGxldCB0byA9IGZyb20gKyBzZXR0aW5ncy5wZXJQYWdlIC0gMTtcblxuXHRcdFx0XHRpZiAodG8gPiAkcm93cy5sZW5ndGgpIHtcblx0XHRcdFx0XHR0byA9ICRyb3dzLmxlbmd0aDtcblx0XHRcdFx0fVxuXG5cdFx0XHRcdCRyb3dzLmhpZGUoKTtcblx0XHRcdFx0JHJvd3Muc2xpY2UoKGZyb20tMSksIHRvKS5zaG93KCk7XG5cblx0XHRcdFx0b2YuaW5uZXJIVE1MID0gZnJvbSArICcgw6AgJyArIHRvICsgJyBzdXIgJyArICRyb3dzLmxlbmd0aCArICcgbGlnbmVzJztcblxuXHRcdFx0XHRpZiAoJHJvd3MubGVuZ3RoIDw9IHNldHRpbmdzLnBlclBhZ2UpIHtcblx0XHRcdFx0XHQkKGNvbnRhaW5lcikuaGlkZSgpO1xuXHRcdFx0XHR9IGVsc2Uge1xuXHRcdFx0XHRcdCQoY29udGFpbmVyKS5zaG93KCk7XG5cdFx0XHRcdH1cblx0XHRcdH1cblx0XHR9KTtcblxuXHR9XG5cbn0oalF1ZXJ5KSk7XG4iLCJ2YXIgZ2xvYmFsID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2dsb2JhbCcpO1xudmFyIGZhaWxzID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2ZhaWxzJyk7XG52YXIgdW5jdXJyeVRoaXMgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZnVuY3Rpb24tdW5jdXJyeS10aGlzJyk7XG52YXIgdG9TdHJpbmcgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvdG8tc3RyaW5nJyk7XG52YXIgdHJpbSA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9zdHJpbmctdHJpbScpLnRyaW07XG52YXIgd2hpdGVzcGFjZXMgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvd2hpdGVzcGFjZXMnKTtcblxudmFyIGNoYXJBdCA9IHVuY3VycnlUaGlzKCcnLmNoYXJBdCk7XG52YXIgJHBhcnNlRmxvYXQgPSBnbG9iYWwucGFyc2VGbG9hdDtcbnZhciBTeW1ib2wgPSBnbG9iYWwuU3ltYm9sO1xudmFyIElURVJBVE9SID0gU3ltYm9sICYmIFN5bWJvbC5pdGVyYXRvcjtcbnZhciBGT1JDRUQgPSAxIC8gJHBhcnNlRmxvYXQod2hpdGVzcGFjZXMgKyAnLTAnKSAhPT0gLUluZmluaXR5XG4gIC8vIE1TIEVkZ2UgMTgtIGJyb2tlbiB3aXRoIGJveGVkIHN5bWJvbHNcbiAgfHwgKElURVJBVE9SICYmICFmYWlscyhmdW5jdGlvbiAoKSB7ICRwYXJzZUZsb2F0KE9iamVjdChJVEVSQVRPUikpOyB9KSk7XG5cbi8vIGBwYXJzZUZsb2F0YCBtZXRob2Rcbi8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtcGFyc2VmbG9hdC1zdHJpbmdcbm1vZHVsZS5leHBvcnRzID0gRk9SQ0VEID8gZnVuY3Rpb24gcGFyc2VGbG9hdChzdHJpbmcpIHtcbiAgdmFyIHRyaW1tZWRTdHJpbmcgPSB0cmltKHRvU3RyaW5nKHN0cmluZykpO1xuICB2YXIgcmVzdWx0ID0gJHBhcnNlRmxvYXQodHJpbW1lZFN0cmluZyk7XG4gIHJldHVybiByZXN1bHQgPT09IDAgJiYgY2hhckF0KHRyaW1tZWRTdHJpbmcsIDApID09ICctJyA/IC0wIDogcmVzdWx0O1xufSA6ICRwYXJzZUZsb2F0O1xuIiwidmFyICQgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZXhwb3J0Jyk7XG52YXIgJHBhcnNlRmxvYXQgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvbnVtYmVyLXBhcnNlLWZsb2F0Jyk7XG5cbi8vIGBwYXJzZUZsb2F0YCBtZXRob2Rcbi8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtcGFyc2VmbG9hdC1zdHJpbmdcbiQoeyBnbG9iYWw6IHRydWUsIGZvcmNlZDogcGFyc2VGbG9hdCAhPSAkcGFyc2VGbG9hdCB9LCB7XG4gIHBhcnNlRmxvYXQ6ICRwYXJzZUZsb2F0XG59KTtcbiIsInZhciBtYXAgPSB7XG5cdFwiLi9hZlwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYWYuanNcIixcblx0XCIuL2FmLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hZi5qc1wiLFxuXHRcIi4vYXJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLmpzXCIsXG5cdFwiLi9hci1kelwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItZHouanNcIixcblx0XCIuL2FyLWR6LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1kei5qc1wiLFxuXHRcIi4vYXIta3dcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLWt3LmpzXCIsXG5cdFwiLi9hci1rdy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXIta3cuanNcIixcblx0XCIuL2FyLWx5XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1seS5qc1wiLFxuXHRcIi4vYXItbHkuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLWx5LmpzXCIsXG5cdFwiLi9hci1tYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItbWEuanNcIixcblx0XCIuL2FyLW1hLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1tYS5qc1wiLFxuXHRcIi4vYXItcHNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLXBzLmpzXCIsXG5cdFwiLi9hci1wcy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItcHMuanNcIixcblx0XCIuL2FyLXNhXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1zYS5qc1wiLFxuXHRcIi4vYXItc2EuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLXNhLmpzXCIsXG5cdFwiLi9hci10blwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItdG4uanNcIixcblx0XCIuL2FyLXRuLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci10bi5qc1wiLFxuXHRcIi4vYXIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLmpzXCIsXG5cdFwiLi9helwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXouanNcIixcblx0XCIuL2F6LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hei5qc1wiLFxuXHRcIi4vYmVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JlLmpzXCIsXG5cdFwiLi9iZS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYmUuanNcIixcblx0XCIuL2JnXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9iZy5qc1wiLFxuXHRcIi4vYmcuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JnLmpzXCIsXG5cdFwiLi9ibVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYm0uanNcIixcblx0XCIuL2JtLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ibS5qc1wiLFxuXHRcIi4vYm5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JuLmpzXCIsXG5cdFwiLi9ibi1iZFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYm4tYmQuanNcIixcblx0XCIuL2JuLWJkLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ibi1iZC5qc1wiLFxuXHRcIi4vYm4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JuLmpzXCIsXG5cdFwiLi9ib1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYm8uanNcIixcblx0XCIuL2JvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9iby5qc1wiLFxuXHRcIi4vYnJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JyLmpzXCIsXG5cdFwiLi9ici5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYnIuanNcIixcblx0XCIuL2JzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9icy5qc1wiLFxuXHRcIi4vYnMuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JzLmpzXCIsXG5cdFwiLi9jYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvY2EuanNcIixcblx0XCIuL2NhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9jYS5qc1wiLFxuXHRcIi4vY3NcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2NzLmpzXCIsXG5cdFwiLi9jcy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvY3MuanNcIixcblx0XCIuL2N2XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9jdi5qc1wiLFxuXHRcIi4vY3YuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2N2LmpzXCIsXG5cdFwiLi9jeVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvY3kuanNcIixcblx0XCIuL2N5LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9jeS5qc1wiLFxuXHRcIi4vZGFcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2RhLmpzXCIsXG5cdFwiLi9kYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZGEuanNcIixcblx0XCIuL2RlXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kZS5qc1wiLFxuXHRcIi4vZGUtYXRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2RlLWF0LmpzXCIsXG5cdFwiLi9kZS1hdC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZGUtYXQuanNcIixcblx0XCIuL2RlLWNoXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kZS1jaC5qc1wiLFxuXHRcIi4vZGUtY2guanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2RlLWNoLmpzXCIsXG5cdFwiLi9kZS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZGUuanNcIixcblx0XCIuL2R2XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kdi5qc1wiLFxuXHRcIi4vZHYuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2R2LmpzXCIsXG5cdFwiLi9lbFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZWwuanNcIixcblx0XCIuL2VsLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbC5qc1wiLFxuXHRcIi4vZW4tYXVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWF1LmpzXCIsXG5cdFwiLi9lbi1hdS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tYXUuanNcIixcblx0XCIuL2VuLWNhXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1jYS5qc1wiLFxuXHRcIi4vZW4tY2EuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWNhLmpzXCIsXG5cdFwiLi9lbi1nYlwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tZ2IuanNcIixcblx0XCIuL2VuLWdiLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1nYi5qc1wiLFxuXHRcIi4vZW4taWVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWllLmpzXCIsXG5cdFwiLi9lbi1pZS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4taWUuanNcIixcblx0XCIuL2VuLWlsXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1pbC5qc1wiLFxuXHRcIi4vZW4taWwuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWlsLmpzXCIsXG5cdFwiLi9lbi1pblwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4taW4uanNcIixcblx0XCIuL2VuLWluLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1pbi5qc1wiLFxuXHRcIi4vZW4tbnpcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLW56LmpzXCIsXG5cdFwiLi9lbi1uei5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tbnouanNcIixcblx0XCIuL2VuLXNnXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1zZy5qc1wiLFxuXHRcIi4vZW4tc2cuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLXNnLmpzXCIsXG5cdFwiLi9lb1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW8uanNcIixcblx0XCIuL2VvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lby5qc1wiLFxuXHRcIi4vZXNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VzLmpzXCIsXG5cdFwiLi9lcy1kb1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXMtZG8uanNcIixcblx0XCIuL2VzLWRvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lcy1kby5qc1wiLFxuXHRcIi4vZXMtbXhcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VzLW14LmpzXCIsXG5cdFwiLi9lcy1teC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXMtbXguanNcIixcblx0XCIuL2VzLXVzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lcy11cy5qc1wiLFxuXHRcIi4vZXMtdXMuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VzLXVzLmpzXCIsXG5cdFwiLi9lcy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXMuanNcIixcblx0XCIuL2V0XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ldC5qc1wiLFxuXHRcIi4vZXQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2V0LmpzXCIsXG5cdFwiLi9ldVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXUuanNcIixcblx0XCIuL2V1LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ldS5qc1wiLFxuXHRcIi4vZmFcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZhLmpzXCIsXG5cdFwiLi9mYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZmEuanNcIixcblx0XCIuL2ZpXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9maS5qc1wiLFxuXHRcIi4vZmkuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZpLmpzXCIsXG5cdFwiLi9maWxcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZpbC5qc1wiLFxuXHRcIi4vZmlsLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9maWwuanNcIixcblx0XCIuL2ZvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mby5qc1wiLFxuXHRcIi4vZm8uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZvLmpzXCIsXG5cdFwiLi9mclwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZnIuanNcIixcblx0XCIuL2ZyLWNhXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mci1jYS5qc1wiLFxuXHRcIi4vZnItY2EuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZyLWNhLmpzXCIsXG5cdFwiLi9mci1jaFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZnItY2guanNcIixcblx0XCIuL2ZyLWNoLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mci1jaC5qc1wiLFxuXHRcIi4vZnIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZyLmpzXCIsXG5cdFwiLi9meVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZnkuanNcIixcblx0XCIuL2Z5LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9meS5qc1wiLFxuXHRcIi4vZ2FcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dhLmpzXCIsXG5cdFwiLi9nYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ2EuanNcIixcblx0XCIuL2dkXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nZC5qc1wiLFxuXHRcIi4vZ2QuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dkLmpzXCIsXG5cdFwiLi9nbFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ2wuanNcIixcblx0XCIuL2dsLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nbC5qc1wiLFxuXHRcIi4vZ29tLWRldmFcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dvbS1kZXZhLmpzXCIsXG5cdFwiLi9nb20tZGV2YS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ29tLWRldmEuanNcIixcblx0XCIuL2dvbS1sYXRuXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nb20tbGF0bi5qc1wiLFxuXHRcIi4vZ29tLWxhdG4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dvbS1sYXRuLmpzXCIsXG5cdFwiLi9ndVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ3UuanNcIixcblx0XCIuL2d1LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ndS5qc1wiLFxuXHRcIi4vaGVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2hlLmpzXCIsXG5cdFwiLi9oZS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaGUuanNcIixcblx0XCIuL2hpXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9oaS5qc1wiLFxuXHRcIi4vaGkuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2hpLmpzXCIsXG5cdFwiLi9oclwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaHIuanNcIixcblx0XCIuL2hyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9oci5qc1wiLFxuXHRcIi4vaHVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2h1LmpzXCIsXG5cdFwiLi9odS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaHUuanNcIixcblx0XCIuL2h5LWFtXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9oeS1hbS5qc1wiLFxuXHRcIi4vaHktYW0uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2h5LWFtLmpzXCIsXG5cdFwiLi9pZFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaWQuanNcIixcblx0XCIuL2lkLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9pZC5qc1wiLFxuXHRcIi4vaXNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2lzLmpzXCIsXG5cdFwiLi9pcy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaXMuanNcIixcblx0XCIuL2l0XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9pdC5qc1wiLFxuXHRcIi4vaXQtY2hcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2l0LWNoLmpzXCIsXG5cdFwiLi9pdC1jaC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaXQtY2guanNcIixcblx0XCIuL2l0LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9pdC5qc1wiLFxuXHRcIi4vamFcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2phLmpzXCIsXG5cdFwiLi9qYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvamEuanNcIixcblx0XCIuL2p2XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9qdi5qc1wiLFxuXHRcIi4vanYuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2p2LmpzXCIsXG5cdFwiLi9rYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva2EuanNcIixcblx0XCIuL2thLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rYS5qc1wiLFxuXHRcIi4va2tcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2trLmpzXCIsXG5cdFwiLi9ray5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva2suanNcIixcblx0XCIuL2ttXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rbS5qc1wiLFxuXHRcIi4va20uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ttLmpzXCIsXG5cdFwiLi9rblwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva24uanNcIixcblx0XCIuL2tuLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rbi5qc1wiLFxuXHRcIi4va29cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2tvLmpzXCIsXG5cdFwiLi9rby5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva28uanNcIixcblx0XCIuL2t1XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rdS5qc1wiLFxuXHRcIi4va3Uta21yXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rdS1rbXIuanNcIixcblx0XCIuL2t1LWttci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva3Uta21yLmpzXCIsXG5cdFwiLi9rdS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva3UuanNcIixcblx0XCIuL2t5XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9reS5qc1wiLFxuXHRcIi4va3kuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2t5LmpzXCIsXG5cdFwiLi9sYlwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbGIuanNcIixcblx0XCIuL2xiLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9sYi5qc1wiLFxuXHRcIi4vbG9cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2xvLmpzXCIsXG5cdFwiLi9sby5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbG8uanNcIixcblx0XCIuL2x0XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9sdC5qc1wiLFxuXHRcIi4vbHQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2x0LmpzXCIsXG5cdFwiLi9sdlwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbHYuanNcIixcblx0XCIuL2x2LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9sdi5qc1wiLFxuXHRcIi4vbWVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21lLmpzXCIsXG5cdFwiLi9tZS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbWUuanNcIixcblx0XCIuL21pXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9taS5qc1wiLFxuXHRcIi4vbWkuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21pLmpzXCIsXG5cdFwiLi9ta1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbWsuanNcIixcblx0XCIuL21rLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tay5qc1wiLFxuXHRcIi4vbWxcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21sLmpzXCIsXG5cdFwiLi9tbC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbWwuanNcIixcblx0XCIuL21uXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tbi5qc1wiLFxuXHRcIi4vbW4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21uLmpzXCIsXG5cdFwiLi9tclwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXIuanNcIixcblx0XCIuL21yLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tci5qc1wiLFxuXHRcIi4vbXNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21zLmpzXCIsXG5cdFwiLi9tcy1teVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXMtbXkuanNcIixcblx0XCIuL21zLW15LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tcy1teS5qc1wiLFxuXHRcIi4vbXMuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21zLmpzXCIsXG5cdFwiLi9tdFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXQuanNcIixcblx0XCIuL210LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tdC5qc1wiLFxuXHRcIi4vbXlcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL215LmpzXCIsXG5cdFwiLi9teS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXkuanNcIixcblx0XCIuL25iXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9uYi5qc1wiLFxuXHRcIi4vbmIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25iLmpzXCIsXG5cdFwiLi9uZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbmUuanNcIixcblx0XCIuL25lLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9uZS5qc1wiLFxuXHRcIi4vbmxcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25sLmpzXCIsXG5cdFwiLi9ubC1iZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbmwtYmUuanNcIixcblx0XCIuL25sLWJlLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ubC1iZS5qc1wiLFxuXHRcIi4vbmwuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25sLmpzXCIsXG5cdFwiLi9ublwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbm4uanNcIixcblx0XCIuL25uLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ubi5qc1wiLFxuXHRcIi4vb2MtbG5jXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9vYy1sbmMuanNcIixcblx0XCIuL29jLWxuYy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvb2MtbG5jLmpzXCIsXG5cdFwiLi9wYS1pblwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcGEtaW4uanNcIixcblx0XCIuL3BhLWluLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9wYS1pbi5qc1wiLFxuXHRcIi4vcGxcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3BsLmpzXCIsXG5cdFwiLi9wbC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcGwuanNcIixcblx0XCIuL3B0XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9wdC5qc1wiLFxuXHRcIi4vcHQtYnJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3B0LWJyLmpzXCIsXG5cdFwiLi9wdC1ici5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcHQtYnIuanNcIixcblx0XCIuL3B0LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9wdC5qc1wiLFxuXHRcIi4vcm9cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3JvLmpzXCIsXG5cdFwiLi9yby5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcm8uanNcIixcblx0XCIuL3J1XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ydS5qc1wiLFxuXHRcIi4vcnUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3J1LmpzXCIsXG5cdFwiLi9zZFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2QuanNcIixcblx0XCIuL3NkLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zZC5qc1wiLFxuXHRcIi4vc2VcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NlLmpzXCIsXG5cdFwiLi9zZS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2UuanNcIixcblx0XCIuL3NpXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zaS5qc1wiLFxuXHRcIi4vc2kuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NpLmpzXCIsXG5cdFwiLi9za1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2suanNcIixcblx0XCIuL3NrLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zay5qc1wiLFxuXHRcIi4vc2xcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NsLmpzXCIsXG5cdFwiLi9zbC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2wuanNcIixcblx0XCIuL3NxXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zcS5qc1wiLFxuXHRcIi4vc3EuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NxLmpzXCIsXG5cdFwiLi9zclwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3IuanNcIixcblx0XCIuL3NyLWN5cmxcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NyLWN5cmwuanNcIixcblx0XCIuL3NyLWN5cmwuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NyLWN5cmwuanNcIixcblx0XCIuL3NyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zci5qc1wiLFxuXHRcIi4vc3NcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NzLmpzXCIsXG5cdFwiLi9zcy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3MuanNcIixcblx0XCIuL3N2XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zdi5qc1wiLFxuXHRcIi4vc3YuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3N2LmpzXCIsXG5cdFwiLi9zd1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3cuanNcIixcblx0XCIuL3N3LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zdy5qc1wiLFxuXHRcIi4vdGFcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RhLmpzXCIsXG5cdFwiLi90YS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGEuanNcIixcblx0XCIuL3RlXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90ZS5qc1wiLFxuXHRcIi4vdGUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RlLmpzXCIsXG5cdFwiLi90ZXRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RldC5qc1wiLFxuXHRcIi4vdGV0LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90ZXQuanNcIixcblx0XCIuL3RnXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90Zy5qc1wiLFxuXHRcIi4vdGcuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RnLmpzXCIsXG5cdFwiLi90aFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGguanNcIixcblx0XCIuL3RoLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90aC5qc1wiLFxuXHRcIi4vdGtcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RrLmpzXCIsXG5cdFwiLi90ay5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGsuanNcIixcblx0XCIuL3RsLXBoXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90bC1waC5qc1wiLFxuXHRcIi4vdGwtcGguanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RsLXBoLmpzXCIsXG5cdFwiLi90bGhcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RsaC5qc1wiLFxuXHRcIi4vdGxoLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90bGguanNcIixcblx0XCIuL3RyXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90ci5qc1wiLFxuXHRcIi4vdHIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RyLmpzXCIsXG5cdFwiLi90emxcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3R6bC5qc1wiLFxuXHRcIi4vdHpsLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90emwuanNcIixcblx0XCIuL3R6bVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdHptLmpzXCIsXG5cdFwiLi90em0tbGF0blwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdHptLWxhdG4uanNcIixcblx0XCIuL3R6bS1sYXRuLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90em0tbGF0bi5qc1wiLFxuXHRcIi4vdHptLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90em0uanNcIixcblx0XCIuL3VnLWNuXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91Zy1jbi5qc1wiLFxuXHRcIi4vdWctY24uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3VnLWNuLmpzXCIsXG5cdFwiLi91a1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdWsuanNcIixcblx0XCIuL3VrLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91ay5qc1wiLFxuXHRcIi4vdXJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3VyLmpzXCIsXG5cdFwiLi91ci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdXIuanNcIixcblx0XCIuL3V6XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91ei5qc1wiLFxuXHRcIi4vdXotbGF0blwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdXotbGF0bi5qc1wiLFxuXHRcIi4vdXotbGF0bi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdXotbGF0bi5qc1wiLFxuXHRcIi4vdXouanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3V6LmpzXCIsXG5cdFwiLi92aVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdmkuanNcIixcblx0XCIuL3ZpLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS92aS5qc1wiLFxuXHRcIi4veC1wc2V1ZG9cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3gtcHNldWRvLmpzXCIsXG5cdFwiLi94LXBzZXVkby5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUveC1wc2V1ZG8uanNcIixcblx0XCIuL3lvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS95by5qc1wiLFxuXHRcIi4veW8uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3lvLmpzXCIsXG5cdFwiLi96aC1jblwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvemgtY24uanNcIixcblx0XCIuL3poLWNuLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS96aC1jbi5qc1wiLFxuXHRcIi4vemgtaGtcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3poLWhrLmpzXCIsXG5cdFwiLi96aC1oay5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvemgtaGsuanNcIixcblx0XCIuL3poLW1vXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS96aC1tby5qc1wiLFxuXHRcIi4vemgtbW8uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3poLW1vLmpzXCIsXG5cdFwiLi96aC10d1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvemgtdHcuanNcIixcblx0XCIuL3poLXR3LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS96aC10dy5qc1wiXG59O1xuXG5cbmZ1bmN0aW9uIHdlYnBhY2tDb250ZXh0KHJlcSkge1xuXHR2YXIgaWQgPSB3ZWJwYWNrQ29udGV4dFJlc29sdmUocmVxKTtcblx0cmV0dXJuIF9fd2VicGFja19yZXF1aXJlX18oaWQpO1xufVxuZnVuY3Rpb24gd2VicGFja0NvbnRleHRSZXNvbHZlKHJlcSkge1xuXHRpZighX193ZWJwYWNrX3JlcXVpcmVfXy5vKG1hcCwgcmVxKSkge1xuXHRcdHZhciBlID0gbmV3IEVycm9yKFwiQ2Fubm90IGZpbmQgbW9kdWxlICdcIiArIHJlcSArIFwiJ1wiKTtcblx0XHRlLmNvZGUgPSAnTU9EVUxFX05PVF9GT1VORCc7XG5cdFx0dGhyb3cgZTtcblx0fVxuXHRyZXR1cm4gbWFwW3JlcV07XG59XG53ZWJwYWNrQ29udGV4dC5rZXlzID0gZnVuY3Rpb24gd2VicGFja0NvbnRleHRLZXlzKCkge1xuXHRyZXR1cm4gT2JqZWN0LmtleXMobWFwKTtcbn07XG53ZWJwYWNrQ29udGV4dC5yZXNvbHZlID0gd2VicGFja0NvbnRleHRSZXNvbHZlO1xubW9kdWxlLmV4cG9ydHMgPSB3ZWJwYWNrQ29udGV4dDtcbndlYnBhY2tDb250ZXh0LmlkID0gXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlIHN5bmMgcmVjdXJzaXZlIF5cXFxcLlxcXFwvLiokXCI7Il0sIm5hbWVzIjpbIlJlYWN0IiwidXNlRWZmZWN0IiwidXNlU3RhdGUiLCJjcmVhdGVSb290IiwiYXhpb3MiLCJSZWFjdEhUTUxUYWJsZVRvRXhjZWwiLCJOdW1iZXJGb3JtYXQiLCJNb21lbnQiLCIkIiwiVHJhdmF1eEpvdXIiLCJkZXZqb3VyIiwic2V0RGV2Sm91ciIsImJvbmpvdXIiLCJzZXRCb25Kb3VyIiwiY2Fpc2pvdXIiLCJzZXRDYWlzSm91ciIsImRlY2pvdXIiLCJzZXREZWNKb3VyIiwiZmFjam91ciIsInNldEZhY0pvdXIiLCJmZXRjaERldkpvdXIiLCJkZCIsIkpTT04iLCJwYXJzZSIsInZhbCIsImZldGNoQm9uSm91ciIsImZldGNoQ2Fpc0pvdXIiLCJmZXRjaERlY0pvdXIiLCJmZXRjaEZhY0pvdXIiLCJkZWp0dGMiLCJkZWpodCIsImRldmNvdW50IiwicmVuZGVyRGV2Sm91ciIsIm1hcCIsImRldiIsImNvcmJlaWxsZSIsInR5cGUiLCJjbGllbnQiLCJ0b3RhbHR0YyIsInRvdGFsaHQiLCJpZCIsInNoYXNoYSIsIm1hcmdpblJpZ2h0IiwiZGF0ZSIsImV0YXQiLCJkZXZhbGlkZURldmlzIiwidmFsaWRlRGV2aXMiLCJjaGFudGllciIsImlkZGV2aXMiLCJfX2h0bWwiLCJkZXZyZWZlcmVuY2UiLCJkb2J5dXNlciIsIm5vbSIsInRvVXBwZXJDYXNlIiwicHJlbm9tcyIsImJvanR0YyIsImJvamh0IiwiYm9uY291bnQiLCJyZW5kZXJCb25Kb3VyIiwiYm9uIiwiZGV2YWxpZGVCb24iLCJ2YWxpZGVCb24iLCJudW1ib24iLCJkZXZpcyIsImZvdXJuaXNzZXVyIiwiYm9ucmVmZXJlbmNlIiwibHZlanR0YyIsImx2ZWpodCIsImxpdnJlY291bnQiLCJyZW5kZXJMaXZyZUpvdXIiLCJjYWp0dGMiLCJjYWlzY291bnQiLCJyZW5kZXJDYWlzSm91ciIsImNhaXMiLCJtb250YW50IiwiZGV2YWxpZGVDYWlzc2UiLCJ2YWxpZGVDYWlzc2UiLCJudW1jYWlzc2UiLCJjYWlzc2UiLCJjYWlzc2VyZWZlcmVuY2UiLCJwZXJzb25uZWwiLCJub21zIiwiZGVjanR0YyIsImRlY2podCIsImRlY2NvdW50IiwicmVuZGVyRGVjSm91ciIsImRlYyIsInBhcnNlRmxvYXQiLCJ0dGMiLCJhcGF5ZXIiLCJkZXZhbGlkZURlY29tcHRlIiwidmFsaWRlRGVjb21wdGUiLCJudW1kZWNvbXB0ZSIsImZhY3R0YyIsImZhY2h0IiwiZmFjY291bnQiLCJyZW5kZXJGYWNKb3VyIiwiZmFjIiwiZGV2YWxpZGVGYWN0dXJlIiwidmFsaWRlRmFjdHVyZSIsIm51bWZhY3R1cmUiLCJhY29tcHRlIiwiZGVjb21wdGUiLCJmYWN0cmVmZXJlbmNlIiwicGFkZGluZ0xlZnQiLCJtYXJnaW5Ub3AiLCJmb250U2l6ZSIsImZvbnRXZWlnaHQiLCJvdmVyZmxvdyIsIndpZHRoIiwibWluV2lkdGgiLCJ3aGl0ZVNwYWNlIiwicm9vdCIsImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJyZW5kZXIiLCJlIiwicHJvcHMiLCJmb3JtYXROdW1iZXIiLCJudW0iLCJwcmVjaXNpb24iLCJzZXBhcmF0b3IiLCJwYXJ0cyIsIk51bWJlciIsInRvRml4ZWQiLCJ0b1N0cmluZyIsInNwbGl0IiwicmVwbGFjZSIsImpvaW4iLCJudW1iIiwiZm4iLCJzaW1wbGVQYWdpbmF0aW9uIiwib3B0aW9ucyIsImRlZmF1bHRzIiwicGVyUGFnZSIsImNvbnRhaW5lckNsYXNzIiwicHJldmlvdXNCdXR0b25DbGFzcyIsIm5leHRCdXR0b25DbGFzcyIsInByZXZpb3VzQnV0dG9uVGV4dCIsIm5leHRCdXR0b25UZXh0IiwiY3VycmVudFBhZ2UiLCJzZXR0aW5ncyIsImV4dGVuZCIsImVhY2giLCIkcm93cyIsInBhZ2VzIiwiTWF0aCIsImNlaWwiLCJsZW5ndGgiLCJjb250YWluZXIiLCJjcmVhdGVFbGVtZW50IiwiYlByZXZpb3VzIiwiYk5leHQiLCJvZiIsImlubmVySFRNTCIsImNsYXNzTmFtZSIsInN0eWxlIiwiY2xhc3NMaXN0IiwiYWRkIiwibWFyZ2luTGVmdCIsInRleHRBbGlnbiIsIm1hcmdpbkJvdHRvbSIsImFwcGVuZENoaWxkIiwiYWZ0ZXIiLCJ1cGRhdGUiLCJjbGljayIsImZyb20iLCJ0byIsImhpZGUiLCJzbGljZSIsInNob3ciLCJqUXVlcnkiXSwic291cmNlUm9vdCI6IiJ9