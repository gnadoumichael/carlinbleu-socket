"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _js_socket__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./js/socket */ "./assets/js/socket.js");
/* harmony import */ var _css_bootstrap_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./css/bootstrap.css */ "./assets/css/bootstrap.css");
/* harmony import */ var _css_mdb_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./css/mdb.css */ "./assets/css/mdb.css");
/* harmony import */ var _css_waves_css__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./css/waves.css */ "./assets/css/waves.css");
/* harmony import */ var _css_animate_css__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./css/animate.css */ "./assets/css/animate.css");
/* harmony import */ var _css_jquery_nestable_css__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./css/jquery-nestable.css */ "./assets/css/jquery-nestable.css");
/* harmony import */ var _css_all_themes_css__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./css/all-themes.css */ "./assets/css/all-themes.css");
/* harmony import */ var _css_select2_min_css__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./css/select2.min.css */ "./assets/css/select2.min.css");
/* harmony import */ var _css_Table_module_css__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./css/Table.module.css */ "./assets/css/Table.module.css");
/* harmony import */ var _css_TableFooter_module_css__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./css/TableFooter.module.css */ "./assets/css/TableFooter.module.css");
/* harmony import */ var _css_style_css__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./css/style.css */ "./assets/css/style.css");
/* harmony import */ var _css_bootstrap_datepicker_css__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./css/bootstrap-datepicker.css */ "./assets/css/bootstrap-datepicker.css");
/* harmony import */ var _css_bootstrap_material_datetimepicker_css__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ./css/bootstrap-material-datetimepicker.css */ "./assets/css/bootstrap-material-datetimepicker.css");
/* harmony import */ var _js_bootstrap_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./js/bootstrap.js */ "./assets/js/bootstrap.js");
/* harmony import */ var _js_datascript_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! ./js/datascript.js */ "./assets/js/datascript.js");
/* harmony import */ var _js_select2_min_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! ./js/select2.min.js */ "./assets/js/select2.min.js");
/* harmony import */ var _js_select2_min_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(_js_select2_min_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var _js_jquery_tableToExcel_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ./js/jquery.tableToExcel.js */ "./assets/js/jquery.tableToExcel.js");
/* harmony import */ var _js_jquery_tableToExcel_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(_js_jquery_tableToExcel_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var _js_jquery_nestable__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! ./js/jquery.nestable */ "./assets/js/jquery.nestable.js");
/* harmony import */ var _js_jquery_nestable__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(_js_jquery_nestable__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var _js_sortable_nestable__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! ./js/sortable-nestable */ "./assets/js/sortable-nestable.js");
/* harmony import */ var _js_sortable_nestable__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(_js_sortable_nestable__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var _js_jquery_validate_js__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! ./js/jquery.validate.js */ "./assets/js/jquery.validate.js");
/* harmony import */ var _js_jquery_validate_js__WEBPACK_IMPORTED_MODULE_19___default = /*#__PURE__*/__webpack_require__.n(_js_jquery_validate_js__WEBPACK_IMPORTED_MODULE_19__);
/* harmony import */ var _js_bootstrap_notify_js__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! ./js/bootstrap-notify.js */ "./assets/js/bootstrap-notify.js");
/* harmony import */ var _js_bootstrap_notify_js__WEBPACK_IMPORTED_MODULE_20___default = /*#__PURE__*/__webpack_require__.n(_js_bootstrap_notify_js__WEBPACK_IMPORTED_MODULE_20__);
/* harmony import */ var _js_notifications_js__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! ./js/notifications.js */ "./assets/js/notifications.js");
/* harmony import */ var _js_notifications_js__WEBPACK_IMPORTED_MODULE_21___default = /*#__PURE__*/__webpack_require__.n(_js_notifications_js__WEBPACK_IMPORTED_MODULE_21__);
/* harmony import */ var _js_autosize_js__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! ./js/autosize.js */ "./assets/js/autosize.js");
/* harmony import */ var _js_autosize_js__WEBPACK_IMPORTED_MODULE_22___default = /*#__PURE__*/__webpack_require__.n(_js_autosize_js__WEBPACK_IMPORTED_MODULE_22__);
/* harmony import */ var _js_bootstrap_material_datetimepicker_js__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! ./js/bootstrap-material-datetimepicker.js */ "./assets/js/bootstrap-material-datetimepicker.js");
/* harmony import */ var _js_bootstrap_datepicker_js__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! ./js/bootstrap-datepicker.js */ "./assets/js/bootstrap-datepicker.js");
/* harmony import */ var _js_bootstrap_datepicker_js__WEBPACK_IMPORTED_MODULE_24___default = /*#__PURE__*/__webpack_require__.n(_js_bootstrap_datepicker_js__WEBPACK_IMPORTED_MODULE_24__);
/* harmony import */ var _js_admin_js__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! ./js/admin.js */ "./assets/js/admin.js");
/* harmony import */ var _js_admin_js__WEBPACK_IMPORTED_MODULE_25___default = /*#__PURE__*/__webpack_require__.n(_js_admin_js__WEBPACK_IMPORTED_MODULE_25__);
/* harmony import */ var _js_basic_form_elements_js__WEBPACK_IMPORTED_MODULE_26__ = __webpack_require__(/*! ./js/basic-form-elements.js */ "./assets/js/basic-form-elements.js");
/* harmony import */ var _js_jquery_timeago_js__WEBPACK_IMPORTED_MODULE_27__ = __webpack_require__(/*! ./js/jquery.timeago.js */ "./assets/js/jquery.timeago.js");
/* harmony import */ var _js_jquery_timeago_js__WEBPACK_IMPORTED_MODULE_27___default = /*#__PURE__*/__webpack_require__.n(_js_jquery_timeago_js__WEBPACK_IMPORTED_MODULE_27__);
/* harmony import */ var _components_chantiers_DataFirst__WEBPACK_IMPORTED_MODULE_28__ = __webpack_require__(/*! ./components/chantiers/DataFirst */ "./assets/components/chantiers/DataFirst.js");
/* harmony import */ var _components_chantiers_Planing__WEBPACK_IMPORTED_MODULE_29__ = __webpack_require__(/*! ./components/chantiers/Planing */ "./assets/components/chantiers/Planing.js");
/* harmony import */ var _components_chantiers_Taching__WEBPACK_IMPORTED_MODULE_30__ = __webpack_require__(/*! ./components/chantiers/Taching */ "./assets/components/chantiers/Taching.js");
/* harmony import */ var _components_chantiers_Chatter__WEBPACK_IMPORTED_MODULE_31__ = __webpack_require__(/*! ./components/chantiers/Chatter */ "./assets/components/chantiers/Chatter.js");

































/***/ }),

/***/ "./assets/components/chantiers/Chatter.js":
/*!************************************************!*\
  !*** ./assets/components/chantiers/Chatter.js ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_sort_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.sort.js */ "./node_modules/core-js/modules/es.array.sort.js");
/* harmony import */ var core_js_modules_es_array_sort_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_sort_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.date.to-string.js */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/web.timers.js */ "./node_modules/core-js/modules/web.timers.js");
/* harmony import */ var core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_last_index_of_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.last-index-of.js */ "./node_modules/core-js/modules/es.array.last-index-of.js");
/* harmony import */ var core_js_modules_es_array_last_index_of_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_last_index_of_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.map.js */ "./node_modules/core-js/modules/es.array.map.js");
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.parse-int.js */ "./node_modules/core-js/modules/es.parse-int.js");
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.array.filter.js */ "./node_modules/core-js/modules/es.array.filter.js");
/* harmony import */ var core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.array.index-of.js */ "./node_modules/core-js/modules/es.array.index-of.js");
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.number.constructor.js */ "./node_modules/core-js/modules/es.number.constructor.js");
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.array.is-array.js */ "./node_modules/core-js/modules/es.array.is-array.js");
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! core-js/modules/es.array.from.js */ "./node_modules/core-js/modules/es.array.from.js");
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_19___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_19__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_20___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_20__);
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_21___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_21__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_22___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_22__);
/* harmony import */ var core_js_modules_es_symbol_async_iterator_js__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! core-js/modules/es.symbol.async-iterator.js */ "./node_modules/core-js/modules/es.symbol.async-iterator.js");
/* harmony import */ var core_js_modules_es_symbol_async_iterator_js__WEBPACK_IMPORTED_MODULE_23___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_async_iterator_js__WEBPACK_IMPORTED_MODULE_23__);
/* harmony import */ var core_js_modules_es_symbol_to_string_tag_js__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! core-js/modules/es.symbol.to-string-tag.js */ "./node_modules/core-js/modules/es.symbol.to-string-tag.js");
/* harmony import */ var core_js_modules_es_symbol_to_string_tag_js__WEBPACK_IMPORTED_MODULE_24___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_to_string_tag_js__WEBPACK_IMPORTED_MODULE_24__);
/* harmony import */ var core_js_modules_es_json_to_string_tag_js__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! core-js/modules/es.json.to-string-tag.js */ "./node_modules/core-js/modules/es.json.to-string-tag.js");
/* harmony import */ var core_js_modules_es_json_to_string_tag_js__WEBPACK_IMPORTED_MODULE_25___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_json_to_string_tag_js__WEBPACK_IMPORTED_MODULE_25__);
/* harmony import */ var core_js_modules_es_math_to_string_tag_js__WEBPACK_IMPORTED_MODULE_26__ = __webpack_require__(/*! core-js/modules/es.math.to-string-tag.js */ "./node_modules/core-js/modules/es.math.to-string-tag.js");
/* harmony import */ var core_js_modules_es_math_to_string_tag_js__WEBPACK_IMPORTED_MODULE_26___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_math_to_string_tag_js__WEBPACK_IMPORTED_MODULE_26__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_27__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_27___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_27__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_28__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_28___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_28__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_29__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_29___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_29__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_30__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_30___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_30__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_31__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_31___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_31__);
/* harmony import */ var core_js_modules_es_array_reverse_js__WEBPACK_IMPORTED_MODULE_32__ = __webpack_require__(/*! core-js/modules/es.array.reverse.js */ "./node_modules/core-js/modules/es.array.reverse.js");
/* harmony import */ var core_js_modules_es_array_reverse_js__WEBPACK_IMPORTED_MODULE_32___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_reverse_js__WEBPACK_IMPORTED_MODULE_32__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_33__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_33___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_33__);
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_34__ = __webpack_require__(/*! react-dom/client */ "./node_modules/react-dom/client.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_40__ = __webpack_require__(/*! axios */ "./node_modules/axios/lib/axios.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_35__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_35___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_35__);
/* harmony import */ var moment__WEBPACK_IMPORTED_MODULE_36__ = __webpack_require__(/*! moment */ "./node_modules/moment/moment.js");
/* harmony import */ var moment__WEBPACK_IMPORTED_MODULE_36___default = /*#__PURE__*/__webpack_require__.n(moment__WEBPACK_IMPORTED_MODULE_36__);
/* harmony import */ var react_device_detect__WEBPACK_IMPORTED_MODULE_37__ = __webpack_require__(/*! react-device-detect */ "./node_modules/react-device-detect/dist/lib.js");
/* harmony import */ var react_quill__WEBPACK_IMPORTED_MODULE_38__ = __webpack_require__(/*! react-quill */ "./node_modules/react-quill/lib/index.js");
/* harmony import */ var react_quill__WEBPACK_IMPORTED_MODULE_38___default = /*#__PURE__*/__webpack_require__.n(react_quill__WEBPACK_IMPORTED_MODULE_38__);
/* harmony import */ var react_quill_dist_quill_snow_css__WEBPACK_IMPORTED_MODULE_39__ = __webpack_require__(/*! react-quill/dist/quill.snow.css */ "./node_modules/react-quill/dist/quill.snow.css");
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









var Chatter = function Chatter() {
  var _useState = (0,react__WEBPACK_IMPORTED_MODULE_33__.useState)(''),
    _useState2 = _slicedToArray(_useState, 2),
    messa = _useState2[0],
    setMessa = _useState2[1];
  var _useState3 = (0,react__WEBPACK_IMPORTED_MODULE_33__.useState)([]),
    _useState4 = _slicedToArray(_useState3, 2),
    chats = _useState4[0],
    setChats = _useState4[1];
  var _useState5 = (0,react__WEBPACK_IMPORTED_MODULE_33__.useState)([]),
    _useState6 = _slicedToArray(_useState5, 2),
    taches = _useState6[0],
    setTaches = _useState6[1];
  var _useState7 = (0,react__WEBPACK_IMPORTED_MODULE_33__.useState)([]),
    _useState8 = _slicedToArray(_useState7, 2),
    users = _useState8[0],
    setUsers = _useState8[1];
  var _useState9 = (0,react__WEBPACK_IMPORTED_MODULE_33__.useState)(null),
    _useState10 = _slicedToArray(_useState9, 2),
    receive = _useState10[0],
    setReceive = _useState10[1];
  var _useState11 = (0,react__WEBPACK_IMPORTED_MODULE_33__.useState)(),
    _useState12 = _slicedToArray(_useState11, 2),
    rece = _useState12[0],
    setRece = _useState12[1];
  var _useState13 = (0,react__WEBPACK_IMPORTED_MODULE_33__.useState)(),
    _useState14 = _slicedToArray(_useState13, 2),
    mess = _useState14[0],
    setMess = _useState14[1];
  var link = " ";
  var listtache = [];
  var listtaches = [];
  var listk = [];
  var renderTaches;
  var fetchUsers = /*#__PURE__*/function () {
    var _ref = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee() {
      return _regeneratorRuntime().wrap(function _callee$(_context) {
        while (1) switch (_context.prev = _context.next) {
          case 0:
            (0,axios__WEBPACK_IMPORTED_MODULE_40__["default"])({
              method: 'GET',
              url: '/crm/start/users/get',
              contentType: 'application/json; charset=utf-8'
            }).then(function (response) {
              setUsers(response.data);
            })["catch"](function (error) {});
          case 1:
          case "end":
            return _context.stop();
        }
      }, _callee);
    }));
    return function fetchUsers() {
      return _ref.apply(this, arguments);
    };
  }();
  var fetchChats = /*#__PURE__*/function () {
    var _ref2 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee2() {
      var az;
      return _regeneratorRuntime().wrap(function _callee2$(_context2) {
        while (1) switch (_context2.prev = _context2.next) {
          case 0:
            az = localStorage.getItem("receiverid");
            if (az !== null) {
              if (localStorage.getItem("type") === "chat") {
                jquery__WEBPACK_IMPORTED_MODULE_35___default()("#uuer").attr("src", "/gallery/" + localStorage.getItem("receiverphoto"));
                jquery__WEBPACK_IMPORTED_MODULE_35___default()("#chatcontent").animate({
                  scrollTop: jquery__WEBPACK_IMPORTED_MODULE_35___default()('#chatcontent').height() + 25000
                }, 500);
                if (localStorage.getItem("receiverphoto") !== "null") {
                  jquery__WEBPACK_IMPORTED_MODULE_35___default()("#uuer").attr("src", "/gallery/" + localStorage.getItem("receiverphoto"));
                  jquery__WEBPACK_IMPORTED_MODULE_35___default()("#uuer").css("visibility", "visible");
                  jquery__WEBPACK_IMPORTED_MODULE_35___default()(".clico").css("visibility", "visible");
                } else {
                  jquery__WEBPACK_IMPORTED_MODULE_35___default()("#uuer").attr("src", "/gallery/usere.png");
                  jquery__WEBPACK_IMPORTED_MODULE_35___default()("#uuer").css("visibility", "visible");
                  jquery__WEBPACK_IMPORTED_MODULE_35___default()(".clico").css("visibility", "visible");
                }
                jquery__WEBPACK_IMPORTED_MODULE_35___default()("#uuer").css("visibility", "visible");
                jquery__WEBPACK_IMPORTED_MODULE_35___default()(".clico").css("visibility", "visible");
                jquery__WEBPACK_IMPORTED_MODULE_35___default()('.useselected').html(localStorage.getItem("receivernom"));
                (0,axios__WEBPACK_IMPORTED_MODULE_40__["default"])({
                  method: 'GET',
                  url: '/crm/chat/get/' + az + '/' + jquery__WEBPACK_IMPORTED_MODULE_35___default()('#current').val(),
                  contentType: 'application/json; charset=utf-8'
                }).then(function (response) {
                  var dd = response.data;
                  var sorted = dd.sort(function (a, b) {
                    return new Date(a.date) - new Date(b.date);
                  });
                  setChats(sorted);
                })["catch"](function (error) {});
              }
              if (localStorage.getItem("type") === "tache") {
                jquery__WEBPACK_IMPORTED_MODULE_35___default()("#uuer").attr("src", "/img/" + localStorage.getItem("receiverphoto"));
                jquery__WEBPACK_IMPORTED_MODULE_35___default()("#chatcontent").animate({
                  scrollTop: jquery__WEBPACK_IMPORTED_MODULE_35___default()('#chatcontent').height() + 25000
                }, 500);
                jquery__WEBPACK_IMPORTED_MODULE_35___default()("#uuer").attr("src", "/img/" + localStorage.getItem("receiverphoto"));
                jquery__WEBPACK_IMPORTED_MODULE_35___default()("#uuer").css("visibility", "visible");
                jquery__WEBPACK_IMPORTED_MODULE_35___default()(".clico").css("visibility", "visible");
                jquery__WEBPACK_IMPORTED_MODULE_35___default()("#uuer").css("visibility", "visible");
                jquery__WEBPACK_IMPORTED_MODULE_35___default()(".clico").css("visibility", "visible");
                jquery__WEBPACK_IMPORTED_MODULE_35___default()('.useselected').html(localStorage.getItem("receivernom"));
                (0,axios__WEBPACK_IMPORTED_MODULE_40__["default"])({
                  method: 'GET',
                  url: '/crm/chat/tache/get/' + az,
                  contentType: 'application/json; charset=utf-8'
                }).then(function (response) {
                  var dd = response.data;
                  var sorted = dd.sort(function (a, b) {
                    return new Date(a.date) - new Date(b.date);
                  });
                  setChats(sorted);
                })["catch"](function (error) {});
              }
            }
          case 2:
          case "end":
            return _context2.stop();
        }
      }, _callee2);
    }));
    return function fetchChats() {
      return _ref2.apply(this, arguments);
    };
  }();
  var fetchTaches = /*#__PURE__*/function () {
    var _ref3 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee3() {
      return _regeneratorRuntime().wrap(function _callee3$(_context3) {
        while (1) switch (_context3.prev = _context3.next) {
          case 0:
            (0,axios__WEBPACK_IMPORTED_MODULE_40__["default"])({
              method: 'GET',
              url: '/crm/chat/tacher/get',
              contentType: 'application/json; charset=utf-8'
            }).then(function (response) {
              setTaches(response.data);
            })["catch"](function (error) {});
          case 1:
          case "end":
            return _context3.stop();
        }
      }, _callee3);
    }));
    return function fetchTaches() {
      return _ref3.apply(this, arguments);
    };
  }();
  (0,react__WEBPACK_IMPORTED_MODULE_33__.useEffect)(function () {
    jQuery(document).ready(function () {
      jQuery("time.timeago").timeago();
      jQuery.timeago.settings.strings = {
        prefixAgo: "il y a",
        prefixFromNow: null,
        suffixAgo: null,
        suffixFromNow: "d'ici",
        seconds: "moins d'une minute",
        minute: "une minute",
        minutes: "%d minutes",
        hour: "une heure",
        hours: "%d heures",
        day: "un jour",
        days: "%d jours",
        month: "un mois",
        months: "%d mois",
        year: "un an",
        years: "%d ans",
        wordSeparator: " ",
        numbers: []
      };
    });
    fetchUsers();
    fetchTaches();
    jquery__WEBPACK_IMPORTED_MODULE_35___default()('.clico').removeClass("hide");
    var interval = setInterval(function () {
      fetchChats();
    }, 10000);
    return function () {
      return clearInterval(interval);
    };
  }, []);
  function openFile(file) {
    var extension = file.substr(file.lastIndexOf('.') + 1);
    switch (extension) {
      case 'jpg':
      case 'png':
      case 'gif':
        return 'image';
      case 'zip':
      case 'rar':
        return 'rar';
      case 'pdf':
        return 'pdf';
      case 'xls':
      case 'xlsx':
        return 'excel';
      case 'doc':
      case 'docx':
        return 'word';
      default:
        return 'unknow';
    }
  }
  jquery__WEBPACK_IMPORTED_MODULE_35___default()(function () {
    jquery__WEBPACK_IMPORTED_MODULE_35___default()(".getu").each(function () {
      jquery__WEBPACK_IMPORTED_MODULE_35___default()(this).off().on("click", /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee4() {
        var pp, uu, sele;
        return _regeneratorRuntime().wrap(function _callee4$(_context4) {
          while (1) switch (_context4.prev = _context4.next) {
            case 0:
              jquery__WEBPACK_IMPORTED_MODULE_35___default()('#tt3').removeClass("active");
              jquery__WEBPACK_IMPORTED_MODULE_35___default()('#tt1').addClass("active");
              jquery__WEBPACK_IMPORTED_MODULE_35___default()(".acces").css("visibility", "hidden");
              pp = this.id;
              uu = 0;
              users.map(function (user) {
                if (parseInt(user.id) === parseInt(pp) && uu === 0) {
                  uu = 1;
                  sele = user;
                  setReceive(user);
                }
              });
              if (sele.photo != null) {
                jquery__WEBPACK_IMPORTED_MODULE_35___default()("#uuer").attr("src", "/gallery/" + sele.photo);
                jquery__WEBPACK_IMPORTED_MODULE_35___default()("#uuer").css("visibility", "visible");
                jquery__WEBPACK_IMPORTED_MODULE_35___default()(".clico").css("visibility", "visible");
              } else {
                jquery__WEBPACK_IMPORTED_MODULE_35___default()("#uuer").attr("src", "/gallery/usere.png");
                jquery__WEBPACK_IMPORTED_MODULE_35___default()("#uuer").css("visibility", "visible");
                jquery__WEBPACK_IMPORTED_MODULE_35___default()(".clico").css("visibility", "visible");
              }
              jquery__WEBPACK_IMPORTED_MODULE_35___default()('.useselected').html(sele.nom + ' ' + sele.prenoms + '<br>' + sele.contact);
              localStorage.setItem('receiverid', this.id);
              localStorage.setItem('receivernom', sele.nom + ' ' + sele.prenoms + '<br>' + sele.contact);
              localStorage.setItem('receiverphoto', sele.photo);
              localStorage.setItem('type', "chat");
              (0,axios__WEBPACK_IMPORTED_MODULE_40__["default"])({
                method: 'GET',
                url: '/crm/chat/get/' + this.id + '/' + jquery__WEBPACK_IMPORTED_MODULE_35___default()('#current').val(),
                contentType: 'application/json; charset=utf-8'
              }).then(function (response) {
                var dd = response.data;
                var sorted = dd.sort(function (a, b) {
                  return new Date(a.date) - new Date(b.date);
                });
                setChats(sorted);
                jquery__WEBPACK_IMPORTED_MODULE_35___default()("#chatcontent").animate({
                  scrollTop: jquery__WEBPACK_IMPORTED_MODULE_35___default()('#chatcontent').height() + 25000
                }, 500);
              })["catch"](function (error) {});
            case 13:
            case "end":
              return _context4.stop();
          }
        }, _callee4, this);
      })));
    });
  });
  jquery__WEBPACK_IMPORTED_MODULE_35___default()(function () {
    jquery__WEBPACK_IMPORTED_MODULE_35___default()(".getsu").each(function () {
      jquery__WEBPACK_IMPORTED_MODULE_35___default()(this).off().on("click", /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee5() {
        var pp, uu, sele;
        return _regeneratorRuntime().wrap(function _callee5$(_context5) {
          while (1) switch (_context5.prev = _context5.next) {
            case 0:
              jquery__WEBPACK_IMPORTED_MODULE_35___default()('#tt3').removeClass("active");
              jquery__WEBPACK_IMPORTED_MODULE_35___default()('#tt1').addClass("active");
              jquery__WEBPACK_IMPORTED_MODULE_35___default()(".acces").css("visibility", "hidden");
              pp = this.id;
              uu = 0;
              taches.map(function (tache) {
                if (parseInt(tache.tache["id"]) === parseInt(pp) && uu === 0) {
                  uu = 1;
                  sele = tache;
                }
              });
              jquery__WEBPACK_IMPORTED_MODULE_35___default()("#uuer").attr("src", "/img/tache.png");
              jquery__WEBPACK_IMPORTED_MODULE_35___default()("#uuer").css("visibility", "visible");
              jquery__WEBPACK_IMPORTED_MODULE_35___default()(".clico").css("visibility", "visible");
              jquery__WEBPACK_IMPORTED_MODULE_35___default()('.useselected').html(sele.tache['libelle']);
              localStorage.setItem('receiverid', pp);
              localStorage.setItem('receivernom', sele.tache['libelle']);
              localStorage.setItem('receiverphoto', "tache.png");
              localStorage.setItem('type', "tache");
              (0,axios__WEBPACK_IMPORTED_MODULE_40__["default"])({
                method: 'GET',
                url: '/crm/chat/tache/get/' + pp,
                contentType: 'application/json; charset=utf-8'
              }).then(function (response) {
                var dd = response.data;
                var sorted = dd.sort(function (a, b) {
                  return new Date(a.date) - new Date(b.date);
                });
                setChats(sorted);
                jquery__WEBPACK_IMPORTED_MODULE_35___default()("#chatcontent").animate({
                  scrollTop: jquery__WEBPACK_IMPORTED_MODULE_35___default()('#chatcontent').height() + 25000
                }, 500);
              })["catch"](function (error) {});
            case 15:
            case "end":
              return _context5.stop();
          }
        }, _callee5, this);
      })));
    });
  });
  taches.map(function (tache) {
    listtache.push(tache.tache.chantier["id"]);
  });
  taches.map(function (tache) {
    listk.push(tache.tache["id"]);
  });
  var mmm = listtache.filter(function (elem, index, self) {
    return index === self.indexOf(elem);
  });
  var mmmm = listk.filter(function (elem, index, self) {
    return index === self.indexOf(elem);
  });
  var renderUsers = users.map(function (user) {
    if (user.photo != null) {
      link = user.photo;
    } else {
      link = "usere.png";
    }
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("li", {
      className: "clearfix",
      key: user.id,
      style: {
        marginTop: "20px"
      }
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("img", {
      src: "/gallery/".concat(link),
      style: {
        width: "60px",
        height: "60px",
        marginRight: "10px",
        borderRadius: "30px",
        "float": "left"
      },
      alt: "avatar"
    }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("a", {
      id: user.id,
      className: "about getu",
      "data-toggle": "tab",
      href: "#home"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
      className: "name col-white"
    }, user.nom + ' ' + user.prenoms), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
      className: "col-black"
    }, user.contact), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
      className: "col-black"
    }, user.username)));
  });
  var rendUsers = users.map(function (user) {
    if (user.photo != null) {
      link = user.photo;
    } else {
      link = "usere.png";
    }
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("li", {
      className: "clearfix",
      key: user.id
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("img", {
      src: "/gallery/".concat(link),
      style: {
        width: "60px",
        height: "60px",
        marginRight: "10px",
        borderRadius: "30px",
        "float": "left"
      },
      alt: "avatar"
    }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("a", {
      id: user.id,
      className: "about getu"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
      className: "name col-pink"
    }, user.nom + ' ' + user.prenoms), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
      className: "col-black"
    }, user.contact), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
      className: "col-black"
    }, user.username)));
  });
  var renderSelectUsers = users.map(function (user) {
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
      className: "form-check",
      key: user.id
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("input", {
      className: "form-check-input selu",
      type: "radio",
      name: "flexRadioDefault",
      id: "flexRadioDefault1",
      value: user.id
    }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("label", {
      className: "form-check-label col-black",
      htmlFor: "flexRadioDefault1",
      style: {
        fontSize: "16px"
      }
    }, user.nom + ' ' + user.prenoms));
  });
  var renderChats = chats.map(function (chat) {
    var mp = ' ';
    if (parseInt(jquery__WEBPACK_IMPORTED_MODULE_35___default()('#current').val()) === parseInt(chat.owner.id)) {
      if (chat.fichier !== null) {
        var typy = openFile(chat.fichier["nomfichier"]);
        if (typy === "pdf") {
          mp = '<div class="message-data text-right">' + '<div class="message other-message float-right">';
          if (chat.replyeChat !== null) {
            mp = mp + '<span class="bg-white col-black" style="border: 1px solid #ff002d; padding: 5px; border-radius: 10px">' + chat.replyeChat['message'] + '</span><br>';
          }
          mp = mp + '<a href="/' + chat.fichier["folde"] + '/' + chat.fichier["nomfichier"] + '" target="_blank"><img src="/img/pdf.png" alt="file"/>' + chat.fichier["nomfichier"] + '</a><br>' + '<a href="#" title="Supprimer" class="float-right bg-pink delote hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px;margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">clear</i></a>' + '<a href="#" title="Transférer" class="float-right bg-orange transfer hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">redo</i></a>' + '<a href="#" title="Répondre" class="float-right bg-blue repondre hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">undo</i></a>' + '<a href="#" class="float-right bg-white" style="font-size: 10px; color: black; position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000">' + jQuery.timeago(chat.date) + '</a>' + '</div>';
        }
        if (typy === "excel") {
          mp = '<div class="message-data text-right">' + '<div class="message other-message float-right">';
          if (chat.replyeChat !== null) {
            mp = mp + '<span class="bg-white col-black" style="border: 1px solid #ff002d; padding: 5px; border-radius: 10px">' + chat.replyeChat['message'] + '</span><br>';
          }
          mp = mp + '<a href="/' + chat.fichier["folde"] + '/' + chat.fichier["nomfichier"] + '" target="_blank"><img src="/img/excel.png" alt="file"/>' + chat.fichier["nomfichier"] + '</a><br>' + '<a href="#" title="Supprimer" class="float-right bg-pink delote hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px;margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">clear</i></a>' + '<a href="#" title="Transférer" class="float-right bg-orange transfer hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">redo</i></a>' + '<a href="#" title="Répondre" class="float-right bg-blue repondre hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">undo</i></a>' + '<a href="#" class="float-right bg-white" style="font-size: 10px; color: black; position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000">' + jQuery.timeago(chat.date) + '</a>' + '</div>';
        }
        if (typy === "word") {
          mp = '<div class="message-data text-right">' + '<div class="message other-message float-right">';
          if (chat.replyeChat !== null) {
            mp = mp + '<span class="bg-white col-black" style="border: 1px solid #ff002d; padding: 5px; border-radius: 10px">' + chat.replyeChat['message'] + '</span><br>';
          }
          mp = mp + '<a href="/' + chat.fichier["folde"] + '/' + chat.fichier["nomfichier"] + '" target="_blank"><img src="/img/word.png" alt="file"/>' + chat.fichier["nomfichier"] + '</a><br>' + '<a href="#" title="Supprimer" class="float-right bg-pink delote hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px;margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">clear</i></a>' + '<a href="#" title="Transférer" class="float-right bg-orange transfer hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">redo</i></a>' + '<a href="#" title="Répondre" class="float-right bg-blue repondre hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">undo</i></a>' + '<a href="#" class="float-right bg-white" style="font-size: 10px; color: black; position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000">' + jQuery.timeago(chat.date) + '</a>' + '</div>';
        }
        if (typy === "image") {
          mp = '<div class="message-data text-right">' + '<div class="message other-message float-right">';
          if (chat.replyeChat !== null) {
            mp = mp + '<span class="bg-white col-black" style="border: 1px solid #ff002d; padding: 5px; border-radius: 10px">' + chat.replyeChat['message'] + '</span><br>';
          }
          mp = mp + '<a href="/' + chat.fichier["folde"] + '/' + chat.fichier["nomfichier"] + '" target="_blank"><img src="/img/pictu.png" alt="file"/>' + chat.fichier["nomfichier"] + '</a><br>' + '<a href="#" title="Supprimer" class="float-right bg-pink delote hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px;margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">clear</i></a>' + '<a href="#" title="Transférer" class="float-right bg-orange transfer hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">redo</i></a>' + '<a href="#" title="Répondre" class="float-right bg-blue repondre hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">undo</i></a>' + '<a href="#" class="float-right bg-white" style="font-size: 10px; color: black; position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000">' + jQuery.timeago(chat.date) + '</a>' + '</div>';
        }
        if (typy === "unknow") {
          mp = '<div class="message-data text-right">' + '<div class="message other-message float-right">';
          if (chat.replyeChat !== null) {
            mp = mp + '<span class="bg-white col-black" style="border: 1px solid #ff002d; padding: 5px; border-radius: 10px">' + chat.replyeChat['message'] + '</span><br>';
          }
          mp = mp + '<a href="/' + chat.fichier["folde"] + '/' + chat.fichier["nomfichier"] + '" target="_blank"><img src="/img/doc.png" alt="file"/>' + chat.fichier["nomfichier"] + '</a><br>' + '<a href="#" title="Supprimer" class="float-right bg-pink delote hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px;margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">clear</i></a>' + '<a href="#" title="Transférer" class="float-right bg-orange transfer hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">redo</i></a>' + '<a href="#" title="Répondre" class="float-right bg-blue transfer hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">undo</i></a>' + '<a href="#"  class="float-right bg-white" style="font-size: 10px; color: black; position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000">' + jQuery.timeago(chat.date) + '</a>' + '</div>';
        }
      } else {
        mp = '<div class="message-data text-right ">' + '<div class="message other-message float-right">';
        if (chat.replyeChat !== null) {
          mp = mp + '<span class="bg-white col-black" style="border: 1px solid #ff002d; padding: 5px; border-radius: 10px">' + chat.replyeChat['message'] + '</span><br>';
        }
        mp = mp + '' + chat.message + '<br>' + '<span style="font-size: 10px; border-radius: 20px;  background-color: white; padding:0 2px 0 2px; float: left">' + jQuery.timeago(chat.date) + '</span>' + '<a href="#" class="float-right bg-pink delote hado hide" id="' + chat.id + '" style="border-radius: 20px; padding:  0 3px 0 3px"><i class="material-icons col-white " style="font-size: 16px">clear</i></a>' + '<a href="#" class="float-right  bg-orange transfer hado hide " id="' + chat.id + '" style="border-radius: 20px; padding: 0 3px 0 3px; margin: 0 5px 0 5px"><i class="material-icons col-white" style="font-size: 16px">redo</i></a>' + '<a href="#" title="Répondre" class="float-right bg-blue repondre hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">undo</i></a>' + '</div>';
      }
    } else {
      if (chat.fichier !== null) {
        var _typy = openFile(chat.fichier["nomfichier"]);
        if (_typy === "pdf") {
          mp = '<div class="message-data">' + '<div class="message my-message">';
          if (chat.replyeChat !== null) {
            mp = mp + '<span class="bg-white col-black" style="border: 1px solid #ff002d; padding: 5px; border-radius: 10px">' + chat.replyeChat['message'] + '</span><br>';
          }
          mp = mp + '<a href="/' + chat.fichier["folde"] + '/' + chat.fichier["nomfichier"] + '" target="_blank"><img src="/img/pdf.png" alt="file"/>' + chat.fichier["nomfichier"] + '</a><br>' + '<a href="#" title="Transférer" class="float-right bg-orange transfer hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">redo</i></a>' + '<a href="#" title="Répondre" class="float-right bg-blue repondre hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">undo</i></a>' + '<a href="#" class="float-right bg-white" style="font-size: 10px; color: black; position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000">' + jQuery.timeago(chat.date) + '</a>' + '</div>';
        }
        if (_typy === "excel") {
          mp = '<div class="message-data">' + '<div class="message my-message">';
          if (chat.replyeChat !== null) {
            mp = mp + '<span class="bg-white col-black" style="border: 1px solid #ff002d; padding: 5px; border-radius: 10px">' + chat.replyeChat['message'] + '</span><br>';
          }
          mp = mp + '<a href="/' + chat.fichier["folde"] + '/' + chat.fichier["nomfichier"] + '" target="_blank"><img src="/img/excel.png" alt="file"/>' + chat.fichier["nomfichier"] + '</a><br>' + '<a href="#" title="Transférer" class="float-right bg-orange transfer hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">redo</i></a>' + '<a href="#" title="Répondre" class="float-right bg-blue repondre hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">undo</i></a>' + '<a href="#" class="float-right bg-white" style="font-size: 10px; color: black; position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000">' + jQuery.timeago(chat.date) + '</a>' + '</div>';
        }
        if (_typy === "word") {
          mp = '<div class="message-data">' + '<div class="message my-message">';
          if (chat.replyeChat !== null) {
            mp = mp + '<span class="bg-white col-black" style="border: 1px solid #ff002d; padding: 5px; border-radius: 10px">' + chat.replyeChat['message'] + '</span><br>';
          }
          mp = mp + '<a href="/' + chat.fichier["folde"] + '/' + chat.fichier["nomfichier"] + '" target="_blank"><img src="/img/word.png" alt="file"/>' + chat.fichier["nomfichier"] + '</a><br>' + '<a href="#" title="Transférer" class="float-right bg-orange transfer hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">redo</i></a>' + '<a href="#" title="Répondre" class="float-right bg-blue repondre hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">undo</i></a>' + '<a href="#" class="float-right bg-white" style="font-size: 10px; color: black; position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000">' + jQuery.timeago(chat.date) + '</a>' + '</div>';
        }
        if (_typy === "image") {
          mp = '<div class="message-data">' + '<div class="message my-message">';
          if (chat.replyeChat !== null) {
            mp = mp + '<span class="bg-white col-black" style="border: 1px solid #ff002d; padding: 5px; border-radius: 10px">' + chat.replyeChat['message'] + '</span><br>';
          }
          mp = mp + '<a href="/' + chat.fichier["folde"] + '/' + chat.fichier["nomfichier"] + '" target="_blank"><img src="/img/pictu.png" alt="file"/>' + chat.fichier["nomfichier"] + '</a><br>' + '<a href="#" title="Transférer" class="float-right bg-orange transfer hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">redo</i></a>' + '<a href="#" title="Répondre" class="float-right bg-blue repondre hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">undo</i></a>' + '<a href="#" class="float-right bg-white" style="font-size: 10px; color: black; position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000">' + jQuery.timeago(chat.date) + '</a>' + '</div>';
        }
        if (_typy === "unknow") {
          mp = '<div class="message-data">' + '<div class="message my-message">';
          if (chat.replyeChat !== null) {
            mp = mp + '<span class="bg-white col-black" style="border: 1px solid #ff002d; padding: 5px; border-radius: 10px">' + chat.replyeChat['message'] + '</span><br>';
          }
          mp = mp + '<a href="/' + chat.fichier["folde"] + '/' + chat.fichier["nomfichier"] + '" target="_blank"><img src="/img/doc.png" alt="file"/>' + chat.fichier["nomfichier"] + '</a><br>' + '<a href="#" title="Transférer" class="float-right bg-orange transfer hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">redo</i></a>' + '<a href="#" title="Répondre" class="float-right bg-blue repondre hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">undo</i></a>' + '<a href="#"  class="float-right bg-white" style="font-size: 10px; color: black; position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000">' + jQuery.timeago(chat.date) + '</a>' + '</div>';
        }
      } else {
        mp = '<div class="message-data">' + '<div class="message my-message">';
        if (chat.replyeChat !== null) {
          mp = mp + '<span class="bg-white col-black" style="border: 1px solid #ff002d; padding: 5px; border-radius: 10px">' + chat.replyeChat['message'] + '</span><br>';
        }
        mp = mp + '' + chat.message + '<br>' + '<span style="font-size: 10px; border-radius: 20px;  background-color: white; padding:0 2px 0 2px; float: left">' + jQuery.timeago(chat.date) + '</span>' + '<a href="#" title="Transférer" class="float-right  bg-orange transfer hado hide " id="' + chat.id + '" style="border-radius: 20px; padding: 0 3px 0 3px; margin: 0 5px 0 5px"><i class="material-icons col-white" style="font-size: 16px">redo</i></a>' + '<a href="#" title="Répondre" class="float-right bg-blue repondre hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">undo</i></a>' + '</div>';
      }
    }
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("li", {
      className: "clearfix",
      key: chat.id,
      dangerouslySetInnerHTML: {
        __html: mp
      }
    });
  });
  var _loop = function _loop(i) {
    var ppp = 0;
    taches.map(function (tache) {
      if (mmm[i] === tache.tache.chantier["id"] && ppp === 0) {
        var mp = ' ';
        var chantier = tache.tache.chantier;
        var client = chantier["client"];
        var section = tache.tache.section;
        var planning = section["planning"];
        mp = '<div class="panel panel-pri shadow" style="margin-bottom: 0 !important;">' + '<div class="panel-heading" role="tab" id="heading' + tache.tache["id"] + '">' + '<h5 class="panel-title">' + '<a class="collapsed outai  col-white" role="button"\n' + '                               data-toggle="collapse"\n' + '                               data-parent="#accordion_1" href="#collapse' + tache.tache["id"] + '"\n' + '                               aria-expanded="false"\n' + '                               aria-controls="collapse' + tache.tache["id"] + '"> <span class="col-yellow"># ' + client["nomclient"] + '</span><br/><span class="h6"> # ' + chantier["nomchantier"] + '                            </span></a>\n' + '                        </h5>\n' + '                    </div>' + '                 <div id="collapse' + tache.tache["id"] + '" class="panel-collapse collapse" role="tabpanel"\n' + '                                                 aria-labelledby="heading' + tache.tache["id"] + '">\n' + '                                                <div class="bg-blue-grey" style="overflow: scroll">\n';
        var _loop2 = function _loop2(j) {
          var pppp = 0;
          taches.map(function (tache) {
            if (mmmm[j] === tache.tache["id"] && pppp === 0) {
              mp = mp + '<div class="shadow" style="padding: 20px 0 0 15px">' + '<a id=' + tache.tache["id"] + ' style="padding:5px; m" class="about getsu card">' + '<div class="message-data " style="border-radius: 20px;">' + '<h5 class="col-pink bolo600">Planning | Section</h5>' + '<h5 class="col-black">* ' + planning["planning"] + '</br>' + '* ' + section["libelle"] + '</h5>' + '<h5 class="col-pink bolo600">Tache: </h5>' + '<h5 class="col-black">' + tache.tache["libelle"] + '</h5>' + '<span class="message-data-time col-blue-grey">' + jQuery.timeago(tache.date) + '</span>' + '</div></a></div>';
              pppp = 1;
            }
          });
        };
        for (var j = 0; j < mmmm.length; j++) {
          _loop2(j);
        }
        mp = mp + '</div></div></div>';
        listtaches.push( /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
          style: {
            margin: "10px 5px 10px 5px"
          },
          className: "clearfix",
          key: tache.id,
          dangerouslySetInnerHTML: {
            __html: mp
          }
        }));
        ppp = 1;
      }
    });
  };
  for (var i = 0; i < mmm.length; i++) {
    _loop(i);
  }
  renderTaches = listtaches.map(function (tache) {
    return tache;
  });
  jquery__WEBPACK_IMPORTED_MODULE_35___default()('#adfile').off().on("click", function (event) {
    jquery__WEBPACK_IMPORTED_MODULE_35___default()('#modaler').modal('toggle');
  });
  jquery__WEBPACK_IMPORTED_MODULE_35___default()('#sendchate').off().on("click", /*#__PURE__*/function () {
    var _ref6 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee6(event) {
      var receiver, repy;
      return _regeneratorRuntime().wrap(function _callee6$(_context6) {
        while (1) switch (_context6.prev = _context6.next) {
          case 0:
            event.preventDefault();
            receiver = localStorage.getItem('receiverid');
            repy = "0";
            if (localStorage.getItem("replyid") !== null) {
              repy = localStorage.getItem('replyid');
            }
            if (localStorage.getItem("type") === "chat") {
              (0,axios__WEBPACK_IMPORTED_MODULE_40__["default"])({
                method: 'POST',
                url: '/crm/start/chat/adder/' + receiver + '/0' + '/' + repy,
                data: JSON.stringify({
                  x: messa
                }),
                contentType: 'application/json; charset=utf-8'
              }).then(function (response) {
                setChats(response.data);
                jquery__WEBPACK_IMPORTED_MODULE_35___default()("#chatcontent").animate({
                  scrollTop: jquery__WEBPACK_IMPORTED_MODULE_35___default()('#chatcontent').height() + 25000
                }, 500);
                jquery__WEBPACK_IMPORTED_MODULE_35___default()('.repondu').addClass("hide");
                localStorage.setItem('replyid', "0");
              })["catch"](function (error) {});
            }
            if (localStorage.getItem("type") === "tache") {
              (0,axios__WEBPACK_IMPORTED_MODULE_40__["default"])({
                method: 'POST',
                url: '/crm/start/chat/adder/' + receiver + '/1' + '/' + repy,
                data: JSON.stringify({
                  x: messa
                }),
                contentType: 'application/json; charset=utf-8'
              }).then(function (response) {
                setChats(response.data);
                jquery__WEBPACK_IMPORTED_MODULE_35___default()("#chatcontent").animate({
                  scrollTop: jquery__WEBPACK_IMPORTED_MODULE_35___default()('#chatcontent').height() + 25000
                }, 500);
              })["catch"](function (error) {});
            }
          case 6:
          case "end":
            return _context6.stop();
        }
      }, _callee6);
    }));
    return function (_x2) {
      return _ref6.apply(this, arguments);
    };
  }());
  jquery__WEBPACK_IMPORTED_MODULE_35___default()('#addFileChat').off().on("click", /*#__PURE__*/function () {
    var _ref7 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee7(event) {
      var receiver;
      return _regeneratorRuntime().wrap(function _callee7$(_context7) {
        while (1) switch (_context7.prev = _context7.next) {
          case 0:
            event.preventDefault();
            receiver = localStorage.getItem('receiverid');
            if (jquery__WEBPACK_IMPORTED_MODULE_35___default()(this).closest('form').valid()) {
              jquery__WEBPACK_IMPORTED_MODULE_35___default()('#addFileChat').hide();
              jquery__WEBPACK_IMPORTED_MODULE_35___default()('#closeFileChat').hide();
              jquery__WEBPACK_IMPORTED_MODULE_35___default()('#loadFileChat').css('display', '');
              if (localStorage.getItem("type") === "chat") {
                (0,axios__WEBPACK_IMPORTED_MODULE_40__["default"])({
                  method: 'POST',
                  url: '/crm/gestion/fichier/chat/add/' + receiver + '/0',
                  data: new FormData(jquery__WEBPACK_IMPORTED_MODULE_35___default()('#addFileChatForm')[0]),
                  contentType: false,
                  processData: false,
                  cache: false,
                  dataType: 'json'
                }).then(function (response) {
                  jquery__WEBPACK_IMPORTED_MODULE_35___default()('#modaler').modal('toggle');
                  setChats(response.data);
                  jquery__WEBPACK_IMPORTED_MODULE_35___default()("#chatcontent").animate({
                    scrollTop: jquery__WEBPACK_IMPORTED_MODULE_35___default()('#chatcontent').height() + 25000
                  }, 500);
                  jquery__WEBPACK_IMPORTED_MODULE_35___default()('#addFileChat').show();
                  jquery__WEBPACK_IMPORTED_MODULE_35___default()('#closeFileChat').show();
                  jquery__WEBPACK_IMPORTED_MODULE_35___default()('#loadFileChat').hide();
                })["catch"](function (error) {});
              }
              if (localStorage.getItem("type") === "tache") {
                (0,axios__WEBPACK_IMPORTED_MODULE_40__["default"])({
                  method: 'POST',
                  url: '/crm/gestion/fichier/chat/add/' + receiver + '/1',
                  data: new FormData(jquery__WEBPACK_IMPORTED_MODULE_35___default()('#addFileChatForm')[0]),
                  contentType: false,
                  processData: false,
                  cache: false,
                  dataType: 'json'
                }).then(function (response) {
                  jquery__WEBPACK_IMPORTED_MODULE_35___default()('#modaler').modal('toggle');
                  setChats(response.data);
                  jquery__WEBPACK_IMPORTED_MODULE_35___default()("#chatcontent").animate({
                    scrollTop: jquery__WEBPACK_IMPORTED_MODULE_35___default()('#chatcontent').height() + 25000
                  }, 500);
                  jquery__WEBPACK_IMPORTED_MODULE_35___default()('#addFileChat').show();
                  jquery__WEBPACK_IMPORTED_MODULE_35___default()('#closeFileChat').show();
                  jquery__WEBPACK_IMPORTED_MODULE_35___default()('#loadFileChat').hide();
                })["catch"](function (error) {});
              }
            }
          case 3:
          case "end":
            return _context7.stop();
        }
      }, _callee7, this);
    }));
    return function (_x3) {
      return _ref7.apply(this, arguments);
    };
  }());
  jquery__WEBPACK_IMPORTED_MODULE_35___default()('.clico').off().on("click", function (event) {
    if (jquery__WEBPACK_IMPORTED_MODULE_35___default()(".hado").hasClass("hide")) {
      jquery__WEBPACK_IMPORTED_MODULE_35___default()('.hado').removeClass("hide");
    } else {
      jquery__WEBPACK_IMPORTED_MODULE_35___default()('.hado').addClass("hide");
    }
  });
  jquery__WEBPACK_IMPORTED_MODULE_35___default()('.transfer').off().on("click", function (event) {
    event.preventDefault();
    setMess(this.id);
    jquery__WEBPACK_IMPORTED_MODULE_35___default()('#modalo').modal('toggle');
  });
  jquery__WEBPACK_IMPORTED_MODULE_35___default()('#deletereply').off().on("click", function (event) {
    event.preventDefault();
    jquery__WEBPACK_IMPORTED_MODULE_35___default()('.repondu').addClass("hide");
    localStorage.setItem('replyid', "0");
  });
  jquery__WEBPACK_IMPORTED_MODULE_35___default()('.repondre').off().on("click", function (event) {
    event.preventDefault();
    var yup = this.id;
    localStorage.setItem('replyid', this.id);
    chats.map(function (chat) {
      if (Number(chat.id) === Number(yup)) {
        jquery__WEBPACK_IMPORTED_MODULE_35___default()('.repondu').removeClass("hide");
        jquery__WEBPACK_IMPORTED_MODULE_35___default()('.replys').html('<span class="col-black">Répondre au message: </span> <br>' + chat['message']);
      }
    });
  });
  jquery__WEBPACK_IMPORTED_MODULE_35___default()('.delote').off().on("click", /*#__PURE__*/function () {
    var _ref8 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee8(event) {
      var idd, receiver;
      return _regeneratorRuntime().wrap(function _callee8$(_context8) {
        while (1) switch (_context8.prev = _context8.next) {
          case 0:
            event.preventDefault();
            idd = this.id;
            receiver = localStorage.getItem('receiverid');
            jquery__WEBPACK_IMPORTED_MODULE_35___default()('#condelete').modal('toggle');
            jquery__WEBPACK_IMPORTED_MODULE_35___default()('#accept').click(function () {
              jquery__WEBPACK_IMPORTED_MODULE_35___default()('#condelete').modal('hide');
              if (localStorage.getItem("type") === "chat") {
                (0,axios__WEBPACK_IMPORTED_MODULE_40__["default"])({
                  method: 'GET',
                  url: '/crm/chat/del/' + idd + '/' + receive.id + '/' + jquery__WEBPACK_IMPORTED_MODULE_35___default()('#current').val() + '/0',
                  contentType: 'application/json; charset=utf-8'
                }).then(function (response) {
                  var dd = response.data;
                  var sorted = dd.sort(function (a, b) {
                    return new Date(a.date) - new Date(b.date);
                  });
                  setChats(sorted);
                  jquery__WEBPACK_IMPORTED_MODULE_35___default()("#chatcontent").animate({
                    scrollTop: jquery__WEBPACK_IMPORTED_MODULE_35___default()('#chatcontent').height() + 25000
                  }, 500);
                })["catch"](function (error) {});
              }
              if (localStorage.getItem("type") === "tache") {
                (0,axios__WEBPACK_IMPORTED_MODULE_40__["default"])({
                  method: 'GET',
                  url: '/crm/chat/del/' + idd + '/' + receiver + '/' + jquery__WEBPACK_IMPORTED_MODULE_35___default()('#current').val() + '/1',
                  contentType: 'application/json; charset=utf-8'
                }).then(function (response) {
                  var dd = response.data;
                  var sorted = dd.sort(function (a, b) {
                    return new Date(a.date) - new Date(b.date);
                  });
                  setChats(sorted);
                  jquery__WEBPACK_IMPORTED_MODULE_35___default()("#chatcontent").animate({
                    scrollTop: jquery__WEBPACK_IMPORTED_MODULE_35___default()('#chatcontent').height() + 25000
                  }, 500);
                })["catch"](function (error) {});
              }
            });
          case 5:
          case "end":
            return _context8.stop();
        }
      }, _callee8, this);
    }));
    return function (_x4) {
      return _ref8.apply(this, arguments);
    };
  }());
  jquery__WEBPACK_IMPORTED_MODULE_35___default()('#tramess').off().on("click", /*#__PURE__*/function () {
    var _ref9 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee9(event) {
      return _regeneratorRuntime().wrap(function _callee9$(_context9) {
        while (1) switch (_context9.prev = _context9.next) {
          case 0:
            event.preventDefault();
            (0,axios__WEBPACK_IMPORTED_MODULE_40__["default"])({
              method: 'GET',
              url: '/crm/chat/share/' + mess + '/' + rece,
              contentType: 'application/json; charset=utf-8'
            }).then(function (response) {
              jquery__WEBPACK_IMPORTED_MODULE_35___default()('#modalo').modal('toggle');
            })["catch"](function (error) {});
          case 2:
          case "end":
            return _context9.stop();
        }
      }, _callee9);
    }));
    return function (_x5) {
      return _ref9.apply(this, arguments);
    };
  }());
  jquery__WEBPACK_IMPORTED_MODULE_35___default()('.selu').change(function () {
    setRece(this.value);
  });
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement((react__WEBPACK_IMPORTED_MODULE_33___default().Fragment), null, react_device_detect__WEBPACK_IMPORTED_MODULE_37__.deviceType !== "mobile" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement((react__WEBPACK_IMPORTED_MODULE_33___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "modal fade",
    id: "modalo",
    tabIndex: "-1",
    role: "dialog",
    "aria-labelledby": "exampleModalLabel",
    "aria-hidden": "true"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "modal-dialog modal-sm modal-notify",
    role: "document"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "modal-content"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "modal-header d-flex justify-content-center bg-primary"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("h4", null, "S\xC9LECTIONNER")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "modal-body"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("h4", {
    className: "col-green"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "list-group"
  }, renderSelectUsers, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "text-center",
    style: {
      marginTop: "10px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("button", {
    type: "button",
    className: "btn btn-primary btn-sm",
    id: "tramess"
  }, "ENVOYER")))))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "modal fade",
    id: "condelete",
    tabIndex: "-1",
    role: "dialog",
    "aria-labelledby": "exampleModalLabel",
    "aria-hidden": "true"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "modal-dialog modal-sm modal-notify",
    role: "document"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "modal-content text-center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "modal-header d-flex justify-content-center bg-pink"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("h4", {
    className: "bolo700"
  }, "\xCATES VOUS SUR ?")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "modal-body"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("i", {
    className: "fas fa-times fa-4x animated rotateIn col-pink"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "text-center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    type: "button",
    id: "accept",
    className: "btn btn-link waves-effect text-white bg-primary"
  }, "OUI"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    type: "button",
    id: "closeLier",
    className: "btn btn-link waves-effect text-white bg-pink",
    "data-dismiss": "modal"
  }, "NON"))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "container-fluid diti"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "block-header"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "row"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "col-md-4 chat bg-blue-grey"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    style: {
      margin: "2px 0.5px",
      height: "700px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("h4", {
    style: {
      color: "white",
      textAlign: "center",
      backgroundColor: "#4e73df",
      padding: "10px",
      margin: "5px 5px 0 5px"
    }
  }, "CHAT"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "chat-header clearfix"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "row"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "col-lg-6"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("a", {
    href: "javascript:void(0);",
    "data-toggle": "modal",
    "data-target": "#view_info"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("img", {
    src: "/gallery/usere.png",
    id: "uuer",
    style: {
      width: "60px",
      height: "60px",
      border: "2px solid #FFF",
      visibility: "hidden"
    },
    alt: "avatar"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "chat-about"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("h4", {
    className: "m-b-0 col-white useselected"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("h4", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("a", {
    href: "#",
    className: "clico hide",
    title: "Afficher les Options",
    style: {
      "float": "right",
      visibility: "hidden"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("i", {
    className: "material-icons col-yellow",
    style: {
      fontSize: "20px"
    }
  }, "hub")))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "chat-history ",
    style: {
      height: "450px",
      width: "100%",
      overflowY: "scroll"
    },
    id: "chatcontent"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("ul", {
    className: "m-b-0"
  }, renderChats)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "row repondu hide",
    style: {
      margin: "1px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: " col-md-12 bg-blue col-white",
    style: {
      padding: "10px",
      borderRadius: "5px",
      marginTop: "10px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("span", {
    className: "replys"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("a", {
    href: "#",
    id: "deletereply",
    title: "Supprimer",
    className: "bg-pink",
    style: {
      borderRadius: "20px",
      position: "relative",
      "float": "right"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("i", {
    className: "material-icons col-white",
    style: {
      fontSize: "18px"
    }
  }, "clear")))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    style: {
      marginBottom: "80px",
      display: "flex",
      justifyContent: "flex-end",
      width: "100%"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement((react_quill__WEBPACK_IMPORTED_MODULE_38___default()), {
    className: "bg-white col-black",
    style: {
      height: "100px"
    },
    theme: "snow",
    value: messa,
    onChange: setMessa
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "float-right",
    style: {
      marginTop: "5px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("a", {
    href: "#",
    id: "adfile",
    title: "Ajouter un fichier"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("i", {
    className: "material-icons col-lime",
    style: {
      fontSize: "30px",
      marginRight: "20px"
    }
  }, "upload_file")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("a", {
    href: "#",
    id: "sendchate",
    title: "Envoyer"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("i", {
    className: "material-icons col-white",
    style: {
      fontSize: "30px",
      marginRight: "5px"
    }
  }, "send"))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "col-md-4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "people-list bg-white",
    style: {
      height: "820px",
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("h4", {
    style: {
      color: "white",
      textAlign: "center",
      backgroundColor: "#4e73df",
      padding: "10px",
      margin: "5px 5px 0 5px"
    }
  }, "TACHES"), renderTaches)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "col-md-4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "people-list bg-white",
    style: {
      height: "820px",
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("h4", {
    style: {
      color: "white",
      textAlign: "center",
      backgroundColor: "#4e73df",
      padding: "10px 10px 10px 15px",
      margin: "5px 5px 0 5px"
    }
  }, "COMPTES"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("ul", {
    className: "list-unstyled chat-list mt-2 mb-0",
    style: {
      paddingLeft: "15px"
    }
  }, rendUsers))))))), react_device_detect__WEBPACK_IMPORTED_MODULE_37__.deviceType === "mobile" && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "container-fluid diti"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "block-header"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "row"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "col-md-12 chat"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("ul", {
    className: "nav nav-tabs",
    style: {
      backgroundColor: "#4e73df",
      color: "white"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("li", {
    className: "active",
    id: "tt1"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("a", {
    "data-toggle": "tab",
    href: "#home"
  }, "CHAT")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("li", {
    id: "tt2"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("a", {
    "data-toggle": "tab",
    href: "#menu1"
  }, "TACHES")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("li", {
    id: "tt3"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("a", {
    "data-toggle": "tab",
    href: "#menu2"
  }, "COMPTES"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "tab-content bg-blue-grey",
    style: {
      padding: "10px 10px 50px 10px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    id: "home",
    className: "tab-pane fade in active"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "chat-header clearfix"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "row"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "col-lg-6"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("a", {
    href: "javascript:void(0);",
    "data-toggle": "modal",
    "data-target": "#view_info"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("img", {
    src: "/gallery/usere.png",
    id: "uuer",
    style: {
      width: "60px",
      height: "60px",
      border: "2px solid #FFF",
      visibility: "hidden"
    },
    alt: "avatar"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "chat-about"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("h4", {
    className: "m-b-0 col-white useselected"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("h4", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("a", {
    href: "#",
    className: "clico",
    style: {
      "float": "right",
      visibility: "hidden"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("i", {
    className: "material-icons col-yellow",
    style: {
      fontSize: "20px"
    }
  }, "hub")))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "chat-history ",
    style: {
      height: "450px",
      width: "100%",
      overflowY: "scroll"
    },
    id: "chatcontent"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("ul", {
    className: "m-b-0"
  }, renderChats)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    style: {
      marginTop: "10px",
      marginBottom: "80px",
      display: "flex",
      justifyContent: "flex-end",
      width: "100%"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement((react_quill__WEBPACK_IMPORTED_MODULE_38___default()), {
    className: "bg-white col-black",
    style: {
      height: "100px"
    },
    theme: "snow",
    value: messa,
    onChange: setMessa
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    className: "float-right",
    style: {
      marginTop: "5px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("a", {
    href: "#",
    id: "adfile"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("i", {
    className: "material-icons col-lime",
    style: {
      fontSize: "30px",
      marginRight: "20px"
    }
  }, "upload_file")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("a", {
    href: "#",
    id: "sendchate"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("i", {
    className: "material-icons col-white",
    style: {
      fontSize: "30px",
      marginRight: "5px"
    }
  }, "send")))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    id: "menu1",
    className: "tab-pane fade"
  }, renderTaches), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("div", {
    id: "menu2",
    className: "tab-pane fade"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement("ul", {
    className: "list-unstyled chat-list mt-2 mb-0",
    style: {
      paddingLeft: "15px"
    }
  }, renderUsers))))))));
};
try {
  var root = (0,react_dom_client__WEBPACK_IMPORTED_MODULE_34__.createRoot)(document.getElementById('chatter'));
  root.render( /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_33___default().createElement(Chatter, null));
} catch (e) {}

/***/ }),

/***/ "./assets/components/chantiers/DataFirst.js":
/*!**************************************************!*\
  !*** ./assets/components/chantiers/DataFirst.js ***!
  \**************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/web.timers.js */ "./node_modules/core-js/modules/web.timers.js");
/* harmony import */ var core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.array.filter.js */ "./node_modules/core-js/modules/es.array.filter.js");
/* harmony import */ var core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.parse-int.js */ "./node_modules/core-js/modules/es.parse-int.js");
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.date.to-string.js */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string.js */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.array.map.js */ "./node_modules/core-js/modules/es.array.map.js");
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.array.is-array.js */ "./node_modules/core-js/modules/es.array.is-array.js");
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.array.from.js */ "./node_modules/core-js/modules/es.array.from.js");
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_17__);
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
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_35__ = __webpack_require__(/*! axios */ "./node_modules/axios/lib/axios.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_32__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_32___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_32__);
/* harmony import */ var moment__WEBPACK_IMPORTED_MODULE_33__ = __webpack_require__(/*! moment */ "./node_modules/moment/moment.js");
/* harmony import */ var moment__WEBPACK_IMPORTED_MODULE_33___default = /*#__PURE__*/__webpack_require__.n(moment__WEBPACK_IMPORTED_MODULE_33__);
/* harmony import */ var react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_34__ = __webpack_require__(/*! react-html-table-to-excel */ "./node_modules/react-html-table-to-excel/index.js");
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







var DataFirst = function DataFirst() {
  var _useState = (0,react__WEBPACK_IMPORTED_MODULE_30__.useState)([]),
    _useState2 = _slicedToArray(_useState, 2),
    todos = _useState2[0],
    setTodos = _useState2[1];
  var _useState3 = (0,react__WEBPACK_IMPORTED_MODULE_30__.useState)([]),
    _useState4 = _slicedToArray(_useState3, 2),
    chats = _useState4[0],
    setChats = _useState4[1];
  var _useState5 = (0,react__WEBPACK_IMPORTED_MODULE_30__.useState)([]),
    _useState6 = _slicedToArray(_useState5, 2),
    users = _useState6[0],
    setUsers = _useState6[1];
  var todei = jquery__WEBPACK_IMPORTED_MODULE_32___default()('#todei').val();
  var current = jquery__WEBPACK_IMPORTED_MODULE_32___default()('#current').val();
  var fetchdata = /*#__PURE__*/function () {
    var _ref = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee() {
      return _regeneratorRuntime().wrap(function _callee$(_context) {
        while (1) switch (_context.prev = _context.next) {
          case 0:
            if (jquery__WEBPACK_IMPORTED_MODULE_32___default()('#page').val() !== undefined) {
              (0,axios__WEBPACK_IMPORTED_MODULE_35__["default"])({
                method: 'GET',
                url: '/crm/start/gets',
                contentType: 'application/json; charset=utf-8'
              }).then(function (response) {
                setTodos(response.data);
              })["catch"](function (error) {});
            }
          case 1:
          case "end":
            return _context.stop();
        }
      }, _callee);
    }));
    return function fetchdata() {
      return _ref.apply(this, arguments);
    };
  }();
  var fetchUsers = /*#__PURE__*/function () {
    var _ref2 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee2() {
      return _regeneratorRuntime().wrap(function _callee2$(_context2) {
        while (1) switch (_context2.prev = _context2.next) {
          case 0:
            if (jquery__WEBPACK_IMPORTED_MODULE_32___default()('#page').val() !== undefined) {
              (0,axios__WEBPACK_IMPORTED_MODULE_35__["default"])({
                method: 'GET',
                url: '/crm/start/users/get',
                contentType: 'application/json; charset=utf-8'
              }).then(function (response) {
                setUsers(response.data);
              })["catch"](function (error) {});
            }
          case 1:
          case "end":
            return _context2.stop();
        }
      }, _callee2);
    }));
    return function fetchUsers() {
      return _ref2.apply(this, arguments);
    };
  }();
  var fetchChats = /*#__PURE__*/function () {
    var _ref3 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee3() {
      var id;
      return _regeneratorRuntime().wrap(function _callee3$(_context3) {
        while (1) switch (_context3.prev = _context3.next) {
          case 0:
            id = localStorage.getItem('token');
            if (id !== null) {
              (0,axios__WEBPACK_IMPORTED_MODULE_35__["default"])({
                method: 'GET',
                url: '/crm/start/chats/get/' + id,
                contentType: 'application/json; charset=utf-8'
              }).then(function (response) {
                setChats(response.data);
              })["catch"](function (error) {});
            }
          case 2:
          case "end":
            return _context3.stop();
        }
      }, _callee3);
    }));
    return function fetchChats() {
      return _ref3.apply(this, arguments);
    };
  }();
  (0,react__WEBPACK_IMPORTED_MODULE_30__.useEffect)(function () {
    fetchdata();
    fetchUsers();
    var interval = setInterval(function () {
      fetchdata();
      fetchChats();
    }, 10000);
    return function () {
      return clearInterval(interval);
    };
  }, []);
  function filterById(jsonObject, id) {
    return jsonObject.filter(function (jsonObject) {
      return parseInt(jsonObject['id']) === parseInt(id);
    })[0];
  }
  function addTachers() {
    jquery__WEBPACK_IMPORTED_MODULE_32___default()('#addTodoForm')[0].reset();
    CKEDITOR.instances.todo.setData(' ');
    jquery__WEBPACK_IMPORTED_MODULE_32___default()('#chtodoadd').removeClass('hide');
    jquery__WEBPACK_IMPORTED_MODULE_32___default()('#chtodoedit').addClass('hide');
    jquery__WEBPACK_IMPORTED_MODULE_32___default()('#divTodo').removeClass('hide');
    jquery__WEBPACK_IMPORTED_MODULE_32___default()('#divTodor').addClass('hide');
    jquery__WEBPACK_IMPORTED_MODULE_32___default()('#smallTache').modal('show');
  }
  var shuto = function shuto(id) {
    jquery__WEBPACK_IMPORTED_MODULE_32___default()('.' + id + 'to').removeClass('hide');
  };
  var shutod = function shutod(id) {
    jquery__WEBPACK_IMPORTED_MODULE_32___default()('.' + id + 'to').addClass('hide');
  };
  jquery__WEBPACK_IMPORTED_MODULE_32___default()('#sendchat').off().on("click", /*#__PURE__*/function () {
    var _ref4 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee4(event) {
      var message, receiver, todo;
      return _regeneratorRuntime().wrap(function _callee4$(_context4) {
        while (1) switch (_context4.prev = _context4.next) {
          case 0:
            event.preventDefault();
            message = jquery__WEBPACK_IMPORTED_MODULE_32___default()('textarea#chat').val();
            receiver = localStorage.getItem('receiverid');
            todo = localStorage.getItem('todoid');
            (0,axios__WEBPACK_IMPORTED_MODULE_35__["default"])({
              method: 'POST',
              url: '/crm/start/chat/add/' + message + '/' + todo + '/' + receiver,
              contentType: 'application/json; charset=utf-8'
            }).then(function (response) {
              setChats(response.data);
            })["catch"](function (error) {});
          case 5:
          case "end":
            return _context4.stop();
        }
      }, _callee4);
    }));
    return function (_x2) {
      return _ref4.apply(this, arguments);
    };
  }());
  jquery__WEBPACK_IMPORTED_MODULE_32___default()('#addTodo').off().on("click", /*#__PURE__*/function () {
    var _ref5 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee5(event) {
      return _regeneratorRuntime().wrap(function _callee5$(_context5) {
        while (1) switch (_context5.prev = _context5.next) {
          case 0:
            event.preventDefault();
            if (!jquery__WEBPACK_IMPORTED_MODULE_32___default()(this).closest('form').valid()) {
              _context5.next = 7;
              break;
            }
            jquery__WEBPACK_IMPORTED_MODULE_32___default()('#divTodo').hide();
            jquery__WEBPACK_IMPORTED_MODULE_32___default()('#loadTodo').css('display', '');
            jquery__WEBPACK_IMPORTED_MODULE_32___default()('#todo').val(CKEDITOR.instances['todo'].getData());
            _context5.next = 7;
            return (0,axios__WEBPACK_IMPORTED_MODULE_35__["default"])({
              method: 'POST',
              url: '/crm/start/todo/add',
              data: new FormData(jquery__WEBPACK_IMPORTED_MODULE_32___default()('#addTodoForm')[0]),
              contentType: false,
              processData: false,
              cache: false,
              dataType: 'json'
            }).then(function (response) {
              setTodos(response.data);
              jquery__WEBPACK_IMPORTED_MODULE_32___default()('#divTodo').show();
              jquery__WEBPACK_IMPORTED_MODULE_32___default()('#loadTodo').hide();
              jquery__WEBPACK_IMPORTED_MODULE_32___default()('#smallTache').modal('toggle');
            })["catch"](function (error) {
              jquery__WEBPACK_IMPORTED_MODULE_32___default()('#ModalErreur').modal('show');
            });
          case 7:
          case "end":
            return _context5.stop();
        }
      }, _callee5, this);
    }));
    return function (_x3) {
      return _ref5.apply(this, arguments);
    };
  }());
  jquery__WEBPACK_IMPORTED_MODULE_32___default()('#updTodo').off().on("click", /*#__PURE__*/function () {
    var _ref6 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee6(event) {
      var id;
      return _regeneratorRuntime().wrap(function _callee6$(_context6) {
        while (1) switch (_context6.prev = _context6.next) {
          case 0:
            event.preventDefault();
            if (!jquery__WEBPACK_IMPORTED_MODULE_32___default()(this).closest('form').valid()) {
              _context6.next = 8;
              break;
            }
            jquery__WEBPACK_IMPORTED_MODULE_32___default()('#divTodor').hide();
            jquery__WEBPACK_IMPORTED_MODULE_32___default()('#loadTodo').css('display', '');
            jquery__WEBPACK_IMPORTED_MODULE_32___default()('#todo').val(CKEDITOR.instances['todo'].getData());
            id = localStorage.getItem('token');
            _context6.next = 8;
            return (0,axios__WEBPACK_IMPORTED_MODULE_35__["default"])({
              method: 'PUT',
              url: '/crm/start/todo/update/' + id,
              data: new FormData(jquery__WEBPACK_IMPORTED_MODULE_32___default()('#addTodoForm')[0]),
              contentType: false,
              processData: false,
              cache: false,
              dataType: 'json'
            }).then(function (response) {
              setTodos(response.data);
              jquery__WEBPACK_IMPORTED_MODULE_32___default()('#chtodoadd').removeClass('hide');
              jquery__WEBPACK_IMPORTED_MODULE_32___default()('#chtodoedit').addClass('hide');
              jquery__WEBPACK_IMPORTED_MODULE_32___default()('#divTodo').removeClass('hide');
              jquery__WEBPACK_IMPORTED_MODULE_32___default()('#divTodor').addClass('hide');
              jquery__WEBPACK_IMPORTED_MODULE_32___default()('#loadTodo').hide();
              jquery__WEBPACK_IMPORTED_MODULE_32___default()('#smallTache').modal('toggle');
            })["catch"](function (error) {
              jquery__WEBPACK_IMPORTED_MODULE_32___default()('#Traitement').modal('hide');
              jquery__WEBPACK_IMPORTED_MODULE_32___default()('#ModalErreur').modal('show');
              jquery__WEBPACK_IMPORTED_MODULE_32___default()('#loadTodo').hide();
            });
          case 8:
          case "end":
            return _context6.stop();
        }
      }, _callee6, this);
    }));
    return function (_x4) {
      return _ref6.apply(this, arguments);
    };
  }());
  jquery__WEBPACK_IMPORTED_MODULE_32___default()(function () {
    jquery__WEBPACK_IMPORTED_MODULE_32___default()(".delety").each(function () {
      jquery__WEBPACK_IMPORTED_MODULE_32___default()(this).off().on("click", /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee7() {
        var id, todo;
        return _regeneratorRuntime().wrap(function _callee7$(_context7) {
          while (1) switch (_context7.prev = _context7.next) {
            case 0:
              id = this.id;
              todo = localStorage.getItem('todoid');
              (0,axios__WEBPACK_IMPORTED_MODULE_35__["default"])({
                method: 'DELETE',
                url: '/crm/start/chats/delete/' + id + '/' + todo,
                contentType: 'application/json; charset=utf-8'
              }).then(function (response) {
                setChats(response.data);
              })["catch"](function (error) {});
            case 3:
            case "end":
              return _context7.stop();
          }
        }, _callee7, this);
      })));
    });
  });
  jquery__WEBPACK_IMPORTED_MODULE_32___default()(function () {
    jquery__WEBPACK_IMPORTED_MODULE_32___default()(".deletodo").each(function () {
      jquery__WEBPACK_IMPORTED_MODULE_32___default()(this).off().on("click", /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee8() {
        var id;
        return _regeneratorRuntime().wrap(function _callee8$(_context8) {
          while (1) switch (_context8.prev = _context8.next) {
            case 0:
              id = this.id;
              jquery__WEBPACK_IMPORTED_MODULE_32___default()('#Traitement').modal('show');
              _context8.next = 4;
              return (0,axios__WEBPACK_IMPORTED_MODULE_35__["default"])({
                method: 'DELETE',
                url: '/crm/start/todo/delete/' + id,
                contentType: 'application/json; charset=utf-8',
                dataType: 'json'
              }).then(function (response) {
                setTodos(response.data);
                jquery__WEBPACK_IMPORTED_MODULE_32___default()('#Traitement').modal('hide');
              })["catch"](function (error) {
                jquery__WEBPACK_IMPORTED_MODULE_32___default()('#Traitement').modal('hide');
              });
            case 4:
            case "end":
              return _context8.stop();
          }
        }, _callee8, this);
      })));
    });
  });
  jquery__WEBPACK_IMPORTED_MODULE_32___default()(function () {
    jquery__WEBPACK_IMPORTED_MODULE_32___default()(".commento").each(function () {
      jquery__WEBPACK_IMPORTED_MODULE_32___default()(this).off().on("click", /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee9() {
        var id, sela;
        return _regeneratorRuntime().wrap(function _callee9$(_context9) {
          while (1) switch (_context9.prev = _context9.next) {
            case 0:
              id = this.id;
              sela = " ";
              localStorage.setItem('token', id);
              _context9.next = 5;
              return (0,axios__WEBPACK_IMPORTED_MODULE_35__["default"])({
                method: 'GET',
                url: '/crm/start/users/get',
                contentType: 'application/json; charset=utf-8',
                dataType: 'json'
              }).then(function (response) {
                var receiver = 0;
                var seleMessage = filterById(todos, id);
                if (parseInt(current) === parseInt(seleMessage.sender.id)) {
                  sela = filterById(users, parseInt(seleMessage.owner.id));
                  jquery__WEBPACK_IMPORTED_MODULE_32___default()('.useselected').text(sela.nom + ' ' + sela.prenoms);
                  jquery__WEBPACK_IMPORTED_MODULE_32___default()('.usemessage').html(seleMessage.todo);
                  receiver = parseInt(seleMessage.owner.id);
                } else {
                  sela = filterById(users, parseInt(seleMessage.sender.id));
                  jquery__WEBPACK_IMPORTED_MODULE_32___default()('.useselected').text(sela.nom + ' ' + sela.prenoms);
                  jquery__WEBPACK_IMPORTED_MODULE_32___default()('.usemessage').html(seleMessage.todo);
                  receiver = parseInt(seleMessage.sender.id);
                }
                setUsers(response.data);
                jquery__WEBPACK_IMPORTED_MODULE_32___default()('#chatModal').modal('show');
                localStorage.setItem('todoid', seleMessage.id);
                localStorage.setItem('receiverid', receiver);
                fetchChats();
                jquery__WEBPACK_IMPORTED_MODULE_32___default()('#chatcontent').scrollTop(jquery__WEBPACK_IMPORTED_MODULE_32___default()('#chatcontent')[0].scrollHeight);
              });
            case 5:
            case "end":
              return _context9.stop();
          }
        }, _callee9, this);
      })));
    });
  });
  jquery__WEBPACK_IMPORTED_MODULE_32___default()(function () {
    jquery__WEBPACK_IMPORTED_MODULE_32___default()(".updo").each(function () {
      jquery__WEBPACK_IMPORTED_MODULE_32___default()(this).off().on("click", /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee10() {
        var dd, id, dur;
        return _regeneratorRuntime().wrap(function _callee10$(_context10) {
          while (1) switch (_context10.prev = _context10.next) {
            case 0:
              jquery__WEBPACK_IMPORTED_MODULE_32___default()('#Traitement').modal('show');
              jquery__WEBPACK_IMPORTED_MODULE_32___default()('#divTodor').removeClass('hide');
              jquery__WEBPACK_IMPORTED_MODULE_32___default()('#divTodor').css('display', '');
              jquery__WEBPACK_IMPORTED_MODULE_32___default()('#divTodo').addClass('hide');
              jquery__WEBPACK_IMPORTED_MODULE_32___default()('#addTodoForm')[0].reset();
              dd = this.id;
              id = parseInt(dd.split(',')[0]);
              dur = dd.split(',')[2] + ' ' + dd.split(',')[1];
              jquery__WEBPACK_IMPORTED_MODULE_32___default()('#ddtodo').val(dur);
              _context10.next = 11;
              return (0,axios__WEBPACK_IMPORTED_MODULE_35__["default"])({
                method: 'GET',
                url: '/crm/start/todo/get/' + id,
                contentType: 'application/json; charset=utf-8',
                dataType: 'json'
              }).then(function (response) {
                localStorage.setItem('token', id.toString());
                var data = response.data;
                jquery__WEBPACK_IMPORTED_MODULE_32___default()('#datetache').val(data.date);
                CKEDITOR.instances.todo.setData(data.todo);
                jquery__WEBPACK_IMPORTED_MODULE_32___default()('#chtodoadd').addClass('hide');
                jquery__WEBPACK_IMPORTED_MODULE_32___default()('#chtodoedit').removeClass('hide');
                jquery__WEBPACK_IMPORTED_MODULE_32___default()('#smallTache').modal('show');
                jquery__WEBPACK_IMPORTED_MODULE_32___default()('#Traitement').modal('hide');
              })["catch"](function (error) {
                jquery__WEBPACK_IMPORTED_MODULE_32___default()('#Traitement').modal('hide');
              });
            case 11:
            case "end":
              return _context10.stop();
          }
        }, _callee10, this);
      })));
    });
  });
  jquery__WEBPACK_IMPORTED_MODULE_32___default()(function () {
    jquery__WEBPACK_IMPORTED_MODULE_32___default()(".getu").each(function () {
      jquery__WEBPACK_IMPORTED_MODULE_32___default()(this).off().on("click", /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee11() {
        var sele;
        return _regeneratorRuntime().wrap(function _callee11$(_context11) {
          while (1) switch (_context11.prev = _context11.next) {
            case 0:
              sele = filterById(users, this.id);
              jquery__WEBPACK_IMPORTED_MODULE_32___default()('.useselected').html(sele.nom + ' ' + sele.prenoms);
            case 2:
            case "end":
              return _context11.stop();
          }
        }, _callee11, this);
      })));
    });
  });
  var renderChats = chats.map(function (chat) {
    var mp = ' ';
    var delo = '<a class="delety" id=' + chat.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a>';
    if (parseInt(current) === parseInt(chat.owner.id)) {
      mp = '<div class="message-data text-right">' + '<span class="message-data-time">' + moment__WEBPACK_IMPORTED_MODULE_33__(chat.date).locale("fr").format('LLLL') + '</span></div>' + '<div class="message other-message float-right">' + chat.message + '<br/>' + delo + '</div>';
    } else {
      mp = '<div class="message-data">' + '<span class="message-data-time">' + moment__WEBPACK_IMPORTED_MODULE_33__(chat.date).locale("fr").format('LLLL') + '</span></div>' + '<div class="message my-message">' + chat.message + '</div>';
    }
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("li", {
      "class": "clearfix",
      key: chat.id,
      dangerouslySetInnerHTML: {
        __html: mp
      }
    });
  });
  var renderMonday = todos.map(function (todo) {
    var dd = moment__WEBPACK_IMPORTED_MODULE_33__(todo.date).format("dddd");
    var ded = moment__WEBPACK_IMPORTED_MODULE_33__(todo.date).format("DD/MM/YYYY HH:mm");
    var dad = moment__WEBPACK_IMPORTED_MODULE_33__(todo.date).format("YYYY/MM/DD");
    var statut = '';
    if (new Date(dad) > new Date(todei)) {
      if (todo.priorite !== 2) {
        statut = '<span class="bolo700 bg-green col-white">À FAIRE</span></br>';
      } else {
        statut = '<span class="bg-deep-orange col-white">EN ATTENTE</span></br>';
      }
    }
    if (new Date(dad) < new Date(todei)) {
      if (todo.priorite !== 2) {
        statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br>';
      } else {
        statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br><span class="bg-deep-orange col-white">EN ATTENTE</span></br>';
      }
    }
    var fiii = " ";
    var fichiers = todo.fichiers;
    if (fichiers.length > 0) {
      fichiers.map(function (fich) {
        fiii = '<p><i class="fa fa-paperclip"></i><a href="/' + fich.folde + '/' + fich.nomfichier + '" target="_blank" class="col-deep-purple"> ' + fich.nomfichier + '</a></br></p>' + fiii;
      });
    }
    var mamie;
    var sender = '<p  style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' + '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a></p></td></tr></table>';
    if (todo.sender && parseInt(current) !== parseInt(todo.sender.id)) {
      sender = 'De: ' + '<span class="col-pink">' + todo.sender.nom + ' ' + todo.sender.prenoms + '</span>' + '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' + '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a></p></td></tr></table>';
    }
    if (todo.sender && parseInt(current) === parseInt(todo.sender.id)) {
      sender = 'À: ' + '<span class="col-pink">' + todo.owner.nom + ' ' + todo.owner.prenoms + '</span>' + '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' + '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a>' + '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a></p></td></tr></table>';
    }
    if (dd === "lundi" && todo.priorite === 3) {
      mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">' + statut + '<span class="bg-pink col-white">IMPORTANT</span></br>' + todo.todo + fiii + ' ' + sender;
    }
    if (dd === "lundi" && todo.priorite === 2) {
      mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">' + statut + '<span class="bg-deep-purple col-white">Note du: ' + ded + '</span></br>' + todo.todo + fiii + ' ' + sender;
    }
    if (dd === "lundi" && todo.priorite === 1) {
      mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">' + statut + '<span class="bg-deep-purple col-white">Note du: ' + ded + '</span></br>' + todo.todo + fiii + ' ' + sender;
    }
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      onMouseOver: function onMouseOver() {
        shuto(todo.id);
      },
      onMouseOut: function onMouseOut() {
        shutod(todo.id);
      },
      key: todo.id
    }, dd === "lundi" && todo.priorite === 3 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      key: todo.id,
      dangerouslySetInnerHTML: {
        __html: mamie
      }
    }), dd === "lundi" && todo.priorite === 2 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      key: todo.id,
      dangerouslySetInnerHTML: {
        __html: mamie
      }
    }), dd === "lundi" && todo.priorite === 1 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      key: todo.id,
      dangerouslySetInnerHTML: {
        __html: mamie
      }
    }));
  });
  var renderTuesday = todos.map(function (todo) {
    var dd = moment__WEBPACK_IMPORTED_MODULE_33__(todo.date).format("dddd");
    var ded = moment__WEBPACK_IMPORTED_MODULE_33__(todo.date).format("DD/MM/YYYY HH:mm");
    var dad = moment__WEBPACK_IMPORTED_MODULE_33__(todo.date).format("YYYY/MM/DD");
    var statut = '';
    if (new Date(dad) > new Date(todei)) {
      if (todo.priorite !== 2) {
        statut = '<span class="bolo700 bg-green col-white">À FAIRE</span></br>';
      } else {
        statut = '<span class="bg-deep-orange col-white">EN ATTENTE</span></br>';
      }
    }
    if (new Date(dad) < new Date(todei)) {
      if (todo.priorite !== 2) {
        statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br>';
      } else {
        statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br><span class="bg-deep-orange col-white">EN ATTENTE</span></br>';
      }
    }
    var fiii = " ";
    var fichiers = todo.fichiers;
    if (fichiers.length > 0) {
      fichiers.map(function (fich) {
        fiii = '<p><i class="fa fa-paperclip"></i><a href="/' + fich.folde + '/' + fich.nomfichier + '" target="_blank" class="col-deep-purple"> ' + fich.nomfichier + '</a></br></p>' + fiii;
      });
    }
    var mamie;
    var sender = '<p  style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' + '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a></p></td></tr></table>';
    if (todo.sender && parseInt(current) !== parseInt(todo.sender.id)) {
      sender = 'De: ' + '<span class="col-pink">' + todo.sender.nom + ' ' + todo.sender.prenoms + '</span>' + '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' + '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a></p></td></tr></table>';
    }
    if (todo.sender && parseInt(current) === parseInt(todo.sender.id)) {
      sender = 'À: ' + '<span class="col-pink">' + todo.owner.nom + ' ' + todo.owner.prenoms + '</span>' + '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' + '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a>' + '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a></p></td></tr></table>';
    }
    if (dd === "mardi" && todo.priorite === 3) {
      mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">' + statut + '<span class="bg-pink col-white">IMPORTANT</span></br>' + todo.todo + fiii + ' ' + sender;
    }
    if (dd === "mardi" && todo.priorite === 2) {
      mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">' + statut + '<span class="bg-deep-purple col-white">Note du: ' + ded + '</span></br>' + todo.todo + fiii + ' ' + sender;
    }
    if (dd === "mardi" && todo.priorite === 1) {
      mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">' + statut + '<span class="bg-deep-purple col-white">Note du: ' + ded + '</span></br>' + todo.todo + fiii + ' ' + sender;
    }
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      onMouseOver: function onMouseOver() {
        shuto(todo.id);
      },
      onMouseOut: function onMouseOut() {
        shutod(todo.id);
      },
      key: todo.id
    }, dd === "mardi" && todo.priorite === 3 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      key: todo.id,
      dangerouslySetInnerHTML: {
        __html: mamie
      }
    }), dd === "mardi" && todo.priorite === 2 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      key: todo.id,
      dangerouslySetInnerHTML: {
        __html: mamie
      }
    }), dd === "mardi" && todo.priorite === 1 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      key: todo.id,
      dangerouslySetInnerHTML: {
        __html: mamie
      }
    }));
  });
  var renderWesnesday = todos.map(function (todo) {
    var dd = moment__WEBPACK_IMPORTED_MODULE_33__(todo.date).format("dddd");
    var ded = moment__WEBPACK_IMPORTED_MODULE_33__(todo.date).format("DD/MM/YYYY HH:mm");
    var dad = moment__WEBPACK_IMPORTED_MODULE_33__(todo.date).format("YYYY/MM/DD");
    var statut = '';
    if (new Date(dad) > new Date(todei)) {
      if (todo.priorite !== 2) {
        statut = '<span class="bolo700 bg-green col-white">À FAIRE</span></br>';
      } else {
        statut = '<span class="bg-deep-orange col-white">EN ATTENTE</span></br>';
      }
    }
    if (new Date(dad) < new Date(todei)) {
      if (todo.priorite !== 2) {
        statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br>';
      } else {
        statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br><span class="bg-deep-orange col-white">EN ATTENTE</span></br>';
      }
    }
    var fiii = " ";
    var fichiers = todo.fichiers;
    if (fichiers.length > 0) {
      fichiers.map(function (fich) {
        fiii = '<p><i class="fa fa-paperclip"></i><a href="/' + fich.folde + '/' + fich.nomfichier + '" target="_blank" class="col-deep-purple"> ' + fich.nomfichier + '</a></br></p>' + fiii;
      });
    }
    var mamie;
    var sender = '<p  style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' + '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a></p></td></tr></table>';
    if (todo.sender && parseInt(current) !== parseInt(todo.sender.id)) {
      sender = 'De: ' + '<span class="col-pink">' + todo.sender.nom + ' ' + todo.sender.prenoms + '</span>' + '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' + '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a></p></td></tr></table>';
    }
    if (todo.sender && parseInt(current) === parseInt(todo.sender.id)) {
      sender = 'À: ' + '<span class="col-pink">' + todo.owner.nom + ' ' + todo.owner.prenoms + '</span>' + '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' + '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a>' + '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a></p></td></tr></table>';
    }
    if (dd === "mercredi" && todo.priorite === 3) {
      mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">' + statut + '<span class="bg-pink col-white">IMPORTANT</span></br>' + todo.todo + fiii + ' ' + sender;
    }
    if (dd === "mercredi" && todo.priorite === 2) {
      mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">' + statut + '<span class="bg-deep-purple col-white">Note du: ' + ded + '</span></br>' + todo.todo + fiii + ' ' + sender;
    }
    if (dd === "mercredi" && todo.priorite === 1) {
      mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">' + statut + '<span class="bg-deep-purple col-white">Note du: ' + ded + '</span></br>' + todo.todo + fiii + ' ' + sender;
    }
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      onMouseOver: function onMouseOver() {
        shuto(todo.id);
      },
      onMouseOut: function onMouseOut() {
        shutod(todo.id);
      },
      key: todo.id
    }, dd === "mercredi" && todo.priorite === 3 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      key: todo.id,
      dangerouslySetInnerHTML: {
        __html: mamie
      }
    }), dd === "mercredi" && todo.priorite === 2 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      key: todo.id,
      dangerouslySetInnerHTML: {
        __html: mamie
      }
    }), dd === "mercredi" && todo.priorite === 1 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      key: todo.id,
      dangerouslySetInnerHTML: {
        __html: mamie
      }
    }));
  });
  var renderThursday = todos.map(function (todo) {
    var dd = moment__WEBPACK_IMPORTED_MODULE_33__(todo.date).format("dddd");
    var ded = moment__WEBPACK_IMPORTED_MODULE_33__(todo.date).format("DD/MM/YYYY HH:mm");
    var dad = moment__WEBPACK_IMPORTED_MODULE_33__(todo.date).format("YYYY-MM-DD");
    var statut = '';
    if (new Date(dad) > new Date(todei)) {
      if (todo.priorite !== 2) {
        statut = '<span class="bolo700 bg-green col-white">À FAIRE</span></br>';
      } else {
        statut = '<span class="bg-deep-orange col-white">EN ATTENTE</span></br>';
      }
    }
    if (new Date(dad) < new Date(todei)) {
      if (todo.priorite !== 2) {
        statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br>';
      } else {
        statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br><span class="bg-deep-orange col-white">EN ATTENTE</span></br>';
      }
    }
    var fiii = " ";
    var fichiers = todo.fichiers;
    if (fichiers.length > 0) {
      fichiers.map(function (fich) {
        fiii = '<p><i class="fa fa-paperclip"></i><a href="/' + fich.folde + '/' + fich.nomfichier + '" target="_blank" class="col-deep-purple"> ' + fich.nomfichier + '</a></br></p>' + fiii;
      });
    }
    var mamie;
    var sender = '<p  style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' + '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a></p></td></tr></table>';
    if (todo.sender && parseInt(current) !== parseInt(todo.sender.id)) {
      sender = 'De: ' + '<span class="col-pink">' + todo.sender.nom + ' ' + todo.sender.prenoms + '</span>' + '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' + '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a></p></td></tr></table>';
    }
    if (todo.sender && parseInt(current) === parseInt(todo.sender.id)) {
      sender = 'À: ' + '<span class="col-pink">' + todo.owner.nom + ' ' + todo.owner.prenoms + '</span>' + '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' + '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a>' + '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a></p></td></tr></table>';
    }
    if (dd === "jeudi" && todo.priorite === 3) {
      mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">' + statut + '<span class="bg-pink col-white">IMPORTANT</span></br>' + todo.todo + fiii + ' ' + sender;
    }
    if (dd === "jeudi" && todo.priorite === 2) {
      mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">' + statut + '<span class="bg-deep-purple col-white">Note du: ' + ded + '</span></br>' + todo.todo + fiii + ' ' + sender;
    }
    if (dd === "jeudi" && todo.priorite === 1) {
      mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">' + statut + '<span class="bg-deep-purple col-white">Note du: ' + ded + '</span></br>' + todo.todo + fiii + ' ' + sender;
    }
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      onMouseOver: function onMouseOver() {
        shuto(todo.id);
      },
      onMouseOut: function onMouseOut() {
        shutod(todo.id);
      },
      key: todo.id
    }, dd === "jeudi" && todo.priorite === 3 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      key: todo.id,
      dangerouslySetInnerHTML: {
        __html: mamie
      }
    }), dd === "jeudi" && todo.priorite === 2 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      key: todo.id,
      dangerouslySetInnerHTML: {
        __html: mamie
      }
    }), dd === "jeudi" && todo.priorite === 1 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      key: todo.id,
      dangerouslySetInnerHTML: {
        __html: mamie
      }
    }));
  });
  var renderFriday = todos.map(function (todo) {
    var dd = moment__WEBPACK_IMPORTED_MODULE_33__(todo.date).format("dddd");
    var ded = moment__WEBPACK_IMPORTED_MODULE_33__(todo.date).format("DD/MM/YYYY HH:mm");
    var dad = moment__WEBPACK_IMPORTED_MODULE_33__(todo.date).format("YYYY/MM/DD");
    var statut = '';
    if (new Date(dad) > new Date(todei)) {
      if (todo.priorite !== 2) {
        statut = '<span class="bolo700 bg-green col-white">À FAIRE</span></br>';
      } else {
        statut = '<span class="bg-deep-orange col-white">EN ATTENTE</span></br>';
      }
    }
    if (new Date(dad) < new Date(todei)) {
      if (todo.priorite !== 2) {
        statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br>';
      } else {
        statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br><span class="bg-deep-orange col-white">EN ATTENTE</span></br>';
      }
    }
    var fiii = " ";
    var fichiers = todo.fichiers;
    if (fichiers.length > 0) {
      fichiers.map(function (fich) {
        fiii = '<p><i class="fa fa-paperclip"></i><a href="/' + fich.folde + '/' + fich.nomfichier + '" target="_blank" class="col-deep-purple"> ' + fich.nomfichier + '</a></br></p>' + fiii;
      });
    }
    var mamie;
    var sender = '<p  style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' + '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a>' + '</p></td></tr></table>';
    if (todo.sender && parseInt(current) !== parseInt(todo.sender.id)) {
      sender = 'De: ' + '<span class="col-pink">' + todo.sender.nom + ' ' + todo.sender.prenoms + '</span>' + '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' + '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a></p></td></tr></table>';
    }
    if (todo.sender && parseInt(current) === parseInt(todo.sender.id)) {
      sender = 'À: ' + '<span class="col-pink">' + todo.owner.nom + ' ' + todo.owner.prenoms + '</span>' + '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' + '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a>' + '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a></p></td></tr></table>';
    }
    if (dd === "vendredi" && todo.priorite === 3) {
      mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">' + statut + '<span class="bg-pink col-white">IMPORTANT</span></br>' + todo.todo + fiii + ' ' + sender;
    }
    if (dd === "vendredi" && todo.priorite === 2) {
      mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">' + statut + '<span class="bg-deep-purple col-white">Note du: ' + ded + '</span></br>' + todo.todo + fiii + ' ' + sender;
    }
    if (dd === "vendredi" && todo.priorite === 1) {
      mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">' + statut + '<span class="bg-deep-purple col-white">Note du: ' + ded + '</span></br>' + todo.todo + fiii + ' ' + sender;
    }
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      onMouseOver: function onMouseOver() {
        shuto(todo.id);
      },
      onMouseOut: function onMouseOut() {
        shutod(todo.id);
      },
      key: todo.id
    }, dd === "vendredi" && todo.priorite === 3 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      key: todo.id,
      dangerouslySetInnerHTML: {
        __html: mamie
      }
    }), dd === "vendredi" && todo.priorite === 2 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      key: todo.id,
      dangerouslySetInnerHTML: {
        __html: mamie
      }
    }), dd === "vendredi" && todo.priorite === 1 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      key: todo.id,
      dangerouslySetInnerHTML: {
        __html: mamie
      }
    }));
  });
  var renderSaturday = todos.map(function (todo) {
    var dd = moment__WEBPACK_IMPORTED_MODULE_33__(todo.date).format("dddd");
    var ded = moment__WEBPACK_IMPORTED_MODULE_33__(todo.date).format("DD/MM/YYYY HH:mm");
    var dad = moment__WEBPACK_IMPORTED_MODULE_33__(todo.date).format("YYYY/MM/DD");
    var statut = '';
    if (new Date(dad) > new Date(todei)) {
      if (todo.priorite !== 2) {
        statut = '<span class="bolo700 bg-green col-white">À FAIRE</span></br>';
      } else {
        statut = '<span class="bg-deep-orange col-white">EN ATTENTE</span></br>';
      }
    }
    if (new Date(dad) < new Date(todei)) {
      if (todo.priorite !== 2) {
        statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br>';
      } else {
        statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br><span class="bg-deep-orange col-white">EN ATTENTE</span></br>';
      }
    }
    var fiii = " ";
    var fichiers = todo.fichiers;
    if (fichiers.length > 0) {
      fichiers.map(function (fich) {
        fiii = '<p><i class="fa fa-paperclip"></i><a href="/' + fich.folde + '/' + fich.nomfichier + '" target="_blank" class="col-deep-purple"> ' + fich.nomfichier + '</a></br></p>' + fiii;
      });
    }
    var mamie;
    var sender = '<p  style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' + '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a></p></td></tr></table>';
    if (todo.sender && parseInt(current) !== parseInt(todo.sender.id)) {
      sender = 'De: ' + '<span class="col-pink">' + todo.sender.nom + ' ' + todo.sender.prenoms + '</span>' + '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' + '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a></p></td></tr></table>';
    }
    if (todo.sender && parseInt(current) === parseInt(todo.sender.id)) {
      sender = 'À: ' + '<span class="col-pink">' + todo.owner.nom + ' ' + todo.owner.prenoms + '</span>' + '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' + '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a>' + '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a></p></td></tr></table>';
    }
    if (dd === "samedi" && todo.priorite === 3) {
      mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">' + statut + '<span class="bg-pink col-white">IMPORTANT</span></br>' + todo.todo + fiii + ' ' + sender;
    }
    if (dd === "samedi" && todo.priorite === 2) {
      mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">' + statut + '<span class="bg-deep-purple col-white">Note du: ' + ded + '</span></br>' + todo.todo + fiii + ' ' + sender;
    }
    if (dd === "samedi" && todo.priorite === 1) {
      mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">' + statut + '<span class="bg-deep-purple col-white">Note du: ' + ded + '</span></br>' + todo.todo + fiii + ' ' + sender;
    }
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      onMouseOver: function onMouseOver() {
        shuto(todo.id);
      },
      onMouseOut: function onMouseOut() {
        shutod(todo.id);
      },
      key: todo.id
    }, dd === "samedi" && todo.priorite === 3 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      key: todo.id,
      dangerouslySetInnerHTML: {
        __html: mamie
      }
    }), dd === "samedi" && todo.priorite === 2 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      key: todo.id,
      dangerouslySetInnerHTML: {
        __html: mamie
      }
    }), dd === "samedi" && todo.priorite === 1 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      key: todo.id,
      dangerouslySetInnerHTML: {
        __html: mamie
      }
    }));
  });
  var renderSunday = todos.map(function (todo) {
    var dd = moment__WEBPACK_IMPORTED_MODULE_33__(todo.date).format("dddd");
    var ded = moment__WEBPACK_IMPORTED_MODULE_33__(todo.date).format("DD/MM/YYYY HH:mm");
    var dad = moment__WEBPACK_IMPORTED_MODULE_33__(todo.date).format("YYYY/MM/DD");
    var statut = '';
    if (new Date(dad) > new Date(todei)) {
      if (todo.priorite !== 2) {
        statut = '<span class="bolo700 bg-green col-white">À FAIRE</span></br>';
      } else {
        statut = '<span class="bg-deep-orange col-white">EN ATTENTE</span></br>';
      }
    }
    if (new Date(dad) < new Date(todei)) {
      if (todo.priorite !== 2) {
        statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br>';
      } else {
        statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br><span class="bg-deep-orange col-white">EN ATTENTE</span></br>';
      }
    }
    var fiii = " ";
    var fichiers = todo.fichiers;
    if (fichiers.length > 0) {
      fichiers.map(function (fich) {
        fiii = '<p><i class="fa fa-paperclip"></i><a href="/' + fich.folde + '/' + fich.nomfichier + '" target="_blank" class="col-deep-purple"> ' + fich.nomfichier + '</a></br></p>' + fiii;
      });
    }
    var mamie;
    var sender = '<p  style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' + '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a></p></td></tr></table>';
    if (todo.sender && parseInt(current) !== parseInt(todo.sender.id)) {
      sender = 'De: ' + '<span class="col-pink">' + todo.sender.nom + ' ' + todo.sender.prenoms + '</span>' + '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' + '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a></p></td></tr></table>';
    }
    if (todo.sender && parseInt(current) === parseInt(todo.sender.id)) {
      sender = 'À: ' + '<span class="col-pink">' + todo.owner.nom + ' ' + todo.owner.prenoms + '</span>' + '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' + '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a>' + '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a></p></td></tr></table>';
    }
    if (dd === "dimanche" && todo.priorite === 3) {
      mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">' + statut + '<span class="bg-pink col-white">IMPORTANT</span></br>' + todo.todo + fiii + ' ' + sender;
    }
    if (dd === "dimanche" && todo.priorite === 2) {
      mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">' + statut + '<span class="bg-deep-purple col-white">Note du: ' + ded + '</span></br>' + todo.todo + fiii + ' ' + sender;
    }
    if (dd === "dimanche" && todo.priorite === 1) {
      mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">' + statut + '<span class="bg-deep-purple col-white">Note du: ' + ded + '</span></br>' + todo.todo + fiii + ' ' + sender;
    }
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      onMouseOver: function onMouseOver() {
        shuto(todo.id);
      },
      onMouseOut: function onMouseOut() {
        shutod(todo.id);
      },
      key: todo.id
    }, dd === "dimanche" && todo.priorite === 3 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      key: todo.id,
      dangerouslySetInnerHTML: {
        __html: mamie
      }
    }), dd === "dimanche" && todo.priorite === 2 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      key: todo.id,
      dangerouslySetInnerHTML: {
        __html: mamie
      }
    }), dd === "dimanche" && todo.priorite === 1 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
      key: todo.id,
      dangerouslySetInnerHTML: {
        __html: mamie
      }
    }));
  });
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement((react__WEBPACK_IMPORTED_MODULE_30___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "modal fade",
    id: "ConfirmDelete",
    tabIndex: "-1",
    role: "dialog",
    "aria-labelledby": "exampleModalLabel",
    "aria-hidden": "true"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "modal-dialog modal-sm modal-notify",
    role: "document"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "modal-content text-center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "modal-header d-flex justify-content-center bg-pink"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("h4", {
    className: "bolo700"
  }, "\xCATES VOUS SUR ?")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "modal-body"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
    className: "fas fa-times fa-4x animated rotateIn col-pink"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "text-center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    type: "button",
    id: "accepto",
    className: "btn btn-link waves-effect text-white bg-primary m-r-10"
  }, "OUI"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    type: "button",
    id: "closeLier",
    className: "btn btn-link waves-effect text-white bg-pink",
    "data-dismiss": "modal"
  }, "NON"))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "modal fade",
    id: "chatModal",
    "data-bs-backdrop": "static",
    "data-bs-keyboard": "false",
    tabIndex: "-1",
    "aria-labelledby": "staticBackdropLabel",
    "aria-hidden": "true"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "modal-dialog modal-md"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "modal-content"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "container"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "row chat-window ",
    id: "chat_window_1",
    style: {
      marginLeft: "10px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel panel-default"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel-heading top-bar"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "col-md-10 col-xs-10"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("h3", {
    className: "panel-title"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("span", {
    className: "glyphicon glyphicon-comment"
  }), " Chat"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel-body msg_container_base"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "row msg_container base_sent"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "col-md-10 col-xs-10"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "messages msg_sent"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("p", null, "that mongodb thing looks good, huh? tiny master db, and huge document store"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("time", {
    dateTime: "2009-11-13T20:00"
  }, "Timothy \u2022 51 min"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "col-md-2 col-xs-2 avatar"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("img", {
    src: "http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg",
    className: " img-responsive "
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "row msg_container base_receive"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "col-md-2 col-xs-2 avatar"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("img", {
    src: "http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg",
    className: " img-responsive "
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "col-md-10 col-xs-10"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "messages msg_receive"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("p", null, "that mongodb thing looks good, huh? tiny master db, and huge document store"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("time", {
    dateTime: "2009-11-13T20:00"
  }, "Timothy \u2022 51 min")))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "row msg_container base_receive"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "col-md-2 col-xs-2 avatar"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("img", {
    src: "http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg",
    className: " img-responsive "
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "col-xs-10 col-md-10"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "messages msg_receive"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("p", null, "that mongodb thing looks good, huh? tiny master db, and huge document store"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("time", {
    dateTime: "2009-11-13T20:00"
  }, "Timothy \u2022 51 min")))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "row msg_container base_sent"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "col-xs-10 col-md-10"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "messages msg_sent"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("p", null, "that mongodb thing looks good, huh? tiny master db, and huge document store"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("time", {
    dateTime: "2009-11-13T20:00"
  }, "Timothy \u2022 51 min"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "col-md-2 col-xs-2 avatar"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("img", {
    src: "http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg",
    className: " img-responsive "
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "row msg_container base_receive"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "col-md-2 col-xs-2 avatar"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("img", {
    src: "http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg",
    className: " img-responsive "
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "col-xs-10 col-md-10"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "messages msg_receive"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("p", null, "that mongodb thing looks good, huh? tiny master db, and huge document store"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("time", {
    dateTime: "2009-11-13T20:00"
  }, "Timothy \u2022 51 min")))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "row msg_container base_sent"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "col-md-10 col-xs-10 "
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "messages msg_sent"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("p", null, "that mongodb thing looks good, huh? tiny master db, and huge document store"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("time", {
    dateTime: "2009-11-13T20:00"
  }, "Timothy \u2022 51 min"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "col-md-2 col-xs-2 avatar"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("img", {
    src: "http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg",
    className: " img-responsive "
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "panel-footer"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "input-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("textarea", {
    type: "text",
    id: "chat",
    row: "5",
    className: "form-control input-sm chat_input",
    placeholder: "Votre message ici..."
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("span", {
    className: "input-group-btn"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("button", {
    className: "btn btn-primary btn-sm",
    id: "sendchat"
  }, "Envoyer")))))))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "container-fluid diti"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    className: "block-header"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_34__["default"], {
    id: "test-table-xls-button",
    className: "btn bg-green text-white m-r-5",
    table: "agenda",
    filename: "votre agenda",
    sheet: "tablexls",
    buttonText: "EXPORTER EN EXCEL"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("button", {
    className: "btn bg-blue text-white m-r-5",
    onClick: function onClick() {
      addTachers();
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("i", {
    className: "fa fa-circle-plus"
  }), " AJOUTER UNE NOTE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("div", {
    style: {
      overflow: "scroll",
      padding: "20px",
      height: "15cm",
      border: "2px solid #4e73df"
    },
    className: "shadow table-responsive"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("h4", {
    className: "bolo700"
  }, "TOUTE VOTRE AGENDA "), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("table", {
    className: "table-bordered",
    id: "agenda",
    style: {
      minHeight: "120px",
      backgroundColor: '#F0F8FF'
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", {
    className: "col-black text-center  "
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "text-center",
    style: {
      minWidth: "230px",
      border: "1px solid #607D8B",
      borderBottom: "6px solid #F44336"
    }
  }, "LUNDI"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "text-center",
    style: {
      minWidth: "230px",
      border: "1px solid #607D8B",
      borderBottom: "6px solid #673AB7"
    }
  }, "MARDI"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "text-center",
    style: {
      minWidth: "230px",
      border: "1px solid #607D8B",
      borderBottom: "6px solid #9C27B0"
    }
  }, "MERCREDI"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "text-center",
    style: {
      minWidth: "230px",
      border: "1px solid #607D8B",
      borderBottom: "6px solid #FF9800"
    }
  }, "JEUDI"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "text-center",
    style: {
      minWidth: "230px",
      border: "1px solid #607D8B",
      borderBottom: "6px solid #2196F3"
    }
  }, "VENDREDI"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "text-center",
    style: {
      minWidth: "230px",
      border: "1px solid #607D8B",
      borderBottom: "6px solid #607D8B"
    }
  }, "SAMEDI"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("th", {
    className: "text-center",
    style: {
      minWidth: "230px",
      border: "1px solid #607D8B",
      borderBottom: "6px solid #009688"
    }
  }, "DIMANCHE"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tbody", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
    className: "col-black",
    valign: "top"
  }, renderMonday), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
    className: "col-black",
    valign: "top"
  }, renderTuesday), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
    className: "col-black",
    valign: "top"
  }, renderWesnesday), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
    className: "col-black",
    valign: "top"
  }, renderThursday), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
    className: "col-black",
    valign: "top"
  }, renderFriday), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
    className: "col-black",
    valign: "top"
  }, renderSaturday), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement("td", {
    className: "col-black",
    valign: "top"
  }, renderSunday))))))));
};
try {
  var root = (0,react_dom_client__WEBPACK_IMPORTED_MODULE_31__.createRoot)(document.getElementById('datafirst'));
  root.render( /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_30___default().createElement(DataFirst, null));
} catch (e) {}

/***/ }),

/***/ "./assets/components/chantiers/Planing.js":
/*!************************************************!*\
  !*** ./assets/components/chantiers/Planing.js ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_object_keys_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.object.keys.js */ "./node_modules/core-js/modules/es.object.keys.js");
/* harmony import */ var core_js_modules_es_object_keys_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_keys_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.number.constructor.js */ "./node_modules/core-js/modules/es.number.constructor.js");
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.date.to-string.js */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string.js */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_number_to_fixed_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.number.to-fixed.js */ "./node_modules/core-js/modules/es.number.to-fixed.js");
/* harmony import */ var core_js_modules_es_number_to_fixed_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_number_to_fixed_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_array_join_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.array.join.js */ "./node_modules/core-js/modules/es.array.join.js");
/* harmony import */ var core_js_modules_es_array_join_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_join_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.array.map.js */ "./node_modules/core-js/modules/es.array.map.js");
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/web.timers.js */ "./node_modules/core-js/modules/web.timers.js");
/* harmony import */ var core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_array_find_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.array.find.js */ "./node_modules/core-js/modules/es.array.find.js");
/* harmony import */ var core_js_modules_es_array_find_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_find_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_array_sort_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.array.sort.js */ "./node_modules/core-js/modules/es.array.sort.js");
/* harmony import */ var core_js_modules_es_array_sort_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_sort_js__WEBPACK_IMPORTED_MODULE_12__);
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
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_37__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_37___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_37__);
/* harmony import */ var moment__WEBPACK_IMPORTED_MODULE_38__ = __webpack_require__(/*! moment */ "./node_modules/moment/moment.js");
/* harmony import */ var moment__WEBPACK_IMPORTED_MODULE_38___default = /*#__PURE__*/__webpack_require__.n(moment__WEBPACK_IMPORTED_MODULE_38__);
/* harmony import */ var react_edit_text__WEBPACK_IMPORTED_MODULE_39__ = __webpack_require__(/*! react-edit-text */ "./node_modules/react-edit-text/dist/index.modern.js");
/* harmony import */ var react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_40__ = __webpack_require__(/*! react-html-table-to-excel */ "./node_modules/react-html-table-to-excel/index.js");
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








var Planing = function Planing() {
  var _useState = (0,react__WEBPACK_IMPORTED_MODULE_35__.useState)([]),
    _useState2 = _slicedToArray(_useState, 2),
    datas = _useState2[0],
    setDatas = _useState2[1];
  var _useState3 = (0,react__WEBPACK_IMPORTED_MODULE_35__.useState)([]),
    _useState4 = _slicedToArray(_useState3, 2),
    teams = _useState4[0],
    setTeams = _useState4[1];
  var _useState5 = (0,react__WEBPACK_IMPORTED_MODULE_35__.useState)([]),
    _useState6 = _slicedToArray(_useState5, 2),
    ateams = _useState6[0],
    setaTeams = _useState6[1];
  var length = Object.keys(datas).length;
  if (length === 0) {
    (0,axios__WEBPACK_IMPORTED_MODULE_41__["default"])({
      method: 'GET',
      url: '/crm/planning/gets',
      contentType: 'application/json; charset=utf-8'
    }).then(function (response) {
      setDatas(response.data);
    })["catch"](function (error) {});
  }
  function compare(dateTimeA, dateTimeB) {
    var momentA = moment__WEBPACK_IMPORTED_MODULE_38__(dateTimeA, "DD/MM/YYYY").valueOf();
    var momentB = moment__WEBPACK_IMPORTED_MODULE_38__(dateTimeB, "DD/MM/YYYY").valueOf();
    if (momentA > momentB) return 1;else if (momentA < momentB) return -1;else return 0;
  }
  var formatNumber = function formatNumber(num, precision, separator) {
    var parts;
    num = Number(num);
    num = (typeof precision !== 'undefined' ? num.toFixed(precision) : num).toString();
    parts = num.split('.');
    parts[0] = parts[0].toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1' + separator);
    return parts.join(',');
  };
  (0,react__WEBPACK_IMPORTED_MODULE_35__.useEffect)(function () {
    (0,axios__WEBPACK_IMPORTED_MODULE_41__["default"])({
      method: 'GET',
      url: '/crm/planning/equipes/get',
      contentType: 'application/json; charset=utf-8'
    }).then(function (response) {
      setaTeams(response.data);
    })["catch"](function (error) {});
  }, [datas]);
  var $selplanning = jquery__WEBPACK_IMPORTED_MODULE_37___default()('.selplanning');
  jquery__WEBPACK_IMPORTED_MODULE_37___default()('.selplanning').html('');
  var $selsection = jquery__WEBPACK_IMPORTED_MODULE_37___default()('.selsection');
  jquery__WEBPACK_IMPORTED_MODULE_37___default()('.selsection ').html('');
  var $selequipe = jquery__WEBPACK_IMPORTED_MODULE_37___default()('.selequipe');
  jquery__WEBPACK_IMPORTED_MODULE_37___default()('.selequipe ').html('');
  var jjk = null;
  datas.map(function (data) {
    var chantiers = data.chantiers;
    if (chantiers.length > 0) {
      chantiers.map(function (chantier) {
        var count = 0;
        var plannings = chantier.plannings;
        plannings.map(function (pla) {
          if (pla.corbeille === null) {
            count++;
          }
        });
        if (count > 0) {
          var group = jquery__WEBPACK_IMPORTED_MODULE_37___default()('<optgroup label="' + data.nomclient + ' | ' + chantier.nomchantier + '" />');
          plannings.map(function (planning) {
            if (planning.corbeille === null) {
              jquery__WEBPACK_IMPORTED_MODULE_37___default()('<option value="' + planning.id + '"  />').html(planning.planning).appendTo(group);
            }
          });
          group.appendTo($selplanning);
        }
      });
    }
  });
  datas.map(function (data) {
    var chantiers = data.chantiers;
    if (chantiers.length > 0) {
      chantiers.map(function (chantier) {
        var plannings = chantier.plannings;
        plannings.map(function (planning) {
          var count = 0;
          var sections = planning.section;
          sections.map(function (sec) {
            if (sec.corbeille === null) {
              count++;
            }
          });
          if (count > 0) {
            var group = jquery__WEBPACK_IMPORTED_MODULE_37___default()('<optgroup label="' + data.nomclient + ' | ' + chantier.nomchantier + '" />');
            sections.map(function (section) {
              if (section.corbeille === null) {
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('<option value="' + section.id + '"  />').html(section.libelle).appendTo(group);
              }
            });
            group.appendTo($selsection);
          }
        });
      });
    }
  });
  teams.map(function (team) {
    jjk = '<option value="' + team.id + '">' + team.designation + '</option>' + jjk;
  });
  jquery__WEBPACK_IMPORTED_MODULE_37___default()('.selequipe ').html(jjk);
  jquery__WEBPACK_IMPORTED_MODULE_37___default()("#sortchantier").on("change", function () {
    var aa = 'aa';
    if (jquery__WEBPACK_IMPORTED_MODULE_37___default()(this).val().length > 0) {
      aa = jquery__WEBPACK_IMPORTED_MODULE_37___default()(this).val();
    }
    (0,axios__WEBPACK_IMPORTED_MODULE_41__["default"])({
      method: 'GET',
      url: '/crm/planning/search/' + aa,
      contentType: 'application/json; charset=utf-8',
      dataType: 'json'
    }).then(function (response) {
      setDatas(response.data);
    })["catch"](function (error) {});
  });
  jquery__WEBPACK_IMPORTED_MODULE_37___default()("#sortchantier1").on("change", function () {
    var aa = 'aa';
    if (jquery__WEBPACK_IMPORTED_MODULE_37___default()(this).val().length > 0) {
      aa = jquery__WEBPACK_IMPORTED_MODULE_37___default()(this).val();
    }
    (0,axios__WEBPACK_IMPORTED_MODULE_41__["default"])({
      method: 'GET',
      url: '/crm/planning/search/' + aa,
      contentType: 'application/json; charset=utf-8',
      dataType: 'json'
    }).then(function (response) {
      setDatas(response.data);
    })["catch"](function (error) {});
  });
  jquery__WEBPACK_IMPORTED_MODULE_37___default()("#sortchantier2").on("change", function () {
    var aa = 'aa';
    if (jquery__WEBPACK_IMPORTED_MODULE_37___default()(this).val().length > 0) {
      aa = jquery__WEBPACK_IMPORTED_MODULE_37___default()(this).val();
    }
    (0,axios__WEBPACK_IMPORTED_MODULE_41__["default"])({
      method: 'GET',
      url: '/crm/planning/search/' + aa,
      contentType: 'application/json; charset=utf-8',
      dataType: 'json'
    }).then(function (response) {
      setDatas(response.data);
    })["catch"](function (error) {});
  });
  jquery__WEBPACK_IMPORTED_MODULE_37___default()("#tsection").on("change", function () {
    var aa = 'aa';
    if (jquery__WEBPACK_IMPORTED_MODULE_37___default()(this).val().length > 0) {
      aa = jquery__WEBPACK_IMPORTED_MODULE_37___default()(this).val();
    }
    (0,axios__WEBPACK_IMPORTED_MODULE_41__["default"])({
      method: 'GET',
      url: '/crm/planning/chantier/get/' + aa,
      contentType: 'application/json; charset=utf-8',
      dataType: 'json'
    }).then(function (response) {
      setTeams(response.data);
    })["catch"](function (error) {});
  });
  var showPlanning = function showPlanning(id) {
    if (jquery__WEBPACK_IMPORTED_MODULE_37___default()('.' + id + 'plann').hasClass("hide")) {
      jquery__WEBPACK_IMPORTED_MODULE_37___default()('.' + id + 'plann').removeClass('hide');
    } else {
      jquery__WEBPACK_IMPORTED_MODULE_37___default()('.' + id + 'plann').addClass('hide');
    }
  };
  var showSection = function showSection(id) {
    if (jquery__WEBPACK_IMPORTED_MODULE_37___default()('.' + id + 'sec').hasClass("hide")) {
      jquery__WEBPACK_IMPORTED_MODULE_37___default()('.' + id + 'sec').removeClass('hide');
    } else {
      jquery__WEBPACK_IMPORTED_MODULE_37___default()('.' + id + 'sec').addClass('hide');
    }
  };
  var showTache = function showTache(id) {
    if (jquery__WEBPACK_IMPORTED_MODULE_37___default()('.' + id + 'tach').hasClass("hide")) {
      jquery__WEBPACK_IMPORTED_MODULE_37___default()('.' + id + 'tach').removeClass('hide');
    } else {
      jquery__WEBPACK_IMPORTED_MODULE_37___default()('.' + id + 'tach').addClass('hide');
    }
  };
  var showEquipe = function showEquipe(id) {
    if (jquery__WEBPACK_IMPORTED_MODULE_37___default()('.' + id + 'equip').hasClass("hide")) {
      jquery__WEBPACK_IMPORTED_MODULE_37___default()('.' + id + 'equip').removeClass('hide');
    } else {
      jquery__WEBPACK_IMPORTED_MODULE_37___default()('.' + id + 'equip').addClass('hide');
    }
  };
  var delplanning = /*#__PURE__*/function () {
    var _ref = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee(id) {
      return _regeneratorRuntime().wrap(function _callee$(_context) {
        while (1) switch (_context.prev = _context.next) {
          case 0:
            jquery__WEBPACK_IMPORTED_MODULE_37___default()('#Traitement').modal('show');
            _context.next = 3;
            return (0,axios__WEBPACK_IMPORTED_MODULE_41__["default"])({
              method: 'DELETE',
              url: '/crm/planning/delplanning/' + id,
              contentType: 'application/json; charset=utf-8',
              dataType: 'json'
            }).then(function (response) {
              setDatas(response.data);
              jquery__WEBPACK_IMPORTED_MODULE_37___default()('#Traitement').modal('hide');
            })["catch"](function (error) {});
          case 3:
          case "end":
            return _context.stop();
        }
      }, _callee);
    }));
    return function delplanning(_x2) {
      return _ref.apply(this, arguments);
    };
  }();
  var delsection = /*#__PURE__*/function () {
    var _ref2 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee2(id) {
      return _regeneratorRuntime().wrap(function _callee2$(_context2) {
        while (1) switch (_context2.prev = _context2.next) {
          case 0:
            jquery__WEBPACK_IMPORTED_MODULE_37___default()('#Traitement').modal('show');
            _context2.next = 3;
            return (0,axios__WEBPACK_IMPORTED_MODULE_41__["default"])({
              method: 'DELETE',
              url: '/crm/planning/section/del/' + id,
              contentType: 'application/json; charset=utf-8',
              dataType: 'json'
            }).then(function (response) {
              setDatas(response.data);
              jquery__WEBPACK_IMPORTED_MODULE_37___default()('#Traitement').modal('hide');
            })["catch"](function (error) {});
          case 3:
          case "end":
            return _context2.stop();
        }
      }, _callee2);
    }));
    return function delsection(_x3) {
      return _ref2.apply(this, arguments);
    };
  }();
  jquery__WEBPACK_IMPORTED_MODULE_37___default()('#addePlanning').off().on("click", function (event) {
    event.preventDefault();
    if (jquery__WEBPACK_IMPORTED_MODULE_37___default()(this).closest('form').valid()) {
      jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divaddplan').hide();
      jquery__WEBPACK_IMPORTED_MODULE_37___default()('#loadPlanning').css('display', '');
      (0,axios__WEBPACK_IMPORTED_MODULE_41__["default"])({
        method: 'POST',
        url: '/crm/planning/adde',
        data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_37___default()('#addPlanningForm').serializeObject()),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json'
      }).then(function (response) {
        setDatas(response.data);
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divaddplan').show();
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#loadPlanning').hide();
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#mdModalPlanning').modal('toggle');
        setTimeout(function () {
          showPlanning(jquery__WEBPACK_IMPORTED_MODULE_37___default()('#addPlanningForm').serializeObject()['chantier']);
        }, 500);
      })["catch"](function (error) {});
    }
  });
  jquery__WEBPACK_IMPORTED_MODULE_37___default()('#updPlanning').off().on("click", function (event) {
    event.preventDefault();
    if (jquery__WEBPACK_IMPORTED_MODULE_37___default()(this).closest('form').valid()) {
      jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divupdplan').hide();
      jquery__WEBPACK_IMPORTED_MODULE_37___default()('#loadPlanning').css('display', '');
      var id = localStorage.getItem('token');
      (0,axios__WEBPACK_IMPORTED_MODULE_41__["default"])({
        method: 'PUT',
        url: '/crm/planning/updater/' + id,
        data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_37___default()('#addPlanningForm').serializeObject()),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json'
      }).then(function (response) {
        setDatas(response.data);
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divaddplan').show();
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#loadPlanning').hide();
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#mdModalPlanning').modal('toggle');
      })["catch"](function (error) {});
    }
  });
  jquery__WEBPACK_IMPORTED_MODULE_37___default()('#addeSection').off().on("click", function (event) {
    event.preventDefault();
    if (jquery__WEBPACK_IMPORTED_MODULE_37___default()(this).closest('form').valid()) {
      jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divaddSection').addClass('hide');
      jquery__WEBPACK_IMPORTED_MODULE_37___default()('#loadSection').css('display', '');
      var pp = jquery__WEBPACK_IMPORTED_MODULE_37___default()('#addSectionForm').serializeObject()['planning'];
      (0,axios__WEBPACK_IMPORTED_MODULE_41__["default"])({
        method: 'POST',
        url: '/crm/planning/section/adde',
        data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_37___default()('#addSectionForm').serializeObject()),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json'
      }).then(function (response) {
        setDatas(response.data);
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divaddSection').removeClass('hide');
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#loadSection').hide();
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#mdModalSection').modal('toggle');
        setTimeout(function () {
          showSection(pp);
        }, 500);
      })["catch"](function (error) {});
    }
  });
  jquery__WEBPACK_IMPORTED_MODULE_37___default()('#updSection').off().on("click", function (event) {
    event.preventDefault();
    if (jquery__WEBPACK_IMPORTED_MODULE_37___default()(this).closest('form').valid()) {
      jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divupdSection').addClass('hide');
      jquery__WEBPACK_IMPORTED_MODULE_37___default()('#loadSection').css('display', '');
      var id = localStorage.getItem('token');
      (0,axios__WEBPACK_IMPORTED_MODULE_41__["default"])({
        method: 'PUT',
        url: '/crm/planning/section/updater/' + id,
        data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_37___default()('#addSectionForm').serializeObject()),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json'
      }).then(function (response) {
        setDatas(response.data);
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divaddSection').removeClass('hide');
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#slfa').addClass('hide');
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#slfb').removeClass('hide');
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#loadSection').hide();
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#mdModalSection').modal('toggle');
      })["catch"](function (error) {});
    }
  });
  jquery__WEBPACK_IMPORTED_MODULE_37___default()('#addeTache').off().on("click", function (event) {
    event.preventDefault();
    if (jquery__WEBPACK_IMPORTED_MODULE_37___default()(this).closest('form').valid()) {
      jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divaddTache').hide();
      jquery__WEBPACK_IMPORTED_MODULE_37___default()('#loadTache').css('display', '');
      jquery__WEBPACK_IMPORTED_MODULE_37___default()('#tache').val(CKEDITOR.instances['tache'].getData());
      var pp = jquery__WEBPACK_IMPORTED_MODULE_37___default()('#addTacheForm').serializeObject()['section'];
      (0,axios__WEBPACK_IMPORTED_MODULE_41__["default"])({
        method: 'POST',
        url: '/crm/planning/tache/adde',
        data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_37___default()('#addTacheForm').serializeObject()),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json'
      }).then(function (response) {
        setDatas(response.data);
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divaddTache').show();
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#loadTache').hide();
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#mdModalTache').modal('toggle');
        setTimeout(function () {
          showTache(pp);
        }, 500);
      })["catch"](function (error) {});
    }
  });
  jquery__WEBPACK_IMPORTED_MODULE_37___default()('#updTache').off().on("click", function (event) {
    event.preventDefault();
    if (jquery__WEBPACK_IMPORTED_MODULE_37___default()(this).closest('form').valid()) {
      jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divupdTache').hide();
      jquery__WEBPACK_IMPORTED_MODULE_37___default()('#loadTache').css('display', '');
      jquery__WEBPACK_IMPORTED_MODULE_37___default()('#tache').val(CKEDITOR.instances['tache'].getData());
      var id = localStorage.getItem('token');
      (0,axios__WEBPACK_IMPORTED_MODULE_41__["default"])({
        method: 'POST',
        url: '/crm/planning/tache/update/' + id,
        data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_37___default()('#addTacheForm').serializeObject()),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json'
      }).then(function (response) {
        setDatas(response.data);
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divaddTache').removeClass('hide');
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divaddTache').removeClass('hide');
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divaddTache').show();
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divupdTache').addClass('hide');
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#tlfb').removeClass('hide');
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#tlfa').addClass('hide');
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#loadTache').hide();
        CKEDITOR.instances['tache'].setData(' ');
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('.toc').addClass('col-pink');
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#mdModalTache').modal('toggle');
      })["catch"](function (error) {});
    }
  });
  jquery__WEBPACK_IMPORTED_MODULE_37___default()(function () {
    jquery__WEBPACK_IMPORTED_MODULE_37___default()(".getplanning").each(function () {
      jquery__WEBPACK_IMPORTED_MODULE_37___default()(this).off().on("click", /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee3() {
        var id;
        return _regeneratorRuntime().wrap(function _callee3$(_context3) {
          while (1) switch (_context3.prev = _context3.next) {
            case 0:
              id = this.id;
              jquery__WEBPACK_IMPORTED_MODULE_37___default()('#Traitement').modal('show');
              _context3.next = 4;
              return (0,axios__WEBPACK_IMPORTED_MODULE_41__["default"])({
                method: 'GET',
                url: '/crm/planning/get/' + id,
                contentType: 'application/json; charset=utf-8',
                dataType: 'json'
              }).then(function (response) {
                localStorage.setItem('token', id.toString());
                var data = response.data;
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#mdModalPlanning').modal('toggle');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#plfa').removeClass('hide');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#plfb').addClass('hide');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divupdplan').removeClass('hide');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divaddplan').addClass('hide');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('.clos').addClass('col-pink');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()("#plany").val(data.planning);
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#addPlanningForm').find('select[id="chantier"]').val(data.chantier.id.toString());
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#Traitement').modal('hide');
              })["catch"](function (error) {});
            case 4:
            case "end":
              return _context3.stop();
          }
        }, _callee3, this);
      })));
    });
    jquery__WEBPACK_IMPORTED_MODULE_37___default()(".getsection").each(function () {
      jquery__WEBPACK_IMPORTED_MODULE_37___default()(this).off().on("click", /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee4() {
        var id;
        return _regeneratorRuntime().wrap(function _callee4$(_context4) {
          while (1) switch (_context4.prev = _context4.next) {
            case 0:
              id = this.id;
              jquery__WEBPACK_IMPORTED_MODULE_37___default()('#Traitement').modal('show');
              _context4.next = 4;
              return (0,axios__WEBPACK_IMPORTED_MODULE_41__["default"])({
                method: 'GET',
                url: '/crm/planning/section/get/' + id,
                contentType: 'application/json; charset=utf-8',
                dataType: 'json'
              }).then(function (response) {
                localStorage.setItem('token', id.toString());
                var data = response.data;
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#Traitement').modal('hide');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#mdModalSection').modal('toggle');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#slfa').removeClass('hide');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#slfb').addClass('hide');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divupdSection').removeClass('hide');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divaddSection').addClass('hide');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('.clost').addClass('col-pink');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()("#secty").val(data.libelle);
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#addSectionForm').find('select[id="planning"]').val(data.planning.id.toString());
              })["catch"](function (error) {});
            case 4:
            case "end":
              return _context4.stop();
          }
        }, _callee4, this);
      })));
    });
    jquery__WEBPACK_IMPORTED_MODULE_37___default()(".deltache").each(function () {
      jquery__WEBPACK_IMPORTED_MODULE_37___default()(this).off().on("click", /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee6() {
        var id;
        return _regeneratorRuntime().wrap(function _callee6$(_context6) {
          while (1) switch (_context6.prev = _context6.next) {
            case 0:
              id = this.id;
              jquery__WEBPACK_IMPORTED_MODULE_37___default()('#ConfirmDelete').modal('show');
              jquery__WEBPACK_IMPORTED_MODULE_37___default()('#accepto').off().on("click", /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee5() {
                return _regeneratorRuntime().wrap(function _callee5$(_context5) {
                  while (1) switch (_context5.prev = _context5.next) {
                    case 0:
                      jquery__WEBPACK_IMPORTED_MODULE_37___default()('#Traitement').modal('show');
                      jquery__WEBPACK_IMPORTED_MODULE_37___default()('#ConfirmDelete').modal('hide');
                      _context5.next = 4;
                      return (0,axios__WEBPACK_IMPORTED_MODULE_41__["default"])({
                        method: 'DELETE',
                        url: '/crm/planning/tache/delete/' + id,
                        contentType: 'application/json; charset=utf-8',
                        dataType: 'json'
                      }).then(function (response) {
                        setDatas(response.data);
                        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#Traitement').modal('hide');
                      })["catch"](function (error) {});
                    case 4:
                    case "end":
                      return _context5.stop();
                  }
                }, _callee5);
              })));
            case 3:
            case "end":
              return _context6.stop();
          }
        }, _callee6, this);
      })));
    });
    jquery__WEBPACK_IMPORTED_MODULE_37___default()(".gettache").each(function () {
      jquery__WEBPACK_IMPORTED_MODULE_37___default()(this).off().on("click", /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee7() {
        var id;
        return _regeneratorRuntime().wrap(function _callee7$(_context7) {
          while (1) switch (_context7.prev = _context7.next) {
            case 0:
              id = this.id;
              jquery__WEBPACK_IMPORTED_MODULE_37___default()('#Traitement').modal('show');
              _context7.next = 4;
              return (0,axios__WEBPACK_IMPORTED_MODULE_41__["default"])({
                method: 'GET',
                url: '/crm/planning/tache/get/' + id,
                contentType: 'application/json; charset=utf-8',
                dataType: 'json'
              }).then(function (response) {
                localStorage.setItem('token', id.toString());
                var data = response.data;
                var debut = moment__WEBPACK_IMPORTED_MODULE_38__(data.debut).format('DD/MM/YYYY HH:mm');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#ddebut').val(debut);
                var fin = moment__WEBPACK_IMPORTED_MODULE_38__(data.fin).format('DD/MM/YYYY HH:mm');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#dfin').val(fin);
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#mdModalTache').modal('toggle');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#Traitement').modal('hide');
                CKEDITOR.instances['tache'].setData(data.libelle);
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('.toc').addClass('col-pink');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#tlfa').removeClass('hide');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#tlfb').addClass('hide');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divupdTache').removeClass('hide');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divupdTache').removeClass('hide');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divupdTache').show();
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divaddTache').addClass('hide');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#addTacheForm').find('select[id="tsection"]').val(data.section.id.toString());
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#addTacheForm').find('select[id="tetat"]').val(data.etat.toString());
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#addTacheForm').find('select[id="persou"]').val(data.personnels.id.toString());
              })["catch"](function (error) {});
            case 4:
            case "end":
              return _context7.stop();
          }
        }, _callee7, this);
      })));
    });
    jquery__WEBPACK_IMPORTED_MODULE_37___default()(".delequipe").each(function () {
      jquery__WEBPACK_IMPORTED_MODULE_37___default()(this).off().on("click", /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee9() {
        var id;
        return _regeneratorRuntime().wrap(function _callee9$(_context9) {
          while (1) switch (_context9.prev = _context9.next) {
            case 0:
              id = this.id;
              jquery__WEBPACK_IMPORTED_MODULE_37___default()('#ConfirmDelete').modal('show');
              jquery__WEBPACK_IMPORTED_MODULE_37___default()('#accepto').off().on("click", /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee8() {
                return _regeneratorRuntime().wrap(function _callee8$(_context8) {
                  while (1) switch (_context8.prev = _context8.next) {
                    case 0:
                      jquery__WEBPACK_IMPORTED_MODULE_37___default()('#Traitement').modal('show');
                      jquery__WEBPACK_IMPORTED_MODULE_37___default()('#ConfirmDelete').modal('hide');
                      _context8.next = 4;
                      return (0,axios__WEBPACK_IMPORTED_MODULE_41__["default"])({
                        method: 'DELETE',
                        url: '/crm/planning/equipe/delete/' + id,
                        contentType: 'application/json; charset=utf-8',
                        dataType: 'json'
                      }).then(function (response) {
                        setDatas(response.data);
                        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#Traitement').modal('hide');
                      })["catch"](function (error) {});
                    case 4:
                    case "end":
                      return _context8.stop();
                  }
                }, _callee8);
              })));
            case 3:
            case "end":
              return _context9.stop();
          }
        }, _callee9, this);
      })));
    });
    jquery__WEBPACK_IMPORTED_MODULE_37___default()(".getequipe").each(function () {
      jquery__WEBPACK_IMPORTED_MODULE_37___default()(this).off().on("click", /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee10() {
        var id;
        return _regeneratorRuntime().wrap(function _callee10$(_context10) {
          while (1) switch (_context10.prev = _context10.next) {
            case 0:
              id = this.id;
              jquery__WEBPACK_IMPORTED_MODULE_37___default()('#Traitement').modal('show');
              _context10.next = 4;
              return (0,axios__WEBPACK_IMPORTED_MODULE_41__["default"])({
                method: 'GET',
                url: '/crm/planning/equipe/get/' + id,
                contentType: 'application/json; charset=utf-8',
                dataType: 'json'
              }).then(function (response) {
                localStorage.setItem('token', id.toString());
                var data = response.data;
                console.log(data);
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#mdModalEquipe').modal('toggle');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#Traitement').modal('hide');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('.equi').addClass('col-pink');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divupdEquipe').removeClass('hide');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divupdEquipe').removeClass('hide');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divupdEquipe').show();
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divaddTEquipe').addClass('hide');
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#addEquipeForm').find('input[id="edesign"]').val(data.designation);
                jquery__WEBPACK_IMPORTED_MODULE_37___default()('#addEquipeForm').find('select[id="tsection"]').val(data.section.id.toString());
              })["catch"](function (error) {});
            case 4:
            case "end":
              return _context10.stop();
          }
        }, _callee10, this);
      })));
    });
  });
  jquery__WEBPACK_IMPORTED_MODULE_37___default()('#addeEquipe').off().on("click", function (event) {
    event.preventDefault();
    if (jquery__WEBPACK_IMPORTED_MODULE_37___default()(this).closest('form').valid()) {
      jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divaddTEquipe').hide();
      jquery__WEBPACK_IMPORTED_MODULE_37___default()('#loadEquipe').css('display', '');
      var pp = jquery__WEBPACK_IMPORTED_MODULE_37___default()('#addEquipeForm').serializeObject()['section'];
      (0,axios__WEBPACK_IMPORTED_MODULE_41__["default"])({
        method: 'POST',
        url: '/crm/planning/equipe/adde',
        data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_37___default()('#addEquipeForm').serializeObject()),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json'
      }).then(function (response) {
        setDatas(response.data);
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divaddEquipe').show();
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#loadEquipe').hide();
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#mdModalEquipe').modal('toggle');
        setTimeout(function () {
          showEquipe(pp);
        }, 500);
      })["catch"](function (error) {});
    }
  });
  jquery__WEBPACK_IMPORTED_MODULE_37___default()('#updEquipe').off().on("click", function (event) {
    event.preventDefault();
    if (jquery__WEBPACK_IMPORTED_MODULE_37___default()(this).closest('form').valid()) {
      jquery__WEBPACK_IMPORTED_MODULE_37___default()('#divupdEquipe').hide();
      jquery__WEBPACK_IMPORTED_MODULE_37___default()('#loadEquipe').css('display', '');
      var id = localStorage.getItem('token');
      (0,axios__WEBPACK_IMPORTED_MODULE_41__["default"])({
        method: 'POST',
        url: '/crm/planning/equipe/update/' + id,
        data: JSON.stringify(jquery__WEBPACK_IMPORTED_MODULE_37___default()('#addEquipeForm').serializeObject()),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json'
      }).then(function (response) {
        setDatas(response.data);
        jquery__WEBPACK_IMPORTED_MODULE_37___default()('#mdModalEquipe').modal('toggle');
      })["catch"](function (error) {});
    }
  });
  function saveOrdre(_x4, _x5) {
    return _saveOrdre.apply(this, arguments);
  }
  function _saveOrdre() {
    _saveOrdre = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee11(id, val) {
      return _regeneratorRuntime().wrap(function _callee11$(_context11) {
        while (1) switch (_context11.prev = _context11.next) {
          case 0:
            jquery__WEBPACK_IMPORTED_MODULE_37___default()('#Traitement').modal('show');
            _context11.next = 3;
            return (0,axios__WEBPACK_IMPORTED_MODULE_41__["default"])({
              method: 'POST',
              url: '/crm/planning/tache/ordre/' + id + '/' + val.value
            }).then(function (response) {
              setDatas(response.data);
              jquery__WEBPACK_IMPORTED_MODULE_37___default()('#Traitement').modal('hide');
            })["catch"](function (error) {
              jquery__WEBPACK_IMPORTED_MODULE_37___default()('#Traitement').modal('hide');
              jquery__WEBPACK_IMPORTED_MODULE_37___default()('#ModalErreur').modal('show');
            });
          case 3:
          case "end":
            return _context11.stop();
        }
      }, _callee11);
    }));
    return _saveOrdre.apply(this, arguments);
  }
  function savePlanning(_x6, _x7, _x8) {
    return _savePlanning.apply(this, arguments);
  }
  function _savePlanning() {
    _savePlanning = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee12(id, val, idchan) {
      return _regeneratorRuntime().wrap(function _callee12$(_context12) {
        while (1) switch (_context12.prev = _context12.next) {
          case 0:
            jquery__WEBPACK_IMPORTED_MODULE_37___default()('#Traitement').modal('show');
            _context12.next = 3;
            return (0,axios__WEBPACK_IMPORTED_MODULE_41__["default"])({
              method: 'POST',
              url: '/crm/planning/ordre/' + id + '/' + val.value
            }).then(function (response) {
              setDatas(response.data);
              jquery__WEBPACK_IMPORTED_MODULE_37___default()('#Traitement').modal('hide');
              setTimeout(function () {
                showPlanning(idchan);
              }, 500);
            })["catch"](function (error) {
              jquery__WEBPACK_IMPORTED_MODULE_37___default()('#Traitement').modal('hide');
              jquery__WEBPACK_IMPORTED_MODULE_37___default()('#ModalErreur').modal('show');
            });
          case 3:
          case "end":
            return _context12.stop();
        }
      }, _callee12);
    }));
    return _savePlanning.apply(this, arguments);
  }
  function saveSection(_x9, _x10, _x11) {
    return _saveSection.apply(this, arguments);
  }
  function _saveSection() {
    _saveSection = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee13(id, val, idplan) {
      return _regeneratorRuntime().wrap(function _callee13$(_context13) {
        while (1) switch (_context13.prev = _context13.next) {
          case 0:
            jquery__WEBPACK_IMPORTED_MODULE_37___default()('#Traitement').modal('show');
            _context13.next = 3;
            return (0,axios__WEBPACK_IMPORTED_MODULE_41__["default"])({
              method: 'POST',
              url: '/crm/planning/section/ordre/' + id + '/' + val.value
            }).then(function (response) {
              setDatas(response.data);
              jquery__WEBPACK_IMPORTED_MODULE_37___default()('#Traitement').modal('hide');
              setTimeout(function () {
                showSection(idplan);
              }, 500);
            })["catch"](function (error) {
              jquery__WEBPACK_IMPORTED_MODULE_37___default()('#Traitement').modal('hide');
              jquery__WEBPACK_IMPORTED_MODULE_37___default()('#ModalErreur').modal('show');
            });
          case 3:
          case "end":
            return _context13.stop();
        }
      }, _callee13);
    }));
    return _saveSection.apply(this, arguments);
  }
  var renderPlannings = datas.map(function (data) {
    var chantiers = data.chantiers;
    var renderchantiers = chantiers.map(function (chantier) {
      var ount = 0;
      var planinngs = chantier.plannings;
      planinngs = planinngs.sort(function (a, b) {
        return a.rang.toString() - b.rang.toString();
      });
      planinngs.map(function (planning) {
        if (planning.corbeille === null) {
          ount = ount + 1;
        }
      });
      var renderPlanning = planinngs.map(function (planning) {
        if (planning.corbeille === null) {
          var sections = planning.section;
          sections = sections.sort(function (a, b) {
            return a.rang.toString() - b.rang.toString();
          });
          var renderSection = sections.map(function (section) {
            if (section.corbeille === null) {
              var taches = section.taches;
              taches = taches.sort(function (a, b) {
                return a.ordre - b.ordre;
              });
              var rendertaches = taches.map(function (tache) {
                if (tache.corbeille === null) {
                  var personnels = tache.personnel;
                  var renderPers = personnels.map(function (pers) {
                    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("b", {
                      className: "nowrape"
                    }, "\xBB\xA0", pers.noms, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("br", null));
                  });
                  var equipes = tache.equipes;
                  var renderEqui = equipes.map(function (equi) {
                    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("b", {
                      className: "nowrape"
                    }, "\xBB\xA0", equi.designation, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("br", null));
                  });
                  var tacher = ' ';
                  if (tache.etat === 'À faire') {
                    tacher = '<span class="label bg-green font-12">' + tache.etat + '</span>';
                  }
                  if (tache.etat === 'Achevée') {
                    tacher = '<span class="label bg-pink font-12">' + tache.etat + '</span>';
                  }
                  if (tache.etat === 'En attente') {
                    tacher = '<span class="label bg-orange font-12">' + tache.etat + '</span>';
                  }
                  if (tache.etat === 'En cours') {
                    tacher = '<span class="label bg-blue font-12">' + tache.etat + '</span>';
                  }
                  var lib = '<a href="/crm/tache/' + tache.id + '" class="col-black">' + tache.libelle + '</a>';
                  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("tr", {
                    key: tache.id,
                    className: section.id + 'tach' + ' hide'
                  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                    className: "text-right",
                    style: {
                      verticalAlign: "middle"
                    }
                  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_39__.EditText, {
                    type: "text",
                    className: "badge badge-pill badge-success",
                    name: tache.id,
                    defaultValue: tache.ordre,
                    onSave: function onSave(val) {
                      return saveOrdre(tache.id, val);
                    }
                  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                    className: "mw100 ml90",
                    style: {
                      whiteSpace: "break-spaces"
                    },
                    dangerouslySetInnerHTML: {
                      __html: lib
                    }
                  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                    style: {
                      verticalAlign: "middle",
                      textTransform: "uppercase"
                    },
                    className: "text-center"
                  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("span", {
                    className: "label bg-blue font-12"
                  }, moment__WEBPACK_IMPORTED_MODULE_38__(tache.debut).locale("fr").format('lll'))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                    style: {
                      verticalAlign: "middle",
                      textTransform: "uppercase"
                    },
                    className: "text-center "
                  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("span", {
                    className: "label bg-blue font-12"
                  }, moment__WEBPACK_IMPORTED_MODULE_38__(tache.fin).locale("fr").format('lll'))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                    className: "text-center ",
                    style: {
                      verticalAlign: "middle"
                    },
                    dangerouslySetInnerHTML: {
                      __html: tacher
                    }
                  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                    style: {
                      verticalAlign: "middle"
                    }
                  }, renderPers), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                    style: {
                      verticalAlign: "middle"
                    }
                  }, renderEqui), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                    style: {
                      verticalAlign: "middle"
                    }
                  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
                    href: "#",
                    className: "gettache",
                    id: tache.id
                  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("i", {
                    className: "fa fa-edit col-green font-16"
                  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                    style: {
                      verticalAlign: "middle"
                    }
                  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
                    href: "#",
                    className: "deltache",
                    id: tache.id
                  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("i", {
                    className: "fa fa-trash col-pink font-16"
                  }))));
                }
              });
              var prsection = '<div class="progress">' + '<div class="progress-bar bg-green"' + 'role="progressbar"' + 'aria-valuenow=' + section.etat + ' aria-valuemin="0"' + 'aria-valuemax="100"' + 'style=width:' + section.etat + '%' + '></div>' + '</div>';
              return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement((react__WEBPACK_IMPORTED_MODULE_35___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("tr", {
                style: {
                  backgroundColor: "#e1f5ee"
                },
                key: section.id,
                className: planning.id + 'sec' + ' hide',
                onClick: function onClick() {
                  showTache(section.id);
                }
              }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                className: "mw60 text-center"
              }, section.rang !== null && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_39__.EditText, {
                type: "text",
                className: "badge badge-pill badge-primary",
                name: section.id.toString(),
                defaultValue: section.rang.toString(),
                onSave: function onSave(val) {
                  return saveSection(section.id, val, planning.id);
                }
              })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                className: "col-blue ml60",
                colSpan: "2"
              }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("i", {
                className: "fa fa-folder-open"
              }), "\xA0", section.libelle), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                colSpan: "4"
              }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                dangerouslySetInnerHTML: {
                  __html: prsection
                }
              }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", null, formatNumber(section.etat, 0, ' '), "%"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                style: {
                  verticalAlign: "middle"
                }
              }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
                href: "#",
                className: "getsection",
                id: section.id
              }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("i", {
                className: "fa fa-edit col-green font-15"
              }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                style: {
                  verticalAlign: "middle"
                }
              }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
                href: "#",
                onClick: function onClick() {
                  delsection(section.id);
                }
              }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("i", {
                className: "fa fa-trash col-pink font-15"
              })))), rendertaches);
            }
          });
          var prplanning = '<div class="progress">' + '<div class="progress-bar bg-green"' + 'role="progressbar"' + 'aria-valuenow=' + planning.progression + ' aria-valuemin="0"' + 'aria-valuemax="100"' + 'style=width:' + planning.progression + '%' + '></div>' + '</div>';
          return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement((react__WEBPACK_IMPORTED_MODULE_35___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("tr", {
            style: {
              backgroundColor: "#fcfcf2"
            },
            key: planning.id,
            className: chantier.id + 'plann' + ' hide',
            onClick: function onClick() {
              showSection(planning.id);
            }
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement(react_edit_text__WEBPACK_IMPORTED_MODULE_39__.EditText, {
            type: "text",
            className: "badge badge-pill badge-danger",
            name: planning.id.toString(),
            defaultValue: planning.rang.toString(),
            onSave: function onSave(val) {
              return savePlanning(planning.id, val, chantier.id);
            }
          })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
            className: "col-pink ml30",
            colSpan: "2"
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("i", {
            className: "fa fa-folder-open"
          }), "\xA0", planning.planning), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
            colSpan: "4"
          }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
            dangerouslySetInnerHTML: {
              __html: prplanning
            }
          }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", null, planning.progression, "%"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
            style: {
              verticalAlign: "middle"
            }
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
            href: "#",
            className: "getplanning",
            id: planning.id
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("i", {
            className: "fa fa-edit col-green font-15"
          }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
            style: {
              verticalAlign: "middle"
            }
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
            href: "#",
            onClick: function onClick() {
              delplanning(planning.id);
            }
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("i", {
            className: "fa fa-trash col-pink font-15"
          })))), renderSection);
        }
      });
      if (ount > 0) {
        return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement((react__WEBPACK_IMPORTED_MODULE_35___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("tr", {
          style: {
            backgroundColor: "#dbdfef"
          },
          onClick: function onClick() {
            showPlanning(chantier.id);
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
          colSpan: "10",
          className: "text-uppercase",
          style: {
            color: '#4e73df'
          }
        }, data.nomclient, " | ", chantier.nomchantier)), renderPlanning);
      } else {
        return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement((react__WEBPACK_IMPORTED_MODULE_35___default().Fragment), null);
      }
    });
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement((react__WEBPACK_IMPORTED_MODULE_35___default().Fragment), null, renderchantiers);
  });
  var renderJour = datas.map(function (data) {
    var chantiers = data.chantiers;
    var renderchantiers = chantiers.map(function (chantier) {
      var ount = 0;
      var planinngs = chantier.plannings;
      planinngs = planinngs.sort(function (a, b) {
        return a.rang.toString() - b.rang.toString();
      });
      planinngs.map(function (planning) {
        if (planning.corbeille === null) {
          ount = ount + 1;
        }
      });
      var renderPlanning = planinngs.map(function (planning) {
        if (planning.corbeille === null) {
          var sections = planning.section;
          sections = sections.sort(function (a, b) {
            return a.rang.toString() - b.rang.toString();
          });
          var renderSection = sections.map(function (section) {
            if (section.corbeille === null) {
              var taches = section.taches;
              taches = taches.sort(function (a, b) {
                return a.ordre - b.ordre;
              });
              var rendertaches = taches.map(function (tache) {
                var date1 = moment__WEBPACK_IMPORTED_MODULE_38__().format("YYYY-MM-DD");
                var date2 = moment__WEBPACK_IMPORTED_MODULE_38__(tache.debut).format("YYYY-MM-DD");
                var date3 = moment__WEBPACK_IMPORTED_MODULE_38__(tache.fin).format("YYYY-MM-DD");
                if (date3 >= date1 && date1 >= date2) {
                  if (tache.corbeille === null) {
                    var personnels = tache.personnel;
                    var renderPers = personnels.map(function (pers) {
                      return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("b", {
                        className: "nowrape"
                      }, "\xBB\xA0", pers.noms, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("br", null));
                    });
                    var equipes = tache.equipes;
                    var renderEqui = equipes.map(function (equi) {
                      return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("b", {
                        className: "nowrape"
                      }, "\xBB\xA0", equi.designation, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("br", null));
                    });
                    var tacher = ' ';
                    if (tache.etat === 'À faire') {
                      tacher = '<span class="label bg-green font-12">' + tache.etat + '</span>';
                    }
                    if (tache.etat === 'Achevée') {
                      tacher = '<span class="label bg-pink font-12">' + tache.etat + '</span>';
                    }
                    if (tache.etat === 'En attente') {
                      tacher = '<span class="label bg-orange font-12">' + tache.etat + '</span>';
                    }
                    if (tache.etat === 'En cours') {
                      tacher = '<span class="label bg-blue font-12">' + tache.etat + '</span>';
                    }
                    var lib = '<a href="/crm/tache/' + tache.id + '" class="col-black">' + tache.libelle + '<b class="col-pink"><br/>Section:</b> ' + section.libelle + '<br/><b class="col-pink">Planning:</b> ' + planning.planning + '</a><br/><b class="col-pink">Chantier:</b> <a href="/crm/tache/' + tache.id + '" class="pri">' + data.nomclient + '|' + chantier.nomchantier + '</a>';
                    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("tr", {
                      key: tache.id
                    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                      className: "mw100",
                      style: {
                        whiteSpace: "break-spaces"
                      },
                      dangerouslySetInnerHTML: {
                        __html: lib
                      }
                    }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                      style: {
                        verticalAlign: "middle",
                        textTransform: "uppercase"
                      },
                      className: "text-center"
                    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("span", {
                      className: "label bg-blue font-12"
                    }, moment__WEBPACK_IMPORTED_MODULE_38__(tache.debut).locale("fr").format('lll'))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                      style: {
                        verticalAlign: "middle",
                        textTransform: "uppercase"
                      },
                      className: "text-center "
                    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("span", {
                      className: "label bg-blue font-12"
                    }, moment__WEBPACK_IMPORTED_MODULE_38__(tache.fin).locale("fr").format('lll'))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                      className: "text-center ",
                      style: {
                        verticalAlign: "middle"
                      },
                      dangerouslySetInnerHTML: {
                        __html: tacher
                      }
                    }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                      style: {
                        verticalAlign: "middle"
                      }
                    }, renderPers), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                      style: {
                        verticalAlign: "middle"
                      }
                    }, renderEqui), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                      style: {
                        verticalAlign: "middle"
                      }
                    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
                      href: "#",
                      className: "gettache",
                      id: tache.id
                    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("i", {
                      className: "fa fa-edit col-green font-16"
                    }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                      style: {
                        verticalAlign: "middle"
                      }
                    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
                      href: "#",
                      className: "deltache",
                      id: tache.id
                    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("i", {
                      className: "fa fa-trash col-pink font-16"
                    }))));
                  }
                }
              });
              var prsection = '<div class="progress">' + '<div class="progress-bar bg-green"' + 'role="progressbar"' + 'aria-valuenow=' + section.etat + ' aria-valuemin="0"' + 'aria-valuemax="100"' + 'style=width:' + section.etat + '%' + '></div>' + '</div>';
              return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement((react__WEBPACK_IMPORTED_MODULE_35___default().Fragment), null, rendertaches);
            }
          });
          var prplanning = '<div class="progress">' + '<div class="progress-bar bg-green"' + 'role="progressbar"' + 'aria-valuenow=' + planning.progression + ' aria-valuemin="0"' + 'aria-valuemax="100"' + 'style=width:' + planning.progression + '%' + '></div>' + '</div>';
          return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement((react__WEBPACK_IMPORTED_MODULE_35___default().Fragment), null, renderSection);
        }
      });
      if (ount > 0) {
        return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement((react__WEBPACK_IMPORTED_MODULE_35___default().Fragment), null, renderPlanning);
      } else {
        return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement((react__WEBPACK_IMPORTED_MODULE_35___default().Fragment), null);
      }
    });
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement((react__WEBPACK_IMPORTED_MODULE_35___default().Fragment), null, renderchantiers);
  });
  var renderSemaine = datas.map(function (data) {
    var chantiers = data.chantiers;
    var renderchantiers = chantiers.map(function (chantier) {
      var ount = 0;
      var planinngs = chantier.plannings;
      planinngs = planinngs.sort(function (a, b) {
        return a.rang.toString() - b.rang.toString();
      });
      planinngs.map(function (planning) {
        if (planning.corbeille === null) {
          ount = ount + 1;
        }
      });
      var renderPlanning = planinngs.map(function (planning) {
        if (planning.corbeille === null) {
          var sections = planning.section;
          sections = sections.sort(function (a, b) {
            return a.rang.toString() - b.rang.toString();
          });
          var renderSection = sections.map(function (section) {
            if (section.corbeille === null) {
              var taches = section.taches;
              taches = taches.sort(function (a, b) {
                return a.ordre - b.ordre;
              });
              var rendertaches = taches.map(function (tache) {
                var date0 = moment__WEBPACK_IMPORTED_MODULE_38__().startOf('isoWeek').format("YYYY-MM-DD");
                var date1 = moment__WEBPACK_IMPORTED_MODULE_38__().endOf('isoWeek').format("YYYY-MM-DD");
                var date2 = moment__WEBPACK_IMPORTED_MODULE_38__(tache.debut).format("YYYY-MM-DD");
                var date3 = moment__WEBPACK_IMPORTED_MODULE_38__(tache.fin).format("YYYY-MM-DD");
                if (date0 <= date2 && date2 <= date1) {
                  if (tache.corbeille === null) {
                    var personnels = tache.personnel;
                    var renderPers = personnels.map(function (pers) {
                      return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("b", {
                        className: "nowrape"
                      }, "\xBB\xA0", pers.noms, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("br", null));
                    });
                    var equipes = tache.equipes;
                    var renderEqui = equipes.map(function (equi) {
                      return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("b", {
                        className: "nowrape"
                      }, "\xBB\xA0", equi.designation, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("br", null));
                    });
                    var tacher = ' ';
                    if (tache.etat === 'À faire') {
                      tacher = '<span class="label bg-green font-12">' + tache.etat + '</span>';
                    }
                    if (tache.etat === 'Achevée') {
                      tacher = '<span class="label bg-pink font-12">' + tache.etat + '</span>';
                    }
                    if (tache.etat === 'En attente') {
                      tacher = '<span class="label bg-orange font-12">' + tache.etat + '</span>';
                    }
                    if (tache.etat === 'En cours') {
                      tacher = '<span class="label bg-blue font-12">' + tache.etat + '</span>';
                    }
                    var lib = '<a href="/crm/tache/' + tache.id + '" class="col-black">' + tache.libelle + '<b class="col-pink"><br/>Section:</b> ' + section.libelle + '<br/><b class="col-pink">Planning:</b> ' + planning.planning + '</a><br/><b class="col-pink">Chantier:</b> <a href="/crm/tache/' + tache.id + '" class="pri">' + data.nomclient + '|' + chantier.nomchantier + '</a>';
                    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("tr", {
                      key: tache.id
                    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                      className: "mw100",
                      style: {
                        whiteSpace: "break-spaces"
                      },
                      dangerouslySetInnerHTML: {
                        __html: lib
                      }
                    }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                      style: {
                        verticalAlign: "middle",
                        textTransform: "uppercase"
                      },
                      className: "text-center"
                    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("span", {
                      className: "label bg-blue font-12"
                    }, moment__WEBPACK_IMPORTED_MODULE_38__(tache.debut).locale("fr").format('lll'))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                      style: {
                        verticalAlign: "middle",
                        textTransform: "uppercase"
                      },
                      className: "text-center "
                    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("span", {
                      className: "label bg-blue font-12"
                    }, moment__WEBPACK_IMPORTED_MODULE_38__(tache.fin).locale("fr").format('lll'))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                      className: "text-center ",
                      style: {
                        verticalAlign: "middle"
                      },
                      dangerouslySetInnerHTML: {
                        __html: tacher
                      }
                    }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                      style: {
                        verticalAlign: "middle"
                      }
                    }, renderPers), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                      style: {
                        verticalAlign: "middle"
                      }
                    }, renderEqui), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                      style: {
                        verticalAlign: "middle"
                      }
                    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
                      href: "#",
                      className: "gettache",
                      id: tache.id
                    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("i", {
                      className: "fa fa-edit col-green font-16"
                    }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("td", {
                      style: {
                        verticalAlign: "middle"
                      }
                    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
                      href: "#",
                      className: "deltache",
                      id: tache.id
                    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("i", {
                      className: "fa fa-trash col-pink font-16"
                    }))));
                  }
                }
              });
              return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement((react__WEBPACK_IMPORTED_MODULE_35___default().Fragment), null, rendertaches);
            }
          });
          return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement((react__WEBPACK_IMPORTED_MODULE_35___default().Fragment), null, renderSection);
        }
      });
      if (ount > 0) {
        return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement((react__WEBPACK_IMPORTED_MODULE_35___default().Fragment), null, renderPlanning);
      } else {
        return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement((react__WEBPACK_IMPORTED_MODULE_35___default().Fragment), null);
      }
    });
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement((react__WEBPACK_IMPORTED_MODULE_35___default().Fragment), null, renderchantiers);
  });
  var renderaTeams = ateams.map(function (ateam) {
    var membres = ateam.personnels;
    var taches = ateam.taches;
    var chef = " ";
    if (ateam.chef !== null) {
      chef = ateam.chef.noms;
    }
    var renderMembres = membres.map(function (membre) {
      return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement((react__WEBPACK_IMPORTED_MODULE_35___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("span", {
        className: "col-black"
      }, "* ", membre.noms), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("br", null));
    });
    var rendeTaches = taches.map(function (tache) {
      return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement((react__WEBPACK_IMPORTED_MODULE_35___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("span", {
        className: "col-black",
        dangerouslySetInnerHTML: {
          __html: tache.libelle
        }
      }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("span", {
        className: "col-black"
      }, "Etat: ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("b", {
        className: "col-blue"
      }, tache.etat)));
    });
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
      key: ateam.id,
      className: "col-md-3 shadow col-blue",
      style: {
        margin: "5px",
        backgroundColor: "#FFF",
        borderLeft: "6px solid #337ab7",
        minHeight: "350px"
      }
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("h5", {
      className: "text-center"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
      href: "#",
      className: "getequipe",
      id: ateam.id,
      style: {
        marginRight: "10px"
      }
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("i", {
      className: "fa fa-edit col-green font-16"
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
      href: "#",
      className: "delequipe",
      id: ateam.id
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("i", {
      className: "fa fa-trash col-pink font-16"
    }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("h4", {
      className: "col-pink bolo700"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("u", null, " ", ateam.designation, " ")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("h5", {
      className: "col-blue"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("u", null, "Chantier:"), " ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("br", null), " ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("span", {
      className: "col-black"
    }, "* ", ateam.chantier[0].nomchantier)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("h5", {
      className: "col-blue"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("u", null, "Chef:"), " ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("br", null), " ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("span", {
      className: "col-black"
    }, "* ", chef)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("h5", {
      className: "col-blue"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("u", null, "Membres:"), " ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("br", null), " ", renderMembres), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("h5", {
      className: "col-blue"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("u", null, "Taches:"), " ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("br", null), " ", rendeTaches));
  });
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement((react__WEBPACK_IMPORTED_MODULE_35___default().Fragment), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "modal fade",
    id: "ConfirmDelete",
    tabIndex: "-1",
    role: "dialog",
    "aria-labelledby": "exampleModalLabel",
    "aria-hidden": "true"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "modal-dialog modal-sm modal-notify",
    role: "document"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "modal-content text-center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "modal-header d-flex justify-content-center bg-pink"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("h4", {
    className: "bolo700"
  }, "\xCATES VOUS SUR ?")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "modal-body"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("i", {
    className: "fas fa-times fa-4x animated rotateIn col-pink"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "text-center"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    type: "button",
    id: "accepto",
    className: "btn btn-link waves-effect text-white bg-primary m-r-10"
  }, "OUI"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    type: "button",
    id: "closeLier",
    className: "btn btn-link waves-effect text-white bg-pink",
    "data-dismiss": "modal"
  }, "NON"))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "modal fade",
    id: "chatModal",
    "data-bs-backdrop": "static",
    "data-bs-keyboard": "false",
    tabIndex: "-1",
    "aria-labelledby": "staticBackdropLabel",
    "aria-hidden": "true"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "modal-dialog modal-lg"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "modal-content"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "modal-header"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("i", {
    className: "btn material-icons bg-blue",
    id: "close",
    "data-dismiss": "modal",
    style: {
      "float": "right"
    }
  }, "clear")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "modal-body"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "chat-app"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    id: "plist",
    className: "people-list"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("ul", {
    className: "list-unstyled chat-list mt-2 mb-0"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "chat"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "chat-header clearfix"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "row"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "col-lg-6"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
    href: "javascript:void(0);",
    "data-toggle": "modal",
    "data-target": "#view_info"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("img", {
    src: "https://bootdey.com/img/Content/avatar/avatar2.png",
    alt: "avatar"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "chat-about"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("h4", {
    className: "m-b-0 col-blue bolo600 useselected"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("h5", {
    className: "usemessage",
    style: {
      backgroundColor: "#e8f1f3",
      padding: "10px",
      borderRadius: "20px"
    }
  }))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "col-lg-6 hidden-sm text-right"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("button", {
    className: "btn btn-outline-secondary"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("i", {
    className: "fa fa-camera"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("button", {
    className: "btn btn-outline-primary"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("i", {
    className: "fa fa-image"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("button", {
    className: "btn btn-outline-primary"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("i", {
    className: "fa fa-link"
  }))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "chat-history",
    style: {
      height: "400px",
      overflow: "scroll"
    },
    id: "chatcontent"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("ul", {
    className: "m-b-0"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    style: {
      display: "flex",
      justifyContent: "flex-end",
      width: "100%"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("textarea", {
    className: "form-control",
    "aria-label": "With textarea",
    style: {
      width: "100%",
      marginLeft: "20px"
    },
    placeholder: "Message",
    id: "chat"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("button", {
    type: "button",
    id: "sendchat",
    className: "btn btn-primary btn-sm",
    style: {
      right: "0"
    }
  }, "Envoy\xE9")))))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "btn-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("button", {
    type: "button",
    "data-color": "blue",
    className: "btn bg-pri text-white waves-effect",
    "data-toggle": "modal",
    "data-target": "#mdModalPlanning"
  }, "+ PLANNING"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("button", {
    type: "button",
    className: "btn btn-info text-white waves-effect",
    "data-toggle": "modal",
    "data-target": "#mdModalSection"
  }, "+ SECTION"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("button", {
    type: "button",
    className: "btn bg-purple text-white waves-effect",
    "data-toggle": "modal",
    "data-target": "#mdModalTache"
  }, "+ TACHE"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("button", {
    type: "button",
    className: "btn bg-orange text-white waves-effect",
    "data-toggle": "modal",
    "data-target": "#mdModalEquipe"
  }, "+ EQUIPE")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "col-md-12",
    style: {
      paddingLeft: "0"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "panel-group",
    id: "accordion_2",
    role: "tablist",
    "aria-multiselectable": "true"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "panel panel-pri",
    style: {
      marginTop: "20px"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "panel-heading bg-pri",
    role: "tab",
    id: "headingPla"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("h5", {
    className: "panel-title "
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
    className: "collapsed text-white",
    role: "button",
    "data-toggle": "collapse",
    "data-parent": "#accordion_2",
    href: "#collapsePla",
    "aria-expanded": "false",
    "aria-controls": "collapsePla",
    style: {
      fontSize: "14px",
      fontWeight: "500"
    }
  }, "Planning g\xE9n\xE9ral"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    id: "collapsePla",
    className: "panel-collapse collapse",
    role: "tabpanel",
    "aria-labelledby": "headingPla"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "panel-body",
    style: {
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "body"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "table-responsive"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement(react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_40__["default"], {
    id: "test-table-xls-button",
    className: "btn bg-green text-white m-r-5 float-right",
    table: "planninge",
    filename: "PLANNING GENERAL",
    sheet: "tablexls",
    buttonText: "EXPORTER EN EXCEL"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "col-md-4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "input-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "form-line"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("input", {
    type: "text",
    className: "form-control",
    id: "sortchantier",
    placeholder: "Afficher par chantier"
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("table", {
    className: "table table-hover dashboard-task-infos",
    id: "planninge"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", {
    className: "text-center"
  }, "#"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", {
    className: "mw400"
  }, " CLIENT-CHANTIERS | PLANNING | ZONE | TACHES"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", {
    className: "mw100"
  }, "D\xC9BUT"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", {
    className: "mw100"
  }, "FIN"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", {
    className: "text-center"
  }, "STATUS"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", null, "SUPERVISEURS"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", null, "\xC9QUIPES"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", null, "PROGRESSION"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", {
    className: "mw60"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", null))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("tbody", null, renderPlannings))))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "panel panel-pri"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "panel-heading bg-pri",
    role: "tab",
    id: "headingPlaSE"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("h5", {
    className: "panel-title "
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
    className: "collapsed text-white",
    role: "button",
    "data-toggle": "collapse",
    "data-parent": "#accordion_2",
    href: "#collapsePlaSE",
    "aria-expanded": "false",
    "aria-controls": "collapsePlaSE",
    style: {
      fontSize: "14px",
      fontWeight: "500"
    }
  }, "Taches de la semaine"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    id: "collapsePlaSE",
    className: "panel-collapse collapse",
    role: "tabpanel",
    "aria-labelledby": "headingPlaSE"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "panel-body",
    style: {
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "body"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "table-responsive"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement(react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_40__["default"], {
    id: "test-table-xls-button",
    className: "btn bg-green text-white m-r-5 float-right",
    table: "planninge",
    filename: "PLANNING GENERAL",
    sheet: "tablexls",
    buttonText: "EXPORTER EN EXCEL"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "col-md-4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "input-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "form-line"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("input", {
    type: "text",
    className: "form-control",
    id: "sortchantier2",
    placeholder: "Afficher par chantier"
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("table", {
    className: "table table-hover dashboard-task-infos",
    id: "planninge"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", {
    className: "text-center"
  }, "#"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", {
    className: "mw400"
  }, "TACHES"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", {
    className: "mw100"
  }, "D\xC9BUT"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", {
    className: "mw100"
  }, "FIN"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", {
    className: "text-center"
  }, "STATUS"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", null, "SUPERVISEURS"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", null, "\xC9QUIPES"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", null, "PROGRESSION"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", {
    className: "mw60"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", null))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("tbody", null, renderSemaine))))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "panel panel-pri"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "panel-heading bg-pri",
    role: "tab",
    id: "headingPlaJO"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("h5", {
    className: "panel-title "
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("a", {
    className: "collapsed text-white",
    role: "button",
    "data-toggle": "collapse",
    "data-parent": "#accordion_2",
    href: "#collapsePlaJO",
    "aria-expanded": "false",
    "aria-controls": "collapsePlaJO",
    style: {
      fontSize: "14px",
      fontWeight: "500"
    }
  }, "Taches du jour"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    id: "collapsePlaJO",
    className: "panel-collapse",
    role: "tabpanel",
    "aria-labelledby": "headingPlaJO"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "panel-body",
    style: {
      overflow: "scroll"
    }
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "body"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "table-responsive"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement(react_html_table_to_excel__WEBPACK_IMPORTED_MODULE_40__["default"], {
    id: "test-table-xls-button",
    className: "btn bg-green text-white m-r-5 float-right",
    table: "planninge",
    filename: "PLANNING GENERAL",
    sheet: "tablexls",
    buttonText: "EXPORTER EN EXCEL"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "col-md-4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "input-group"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "form-line"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("input", {
    type: "text",
    className: "form-control",
    id: "sortchantier1",
    placeholder: "Afficher par chantier"
  })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("table", {
    className: "table table-hover dashboard-task-infos",
    id: "planninge"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("thead", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", {
    className: "text-center"
  }, "#"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", {
    className: "mw400"
  }, "TACHES"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", {
    className: "mw100"
  }, "D\xC9BUT"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", {
    className: "mw100"
  }, "FIN"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", {
    className: "text-center"
  }, "STATUS"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", null, "SUPERVISEURS"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", null, "\xC9QUIPES"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", null, "PROGRESSION"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", {
    className: "mw60"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("th", null))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("tbody", null, renderJour))))))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "col-md-12"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement("div", {
    className: "row"
  }, renderaTeams)));
};
try {
  var root = (0,react_dom_client__WEBPACK_IMPORTED_MODULE_36__.createRoot)(document.getElementById('planing'));
  root.render( /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_35___default().createElement(Planing, null));
} catch (e) {}

/***/ }),

/***/ "./assets/components/chantiers/Taching.js":
/*!************************************************!*\
  !*** ./assets/components/chantiers/Taching.js ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/web.timers.js */ "./node_modules/core-js/modules/web.timers.js");
/* harmony import */ var core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.array.map.js */ "./node_modules/core-js/modules/es.array.map.js");
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.date.to-string.js */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string.js */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.parse-int.js */ "./node_modules/core-js/modules/es.parse-int.js");
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.array.is-array.js */ "./node_modules/core-js/modules/es.array.is-array.js");
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.array.from.js */ "./node_modules/core-js/modules/es.array.from.js");
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_17__);
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
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_30__ = __webpack_require__(/*! core-js/modules/es.symbol.to-primitive.js */ "./node_modules/core-js/modules/es.symbol.to-primitive.js");
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_30___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_30__);
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_31__ = __webpack_require__(/*! core-js/modules/es.date.to-primitive.js */ "./node_modules/core-js/modules/es.date.to-primitive.js");
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_31___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_31__);
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_32__ = __webpack_require__(/*! core-js/modules/es.number.constructor.js */ "./node_modules/core-js/modules/es.number.constructor.js");
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_32___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_32__);
/* harmony import */ var core_js_modules_es_object_keys_js__WEBPACK_IMPORTED_MODULE_33__ = __webpack_require__(/*! core-js/modules/es.object.keys.js */ "./node_modules/core-js/modules/es.object.keys.js");
/* harmony import */ var core_js_modules_es_object_keys_js__WEBPACK_IMPORTED_MODULE_33___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_keys_js__WEBPACK_IMPORTED_MODULE_33__);
/* harmony import */ var core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_34__ = __webpack_require__(/*! core-js/modules/es.array.filter.js */ "./node_modules/core-js/modules/es.array.filter.js");
/* harmony import */ var core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_34___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_34__);
/* harmony import */ var core_js_modules_es_object_get_own_property_descriptor_js__WEBPACK_IMPORTED_MODULE_35__ = __webpack_require__(/*! core-js/modules/es.object.get-own-property-descriptor.js */ "./node_modules/core-js/modules/es.object.get-own-property-descriptor.js");
/* harmony import */ var core_js_modules_es_object_get_own_property_descriptor_js__WEBPACK_IMPORTED_MODULE_35___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_own_property_descriptor_js__WEBPACK_IMPORTED_MODULE_35__);
/* harmony import */ var core_js_modules_es_object_get_own_property_descriptors_js__WEBPACK_IMPORTED_MODULE_36__ = __webpack_require__(/*! core-js/modules/es.object.get-own-property-descriptors.js */ "./node_modules/core-js/modules/es.object.get-own-property-descriptors.js");
/* harmony import */ var core_js_modules_es_object_get_own_property_descriptors_js__WEBPACK_IMPORTED_MODULE_36___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_own_property_descriptors_js__WEBPACK_IMPORTED_MODULE_36__);
/* harmony import */ var core_js_modules_es_object_define_properties_js__WEBPACK_IMPORTED_MODULE_37__ = __webpack_require__(/*! core-js/modules/es.object.define-properties.js */ "./node_modules/core-js/modules/es.object.define-properties.js");
/* harmony import */ var core_js_modules_es_object_define_properties_js__WEBPACK_IMPORTED_MODULE_37___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_properties_js__WEBPACK_IMPORTED_MODULE_37__);
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_38__ = __webpack_require__(/*! react-dom/client */ "./node_modules/react-dom/client.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_39__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_39___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_39__);
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_44__ = __webpack_require__(/*! axios */ "./node_modules/axios/lib/axios.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_40__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_40___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_40__);
/* harmony import */ var react_photo_gallery__WEBPACK_IMPORTED_MODULE_41__ = __webpack_require__(/*! react-photo-gallery */ "./node_modules/react-photo-gallery/dist/react-photo-gallery.esm.js");
/* harmony import */ var react_images__WEBPACK_IMPORTED_MODULE_42__ = __webpack_require__(/*! react-images */ "./node_modules/react-images/dist/react-images.es.js");
/* harmony import */ var moment__WEBPACK_IMPORTED_MODULE_43__ = __webpack_require__(/*! moment */ "./node_modules/moment/moment.js");
/* harmony import */ var moment__WEBPACK_IMPORTED_MODULE_43___default = /*#__PURE__*/__webpack_require__.n(moment__WEBPACK_IMPORTED_MODULE_43__);
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); enumerableOnly && (symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; })), keys.push.apply(keys, symbols); } return keys; }
function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = null != arguments[i] ? arguments[i] : {}; i % 2 ? ownKeys(Object(source), !0).forEach(function (key) { _defineProperty(target, key, source[key]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)) : ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } return target; }
function _defineProperty(obj, key, value) { key = _toPropertyKey(key); if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }
function _toPropertyKey(arg) { var key = _toPrimitive(arg, "string"); return _typeof(key) === "symbol" ? key : String(key); }
function _toPrimitive(input, hint) { if (_typeof(input) !== "object" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || "default"); if (_typeof(res) !== "object") return res; throw new TypeError("@@toPrimitive must return a primitive value."); } return (hint === "string" ? String : Number)(input); }






































function _regeneratorRuntime() { "use strict"; /*! regenerator-runtime -- Copyright (c) 2014-present, Facebook, Inc. -- license (MIT): https://github.com/facebook/regenerator/blob/main/LICENSE */ _regeneratorRuntime = function _regeneratorRuntime() { return exports; }; var exports = {}, Op = Object.prototype, hasOwn = Op.hasOwnProperty, defineProperty = Object.defineProperty || function (obj, key, desc) { obj[key] = desc.value; }, $Symbol = "function" == typeof Symbol ? Symbol : {}, iteratorSymbol = $Symbol.iterator || "@@iterator", asyncIteratorSymbol = $Symbol.asyncIterator || "@@asyncIterator", toStringTagSymbol = $Symbol.toStringTag || "@@toStringTag"; function define(obj, key, value) { return Object.defineProperty(obj, key, { value: value, enumerable: !0, configurable: !0, writable: !0 }), obj[key]; } try { define({}, ""); } catch (err) { define = function define(obj, key, value) { return obj[key] = value; }; } function wrap(innerFn, outerFn, self, tryLocsList) { var protoGenerator = outerFn && outerFn.prototype instanceof Generator ? outerFn : Generator, generator = Object.create(protoGenerator.prototype), context = new Context(tryLocsList || []); return defineProperty(generator, "_invoke", { value: makeInvokeMethod(innerFn, self, context) }), generator; } function tryCatch(fn, obj, arg) { try { return { type: "normal", arg: fn.call(obj, arg) }; } catch (err) { return { type: "throw", arg: err }; } } exports.wrap = wrap; var ContinueSentinel = {}; function Generator() {} function GeneratorFunction() {} function GeneratorFunctionPrototype() {} var IteratorPrototype = {}; define(IteratorPrototype, iteratorSymbol, function () { return this; }); var getProto = Object.getPrototypeOf, NativeIteratorPrototype = getProto && getProto(getProto(values([]))); NativeIteratorPrototype && NativeIteratorPrototype !== Op && hasOwn.call(NativeIteratorPrototype, iteratorSymbol) && (IteratorPrototype = NativeIteratorPrototype); var Gp = GeneratorFunctionPrototype.prototype = Generator.prototype = Object.create(IteratorPrototype); function defineIteratorMethods(prototype) { ["next", "throw", "return"].forEach(function (method) { define(prototype, method, function (arg) { return this._invoke(method, arg); }); }); } function AsyncIterator(generator, PromiseImpl) { function invoke(method, arg, resolve, reject) { var record = tryCatch(generator[method], generator, arg); if ("throw" !== record.type) { var result = record.arg, value = result.value; return value && "object" == _typeof(value) && hasOwn.call(value, "__await") ? PromiseImpl.resolve(value.__await).then(function (value) { invoke("next", value, resolve, reject); }, function (err) { invoke("throw", err, resolve, reject); }) : PromiseImpl.resolve(value).then(function (unwrapped) { result.value = unwrapped, resolve(result); }, function (error) { return invoke("throw", error, resolve, reject); }); } reject(record.arg); } var previousPromise; defineProperty(this, "_invoke", { value: function value(method, arg) { function callInvokeWithMethodAndArg() { return new PromiseImpl(function (resolve, reject) { invoke(method, arg, resolve, reject); }); } return previousPromise = previousPromise ? previousPromise.then(callInvokeWithMethodAndArg, callInvokeWithMethodAndArg) : callInvokeWithMethodAndArg(); } }); } function makeInvokeMethod(innerFn, self, context) { var state = "suspendedStart"; return function (method, arg) { if ("executing" === state) throw new Error("Generator is already running"); if ("completed" === state) { if ("throw" === method) throw arg; return doneResult(); } for (context.method = method, context.arg = arg;;) { var delegate = context.delegate; if (delegate) { var delegateResult = maybeInvokeDelegate(delegate, context); if (delegateResult) { if (delegateResult === ContinueSentinel) continue; return delegateResult; } } if ("next" === context.method) context.sent = context._sent = context.arg;else if ("throw" === context.method) { if ("suspendedStart" === state) throw state = "completed", context.arg; context.dispatchException(context.arg); } else "return" === context.method && context.abrupt("return", context.arg); state = "executing"; var record = tryCatch(innerFn, self, context); if ("normal" === record.type) { if (state = context.done ? "completed" : "suspendedYield", record.arg === ContinueSentinel) continue; return { value: record.arg, done: context.done }; } "throw" === record.type && (state = "completed", context.method = "throw", context.arg = record.arg); } }; } function maybeInvokeDelegate(delegate, context) { var methodName = context.method, method = delegate.iterator[methodName]; if (undefined === method) return context.delegate = null, "throw" === methodName && delegate.iterator["return"] && (context.method = "return", context.arg = undefined, maybeInvokeDelegate(delegate, context), "throw" === context.method) || "return" !== methodName && (context.method = "throw", context.arg = new TypeError("The iterator does not provide a '" + methodName + "' method")), ContinueSentinel; var record = tryCatch(method, delegate.iterator, context.arg); if ("throw" === record.type) return context.method = "throw", context.arg = record.arg, context.delegate = null, ContinueSentinel; var info = record.arg; return info ? info.done ? (context[delegate.resultName] = info.value, context.next = delegate.nextLoc, "return" !== context.method && (context.method = "next", context.arg = undefined), context.delegate = null, ContinueSentinel) : info : (context.method = "throw", context.arg = new TypeError("iterator result is not an object"), context.delegate = null, ContinueSentinel); } function pushTryEntry(locs) { var entry = { tryLoc: locs[0] }; 1 in locs && (entry.catchLoc = locs[1]), 2 in locs && (entry.finallyLoc = locs[2], entry.afterLoc = locs[3]), this.tryEntries.push(entry); } function resetTryEntry(entry) { var record = entry.completion || {}; record.type = "normal", delete record.arg, entry.completion = record; } function Context(tryLocsList) { this.tryEntries = [{ tryLoc: "root" }], tryLocsList.forEach(pushTryEntry, this), this.reset(!0); } function values(iterable) { if (iterable) { var iteratorMethod = iterable[iteratorSymbol]; if (iteratorMethod) return iteratorMethod.call(iterable); if ("function" == typeof iterable.next) return iterable; if (!isNaN(iterable.length)) { var i = -1, next = function next() { for (; ++i < iterable.length;) if (hasOwn.call(iterable, i)) return next.value = iterable[i], next.done = !1, next; return next.value = undefined, next.done = !0, next; }; return next.next = next; } } return { next: doneResult }; } function doneResult() { return { value: undefined, done: !0 }; } return GeneratorFunction.prototype = GeneratorFunctionPrototype, defineProperty(Gp, "constructor", { value: GeneratorFunctionPrototype, configurable: !0 }), defineProperty(GeneratorFunctionPrototype, "constructor", { value: GeneratorFunction, configurable: !0 }), GeneratorFunction.displayName = define(GeneratorFunctionPrototype, toStringTagSymbol, "GeneratorFunction"), exports.isGeneratorFunction = function (genFun) { var ctor = "function" == typeof genFun && genFun.constructor; return !!ctor && (ctor === GeneratorFunction || "GeneratorFunction" === (ctor.displayName || ctor.name)); }, exports.mark = function (genFun) { return Object.setPrototypeOf ? Object.setPrototypeOf(genFun, GeneratorFunctionPrototype) : (genFun.__proto__ = GeneratorFunctionPrototype, define(genFun, toStringTagSymbol, "GeneratorFunction")), genFun.prototype = Object.create(Gp), genFun; }, exports.awrap = function (arg) { return { __await: arg }; }, defineIteratorMethods(AsyncIterator.prototype), define(AsyncIterator.prototype, asyncIteratorSymbol, function () { return this; }), exports.AsyncIterator = AsyncIterator, exports.async = function (innerFn, outerFn, self, tryLocsList, PromiseImpl) { void 0 === PromiseImpl && (PromiseImpl = Promise); var iter = new AsyncIterator(wrap(innerFn, outerFn, self, tryLocsList), PromiseImpl); return exports.isGeneratorFunction(outerFn) ? iter : iter.next().then(function (result) { return result.done ? result.value : iter.next(); }); }, defineIteratorMethods(Gp), define(Gp, toStringTagSymbol, "Generator"), define(Gp, iteratorSymbol, function () { return this; }), define(Gp, "toString", function () { return "[object Generator]"; }), exports.keys = function (val) { var object = Object(val), keys = []; for (var key in object) keys.push(key); return keys.reverse(), function next() { for (; keys.length;) { var key = keys.pop(); if (key in object) return next.value = key, next.done = !1, next; } return next.done = !0, next; }; }, exports.values = values, Context.prototype = { constructor: Context, reset: function reset(skipTempReset) { if (this.prev = 0, this.next = 0, this.sent = this._sent = undefined, this.done = !1, this.delegate = null, this.method = "next", this.arg = undefined, this.tryEntries.forEach(resetTryEntry), !skipTempReset) for (var name in this) "t" === name.charAt(0) && hasOwn.call(this, name) && !isNaN(+name.slice(1)) && (this[name] = undefined); }, stop: function stop() { this.done = !0; var rootRecord = this.tryEntries[0].completion; if ("throw" === rootRecord.type) throw rootRecord.arg; return this.rval; }, dispatchException: function dispatchException(exception) { if (this.done) throw exception; var context = this; function handle(loc, caught) { return record.type = "throw", record.arg = exception, context.next = loc, caught && (context.method = "next", context.arg = undefined), !!caught; } for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i], record = entry.completion; if ("root" === entry.tryLoc) return handle("end"); if (entry.tryLoc <= this.prev) { var hasCatch = hasOwn.call(entry, "catchLoc"), hasFinally = hasOwn.call(entry, "finallyLoc"); if (hasCatch && hasFinally) { if (this.prev < entry.catchLoc) return handle(entry.catchLoc, !0); if (this.prev < entry.finallyLoc) return handle(entry.finallyLoc); } else if (hasCatch) { if (this.prev < entry.catchLoc) return handle(entry.catchLoc, !0); } else { if (!hasFinally) throw new Error("try statement without catch or finally"); if (this.prev < entry.finallyLoc) return handle(entry.finallyLoc); } } } }, abrupt: function abrupt(type, arg) { for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i]; if (entry.tryLoc <= this.prev && hasOwn.call(entry, "finallyLoc") && this.prev < entry.finallyLoc) { var finallyEntry = entry; break; } } finallyEntry && ("break" === type || "continue" === type) && finallyEntry.tryLoc <= arg && arg <= finallyEntry.finallyLoc && (finallyEntry = null); var record = finallyEntry ? finallyEntry.completion : {}; return record.type = type, record.arg = arg, finallyEntry ? (this.method = "next", this.next = finallyEntry.finallyLoc, ContinueSentinel) : this.complete(record); }, complete: function complete(record, afterLoc) { if ("throw" === record.type) throw record.arg; return "break" === record.type || "continue" === record.type ? this.next = record.arg : "return" === record.type ? (this.rval = this.arg = record.arg, this.method = "return", this.next = "end") : "normal" === record.type && afterLoc && (this.next = afterLoc), ContinueSentinel; }, finish: function finish(finallyLoc) { for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i]; if (entry.finallyLoc === finallyLoc) return this.complete(entry.completion, entry.afterLoc), resetTryEntry(entry), ContinueSentinel; } }, "catch": function _catch(tryLoc) { for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i]; if (entry.tryLoc === tryLoc) { var record = entry.completion; if ("throw" === record.type) { var thrown = record.arg; resetTryEntry(entry); } return thrown; } } throw new Error("illegal catch attempt"); }, delegateYield: function delegateYield(iterable, resultName, nextLoc) { return this.delegate = { iterator: values(iterable), resultName: resultName, nextLoc: nextLoc }, "next" === this.method && (this.arg = undefined), ContinueSentinel; } }, exports; }
function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }
function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }
function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }
function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }
function _iterableToArrayLimit(arr, i) { var _i = null == arr ? null : "undefined" != typeof Symbol && arr[Symbol.iterator] || arr["@@iterator"]; if (null != _i) { var _s, _e, _x, _r, _arr = [], _n = !0, _d = !1; try { if (_x = (_i = _i.call(arr)).next, 0 === i) { if (Object(_i) !== _i) return; _n = !1; } else for (; !(_n = (_s = _x.call(_i)).done) && (_arr.push(_s.value), _arr.length !== i); _n = !0); } catch (err) { _d = !0, _e = err; } finally { try { if (!_n && null != _i["return"] && (_r = _i["return"](), Object(_r) !== _r)) return; } finally { if (_d) throw _e; } } return _arr; } }
function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }








var Taching = function Taching() {
  var _useState = (0,react__WEBPACK_IMPORTED_MODULE_39__.useState)(),
    _useState2 = _slicedToArray(_useState, 2),
    tache = _useState2[0],
    setTache = _useState2[1];
  var _useState3 = (0,react__WEBPACK_IMPORTED_MODULE_39__.useState)([]),
    _useState4 = _slicedToArray(_useState3, 2),
    chats = _useState4[0],
    setChats = _useState4[1];
  var _useState5 = (0,react__WEBPACK_IMPORTED_MODULE_39__.useState)(0),
    _useState6 = _slicedToArray(_useState5, 2),
    currentImage = _useState6[0],
    setCurrentImage = _useState6[1];
  var _useState7 = (0,react__WEBPACK_IMPORTED_MODULE_39__.useState)(false),
    _useState8 = _slicedToArray(_useState7, 2),
    viewerIsOpen = _useState8[0],
    setViewerIsOpen = _useState8[1];
  var taid = jquery__WEBPACK_IMPORTED_MODULE_40___default()('#taid').val();
  var current = jquery__WEBPACK_IMPORTED_MODULE_40___default()('#current').val();
  var openLightbox = (0,react__WEBPACK_IMPORTED_MODULE_39__.useCallback)(function (event, _ref) {
    var index = _ref.index;
    setCurrentImage(index);
    setViewerIsOpen(true);
  }, []);
  var closeLightbox = function closeLightbox() {
    setCurrentImage(0);
    setViewerIsOpen(false);
  };
  var fetchTaches = /*#__PURE__*/function () {
    var _ref2 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee() {
      return _regeneratorRuntime().wrap(function _callee$(_context) {
        while (1) switch (_context.prev = _context.next) {
          case 0:
            (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
              method: 'GET',
              url: '/crm/tache/get/' + taid,
              contentType: 'application/json; charset=utf-8'
            }).then(function (response) {
              setTache(response.data);
            })["catch"](function (error) {});
          case 1:
          case "end":
            return _context.stop();
        }
      }, _callee);
    }));
    return function fetchTaches() {
      return _ref2.apply(this, arguments);
    };
  }();
  var fetchChat = /*#__PURE__*/function () {
    var _ref3 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee2() {
      return _regeneratorRuntime().wrap(function _callee2$(_context2) {
        while (1) switch (_context2.prev = _context2.next) {
          case 0:
            window.setInterval(function () {
              (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
                method: 'GET',
                url: '/crm/chat/tache/' + taid,
                contentType: 'application/json; charset=utf-8'
              }).then(function (response) {
                setChats(response.data);
              })["catch"](function (error) {});
            }, 5000);
          case 1:
          case "end":
            return _context2.stop();
        }
      }, _callee2);
    }));
    return function fetchChat() {
      return _ref3.apply(this, arguments);
    };
  }();
  (0,react__WEBPACK_IMPORTED_MODULE_39__.useEffect)(function () {
    fetchTaches();
    fetchChat();
  }, []);
  var showAddFile = function showAddFile() {
    jquery__WEBPACK_IMPORTED_MODULE_40___default()('#modalFiche').modal('toggle');
  };
  function delPic(_x2) {
    return _delPic.apply(this, arguments);
  }
  function _delPic() {
    _delPic = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee5(a) {
      return _regeneratorRuntime().wrap(function _callee5$(_context5) {
        while (1) switch (_context5.prev = _context5.next) {
          case 0:
            _context5.next = 2;
            return (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
              method: 'DELETE',
              url: '/crm/gestion/delfichier/' + a,
              contentType: 'application/json; charset=utf-8',
              dataType: 'json'
            }).then(function (response) {
              location.reload();
            });
          case 2:
          case "end":
            return _context5.stop();
        }
      }, _callee5);
    }));
    return _delPic.apply(this, arguments);
  }
  jquery__WEBPACK_IMPORTED_MODULE_40___default()(function () {
    jquery__WEBPACK_IMPORTED_MODULE_40___default()(".deleto").each(function () {
      jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).off().on("click", /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee3() {
        var id;
        return _regeneratorRuntime().wrap(function _callee3$(_context3) {
          while (1) switch (_context3.prev = _context3.next) {
            case 0:
              id = this.id;
              jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('show');
              _context3.next = 4;
              return (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
                method: 'DELETE',
                url: '/crm/chat/del/tache/' + id + '/' + taid,
                contentType: 'application/json; charset=utf-8',
                dataType: 'json'
              }).then(function (response) {
                jquery__WEBPACK_IMPORTED_MODULE_40___default()('#Traitement').modal('hide');
                setChats(response.data);
              });
            case 4:
            case "end":
              return _context3.stop();
          }
        }, _callee3, this);
      })));
    });
    jquery__WEBPACK_IMPORTED_MODULE_40___default()(".deleta").each(function () {
      jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).off().on("click", /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee4() {
        var id;
        return _regeneratorRuntime().wrap(function _callee4$(_context4) {
          while (1) switch (_context4.prev = _context4.next) {
            case 0:
              id = this.id;
              _context4.next = 3;
              return (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
                method: 'DELETE',
                url: '/crm/gestion/delfichier/' + id,
                contentType: 'application/json; charset=utf-8',
                dataType: 'json'
              }).then(function (response) {
                location.reload();
              });
            case 3:
            case "end":
              return _context4.stop();
          }
        }, _callee4, this);
      })));
    });
  });
  var addChat = function addChat() {
    (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
      method: 'POST',
      url: '/crm/chat/tache/add/' + tache.id + '/' + jquery__WEBPACK_IMPORTED_MODULE_40___default()('#messa').val(),
      dataType: 'json'
    }).then(function (response) {
      setChats(response.data);
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#messa').val('');
    })["catch"](function (error) {});
  };
  jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addFileTache').off().on("click", function (event) {
    event.preventDefault();
    if (jquery__WEBPACK_IMPORTED_MODULE_40___default()(this).closest('form').valid()) {
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addFileTache').addClass('hide');
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#closeFileTache').addClass('hide');
      jquery__WEBPACK_IMPORTED_MODULE_40___default()('#loadFileTache').css('display', '');
      (0,axios__WEBPACK_IMPORTED_MODULE_44__["default"])({
        method: 'POST',
        url: '/crm/gestion/fichier/tache/add/' + tache.id,
        data: new FormData(jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addFileTacheForm')[0]),
        contentType: false,
        processData: false,
        cache: false,
        dataType: 'json'
      }).then(function (response) {
        setTache(response.data);
        jquery__WEBPACK_IMPORTED_MODULE_40___default()('#addFileTache').removeClass('hide');
        jquery__WEBPACK_IMPORTED_MODULE_40___default()('#closeFileTache').removeClass('hide');
        jquery__WEBPACK_IMPORTED_MODULE_40___default()('#loadFileTache').hide();
        jquery__WEBPACK_IMPORTED_MODULE_40___default()('#modalFiche').modal('toggle');
      })["catch"](function (error) {});
    }
  });
  if (tache !== undefined) {
    var fichiers = tache.fichiers;
    var renderFichiers = '';
    var renderChats = '';
    var photos = null;
    var donnee = [];
    var res = {};
    if (fichiers.length > 0) {
      fichiers.map(function (fiche) {
        if (fiche.categorie === 'IMAGES') {
          res.src = '/' + fiche.folde + '/' + fiche.nomfichier;
          res.width = 80;
          res.id = fiche.id;
          res.height = 50;
          donnee.push(_objectSpread({}, res));
        }
      });
      photos = JSON.parse(JSON.stringify(donnee));
      renderFichiers = fichiers.map(function (fiche) {
        if (fiche.categorie === 'FICHIERS') {
          return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("table", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("tr", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("td", {
            key: fiche.id.toString(),
            style: {
              fontSize: "13px"
            }
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("a", {
            href: "/".concat(fiche.folde, "/").concat(fiche.nomfichier),
            style: {
              color: "#000",
              marginLeft: "20px"
            }
          }, "\xBB ", fiche.nomfichier)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("td", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("a", {
            className: "deleta",
            id: fiche.id
          }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("i", {
            className: "fa fa-trash col-pink",
            style: {
              fontSize: "16px"
            },
            "aria-hidden": "true",
            title: "Supprimer cette ligne"
          })))));
        }
      });
    }
    if (chats.length > 0) {
      renderChats = chats.map(function (chat) {
        var del = " ";
        if (parseInt(chat.owner.id) === parseInt(current)) {
          del = '<a class="deleto" id=' + chat.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a>';
        } else {
          del = " ";
        }
        return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("div", {
          key: chat.id.toString(),
          className: "bg-gray",
          style: {
            padding: "10px",
            borderRadius: "20px",
            marginBottom: "10px"
          }
        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("p", {
          className: "col-blue"
        }, "De: ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("span", {
          className: "col-pink"
        }, chat.owner.nom + ' ' + chat.owner.prenoms), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("br", null), " ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("span", {
          className: "col-blue-grey"
        }, "le ", moment__WEBPACK_IMPORTED_MODULE_43__(chat.date).locale("fr").format('LLLL'))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("p", null, chat.message), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("p", {
          className: "text-right",
          dangerouslySetInnerHTML: {
            __html: del
          }
        }));
      });
    }
    localStorage.setItem('reloadd', 'tache/' + tache.id);
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("div", {
      className: "container-fluid"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("div", {
      className: "block-header"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("div", {
      className: "row clearfix p-b-5"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("div", {
      className: "col-md-12"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("h3", {
      className: "bolo700 col-pink"
    }, "Gestionnaire des taches"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("div", {
      className: "card",
      style: {
        padding: "20px"
      }
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("h4", {
      className: "bolo700 col-blue"
    }, "\xBB Tache"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("h6", {
      className: "font-14 m-l-20",
      dangerouslySetInnerHTML: {
        __html: tache.libelle
      }
    }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("hr", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("h4", {
      className: "font-14  col-blue-grey m-t-20"
    }, "\xBB Section: ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("span", {
      className: "col-black"
    }, tache.section.libelle)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("h4", {
      className: "font-14  col-blue-grey"
    }, "\xBB Planning: ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("span", {
      className: "col-black"
    }, tache.section.planning.planning)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("h4", {
      className: "font-14  col-blue-grey"
    }, "\xBB Chantier: ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("a", {
      href: "/crm/gestion/".concat(tache.chantier.id)
    }, " ", tache.chantier.client.nomclient, " | ", tache.chantier.nomchantier)))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("div", {
      className: "col-md-5"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("h4", {
      className: "bolo700"
    }, "Commentaires"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("textarea", {
      id: "messa",
      name: "w3review",
      rows: "4",
      cols: "50",
      style: {
        width: "100%"
      }
    }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("button", {
      type: "button",
      className: "btn btn-primary text-right",
      onClick: function onClick() {
        addChat();
      }
    }, "Envoyer"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("div", {
      className: "bg-white col-black",
      style: {
        overflowY: "scroll",
        height: "600px",
        padding: "10px"
      }
    }, renderChats)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("div", {
      className: "col-md-7"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("h4", {
      className: "bolo700"
    }, "Documents | Images"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("button", {
      type: "button",
      className: "btn btn-primary text-center",
      onClick: function onClick() {
        showAddFile();
      }
    }, "AJOUTER DES FICHIERS OU IMAGES"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("h5", {
      className: "bolo600 col-pink"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("u", null, "Fichiers")), renderFichiers, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("br", null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("h5", {
      className: "bolo600 col-pink"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("u", null, "Images")), photos !== null && photos.length > 0 && /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement(react_photo_gallery__WEBPACK_IMPORTED_MODULE_41__["default"], {
      photos: photos,
      onClick: openLightbox,
      direction: "column"
    }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("h5", {
      className: "bolo600 col-pink"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("u", null, "Supprimer les photos")), photos !== null && photos.map(function (img, index) {
      return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("h5", null, " \xBB ", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement("a", {
        href: "#",
        onClick: function onClick() {
          delPic(img.id);
        },
        className: "bolo600"
      }, "Photo ", index + 1));
    }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement(react_images__WEBPACK_IMPORTED_MODULE_42__.ModalGateway, null, viewerIsOpen && true ? /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement(react_images__WEBPACK_IMPORTED_MODULE_42__.Modal, {
      onClose: closeLightbox
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement(react_images__WEBPACK_IMPORTED_MODULE_42__["default"], {
      currentIndex: currentImage,
      views: photos.map(function (x) {
        return _objectSpread(_objectSpread({}, x), {}, {
          srcset: x.srcSet,
          caption: x.title
        });
      })
    })) : null)))));
  } else {
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement((react__WEBPACK_IMPORTED_MODULE_39___default().Fragment), null);
  }
};
try {
  var root = (0,react_dom_client__WEBPACK_IMPORTED_MODULE_38__.createRoot)(document.getElementById('taching'));
  root.render( /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_39___default().createElement(Taching, null));
} catch (e) {}

/***/ }),

/***/ "./assets/js/socket.js":
/*!*****************************!*\
  !*** ./assets/js/socket.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var socket_io_client__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! socket.io-client */ "./node_modules/socket.io-client/build/esm/index.js");

var socket = (0,socket_io_client__WEBPACK_IMPORTED_MODULE_0__.io)("http://localhost:3001");
socket.on("connect", function () {
  console.log("🔥 Socket connecté :", socket.id);
});
socket.on("client_updated", function (data) {
  console.log("📡 Event reçu :", data);
});

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_modules_es_array_concat_js-node_modules_core-js_modules_es_array-383511","vendors-node_modules_core-js_modules_es_array_from_js-node_modules_core-js_modules_es_array_i-c84b5d","vendors-node_modules_moment_locale_af_js-node_modules_moment_locale_ar-dz_js-node_modules_mom-582c96","vendors-node_modules_react-html-table-to-excel_index_js","vendors-node_modules_core-js_modules_es_parse-float_js-node_modules_react-device-detect_dist_lib_js","vendors-node_modules_react-edit-text_dist_index_modern_js","vendors-node_modules_core-js_modules_es_array_fill_js-node_modules_core-js_modules_es_object_-6702e9","vendors-node_modules_core-js_modules_es_date_to-primitive_js-node_modules_core-js_modules_es_-e1db58","assets_js_datascript_js-assets_js_jquery_validate_js-assets_css_mdb_css","assets_js_admin_js-assets_js_bootstrap_js-assets_js_jquery_tableToExcel_js-assets_js_select2_-13fb9c","assets_js_basic-form-elements_js-assets_js_bootstrap-datepicker_js-assets_js_bootstrap-materi-0ea397"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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R3NYLG9EQUFFLENBQUMsdUJBQXVCLENBQUM7QUFFMUN0WCxNQUFNLENBQUM0RixFQUFFLENBQUMsU0FBUyxFQUFFLFlBQU07RUFDdkJzTSxPQUFPLENBQUNDLEdBQUcsQ0FBQyxzQkFBc0IsRUFBRW5TLE1BQU0sQ0FBQytGLEVBQUUsQ0FBQztBQUNsRCxDQUFDLENBQUM7QUFFRi9GLE1BQU0sQ0FBQzRGLEVBQUUsQ0FBQyxnQkFBZ0IsRUFBRSxVQUFDdkQsSUFBSSxFQUFLO0VBQ2xDNlAsT0FBTyxDQUFDQyxHQUFHLENBQUMsaUJBQWlCLEVBQUU5UCxJQUFJLENBQUM7QUFDeEMsQ0FBQyxDQUFDIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2FwcC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvY29tcG9uZW50cy9jaGFudGllcnMvQ2hhdHRlci5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvY29tcG9uZW50cy9jaGFudGllcnMvRGF0YUZpcnN0LmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9jb21wb25lbnRzL2NoYW50aWVycy9QbGFuaW5nLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9jb21wb25lbnRzL2NoYW50aWVycy9UYWNoaW5nLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9zb2NrZXQuanMiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IHNvY2tldCBmcm9tIFwiLi9qcy9zb2NrZXRcIjtcclxuaW1wb3J0ICcuL2Nzcy9ib290c3RyYXAuY3NzJztcclxuaW1wb3J0ICcuL2Nzcy9tZGIuY3NzJztcclxuaW1wb3J0ICcuL2Nzcy93YXZlcy5jc3MnO1xyXG5pbXBvcnQgJy4vY3NzL2FuaW1hdGUuY3NzJztcclxuaW1wb3J0ICcuL2Nzcy9qcXVlcnktbmVzdGFibGUuY3NzJztcclxuaW1wb3J0ICcuL2Nzcy9hbGwtdGhlbWVzLmNzcyc7XHJcbmltcG9ydCAnLi9jc3Mvc2VsZWN0Mi5taW4uY3NzJztcclxuaW1wb3J0ICcuL2Nzcy9UYWJsZS5tb2R1bGUuY3NzJztcclxuaW1wb3J0ICcuL2Nzcy9UYWJsZUZvb3Rlci5tb2R1bGUuY3NzJztcclxuaW1wb3J0ICcuL2Nzcy9zdHlsZS5jc3MnO1xyXG5pbXBvcnQgJy4vY3NzL2Jvb3RzdHJhcC1kYXRlcGlja2VyLmNzcyc7XHJcbmltcG9ydCAnLi9jc3MvYm9vdHN0cmFwLW1hdGVyaWFsLWRhdGV0aW1lcGlja2VyLmNzcyc7XHJcblxyXG5pbXBvcnQgJy4vanMvYm9vdHN0cmFwLmpzJztcclxuaW1wb3J0ICcuL2pzL2RhdGFzY3JpcHQuanMnO1xyXG5pbXBvcnQgJy4vanMvc2VsZWN0Mi5taW4uanMnO1xyXG5pbXBvcnQgJy4vanMvanF1ZXJ5LnRhYmxlVG9FeGNlbC5qcyc7XHJcbmltcG9ydCAnLi9qcy9qcXVlcnkubmVzdGFibGUnO1xyXG5pbXBvcnQgJy4vanMvc29ydGFibGUtbmVzdGFibGUnO1xyXG5pbXBvcnQgJy4vanMvanF1ZXJ5LnZhbGlkYXRlLmpzJztcclxuaW1wb3J0ICcuL2pzL2Jvb3RzdHJhcC1ub3RpZnkuanMnO1xyXG5pbXBvcnQgJy4vanMvbm90aWZpY2F0aW9ucy5qcyc7XHJcbmltcG9ydCAnLi9qcy9hdXRvc2l6ZS5qcyc7XHJcbmltcG9ydCAnLi9qcy9ib290c3RyYXAtbWF0ZXJpYWwtZGF0ZXRpbWVwaWNrZXIuanMnO1xyXG5pbXBvcnQgJy4vanMvYm9vdHN0cmFwLWRhdGVwaWNrZXIuanMnO1xyXG5pbXBvcnQgJy4vanMvYWRtaW4uanMnO1xyXG5pbXBvcnQgJy4vanMvYmFzaWMtZm9ybS1lbGVtZW50cy5qcyc7XHJcbmltcG9ydCAnLi9qcy9qcXVlcnkudGltZWFnby5qcyc7XHJcblxyXG5pbXBvcnQgJy4vY29tcG9uZW50cy9jaGFudGllcnMvRGF0YUZpcnN0JztcclxuaW1wb3J0ICcuL2NvbXBvbmVudHMvY2hhbnRpZXJzL1BsYW5pbmcnO1xyXG5pbXBvcnQgJy4vY29tcG9uZW50cy9jaGFudGllcnMvVGFjaGluZyc7XHJcbmltcG9ydCAnLi9jb21wb25lbnRzL2NoYW50aWVycy9DaGF0dGVyJztcclxuIiwiaW1wb3J0IFJlYWN0IGZyb20gXCJyZWFjdFwiO1xuaW1wb3J0IHtjcmVhdGVSb290fSBmcm9tICdyZWFjdC1kb20vY2xpZW50JztcbmltcG9ydCB7dXNlRWZmZWN0LCB1c2VTdGF0ZX0gZnJvbSBcInJlYWN0XCI7XG5pbXBvcnQgYXhpb3MgZnJvbSBcImF4aW9zXCI7XG5pbXBvcnQgJCBmcm9tIFwianF1ZXJ5XCI7XG5pbXBvcnQgKiBhcyBtb21lbnQgZnJvbSBcIm1vbWVudFwiO1xuaW1wb3J0IHtkZXZpY2VUeXBlfSBmcm9tIFwicmVhY3QtZGV2aWNlLWRldGVjdFwiO1xuaW1wb3J0IFJlYWN0UXVpbGwsIHtRdWlsbH0gZnJvbSAncmVhY3QtcXVpbGwnO1xuaW1wb3J0ICdyZWFjdC1xdWlsbC9kaXN0L3F1aWxsLnNub3cuY3NzJztcblxuXG5jb25zdCBDaGF0dGVyID0gKCkgPT4ge1xuXG4gICAgY29uc3QgW21lc3NhLCBzZXRNZXNzYV0gPSB1c2VTdGF0ZSgnJyk7XG4gICAgY29uc3QgW2NoYXRzLCBzZXRDaGF0c10gPSB1c2VTdGF0ZShbXSk7XG4gICAgY29uc3QgW3RhY2hlcywgc2V0VGFjaGVzXSA9IHVzZVN0YXRlKFtdKTtcbiAgICBjb25zdCBbdXNlcnMsIHNldFVzZXJzXSA9IHVzZVN0YXRlKFtdKTtcbiAgICBjb25zdCBbcmVjZWl2ZSwgc2V0UmVjZWl2ZV0gPSB1c2VTdGF0ZShudWxsKTtcbiAgICBjb25zdCBbcmVjZSwgc2V0UmVjZV0gPSB1c2VTdGF0ZSgpO1xuICAgIGNvbnN0IFttZXNzLCBzZXRNZXNzXSA9IHVzZVN0YXRlKCk7XG5cbiAgICBsZXQgbGluayA9IFwiIFwiO1xuICAgIGxldCBsaXN0dGFjaGUgPSBbXTtcbiAgICBsZXQgbGlzdHRhY2hlcyA9IFtdO1xuICAgIGxldCBsaXN0ayA9IFtdO1xuICAgIGxldCByZW5kZXJUYWNoZXM7XG5cbiAgICBjb25zdCBmZXRjaFVzZXJzID0gYXN5bmMgKCkgPT4ge1xuICAgICAgICBheGlvcyh7XG4gICAgICAgICAgICBtZXRob2Q6ICdHRVQnLFxuICAgICAgICAgICAgdXJsOiAnL2NybS9zdGFydC91c2Vycy9nZXQnLFxuICAgICAgICAgICAgY29udGVudFR5cGU6ICdhcHBsaWNhdGlvbi9qc29uOyBjaGFyc2V0PXV0Zi04J1xuICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgc2V0VXNlcnMocmVzcG9uc2UuZGF0YSk7XG4gICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICB9KTtcbiAgICB9O1xuXG4gICAgY29uc3QgZmV0Y2hDaGF0cyA9IGFzeW5jICgpID0+IHtcbiAgICAgICAgbGV0IGF6ID0gbG9jYWxTdG9yYWdlLmdldEl0ZW0oXCJyZWNlaXZlcmlkXCIpO1xuXG4gICAgICAgIGlmIChheiAhPT0gbnVsbCkge1xuICAgICAgICAgICAgaWYgKGxvY2FsU3RvcmFnZS5nZXRJdGVtKFwidHlwZVwiKSA9PT0gXCJjaGF0XCIpIHtcblxuICAgICAgICAgICAgICAgICQoXCIjdXVlclwiKS5hdHRyKFwic3JjXCIsIFwiL2dhbGxlcnkvXCIgKyBsb2NhbFN0b3JhZ2UuZ2V0SXRlbShcInJlY2VpdmVycGhvdG9cIikpO1xuICAgICAgICAgICAgICAgICQoXCIjY2hhdGNvbnRlbnRcIikuYW5pbWF0ZSh7c2Nyb2xsVG9wOiAkKCcjY2hhdGNvbnRlbnQnKS5oZWlnaHQoKSArIDI1MDAwfSwgNTAwKTtcbiAgICAgICAgICAgICAgICBpZiAobG9jYWxTdG9yYWdlLmdldEl0ZW0oXCJyZWNlaXZlcnBob3RvXCIpICE9PSBcIm51bGxcIikge1xuICAgICAgICAgICAgICAgICAgICAkKFwiI3V1ZXJcIikuYXR0cihcInNyY1wiLCBcIi9nYWxsZXJ5L1wiICsgbG9jYWxTdG9yYWdlLmdldEl0ZW0oXCJyZWNlaXZlcnBob3RvXCIpKTtcbiAgICAgICAgICAgICAgICAgICAgJChcIiN1dWVyXCIpLmNzcyhcInZpc2liaWxpdHlcIiwgXCJ2aXNpYmxlXCIpO1xuICAgICAgICAgICAgICAgICAgICAkKFwiLmNsaWNvXCIpLmNzcyhcInZpc2liaWxpdHlcIiwgXCJ2aXNpYmxlXCIpO1xuICAgICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgICAgICQoXCIjdXVlclwiKS5hdHRyKFwic3JjXCIsIFwiL2dhbGxlcnkvdXNlcmUucG5nXCIpO1xuICAgICAgICAgICAgICAgICAgICAkKFwiI3V1ZXJcIikuY3NzKFwidmlzaWJpbGl0eVwiLCBcInZpc2libGVcIik7XG4gICAgICAgICAgICAgICAgICAgICQoXCIuY2xpY29cIikuY3NzKFwidmlzaWJpbGl0eVwiLCBcInZpc2libGVcIik7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICQoXCIjdXVlclwiKS5jc3MoXCJ2aXNpYmlsaXR5XCIsIFwidmlzaWJsZVwiKTtcbiAgICAgICAgICAgICAgICAkKFwiLmNsaWNvXCIpLmNzcyhcInZpc2liaWxpdHlcIiwgXCJ2aXNpYmxlXCIpO1xuICAgICAgICAgICAgICAgICQoJy51c2VzZWxlY3RlZCcpLmh0bWwobG9jYWxTdG9yYWdlLmdldEl0ZW0oXCJyZWNlaXZlcm5vbVwiKSk7XG5cblxuICAgICAgICAgICAgICAgIGF4aW9zKHtcbiAgICAgICAgICAgICAgICAgICAgbWV0aG9kOiAnR0VUJyxcbiAgICAgICAgICAgICAgICAgICAgdXJsOiAnL2NybS9jaGF0L2dldC8nICsgYXogKyAnLycgKyAkKCcjY3VycmVudCcpLnZhbCgpLFxuICAgICAgICAgICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnXG4gICAgICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcblxuICAgICAgICAgICAgICAgICAgICBsZXQgZGQgPSByZXNwb25zZS5kYXRhO1xuICAgICAgICAgICAgICAgICAgICBsZXQgc29ydGVkID0gZGQuc29ydChmdW5jdGlvbiAoYSwgYikge1xuICAgICAgICAgICAgICAgICAgICAgICAgcmV0dXJuIG5ldyBEYXRlKGEuZGF0ZSkgLSBuZXcgRGF0ZShiLmRhdGUpO1xuICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICAgICAgc2V0Q2hhdHMoc29ydGVkKTtcblxuICAgICAgICAgICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICB9XG4gICAgICAgICAgICBpZiAobG9jYWxTdG9yYWdlLmdldEl0ZW0oXCJ0eXBlXCIpID09PSBcInRhY2hlXCIpIHtcblxuICAgICAgICAgICAgICAgICQoXCIjdXVlclwiKS5hdHRyKFwic3JjXCIsIFwiL2ltZy9cIiArIGxvY2FsU3RvcmFnZS5nZXRJdGVtKFwicmVjZWl2ZXJwaG90b1wiKSk7XG4gICAgICAgICAgICAgICAgJChcIiNjaGF0Y29udGVudFwiKS5hbmltYXRlKHtzY3JvbGxUb3A6ICQoJyNjaGF0Y29udGVudCcpLmhlaWdodCgpICsgMjUwMDB9LCA1MDApO1xuXG4gICAgICAgICAgICAgICAgJChcIiN1dWVyXCIpLmF0dHIoXCJzcmNcIiwgXCIvaW1nL1wiICsgbG9jYWxTdG9yYWdlLmdldEl0ZW0oXCJyZWNlaXZlcnBob3RvXCIpKTtcbiAgICAgICAgICAgICAgICAkKFwiI3V1ZXJcIikuY3NzKFwidmlzaWJpbGl0eVwiLCBcInZpc2libGVcIik7XG4gICAgICAgICAgICAgICAgJChcIi5jbGljb1wiKS5jc3MoXCJ2aXNpYmlsaXR5XCIsIFwidmlzaWJsZVwiKTtcblxuICAgICAgICAgICAgICAgICQoXCIjdXVlclwiKS5jc3MoXCJ2aXNpYmlsaXR5XCIsIFwidmlzaWJsZVwiKTtcbiAgICAgICAgICAgICAgICAkKFwiLmNsaWNvXCIpLmNzcyhcInZpc2liaWxpdHlcIiwgXCJ2aXNpYmxlXCIpO1xuICAgICAgICAgICAgICAgICQoJy51c2VzZWxlY3RlZCcpLmh0bWwobG9jYWxTdG9yYWdlLmdldEl0ZW0oXCJyZWNlaXZlcm5vbVwiKSk7XG5cblxuICAgICAgICAgICAgICAgIGF4aW9zKHtcbiAgICAgICAgICAgICAgICAgICAgbWV0aG9kOiAnR0VUJyxcbiAgICAgICAgICAgICAgICAgICAgdXJsOiAnL2NybS9jaGF0L3RhY2hlL2dldC8nICsgYXosXG4gICAgICAgICAgICAgICAgICAgIGNvbnRlbnRUeXBlOiAnYXBwbGljYXRpb24vanNvbjsgY2hhcnNldD11dGYtOCdcbiAgICAgICAgICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuXG4gICAgICAgICAgICAgICAgICAgIGxldCBkZCA9IHJlc3BvbnNlLmRhdGE7XG4gICAgICAgICAgICAgICAgICAgIGxldCBzb3J0ZWQgPSBkZC5zb3J0KGZ1bmN0aW9uIChhLCBiKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICByZXR1cm4gbmV3IERhdGUoYS5kYXRlKSAtIG5ldyBEYXRlKGIuZGF0ZSk7XG4gICAgICAgICAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICAgICAgICAgIHNldENoYXRzKHNvcnRlZCk7XG5cbiAgICAgICAgICAgICAgICB9KS5jYXRjaChmdW5jdGlvbiAoZXJyb3IpIHtcbiAgICAgICAgICAgICAgICB9KTtcblxuICAgICAgICAgICAgfVxuICAgICAgICB9XG4gICAgfVxuXG4gICAgY29uc3QgZmV0Y2hUYWNoZXMgPSBhc3luYyAoKSA9PiB7XG4gICAgICAgIGF4aW9zKHtcbiAgICAgICAgICAgIG1ldGhvZDogJ0dFVCcsXG4gICAgICAgICAgICB1cmw6ICcvY3JtL2NoYXQvdGFjaGVyL2dldCcsXG4gICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnXG4gICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICAgICBzZXRUYWNoZXMocmVzcG9uc2UuZGF0YSk7XG4gICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICB9KTtcbiAgICB9O1xuXG4gICAgdXNlRWZmZWN0KCgpID0+IHtcbiAgICAgICAgalF1ZXJ5KGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICBqUXVlcnkoXCJ0aW1lLnRpbWVhZ29cIikudGltZWFnbygpO1xuICAgICAgICAgICAgalF1ZXJ5LnRpbWVhZ28uc2V0dGluZ3Muc3RyaW5ncyA9IHtcbiAgICAgICAgICAgICAgICBwcmVmaXhBZ286IFwiaWwgeSBhXCIsXG4gICAgICAgICAgICAgICAgcHJlZml4RnJvbU5vdzogbnVsbCxcbiAgICAgICAgICAgICAgICBzdWZmaXhBZ286IG51bGwsXG4gICAgICAgICAgICAgICAgc3VmZml4RnJvbU5vdzogXCJkJ2ljaVwiLFxuICAgICAgICAgICAgICAgIHNlY29uZHM6IFwibW9pbnMgZCd1bmUgbWludXRlXCIsXG4gICAgICAgICAgICAgICAgbWludXRlOiBcInVuZSBtaW51dGVcIixcbiAgICAgICAgICAgICAgICBtaW51dGVzOiBcIiVkIG1pbnV0ZXNcIixcbiAgICAgICAgICAgICAgICBob3VyOiBcInVuZSBoZXVyZVwiLFxuICAgICAgICAgICAgICAgIGhvdXJzOiBcIiVkIGhldXJlc1wiLFxuICAgICAgICAgICAgICAgIGRheTogXCJ1biBqb3VyXCIsXG4gICAgICAgICAgICAgICAgZGF5czogXCIlZCBqb3Vyc1wiLFxuICAgICAgICAgICAgICAgIG1vbnRoOiBcInVuIG1vaXNcIixcbiAgICAgICAgICAgICAgICBtb250aHM6IFwiJWQgbW9pc1wiLFxuICAgICAgICAgICAgICAgIHllYXI6IFwidW4gYW5cIixcbiAgICAgICAgICAgICAgICB5ZWFyczogXCIlZCBhbnNcIixcbiAgICAgICAgICAgICAgICB3b3JkU2VwYXJhdG9yOiBcIiBcIixcbiAgICAgICAgICAgICAgICBudW1iZXJzOiBbXVxuICAgICAgICAgICAgfTtcbiAgICAgICAgfSk7XG4gICAgICAgIGZldGNoVXNlcnMoKTtcbiAgICAgICAgZmV0Y2hUYWNoZXMoKTtcbiAgICAgICAgJCgnLmNsaWNvJykucmVtb3ZlQ2xhc3MoXCJoaWRlXCIpO1xuICAgICAgICBjb25zdCBpbnRlcnZhbCA9IHNldEludGVydmFsKCgpID0+IHtcbiAgICAgICAgICAgIGZldGNoQ2hhdHMoKTtcbiAgICAgICAgfSwgMTAwMDApO1xuICAgICAgICByZXR1cm4gKCkgPT4gY2xlYXJJbnRlcnZhbChpbnRlcnZhbCk7XG5cbiAgICB9LCBbXSlcblxuICAgIGZ1bmN0aW9uIG9wZW5GaWxlKGZpbGUpIHtcbiAgICAgICAgY29uc3QgZXh0ZW5zaW9uID0gZmlsZS5zdWJzdHIoKGZpbGUubGFzdEluZGV4T2YoJy4nKSArIDEpKTtcbiAgICAgICAgc3dpdGNoIChleHRlbnNpb24pIHtcbiAgICAgICAgICAgIGNhc2UgJ2pwZyc6XG4gICAgICAgICAgICBjYXNlICdwbmcnOlxuICAgICAgICAgICAgY2FzZSAnZ2lmJzpcbiAgICAgICAgICAgICAgICByZXR1cm4gKCdpbWFnZScpO1xuICAgICAgICAgICAgY2FzZSAnemlwJzpcbiAgICAgICAgICAgIGNhc2UgJ3Jhcic6XG4gICAgICAgICAgICAgICAgcmV0dXJuICgncmFyJyk7XG4gICAgICAgICAgICBjYXNlICdwZGYnOlxuICAgICAgICAgICAgICAgIHJldHVybiAoJ3BkZicpO1xuICAgICAgICAgICAgY2FzZSAneGxzJzpcbiAgICAgICAgICAgIGNhc2UgJ3hsc3gnOlxuICAgICAgICAgICAgICAgIHJldHVybiAoJ2V4Y2VsJyk7XG4gICAgICAgICAgICBjYXNlICdkb2MnOlxuICAgICAgICAgICAgY2FzZSAnZG9jeCc6XG4gICAgICAgICAgICAgICAgcmV0dXJuICgnd29yZCcpO1xuICAgICAgICAgICAgZGVmYXVsdDpcbiAgICAgICAgICAgICAgICByZXR1cm4gKCd1bmtub3cnKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgICQoZnVuY3Rpb24gKCkge1xuICAgICAgICAkKFwiLmdldHVcIikuZWFjaChmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAkKHRoaXMpLm9mZigpLm9uKFwiY2xpY2tcIiwgYXN5bmMgZnVuY3Rpb24gKCkge1xuXG4gICAgICAgICAgICAgICAgJCgnI3R0MycpLnJlbW92ZUNsYXNzKFwiYWN0aXZlXCIpO1xuICAgICAgICAgICAgICAgICQoJyN0dDEnKS5hZGRDbGFzcyhcImFjdGl2ZVwiKTtcbiAgICAgICAgICAgICAgICAkKFwiLmFjY2VzXCIpLmNzcyhcInZpc2liaWxpdHlcIiwgXCJoaWRkZW5cIik7XG4gICAgICAgICAgICAgICAgbGV0IHBwID0gdGhpcy5pZDtcbiAgICAgICAgICAgICAgICBsZXQgdXUgPSAwO1xuICAgICAgICAgICAgICAgIGxldCBzZWxlO1xuICAgICAgICAgICAgICAgIHVzZXJzLm1hcCgodXNlcikgPT4ge1xuICAgICAgICAgICAgICAgICAgICBpZiAocGFyc2VJbnQodXNlci5pZCkgPT09IHBhcnNlSW50KHBwKSAmJiB1dSA9PT0gMCkge1xuICAgICAgICAgICAgICAgICAgICAgICAgdXUgPSAxO1xuICAgICAgICAgICAgICAgICAgICAgICAgc2VsZSA9IHVzZXI7XG4gICAgICAgICAgICAgICAgICAgICAgICBzZXRSZWNlaXZlKHVzZXIpO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgICAgICBpZiAoc2VsZS5waG90byAhPSBudWxsKSB7XG4gICAgICAgICAgICAgICAgICAgICQoXCIjdXVlclwiKS5hdHRyKFwic3JjXCIsIFwiL2dhbGxlcnkvXCIgKyBzZWxlLnBob3RvKTtcbiAgICAgICAgICAgICAgICAgICAgJChcIiN1dWVyXCIpLmNzcyhcInZpc2liaWxpdHlcIiwgXCJ2aXNpYmxlXCIpO1xuICAgICAgICAgICAgICAgICAgICAkKFwiLmNsaWNvXCIpLmNzcyhcInZpc2liaWxpdHlcIiwgXCJ2aXNpYmxlXCIpO1xuICAgICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgICAgICQoXCIjdXVlclwiKS5hdHRyKFwic3JjXCIsIFwiL2dhbGxlcnkvdXNlcmUucG5nXCIpO1xuICAgICAgICAgICAgICAgICAgICAkKFwiI3V1ZXJcIikuY3NzKFwidmlzaWJpbGl0eVwiLCBcInZpc2libGVcIik7XG4gICAgICAgICAgICAgICAgICAgICQoXCIuY2xpY29cIikuY3NzKFwidmlzaWJpbGl0eVwiLCBcInZpc2libGVcIik7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICQoJy51c2VzZWxlY3RlZCcpLmh0bWwoc2VsZS5ub20gKyAnICcgKyBzZWxlLnByZW5vbXMgKyAnPGJyPicgKyBzZWxlLmNvbnRhY3QpO1xuXG4gICAgICAgICAgICAgICAgbG9jYWxTdG9yYWdlLnNldEl0ZW0oJ3JlY2VpdmVyaWQnLCB0aGlzLmlkKTtcbiAgICAgICAgICAgICAgICBsb2NhbFN0b3JhZ2Uuc2V0SXRlbSgncmVjZWl2ZXJub20nLCBzZWxlLm5vbSArICcgJyArIHNlbGUucHJlbm9tcyArICc8YnI+JyArIHNlbGUuY29udGFjdCk7XG4gICAgICAgICAgICAgICAgbG9jYWxTdG9yYWdlLnNldEl0ZW0oJ3JlY2VpdmVycGhvdG8nLCBzZWxlLnBob3RvKTtcbiAgICAgICAgICAgICAgICBsb2NhbFN0b3JhZ2Uuc2V0SXRlbSgndHlwZScsIFwiY2hhdFwiKTtcblxuXG4gICAgICAgICAgICAgICAgYXhpb3Moe1xuICAgICAgICAgICAgICAgICAgICBtZXRob2Q6ICdHRVQnLFxuICAgICAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL2NoYXQvZ2V0LycgKyB0aGlzLmlkICsgJy8nICsgJCgnI2N1cnJlbnQnKS52YWwoKSxcbiAgICAgICAgICAgICAgICAgICAgY29udGVudFR5cGU6ICdhcHBsaWNhdGlvbi9qc29uOyBjaGFyc2V0PXV0Zi04J1xuICAgICAgICAgICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG5cbiAgICAgICAgICAgICAgICAgICAgbGV0IGRkID0gcmVzcG9uc2UuZGF0YTtcbiAgICAgICAgICAgICAgICAgICAgbGV0IHNvcnRlZCA9IGRkLnNvcnQoZnVuY3Rpb24gKGEsIGIpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybiBuZXcgRGF0ZShhLmRhdGUpIC0gbmV3IERhdGUoYi5kYXRlKTtcbiAgICAgICAgICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgICAgICAgICAgc2V0Q2hhdHMoc29ydGVkKTtcbiAgICAgICAgICAgICAgICAgICAgJChcIiNjaGF0Y29udGVudFwiKS5hbmltYXRlKHtzY3JvbGxUb3A6ICQoJyNjaGF0Y29udGVudCcpLmhlaWdodCgpICsgMjUwMDB9LCA1MDApO1xuXG4gICAgICAgICAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfSk7XG4gICAgfSk7XG4gICAgJChmdW5jdGlvbiAoKSB7XG4gICAgICAgICQoXCIuZ2V0c3VcIikuZWFjaChmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAkKHRoaXMpLm9mZigpLm9uKFwiY2xpY2tcIiwgYXN5bmMgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgICQoJyN0dDMnKS5yZW1vdmVDbGFzcyhcImFjdGl2ZVwiKTtcbiAgICAgICAgICAgICAgICAkKCcjdHQxJykuYWRkQ2xhc3MoXCJhY3RpdmVcIik7XG4gICAgICAgICAgICAgICAgJChcIi5hY2Nlc1wiKS5jc3MoXCJ2aXNpYmlsaXR5XCIsIFwiaGlkZGVuXCIpO1xuICAgICAgICAgICAgICAgIGxldCBwcCA9IHRoaXMuaWQ7XG4gICAgICAgICAgICAgICAgbGV0IHV1ID0gMDtcbiAgICAgICAgICAgICAgICBsZXQgc2VsZTtcbiAgICAgICAgICAgICAgICB0YWNoZXMubWFwKCh0YWNoZSkgPT4ge1xuICAgICAgICAgICAgICAgICAgICBpZiAocGFyc2VJbnQodGFjaGUudGFjaGVbXCJpZFwiXSkgPT09IHBhcnNlSW50KHBwKSAmJiB1dSA9PT0gMCkge1xuICAgICAgICAgICAgICAgICAgICAgICAgdXUgPSAxO1xuICAgICAgICAgICAgICAgICAgICAgICAgc2VsZSA9IHRhY2hlO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgICAgJChcIiN1dWVyXCIpLmF0dHIoXCJzcmNcIiwgXCIvaW1nL3RhY2hlLnBuZ1wiKTtcbiAgICAgICAgICAgICAgICAkKFwiI3V1ZXJcIikuY3NzKFwidmlzaWJpbGl0eVwiLCBcInZpc2libGVcIik7XG4gICAgICAgICAgICAgICAgJChcIi5jbGljb1wiKS5jc3MoXCJ2aXNpYmlsaXR5XCIsIFwidmlzaWJsZVwiKTtcblxuICAgICAgICAgICAgICAgICQoJy51c2VzZWxlY3RlZCcpLmh0bWwoc2VsZS50YWNoZVsnbGliZWxsZSddKTtcblxuICAgICAgICAgICAgICAgIGxvY2FsU3RvcmFnZS5zZXRJdGVtKCdyZWNlaXZlcmlkJywgcHApO1xuICAgICAgICAgICAgICAgIGxvY2FsU3RvcmFnZS5zZXRJdGVtKCdyZWNlaXZlcm5vbScsIHNlbGUudGFjaGVbJ2xpYmVsbGUnXSk7XG4gICAgICAgICAgICAgICAgbG9jYWxTdG9yYWdlLnNldEl0ZW0oJ3JlY2VpdmVycGhvdG8nLCBcInRhY2hlLnBuZ1wiKTtcbiAgICAgICAgICAgICAgICBsb2NhbFN0b3JhZ2Uuc2V0SXRlbSgndHlwZScsIFwidGFjaGVcIik7XG5cbiAgICAgICAgICAgICAgICBheGlvcyh7XG4gICAgICAgICAgICAgICAgICAgIG1ldGhvZDogJ0dFVCcsXG4gICAgICAgICAgICAgICAgICAgIHVybDogJy9jcm0vY2hhdC90YWNoZS9nZXQvJyArIHBwLFxuICAgICAgICAgICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnXG4gICAgICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcblxuICAgICAgICAgICAgICAgICAgICBsZXQgZGQgPSByZXNwb25zZS5kYXRhO1xuICAgICAgICAgICAgICAgICAgICBsZXQgc29ydGVkID0gZGQuc29ydChmdW5jdGlvbiAoYSwgYikge1xuICAgICAgICAgICAgICAgICAgICAgICAgcmV0dXJuIG5ldyBEYXRlKGEuZGF0ZSkgLSBuZXcgRGF0ZShiLmRhdGUpO1xuICAgICAgICAgICAgICAgICAgICB9KTtcblxuICAgICAgICAgICAgICAgICAgICBzZXRDaGF0cyhzb3J0ZWQpO1xuICAgICAgICAgICAgICAgICAgICAkKFwiI2NoYXRjb250ZW50XCIpLmFuaW1hdGUoe3Njcm9sbFRvcDogJCgnI2NoYXRjb250ZW50JykuaGVpZ2h0KCkgKyAyNTAwMH0sIDUwMCk7XG5cbiAgICAgICAgICAgICAgICB9KS5jYXRjaChmdW5jdGlvbiAoZXJyb3IpIHtcbiAgICAgICAgICAgICAgICB9KTtcblxuICAgICAgICAgICAgfSk7XG4gICAgICAgIH0pO1xuICAgIH0pO1xuXG4gICAgdGFjaGVzLm1hcCgodGFjaGUpID0+IHtcbiAgICAgICAgbGlzdHRhY2hlLnB1c2godGFjaGUudGFjaGUuY2hhbnRpZXJbXCJpZFwiXSk7XG4gICAgfSk7XG5cbiAgICB0YWNoZXMubWFwKCh0YWNoZSkgPT4ge1xuICAgICAgICBsaXN0ay5wdXNoKHRhY2hlLnRhY2hlW1wiaWRcIl0pO1xuICAgIH0pO1xuXG4gICAgY29uc3QgbW1tID0gbGlzdHRhY2hlLmZpbHRlcihmdW5jdGlvbiAoZWxlbSwgaW5kZXgsIHNlbGYpIHtcbiAgICAgICAgcmV0dXJuIGluZGV4ID09PSBzZWxmLmluZGV4T2YoZWxlbSk7XG4gICAgfSk7XG5cbiAgICBjb25zdCBtbW1tID0gbGlzdGsuZmlsdGVyKGZ1bmN0aW9uIChlbGVtLCBpbmRleCwgc2VsZikge1xuICAgICAgICByZXR1cm4gaW5kZXggPT09IHNlbGYuaW5kZXhPZihlbGVtKTtcbiAgICB9KTtcblxuICAgIGNvbnN0IHJlbmRlclVzZXJzID0gdXNlcnMubWFwKCh1c2VyKSA9PiB7XG5cbiAgICAgICAgaWYgKHVzZXIucGhvdG8gIT0gbnVsbCkge1xuICAgICAgICAgICAgbGluayA9IHVzZXIucGhvdG9cbiAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgIGxpbmsgPSBcInVzZXJlLnBuZ1wiO1xuICAgICAgICB9XG5cbiAgICAgICAgcmV0dXJuICg8bGkgY2xhc3NOYW1lPVwiY2xlYXJmaXhcIiBrZXk9e3VzZXIuaWR9IHN0eWxlPXt7bWFyZ2luVG9wOiBcIjIwcHhcIn19PlxuICAgICAgICAgICAgPGltZyBzcmM9e2AvZ2FsbGVyeS8ke2xpbmt9YH1cbiAgICAgICAgICAgICAgICAgc3R5bGU9e3t3aWR0aDogXCI2MHB4XCIsIGhlaWdodDogXCI2MHB4XCIsIG1hcmdpblJpZ2h0OiBcIjEwcHhcIiwgYm9yZGVyUmFkaXVzOiBcIjMwcHhcIiwgZmxvYXQ6IFwibGVmdFwifX1cbiAgICAgICAgICAgICAgICAgYWx0PVwiYXZhdGFyXCIvPlxuICAgICAgICAgICAgPGEgaWQ9e3VzZXIuaWR9IGNsYXNzTmFtZT1cImFib3V0IGdldHVcIiBkYXRhLXRvZ2dsZT1cInRhYlwiIGhyZWY9XCIjaG9tZVwiPlxuICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwibmFtZSBjb2wtd2hpdGVcIj57dXNlci5ub20gKyAnICcgKyB1c2VyLnByZW5vbXN9PC9kaXY+XG4gICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtYmxhY2tcIj57dXNlci5jb250YWN0fTwvZGl2PlxuICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLWJsYWNrXCI+e3VzZXIudXNlcm5hbWV9PC9kaXY+XG4gICAgICAgICAgICA8L2E+XG4gICAgICAgIDwvbGk+KVxuXG4gICAgfSk7XG4gICAgY29uc3QgcmVuZFVzZXJzID0gdXNlcnMubWFwKCh1c2VyKSA9PiB7XG5cbiAgICAgICAgaWYgKHVzZXIucGhvdG8gIT0gbnVsbCkge1xuICAgICAgICAgICAgbGluayA9IHVzZXIucGhvdG9cbiAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgIGxpbmsgPSBcInVzZXJlLnBuZ1wiO1xuICAgICAgICB9XG5cbiAgICAgICAgcmV0dXJuICg8bGkgY2xhc3NOYW1lPVwiY2xlYXJmaXhcIiBrZXk9e3VzZXIuaWR9PlxuICAgICAgICAgICAgPGltZyBzcmM9e2AvZ2FsbGVyeS8ke2xpbmt9YH1cbiAgICAgICAgICAgICAgICAgc3R5bGU9e3t3aWR0aDogXCI2MHB4XCIsIGhlaWdodDogXCI2MHB4XCIsIG1hcmdpblJpZ2h0OiBcIjEwcHhcIiwgYm9yZGVyUmFkaXVzOiBcIjMwcHhcIiwgZmxvYXQ6IFwibGVmdFwifX1cbiAgICAgICAgICAgICAgICAgYWx0PVwiYXZhdGFyXCIvPlxuICAgICAgICAgICAgPGEgaWQ9e3VzZXIuaWR9IGNsYXNzTmFtZT1cImFib3V0IGdldHVcIj5cbiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cIm5hbWUgY29sLXBpbmtcIj57dXNlci5ub20gKyAnICcgKyB1c2VyLnByZW5vbXN9PC9kaXY+XG4gICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtYmxhY2tcIj57dXNlci5jb250YWN0fTwvZGl2PlxuICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLWJsYWNrXCI+e3VzZXIudXNlcm5hbWV9PC9kaXY+XG4gICAgICAgICAgICA8L2E+XG4gICAgICAgIDwvbGk+KVxuXG4gICAgfSk7XG4gICAgY29uc3QgcmVuZGVyU2VsZWN0VXNlcnMgPSB1c2Vycy5tYXAoKHVzZXIpID0+IHtcbiAgICAgICAgcmV0dXJuIChcbiAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiZm9ybS1jaGVja1wiIGtleT17dXNlci5pZH0+XG4gICAgICAgICAgICAgICAgPGlucHV0IGNsYXNzTmFtZT1cImZvcm0tY2hlY2staW5wdXQgc2VsdVwiIHR5cGU9XCJyYWRpb1wiIG5hbWU9XCJmbGV4UmFkaW9EZWZhdWx0XCIgaWQ9XCJmbGV4UmFkaW9EZWZhdWx0MVwiXG4gICAgICAgICAgICAgICAgICAgICAgIHZhbHVlPXt1c2VyLmlkfS8+XG4gICAgICAgICAgICAgICAgPGxhYmVsIGNsYXNzTmFtZT1cImZvcm0tY2hlY2stbGFiZWwgY29sLWJsYWNrXCIgaHRtbEZvcj1cImZsZXhSYWRpb0RlZmF1bHQxXCIgc3R5bGU9e3tmb250U2l6ZTogXCIxNnB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAge3VzZXIubm9tICsgJyAnICsgdXNlci5wcmVub21zfVxuICAgICAgICAgICAgICAgIDwvbGFiZWw+XG4gICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgKVxuICAgIH0pO1xuICAgIGNvbnN0IHJlbmRlckNoYXRzID0gY2hhdHMubWFwKChjaGF0KSA9PiB7XG5cbiAgICAgICAgbGV0IG1wID0gJyAnO1xuXG4gICAgICAgIGlmIChwYXJzZUludCgkKCcjY3VycmVudCcpLnZhbCgpKSA9PT0gcGFyc2VJbnQoY2hhdC5vd25lci5pZCkpIHtcbiAgICAgICAgICAgIGlmIChjaGF0LmZpY2hpZXIgIT09IG51bGwpIHtcbiAgICAgICAgICAgICAgICBsZXQgdHlweSA9IG9wZW5GaWxlKGNoYXQuZmljaGllcltcIm5vbWZpY2hpZXJcIl0pO1xuICAgICAgICAgICAgICAgIGlmICh0eXB5ID09PSBcInBkZlwiKSB7XG4gICAgICAgICAgICAgICAgICAgIG1wID0gJzxkaXYgY2xhc3M9XCJtZXNzYWdlLWRhdGEgdGV4dC1yaWdodFwiPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgJzxkaXYgY2xhc3M9XCJtZXNzYWdlIG90aGVyLW1lc3NhZ2UgZmxvYXQtcmlnaHRcIj4nO1xuICAgICAgICAgICAgICAgICAgICBpZiAoY2hhdC5yZXBseWVDaGF0ICE9PSBudWxsKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBtcCA9IG1wICsgJzxzcGFuIGNsYXNzPVwiYmctd2hpdGUgY29sLWJsYWNrXCIgc3R5bGU9XCJib3JkZXI6IDFweCBzb2xpZCAjZmYwMDJkOyBwYWRkaW5nOiA1cHg7IGJvcmRlci1yYWRpdXM6IDEwcHhcIj4nICsgY2hhdC5yZXBseWVDaGF0WydtZXNzYWdlJ10gKyAnPC9zcGFuPjxicj4nO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIG1wID0gbXAgKyAnPGEgaHJlZj1cIi8nICsgY2hhdC5maWNoaWVyW1wiZm9sZGVcIl0gKyAnLycgKyBjaGF0LmZpY2hpZXJbXCJub21maWNoaWVyXCJdICsgJ1wiIHRhcmdldD1cIl9ibGFua1wiPjxpbWcgc3JjPVwiL2ltZy9wZGYucG5nXCIgYWx0PVwiZmlsZVwiLz4nICsgY2hhdC5maWNoaWVyW1wibm9tZmljaGllclwiXSArICc8L2E+PGJyPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgJzxhIGhyZWY9XCIjXCIgdGl0bGU9XCJTdXBwcmltZXJcIiBjbGFzcz1cImZsb2F0LXJpZ2h0IGJnLXBpbmsgZGVsb3RlIGhhZG8gaGlkZVwiIGlkPVwiJyArIGNoYXQuaWQgKyAnXCIgc3R5bGU9XCJwb3NpdGlvbjogcmVsYXRpdmU7IHBhZGRpbmc6IDAgM3B4IDAgM3B4OyBib3JkZXItcmFkaXVzOiAyMHB4O21hcmdpbjogMCA1cHggMCA1cHg7IHotaW5kZXg6IDEwMDBcIj48aSBjbGFzcz1cIm1hdGVyaWFsLWljb25zIGNvbC13aGl0ZVwiIHN0eWxlPVwiZm9udC1zaXplOiAxNnB4XCI+Y2xlYXI8L2k+PC9hPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgJzxhIGhyZWY9XCIjXCIgdGl0bGU9XCJUcmFuc2bDqXJlclwiIGNsYXNzPVwiZmxvYXQtcmlnaHQgYmctb3JhbmdlIHRyYW5zZmVyIGhhZG8gaGlkZVwiIGlkPVwiJyArIGNoYXQuaWQgKyAnXCIgc3R5bGU9XCJwb3NpdGlvbjogcmVsYXRpdmU7IHBhZGRpbmc6IDAgM3B4IDAgM3B4OyBib3JkZXItcmFkaXVzOiAyMHB4OyBtYXJnaW46IDAgNXB4IDAgNXB4OyB6LWluZGV4OiAxMDAwXCI+PGkgY2xhc3M9XCJtYXRlcmlhbC1pY29ucyBjb2wtd2hpdGVcIiBzdHlsZT1cImZvbnQtc2l6ZTogMTZweFwiPnJlZG88L2k+PC9hPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgJzxhIGhyZWY9XCIjXCIgdGl0bGU9XCJSw6lwb25kcmVcIiBjbGFzcz1cImZsb2F0LXJpZ2h0IGJnLWJsdWUgcmVwb25kcmUgaGFkbyBoaWRlXCIgaWQ9XCInICsgY2hhdC5pZCArICdcIiBzdHlsZT1cInBvc2l0aW9uOiByZWxhdGl2ZTsgcGFkZGluZzogMCAzcHggMCAzcHg7IGJvcmRlci1yYWRpdXM6IDIwcHg7IG1hcmdpbjogMCA1cHggMCA1cHg7IHotaW5kZXg6IDEwMDBcIj48aSBjbGFzcz1cIm1hdGVyaWFsLWljb25zIGNvbC13aGl0ZVwiIHN0eWxlPVwiZm9udC1zaXplOiAxNnB4XCI+dW5kbzwvaT48L2E+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnPGEgaHJlZj1cIiNcIiBjbGFzcz1cImZsb2F0LXJpZ2h0IGJnLXdoaXRlXCIgc3R5bGU9XCJmb250LXNpemU6IDEwcHg7IGNvbG9yOiBibGFjazsgcG9zaXRpb246IHJlbGF0aXZlOyBwYWRkaW5nOiAwIDNweCAwIDNweDsgYm9yZGVyLXJhZGl1czogMjBweDsgbWFyZ2luOiAwIDVweCAwIDVweDsgei1pbmRleDogMTAwMFwiPicgKyBqUXVlcnkudGltZWFnbyhjaGF0LmRhdGUpICsgJzwvYT4nICtcbiAgICAgICAgICAgICAgICAgICAgICAgICc8L2Rpdj4nO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICBpZiAodHlweSA9PT0gXCJleGNlbFwiKSB7XG4gICAgICAgICAgICAgICAgICAgIG1wID0gJzxkaXYgY2xhc3M9XCJtZXNzYWdlLWRhdGEgdGV4dC1yaWdodFwiPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgJzxkaXYgY2xhc3M9XCJtZXNzYWdlIG90aGVyLW1lc3NhZ2UgZmxvYXQtcmlnaHRcIj4nO1xuICAgICAgICAgICAgICAgICAgICBpZiAoY2hhdC5yZXBseWVDaGF0ICE9PSBudWxsKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBtcCA9IG1wICsgJzxzcGFuIGNsYXNzPVwiYmctd2hpdGUgY29sLWJsYWNrXCIgc3R5bGU9XCJib3JkZXI6IDFweCBzb2xpZCAjZmYwMDJkOyBwYWRkaW5nOiA1cHg7IGJvcmRlci1yYWRpdXM6IDEwcHhcIj4nICsgY2hhdC5yZXBseWVDaGF0WydtZXNzYWdlJ10gKyAnPC9zcGFuPjxicj4nO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIG1wID0gbXAgKyAnPGEgaHJlZj1cIi8nICsgY2hhdC5maWNoaWVyW1wiZm9sZGVcIl0gKyAnLycgKyBjaGF0LmZpY2hpZXJbXCJub21maWNoaWVyXCJdICsgJ1wiIHRhcmdldD1cIl9ibGFua1wiPjxpbWcgc3JjPVwiL2ltZy9leGNlbC5wbmdcIiBhbHQ9XCJmaWxlXCIvPicgKyBjaGF0LmZpY2hpZXJbXCJub21maWNoaWVyXCJdICsgJzwvYT48YnI+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnPGEgaHJlZj1cIiNcIiB0aXRsZT1cIlN1cHByaW1lclwiIGNsYXNzPVwiZmxvYXQtcmlnaHQgYmctcGluayBkZWxvdGUgaGFkbyBoaWRlXCIgaWQ9XCInICsgY2hhdC5pZCArICdcIiBzdHlsZT1cInBvc2l0aW9uOiByZWxhdGl2ZTsgcGFkZGluZzogMCAzcHggMCAzcHg7IGJvcmRlci1yYWRpdXM6IDIwcHg7bWFyZ2luOiAwIDVweCAwIDVweDsgei1pbmRleDogMTAwMFwiPjxpIGNsYXNzPVwibWF0ZXJpYWwtaWNvbnMgY29sLXdoaXRlXCIgc3R5bGU9XCJmb250LXNpemU6IDE2cHhcIj5jbGVhcjwvaT48L2E+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnPGEgaHJlZj1cIiNcIiB0aXRsZT1cIlRyYW5zZsOpcmVyXCIgY2xhc3M9XCJmbG9hdC1yaWdodCBiZy1vcmFuZ2UgdHJhbnNmZXIgaGFkbyBoaWRlXCIgaWQ9XCInICsgY2hhdC5pZCArICdcIiBzdHlsZT1cInBvc2l0aW9uOiByZWxhdGl2ZTsgcGFkZGluZzogMCAzcHggMCAzcHg7IGJvcmRlci1yYWRpdXM6IDIwcHg7IG1hcmdpbjogMCA1cHggMCA1cHg7IHotaW5kZXg6IDEwMDBcIj48aSBjbGFzcz1cIm1hdGVyaWFsLWljb25zIGNvbC13aGl0ZVwiIHN0eWxlPVwiZm9udC1zaXplOiAxNnB4XCI+cmVkbzwvaT48L2E+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnPGEgaHJlZj1cIiNcIiB0aXRsZT1cIlLDqXBvbmRyZVwiIGNsYXNzPVwiZmxvYXQtcmlnaHQgYmctYmx1ZSByZXBvbmRyZSBoYWRvIGhpZGVcIiBpZD1cIicgKyBjaGF0LmlkICsgJ1wiIHN0eWxlPVwicG9zaXRpb246IHJlbGF0aXZlOyBwYWRkaW5nOiAwIDNweCAwIDNweDsgYm9yZGVyLXJhZGl1czogMjBweDsgbWFyZ2luOiAwIDVweCAwIDVweDsgei1pbmRleDogMTAwMFwiPjxpIGNsYXNzPVwibWF0ZXJpYWwtaWNvbnMgY29sLXdoaXRlXCIgc3R5bGU9XCJmb250LXNpemU6IDE2cHhcIj51bmRvPC9pPjwvYT4nICtcbiAgICAgICAgICAgICAgICAgICAgICAgICc8YSBocmVmPVwiI1wiIGNsYXNzPVwiZmxvYXQtcmlnaHQgYmctd2hpdGVcIiBzdHlsZT1cImZvbnQtc2l6ZTogMTBweDsgY29sb3I6IGJsYWNrOyBwb3NpdGlvbjogcmVsYXRpdmU7IHBhZGRpbmc6IDAgM3B4IDAgM3B4OyBib3JkZXItcmFkaXVzOiAyMHB4OyBtYXJnaW46IDAgNXB4IDAgNXB4OyB6LWluZGV4OiAxMDAwXCI+JyArIGpRdWVyeS50aW1lYWdvKGNoYXQuZGF0ZSkgKyAnPC9hPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgJzwvZGl2Pic7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIGlmICh0eXB5ID09PSBcIndvcmRcIikge1xuICAgICAgICAgICAgICAgICAgICBtcCA9ICc8ZGl2IGNsYXNzPVwibWVzc2FnZS1kYXRhIHRleHQtcmlnaHRcIj4nICtcbiAgICAgICAgICAgICAgICAgICAgICAgICc8ZGl2IGNsYXNzPVwibWVzc2FnZSBvdGhlci1tZXNzYWdlIGZsb2F0LXJpZ2h0XCI+JztcbiAgICAgICAgICAgICAgICAgICAgaWYgKGNoYXQucmVwbHllQ2hhdCAhPT0gbnVsbCkge1xuICAgICAgICAgICAgICAgICAgICAgICAgbXAgPSBtcCArICc8c3BhbiBjbGFzcz1cImJnLXdoaXRlIGNvbC1ibGFja1wiIHN0eWxlPVwiYm9yZGVyOiAxcHggc29saWQgI2ZmMDAyZDsgcGFkZGluZzogNXB4OyBib3JkZXItcmFkaXVzOiAxMHB4XCI+JyArIGNoYXQucmVwbHllQ2hhdFsnbWVzc2FnZSddICsgJzwvc3Bhbj48YnI+JztcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICBtcCA9IG1wICsgJzxhIGhyZWY9XCIvJyArIGNoYXQuZmljaGllcltcImZvbGRlXCJdICsgJy8nICsgY2hhdC5maWNoaWVyW1wibm9tZmljaGllclwiXSArICdcIiB0YXJnZXQ9XCJfYmxhbmtcIj48aW1nIHNyYz1cIi9pbWcvd29yZC5wbmdcIiBhbHQ9XCJmaWxlXCIvPicgKyBjaGF0LmZpY2hpZXJbXCJub21maWNoaWVyXCJdICsgJzwvYT48YnI+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnPGEgaHJlZj1cIiNcIiB0aXRsZT1cIlN1cHByaW1lclwiIGNsYXNzPVwiZmxvYXQtcmlnaHQgYmctcGluayBkZWxvdGUgaGFkbyBoaWRlXCIgaWQ9XCInICsgY2hhdC5pZCArICdcIiBzdHlsZT1cInBvc2l0aW9uOiByZWxhdGl2ZTsgcGFkZGluZzogMCAzcHggMCAzcHg7IGJvcmRlci1yYWRpdXM6IDIwcHg7bWFyZ2luOiAwIDVweCAwIDVweDsgei1pbmRleDogMTAwMFwiPjxpIGNsYXNzPVwibWF0ZXJpYWwtaWNvbnMgY29sLXdoaXRlXCIgc3R5bGU9XCJmb250LXNpemU6IDE2cHhcIj5jbGVhcjwvaT48L2E+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnPGEgaHJlZj1cIiNcIiB0aXRsZT1cIlRyYW5zZsOpcmVyXCIgY2xhc3M9XCJmbG9hdC1yaWdodCBiZy1vcmFuZ2UgdHJhbnNmZXIgaGFkbyBoaWRlXCIgaWQ9XCInICsgY2hhdC5pZCArICdcIiBzdHlsZT1cInBvc2l0aW9uOiByZWxhdGl2ZTsgcGFkZGluZzogMCAzcHggMCAzcHg7IGJvcmRlci1yYWRpdXM6IDIwcHg7IG1hcmdpbjogMCA1cHggMCA1cHg7IHotaW5kZXg6IDEwMDBcIj48aSBjbGFzcz1cIm1hdGVyaWFsLWljb25zIGNvbC13aGl0ZVwiIHN0eWxlPVwiZm9udC1zaXplOiAxNnB4XCI+cmVkbzwvaT48L2E+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnPGEgaHJlZj1cIiNcIiB0aXRsZT1cIlLDqXBvbmRyZVwiIGNsYXNzPVwiZmxvYXQtcmlnaHQgYmctYmx1ZSByZXBvbmRyZSBoYWRvIGhpZGVcIiBpZD1cIicgKyBjaGF0LmlkICsgJ1wiIHN0eWxlPVwicG9zaXRpb246IHJlbGF0aXZlOyBwYWRkaW5nOiAwIDNweCAwIDNweDsgYm9yZGVyLXJhZGl1czogMjBweDsgbWFyZ2luOiAwIDVweCAwIDVweDsgei1pbmRleDogMTAwMFwiPjxpIGNsYXNzPVwibWF0ZXJpYWwtaWNvbnMgY29sLXdoaXRlXCIgc3R5bGU9XCJmb250LXNpemU6IDE2cHhcIj51bmRvPC9pPjwvYT4nICtcbiAgICAgICAgICAgICAgICAgICAgICAgICc8YSBocmVmPVwiI1wiIGNsYXNzPVwiZmxvYXQtcmlnaHQgYmctd2hpdGVcIiBzdHlsZT1cImZvbnQtc2l6ZTogMTBweDsgY29sb3I6IGJsYWNrOyBwb3NpdGlvbjogcmVsYXRpdmU7IHBhZGRpbmc6IDAgM3B4IDAgM3B4OyBib3JkZXItcmFkaXVzOiAyMHB4OyBtYXJnaW46IDAgNXB4IDAgNXB4OyB6LWluZGV4OiAxMDAwXCI+JyArIGpRdWVyeS50aW1lYWdvKGNoYXQuZGF0ZSkgKyAnPC9hPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgJzwvZGl2Pic7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIGlmICh0eXB5ID09PSBcImltYWdlXCIpIHtcbiAgICAgICAgICAgICAgICAgICAgbXAgPSAnPGRpdiBjbGFzcz1cIm1lc3NhZ2UtZGF0YSB0ZXh0LXJpZ2h0XCI+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnPGRpdiBjbGFzcz1cIm1lc3NhZ2Ugb3RoZXItbWVzc2FnZSBmbG9hdC1yaWdodFwiPic7XG4gICAgICAgICAgICAgICAgICAgIGlmIChjaGF0LnJlcGx5ZUNoYXQgIT09IG51bGwpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIG1wID0gbXAgKyAnPHNwYW4gY2xhc3M9XCJiZy13aGl0ZSBjb2wtYmxhY2tcIiBzdHlsZT1cImJvcmRlcjogMXB4IHNvbGlkICNmZjAwMmQ7IHBhZGRpbmc6IDVweDsgYm9yZGVyLXJhZGl1czogMTBweFwiPicgKyBjaGF0LnJlcGx5ZUNoYXRbJ21lc3NhZ2UnXSArICc8L3NwYW4+PGJyPic7XG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgbXAgPSBtcCArICc8YSBocmVmPVwiLycgKyBjaGF0LmZpY2hpZXJbXCJmb2xkZVwiXSArICcvJyArIGNoYXQuZmljaGllcltcIm5vbWZpY2hpZXJcIl0gKyAnXCIgdGFyZ2V0PVwiX2JsYW5rXCI+PGltZyBzcmM9XCIvaW1nL3BpY3R1LnBuZ1wiIGFsdD1cImZpbGVcIi8+JyArIGNoYXQuZmljaGllcltcIm5vbWZpY2hpZXJcIl0gKyAnPC9hPjxicj4nICtcbiAgICAgICAgICAgICAgICAgICAgICAgICc8YSBocmVmPVwiI1wiIHRpdGxlPVwiU3VwcHJpbWVyXCIgY2xhc3M9XCJmbG9hdC1yaWdodCBiZy1waW5rIGRlbG90ZSBoYWRvIGhpZGVcIiBpZD1cIicgKyBjaGF0LmlkICsgJ1wiIHN0eWxlPVwicG9zaXRpb246IHJlbGF0aXZlOyBwYWRkaW5nOiAwIDNweCAwIDNweDsgYm9yZGVyLXJhZGl1czogMjBweDttYXJnaW46IDAgNXB4IDAgNXB4OyB6LWluZGV4OiAxMDAwXCI+PGkgY2xhc3M9XCJtYXRlcmlhbC1pY29ucyBjb2wtd2hpdGVcIiBzdHlsZT1cImZvbnQtc2l6ZTogMTZweFwiPmNsZWFyPC9pPjwvYT4nICtcbiAgICAgICAgICAgICAgICAgICAgICAgICc8YSBocmVmPVwiI1wiIHRpdGxlPVwiVHJhbnNmw6lyZXJcIiBjbGFzcz1cImZsb2F0LXJpZ2h0IGJnLW9yYW5nZSB0cmFuc2ZlciBoYWRvIGhpZGVcIiBpZD1cIicgKyBjaGF0LmlkICsgJ1wiIHN0eWxlPVwicG9zaXRpb246IHJlbGF0aXZlOyBwYWRkaW5nOiAwIDNweCAwIDNweDsgYm9yZGVyLXJhZGl1czogMjBweDsgbWFyZ2luOiAwIDVweCAwIDVweDsgei1pbmRleDogMTAwMFwiPjxpIGNsYXNzPVwibWF0ZXJpYWwtaWNvbnMgY29sLXdoaXRlXCIgc3R5bGU9XCJmb250LXNpemU6IDE2cHhcIj5yZWRvPC9pPjwvYT4nICtcbiAgICAgICAgICAgICAgICAgICAgICAgICc8YSBocmVmPVwiI1wiIHRpdGxlPVwiUsOpcG9uZHJlXCIgY2xhc3M9XCJmbG9hdC1yaWdodCBiZy1ibHVlIHJlcG9uZHJlIGhhZG8gaGlkZVwiIGlkPVwiJyArIGNoYXQuaWQgKyAnXCIgc3R5bGU9XCJwb3NpdGlvbjogcmVsYXRpdmU7IHBhZGRpbmc6IDAgM3B4IDAgM3B4OyBib3JkZXItcmFkaXVzOiAyMHB4OyBtYXJnaW46IDAgNXB4IDAgNXB4OyB6LWluZGV4OiAxMDAwXCI+PGkgY2xhc3M9XCJtYXRlcmlhbC1pY29ucyBjb2wtd2hpdGVcIiBzdHlsZT1cImZvbnQtc2l6ZTogMTZweFwiPnVuZG88L2k+PC9hPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgJzxhIGhyZWY9XCIjXCIgY2xhc3M9XCJmbG9hdC1yaWdodCBiZy13aGl0ZVwiIHN0eWxlPVwiZm9udC1zaXplOiAxMHB4OyBjb2xvcjogYmxhY2s7IHBvc2l0aW9uOiByZWxhdGl2ZTsgcGFkZGluZzogMCAzcHggMCAzcHg7IGJvcmRlci1yYWRpdXM6IDIwcHg7IG1hcmdpbjogMCA1cHggMCA1cHg7IHotaW5kZXg6IDEwMDBcIj4nICsgalF1ZXJ5LnRpbWVhZ28oY2hhdC5kYXRlKSArICc8L2E+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnPC9kaXY+JztcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgaWYgKHR5cHkgPT09IFwidW5rbm93XCIpIHtcbiAgICAgICAgICAgICAgICAgICAgbXAgPSAnPGRpdiBjbGFzcz1cIm1lc3NhZ2UtZGF0YSB0ZXh0LXJpZ2h0XCI+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnPGRpdiBjbGFzcz1cIm1lc3NhZ2Ugb3RoZXItbWVzc2FnZSBmbG9hdC1yaWdodFwiPic7XG4gICAgICAgICAgICAgICAgICAgIGlmIChjaGF0LnJlcGx5ZUNoYXQgIT09IG51bGwpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIG1wID0gbXAgKyAnPHNwYW4gY2xhc3M9XCJiZy13aGl0ZSBjb2wtYmxhY2tcIiBzdHlsZT1cImJvcmRlcjogMXB4IHNvbGlkICNmZjAwMmQ7IHBhZGRpbmc6IDVweDsgYm9yZGVyLXJhZGl1czogMTBweFwiPicgKyBjaGF0LnJlcGx5ZUNoYXRbJ21lc3NhZ2UnXSArICc8L3NwYW4+PGJyPic7XG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgbXAgPSBtcCArICc8YSBocmVmPVwiLycgKyBjaGF0LmZpY2hpZXJbXCJmb2xkZVwiXSArICcvJyArIGNoYXQuZmljaGllcltcIm5vbWZpY2hpZXJcIl0gKyAnXCIgdGFyZ2V0PVwiX2JsYW5rXCI+PGltZyBzcmM9XCIvaW1nL2RvYy5wbmdcIiBhbHQ9XCJmaWxlXCIvPicgKyBjaGF0LmZpY2hpZXJbXCJub21maWNoaWVyXCJdICsgJzwvYT48YnI+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnPGEgaHJlZj1cIiNcIiB0aXRsZT1cIlN1cHByaW1lclwiIGNsYXNzPVwiZmxvYXQtcmlnaHQgYmctcGluayBkZWxvdGUgaGFkbyBoaWRlXCIgaWQ9XCInICsgY2hhdC5pZCArICdcIiBzdHlsZT1cInBvc2l0aW9uOiByZWxhdGl2ZTsgcGFkZGluZzogMCAzcHggMCAzcHg7IGJvcmRlci1yYWRpdXM6IDIwcHg7bWFyZ2luOiAwIDVweCAwIDVweDsgei1pbmRleDogMTAwMFwiPjxpIGNsYXNzPVwibWF0ZXJpYWwtaWNvbnMgY29sLXdoaXRlXCIgc3R5bGU9XCJmb250LXNpemU6IDE2cHhcIj5jbGVhcjwvaT48L2E+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnPGEgaHJlZj1cIiNcIiB0aXRsZT1cIlRyYW5zZsOpcmVyXCIgY2xhc3M9XCJmbG9hdC1yaWdodCBiZy1vcmFuZ2UgdHJhbnNmZXIgaGFkbyBoaWRlXCIgaWQ9XCInICsgY2hhdC5pZCArICdcIiBzdHlsZT1cInBvc2l0aW9uOiByZWxhdGl2ZTsgcGFkZGluZzogMCAzcHggMCAzcHg7IGJvcmRlci1yYWRpdXM6IDIwcHg7IG1hcmdpbjogMCA1cHggMCA1cHg7IHotaW5kZXg6IDEwMDBcIj48aSBjbGFzcz1cIm1hdGVyaWFsLWljb25zIGNvbC13aGl0ZVwiIHN0eWxlPVwiZm9udC1zaXplOiAxNnB4XCI+cmVkbzwvaT48L2E+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnPGEgaHJlZj1cIiNcIiB0aXRsZT1cIlLDqXBvbmRyZVwiIGNsYXNzPVwiZmxvYXQtcmlnaHQgYmctYmx1ZSB0cmFuc2ZlciBoYWRvIGhpZGVcIiBpZD1cIicgKyBjaGF0LmlkICsgJ1wiIHN0eWxlPVwicG9zaXRpb246IHJlbGF0aXZlOyBwYWRkaW5nOiAwIDNweCAwIDNweDsgYm9yZGVyLXJhZGl1czogMjBweDsgbWFyZ2luOiAwIDVweCAwIDVweDsgei1pbmRleDogMTAwMFwiPjxpIGNsYXNzPVwibWF0ZXJpYWwtaWNvbnMgY29sLXdoaXRlXCIgc3R5bGU9XCJmb250LXNpemU6IDE2cHhcIj51bmRvPC9pPjwvYT4nICtcbiAgICAgICAgICAgICAgICAgICAgICAgICc8YSBocmVmPVwiI1wiICBjbGFzcz1cImZsb2F0LXJpZ2h0IGJnLXdoaXRlXCIgc3R5bGU9XCJmb250LXNpemU6IDEwcHg7IGNvbG9yOiBibGFjazsgcG9zaXRpb246IHJlbGF0aXZlOyBwYWRkaW5nOiAwIDNweCAwIDNweDsgYm9yZGVyLXJhZGl1czogMjBweDsgbWFyZ2luOiAwIDVweCAwIDVweDsgei1pbmRleDogMTAwMFwiPicgKyBqUXVlcnkudGltZWFnbyhjaGF0LmRhdGUpICsgJzwvYT4nICtcbiAgICAgICAgICAgICAgICAgICAgICAgICc8L2Rpdj4nO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgbXAgPSAnPGRpdiBjbGFzcz1cIm1lc3NhZ2UtZGF0YSB0ZXh0LXJpZ2h0IFwiPicgK1xuICAgICAgICAgICAgICAgICAgICAnPGRpdiBjbGFzcz1cIm1lc3NhZ2Ugb3RoZXItbWVzc2FnZSBmbG9hdC1yaWdodFwiPic7XG4gICAgICAgICAgICAgICAgaWYgKGNoYXQucmVwbHllQ2hhdCAhPT0gbnVsbCkge1xuICAgICAgICAgICAgICAgICAgICBtcCA9IG1wICsgJzxzcGFuIGNsYXNzPVwiYmctd2hpdGUgY29sLWJsYWNrXCIgc3R5bGU9XCJib3JkZXI6IDFweCBzb2xpZCAjZmYwMDJkOyBwYWRkaW5nOiA1cHg7IGJvcmRlci1yYWRpdXM6IDEwcHhcIj4nICsgY2hhdC5yZXBseWVDaGF0WydtZXNzYWdlJ10gKyAnPC9zcGFuPjxicj4nO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICBtcCA9IG1wICsgJycgKyBjaGF0Lm1lc3NhZ2UgKyAnPGJyPicgK1xuICAgICAgICAgICAgICAgICAgICAnPHNwYW4gc3R5bGU9XCJmb250LXNpemU6IDEwcHg7IGJvcmRlci1yYWRpdXM6IDIwcHg7ICBiYWNrZ3JvdW5kLWNvbG9yOiB3aGl0ZTsgcGFkZGluZzowIDJweCAwIDJweDsgZmxvYXQ6IGxlZnRcIj4nICsgalF1ZXJ5LnRpbWVhZ28oY2hhdC5kYXRlKSArICc8L3NwYW4+JyArXG4gICAgICAgICAgICAgICAgICAgICc8YSBocmVmPVwiI1wiIGNsYXNzPVwiZmxvYXQtcmlnaHQgYmctcGluayBkZWxvdGUgaGFkbyBoaWRlXCIgaWQ9XCInICsgY2hhdC5pZCArICdcIiBzdHlsZT1cImJvcmRlci1yYWRpdXM6IDIwcHg7IHBhZGRpbmc6ICAwIDNweCAwIDNweFwiPjxpIGNsYXNzPVwibWF0ZXJpYWwtaWNvbnMgY29sLXdoaXRlIFwiIHN0eWxlPVwiZm9udC1zaXplOiAxNnB4XCI+Y2xlYXI8L2k+PC9hPicgK1xuICAgICAgICAgICAgICAgICAgICAnPGEgaHJlZj1cIiNcIiBjbGFzcz1cImZsb2F0LXJpZ2h0ICBiZy1vcmFuZ2UgdHJhbnNmZXIgaGFkbyBoaWRlIFwiIGlkPVwiJyArIGNoYXQuaWQgKyAnXCIgc3R5bGU9XCJib3JkZXItcmFkaXVzOiAyMHB4OyBwYWRkaW5nOiAwIDNweCAwIDNweDsgbWFyZ2luOiAwIDVweCAwIDVweFwiPjxpIGNsYXNzPVwibWF0ZXJpYWwtaWNvbnMgY29sLXdoaXRlXCIgc3R5bGU9XCJmb250LXNpemU6IDE2cHhcIj5yZWRvPC9pPjwvYT4nICtcbiAgICAgICAgICAgICAgICAgICAgJzxhIGhyZWY9XCIjXCIgdGl0bGU9XCJSw6lwb25kcmVcIiBjbGFzcz1cImZsb2F0LXJpZ2h0IGJnLWJsdWUgcmVwb25kcmUgaGFkbyBoaWRlXCIgaWQ9XCInICsgY2hhdC5pZCArICdcIiBzdHlsZT1cInBvc2l0aW9uOiByZWxhdGl2ZTsgcGFkZGluZzogMCAzcHggMCAzcHg7IGJvcmRlci1yYWRpdXM6IDIwcHg7IG1hcmdpbjogMCA1cHggMCA1cHg7IHotaW5kZXg6IDEwMDBcIj48aSBjbGFzcz1cIm1hdGVyaWFsLWljb25zIGNvbC13aGl0ZVwiIHN0eWxlPVwiZm9udC1zaXplOiAxNnB4XCI+dW5kbzwvaT48L2E+JyArXG4gICAgICAgICAgICAgICAgICAgICc8L2Rpdj4nO1xuICAgICAgICAgICAgfVxuICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgaWYgKGNoYXQuZmljaGllciAhPT0gbnVsbCkge1xuICAgICAgICAgICAgICAgIGxldCB0eXB5ID0gb3BlbkZpbGUoY2hhdC5maWNoaWVyW1wibm9tZmljaGllclwiXSk7XG4gICAgICAgICAgICAgICAgaWYgKHR5cHkgPT09IFwicGRmXCIpIHtcbiAgICAgICAgICAgICAgICAgICAgbXAgPSAnPGRpdiBjbGFzcz1cIm1lc3NhZ2UtZGF0YVwiPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgJzxkaXYgY2xhc3M9XCJtZXNzYWdlIG15LW1lc3NhZ2VcIj4nO1xuICAgICAgICAgICAgICAgICAgICBpZiAoY2hhdC5yZXBseWVDaGF0ICE9PSBudWxsKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBtcCA9IG1wICsgJzxzcGFuIGNsYXNzPVwiYmctd2hpdGUgY29sLWJsYWNrXCIgc3R5bGU9XCJib3JkZXI6IDFweCBzb2xpZCAjZmYwMDJkOyBwYWRkaW5nOiA1cHg7IGJvcmRlci1yYWRpdXM6IDEwcHhcIj4nICsgY2hhdC5yZXBseWVDaGF0WydtZXNzYWdlJ10gKyAnPC9zcGFuPjxicj4nO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIG1wID0gbXAgKyAnPGEgaHJlZj1cIi8nICsgY2hhdC5maWNoaWVyW1wiZm9sZGVcIl0gKyAnLycgKyBjaGF0LmZpY2hpZXJbXCJub21maWNoaWVyXCJdICsgJ1wiIHRhcmdldD1cIl9ibGFua1wiPjxpbWcgc3JjPVwiL2ltZy9wZGYucG5nXCIgYWx0PVwiZmlsZVwiLz4nICsgY2hhdC5maWNoaWVyW1wibm9tZmljaGllclwiXSArICc8L2E+PGJyPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgJzxhIGhyZWY9XCIjXCIgdGl0bGU9XCJUcmFuc2bDqXJlclwiIGNsYXNzPVwiZmxvYXQtcmlnaHQgYmctb3JhbmdlIHRyYW5zZmVyIGhhZG8gaGlkZVwiIGlkPVwiJyArIGNoYXQuaWQgKyAnXCIgc3R5bGU9XCJwb3NpdGlvbjogcmVsYXRpdmU7IHBhZGRpbmc6IDAgM3B4IDAgM3B4OyBib3JkZXItcmFkaXVzOiAyMHB4OyBtYXJnaW46IDAgNXB4IDAgNXB4OyB6LWluZGV4OiAxMDAwXCI+PGkgY2xhc3M9XCJtYXRlcmlhbC1pY29ucyBjb2wtd2hpdGVcIiBzdHlsZT1cImZvbnQtc2l6ZTogMTZweFwiPnJlZG88L2k+PC9hPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgJzxhIGhyZWY9XCIjXCIgdGl0bGU9XCJSw6lwb25kcmVcIiBjbGFzcz1cImZsb2F0LXJpZ2h0IGJnLWJsdWUgcmVwb25kcmUgaGFkbyBoaWRlXCIgaWQ9XCInICsgY2hhdC5pZCArICdcIiBzdHlsZT1cInBvc2l0aW9uOiByZWxhdGl2ZTsgcGFkZGluZzogMCAzcHggMCAzcHg7IGJvcmRlci1yYWRpdXM6IDIwcHg7IG1hcmdpbjogMCA1cHggMCA1cHg7IHotaW5kZXg6IDEwMDBcIj48aSBjbGFzcz1cIm1hdGVyaWFsLWljb25zIGNvbC13aGl0ZVwiIHN0eWxlPVwiZm9udC1zaXplOiAxNnB4XCI+dW5kbzwvaT48L2E+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnPGEgaHJlZj1cIiNcIiBjbGFzcz1cImZsb2F0LXJpZ2h0IGJnLXdoaXRlXCIgc3R5bGU9XCJmb250LXNpemU6IDEwcHg7IGNvbG9yOiBibGFjazsgcG9zaXRpb246IHJlbGF0aXZlOyBwYWRkaW5nOiAwIDNweCAwIDNweDsgYm9yZGVyLXJhZGl1czogMjBweDsgbWFyZ2luOiAwIDVweCAwIDVweDsgei1pbmRleDogMTAwMFwiPicgKyBqUXVlcnkudGltZWFnbyhjaGF0LmRhdGUpICsgJzwvYT4nICtcbiAgICAgICAgICAgICAgICAgICAgICAgICc8L2Rpdj4nO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICBpZiAodHlweSA9PT0gXCJleGNlbFwiKSB7XG4gICAgICAgICAgICAgICAgICAgIG1wID0gJzxkaXYgY2xhc3M9XCJtZXNzYWdlLWRhdGFcIj4nICtcbiAgICAgICAgICAgICAgICAgICAgICAgICc8ZGl2IGNsYXNzPVwibWVzc2FnZSBteS1tZXNzYWdlXCI+JztcbiAgICAgICAgICAgICAgICAgICAgaWYgKGNoYXQucmVwbHllQ2hhdCAhPT0gbnVsbCkge1xuICAgICAgICAgICAgICAgICAgICAgICAgbXAgPSBtcCArICc8c3BhbiBjbGFzcz1cImJnLXdoaXRlIGNvbC1ibGFja1wiIHN0eWxlPVwiYm9yZGVyOiAxcHggc29saWQgI2ZmMDAyZDsgcGFkZGluZzogNXB4OyBib3JkZXItcmFkaXVzOiAxMHB4XCI+JyArIGNoYXQucmVwbHllQ2hhdFsnbWVzc2FnZSddICsgJzwvc3Bhbj48YnI+JztcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICBtcCA9IG1wICsgJzxhIGhyZWY9XCIvJyArIGNoYXQuZmljaGllcltcImZvbGRlXCJdICsgJy8nICsgY2hhdC5maWNoaWVyW1wibm9tZmljaGllclwiXSArICdcIiB0YXJnZXQ9XCJfYmxhbmtcIj48aW1nIHNyYz1cIi9pbWcvZXhjZWwucG5nXCIgYWx0PVwiZmlsZVwiLz4nICsgY2hhdC5maWNoaWVyW1wibm9tZmljaGllclwiXSArICc8L2E+PGJyPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgJzxhIGhyZWY9XCIjXCIgdGl0bGU9XCJUcmFuc2bDqXJlclwiIGNsYXNzPVwiZmxvYXQtcmlnaHQgYmctb3JhbmdlIHRyYW5zZmVyIGhhZG8gaGlkZVwiIGlkPVwiJyArIGNoYXQuaWQgKyAnXCIgc3R5bGU9XCJwb3NpdGlvbjogcmVsYXRpdmU7IHBhZGRpbmc6IDAgM3B4IDAgM3B4OyBib3JkZXItcmFkaXVzOiAyMHB4OyBtYXJnaW46IDAgNXB4IDAgNXB4OyB6LWluZGV4OiAxMDAwXCI+PGkgY2xhc3M9XCJtYXRlcmlhbC1pY29ucyBjb2wtd2hpdGVcIiBzdHlsZT1cImZvbnQtc2l6ZTogMTZweFwiPnJlZG88L2k+PC9hPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgJzxhIGhyZWY9XCIjXCIgdGl0bGU9XCJSw6lwb25kcmVcIiBjbGFzcz1cImZsb2F0LXJpZ2h0IGJnLWJsdWUgcmVwb25kcmUgaGFkbyBoaWRlXCIgaWQ9XCInICsgY2hhdC5pZCArICdcIiBzdHlsZT1cInBvc2l0aW9uOiByZWxhdGl2ZTsgcGFkZGluZzogMCAzcHggMCAzcHg7IGJvcmRlci1yYWRpdXM6IDIwcHg7IG1hcmdpbjogMCA1cHggMCA1cHg7IHotaW5kZXg6IDEwMDBcIj48aSBjbGFzcz1cIm1hdGVyaWFsLWljb25zIGNvbC13aGl0ZVwiIHN0eWxlPVwiZm9udC1zaXplOiAxNnB4XCI+dW5kbzwvaT48L2E+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnPGEgaHJlZj1cIiNcIiBjbGFzcz1cImZsb2F0LXJpZ2h0IGJnLXdoaXRlXCIgc3R5bGU9XCJmb250LXNpemU6IDEwcHg7IGNvbG9yOiBibGFjazsgcG9zaXRpb246IHJlbGF0aXZlOyBwYWRkaW5nOiAwIDNweCAwIDNweDsgYm9yZGVyLXJhZGl1czogMjBweDsgbWFyZ2luOiAwIDVweCAwIDVweDsgei1pbmRleDogMTAwMFwiPicgKyBqUXVlcnkudGltZWFnbyhjaGF0LmRhdGUpICsgJzwvYT4nICtcbiAgICAgICAgICAgICAgICAgICAgICAgICc8L2Rpdj4nO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICBpZiAodHlweSA9PT0gXCJ3b3JkXCIpIHtcbiAgICAgICAgICAgICAgICAgICAgbXAgPSAnPGRpdiBjbGFzcz1cIm1lc3NhZ2UtZGF0YVwiPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgJzxkaXYgY2xhc3M9XCJtZXNzYWdlIG15LW1lc3NhZ2VcIj4nO1xuICAgICAgICAgICAgICAgICAgICBpZiAoY2hhdC5yZXBseWVDaGF0ICE9PSBudWxsKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBtcCA9IG1wICsgJzxzcGFuIGNsYXNzPVwiYmctd2hpdGUgY29sLWJsYWNrXCIgc3R5bGU9XCJib3JkZXI6IDFweCBzb2xpZCAjZmYwMDJkOyBwYWRkaW5nOiA1cHg7IGJvcmRlci1yYWRpdXM6IDEwcHhcIj4nICsgY2hhdC5yZXBseWVDaGF0WydtZXNzYWdlJ10gKyAnPC9zcGFuPjxicj4nO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIG1wID0gbXAgKyAnPGEgaHJlZj1cIi8nICsgY2hhdC5maWNoaWVyW1wiZm9sZGVcIl0gKyAnLycgKyBjaGF0LmZpY2hpZXJbXCJub21maWNoaWVyXCJdICsgJ1wiIHRhcmdldD1cIl9ibGFua1wiPjxpbWcgc3JjPVwiL2ltZy93b3JkLnBuZ1wiIGFsdD1cImZpbGVcIi8+JyArIGNoYXQuZmljaGllcltcIm5vbWZpY2hpZXJcIl0gKyAnPC9hPjxicj4nICtcbiAgICAgICAgICAgICAgICAgICAgICAgICc8YSBocmVmPVwiI1wiIHRpdGxlPVwiVHJhbnNmw6lyZXJcIiBjbGFzcz1cImZsb2F0LXJpZ2h0IGJnLW9yYW5nZSB0cmFuc2ZlciBoYWRvIGhpZGVcIiBpZD1cIicgKyBjaGF0LmlkICsgJ1wiIHN0eWxlPVwicG9zaXRpb246IHJlbGF0aXZlOyBwYWRkaW5nOiAwIDNweCAwIDNweDsgYm9yZGVyLXJhZGl1czogMjBweDsgbWFyZ2luOiAwIDVweCAwIDVweDsgei1pbmRleDogMTAwMFwiPjxpIGNsYXNzPVwibWF0ZXJpYWwtaWNvbnMgY29sLXdoaXRlXCIgc3R5bGU9XCJmb250LXNpemU6IDE2cHhcIj5yZWRvPC9pPjwvYT4nICtcbiAgICAgICAgICAgICAgICAgICAgICAgICc8YSBocmVmPVwiI1wiIHRpdGxlPVwiUsOpcG9uZHJlXCIgY2xhc3M9XCJmbG9hdC1yaWdodCBiZy1ibHVlIHJlcG9uZHJlIGhhZG8gaGlkZVwiIGlkPVwiJyArIGNoYXQuaWQgKyAnXCIgc3R5bGU9XCJwb3NpdGlvbjogcmVsYXRpdmU7IHBhZGRpbmc6IDAgM3B4IDAgM3B4OyBib3JkZXItcmFkaXVzOiAyMHB4OyBtYXJnaW46IDAgNXB4IDAgNXB4OyB6LWluZGV4OiAxMDAwXCI+PGkgY2xhc3M9XCJtYXRlcmlhbC1pY29ucyBjb2wtd2hpdGVcIiBzdHlsZT1cImZvbnQtc2l6ZTogMTZweFwiPnVuZG88L2k+PC9hPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgJzxhIGhyZWY9XCIjXCIgY2xhc3M9XCJmbG9hdC1yaWdodCBiZy13aGl0ZVwiIHN0eWxlPVwiZm9udC1zaXplOiAxMHB4OyBjb2xvcjogYmxhY2s7IHBvc2l0aW9uOiByZWxhdGl2ZTsgcGFkZGluZzogMCAzcHggMCAzcHg7IGJvcmRlci1yYWRpdXM6IDIwcHg7IG1hcmdpbjogMCA1cHggMCA1cHg7IHotaW5kZXg6IDEwMDBcIj4nICsgalF1ZXJ5LnRpbWVhZ28oY2hhdC5kYXRlKSArICc8L2E+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnPC9kaXY+JztcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgaWYgKHR5cHkgPT09IFwiaW1hZ2VcIikge1xuICAgICAgICAgICAgICAgICAgICBtcCA9ICc8ZGl2IGNsYXNzPVwibWVzc2FnZS1kYXRhXCI+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnPGRpdiBjbGFzcz1cIm1lc3NhZ2UgbXktbWVzc2FnZVwiPic7XG4gICAgICAgICAgICAgICAgICAgIGlmIChjaGF0LnJlcGx5ZUNoYXQgIT09IG51bGwpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIG1wID0gbXAgKyAnPHNwYW4gY2xhc3M9XCJiZy13aGl0ZSBjb2wtYmxhY2tcIiBzdHlsZT1cImJvcmRlcjogMXB4IHNvbGlkICNmZjAwMmQ7IHBhZGRpbmc6IDVweDsgYm9yZGVyLXJhZGl1czogMTBweFwiPicgKyBjaGF0LnJlcGx5ZUNoYXRbJ21lc3NhZ2UnXSArICc8L3NwYW4+PGJyPic7XG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgbXAgPSBtcCArICc8YSBocmVmPVwiLycgKyBjaGF0LmZpY2hpZXJbXCJmb2xkZVwiXSArICcvJyArIGNoYXQuZmljaGllcltcIm5vbWZpY2hpZXJcIl0gKyAnXCIgdGFyZ2V0PVwiX2JsYW5rXCI+PGltZyBzcmM9XCIvaW1nL3BpY3R1LnBuZ1wiIGFsdD1cImZpbGVcIi8+JyArIGNoYXQuZmljaGllcltcIm5vbWZpY2hpZXJcIl0gKyAnPC9hPjxicj4nICtcbiAgICAgICAgICAgICAgICAgICAgICAgICc8YSBocmVmPVwiI1wiIHRpdGxlPVwiVHJhbnNmw6lyZXJcIiBjbGFzcz1cImZsb2F0LXJpZ2h0IGJnLW9yYW5nZSB0cmFuc2ZlciBoYWRvIGhpZGVcIiBpZD1cIicgKyBjaGF0LmlkICsgJ1wiIHN0eWxlPVwicG9zaXRpb246IHJlbGF0aXZlOyBwYWRkaW5nOiAwIDNweCAwIDNweDsgYm9yZGVyLXJhZGl1czogMjBweDsgbWFyZ2luOiAwIDVweCAwIDVweDsgei1pbmRleDogMTAwMFwiPjxpIGNsYXNzPVwibWF0ZXJpYWwtaWNvbnMgY29sLXdoaXRlXCIgc3R5bGU9XCJmb250LXNpemU6IDE2cHhcIj5yZWRvPC9pPjwvYT4nICtcbiAgICAgICAgICAgICAgICAgICAgICAgICc8YSBocmVmPVwiI1wiIHRpdGxlPVwiUsOpcG9uZHJlXCIgY2xhc3M9XCJmbG9hdC1yaWdodCBiZy1ibHVlIHJlcG9uZHJlIGhhZG8gaGlkZVwiIGlkPVwiJyArIGNoYXQuaWQgKyAnXCIgc3R5bGU9XCJwb3NpdGlvbjogcmVsYXRpdmU7IHBhZGRpbmc6IDAgM3B4IDAgM3B4OyBib3JkZXItcmFkaXVzOiAyMHB4OyBtYXJnaW46IDAgNXB4IDAgNXB4OyB6LWluZGV4OiAxMDAwXCI+PGkgY2xhc3M9XCJtYXRlcmlhbC1pY29ucyBjb2wtd2hpdGVcIiBzdHlsZT1cImZvbnQtc2l6ZTogMTZweFwiPnVuZG88L2k+PC9hPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgJzxhIGhyZWY9XCIjXCIgY2xhc3M9XCJmbG9hdC1yaWdodCBiZy13aGl0ZVwiIHN0eWxlPVwiZm9udC1zaXplOiAxMHB4OyBjb2xvcjogYmxhY2s7IHBvc2l0aW9uOiByZWxhdGl2ZTsgcGFkZGluZzogMCAzcHggMCAzcHg7IGJvcmRlci1yYWRpdXM6IDIwcHg7IG1hcmdpbjogMCA1cHggMCA1cHg7IHotaW5kZXg6IDEwMDBcIj4nICsgalF1ZXJ5LnRpbWVhZ28oY2hhdC5kYXRlKSArICc8L2E+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnPC9kaXY+JztcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgaWYgKHR5cHkgPT09IFwidW5rbm93XCIpIHtcbiAgICAgICAgICAgICAgICAgICAgbXAgPSAnPGRpdiBjbGFzcz1cIm1lc3NhZ2UtZGF0YVwiPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgJzxkaXYgY2xhc3M9XCJtZXNzYWdlIG15LW1lc3NhZ2VcIj4nO1xuICAgICAgICAgICAgICAgICAgICBpZiAoY2hhdC5yZXBseWVDaGF0ICE9PSBudWxsKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBtcCA9IG1wICsgJzxzcGFuIGNsYXNzPVwiYmctd2hpdGUgY29sLWJsYWNrXCIgc3R5bGU9XCJib3JkZXI6IDFweCBzb2xpZCAjZmYwMDJkOyBwYWRkaW5nOiA1cHg7IGJvcmRlci1yYWRpdXM6IDEwcHhcIj4nICsgY2hhdC5yZXBseWVDaGF0WydtZXNzYWdlJ10gKyAnPC9zcGFuPjxicj4nO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIG1wID0gbXAgKyAnPGEgaHJlZj1cIi8nICsgY2hhdC5maWNoaWVyW1wiZm9sZGVcIl0gKyAnLycgKyBjaGF0LmZpY2hpZXJbXCJub21maWNoaWVyXCJdICsgJ1wiIHRhcmdldD1cIl9ibGFua1wiPjxpbWcgc3JjPVwiL2ltZy9kb2MucG5nXCIgYWx0PVwiZmlsZVwiLz4nICsgY2hhdC5maWNoaWVyW1wibm9tZmljaGllclwiXSArICc8L2E+PGJyPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgJzxhIGhyZWY9XCIjXCIgdGl0bGU9XCJUcmFuc2bDqXJlclwiIGNsYXNzPVwiZmxvYXQtcmlnaHQgYmctb3JhbmdlIHRyYW5zZmVyIGhhZG8gaGlkZVwiIGlkPVwiJyArIGNoYXQuaWQgKyAnXCIgc3R5bGU9XCJwb3NpdGlvbjogcmVsYXRpdmU7IHBhZGRpbmc6IDAgM3B4IDAgM3B4OyBib3JkZXItcmFkaXVzOiAyMHB4OyBtYXJnaW46IDAgNXB4IDAgNXB4OyB6LWluZGV4OiAxMDAwXCI+PGkgY2xhc3M9XCJtYXRlcmlhbC1pY29ucyBjb2wtd2hpdGVcIiBzdHlsZT1cImZvbnQtc2l6ZTogMTZweFwiPnJlZG88L2k+PC9hPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgJzxhIGhyZWY9XCIjXCIgdGl0bGU9XCJSw6lwb25kcmVcIiBjbGFzcz1cImZsb2F0LXJpZ2h0IGJnLWJsdWUgcmVwb25kcmUgaGFkbyBoaWRlXCIgaWQ9XCInICsgY2hhdC5pZCArICdcIiBzdHlsZT1cInBvc2l0aW9uOiByZWxhdGl2ZTsgcGFkZGluZzogMCAzcHggMCAzcHg7IGJvcmRlci1yYWRpdXM6IDIwcHg7IG1hcmdpbjogMCA1cHggMCA1cHg7IHotaW5kZXg6IDEwMDBcIj48aSBjbGFzcz1cIm1hdGVyaWFsLWljb25zIGNvbC13aGl0ZVwiIHN0eWxlPVwiZm9udC1zaXplOiAxNnB4XCI+dW5kbzwvaT48L2E+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnPGEgaHJlZj1cIiNcIiAgY2xhc3M9XCJmbG9hdC1yaWdodCBiZy13aGl0ZVwiIHN0eWxlPVwiZm9udC1zaXplOiAxMHB4OyBjb2xvcjogYmxhY2s7IHBvc2l0aW9uOiByZWxhdGl2ZTsgcGFkZGluZzogMCAzcHggMCAzcHg7IGJvcmRlci1yYWRpdXM6IDIwcHg7IG1hcmdpbjogMCA1cHggMCA1cHg7IHotaW5kZXg6IDEwMDBcIj4nICsgalF1ZXJ5LnRpbWVhZ28oY2hhdC5kYXRlKSArICc8L2E+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnPC9kaXY+JztcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgIG1wID0gJzxkaXYgY2xhc3M9XCJtZXNzYWdlLWRhdGFcIj4nICtcbiAgICAgICAgICAgICAgICAgICAgJzxkaXYgY2xhc3M9XCJtZXNzYWdlIG15LW1lc3NhZ2VcIj4nO1xuICAgICAgICAgICAgICAgIGlmIChjaGF0LnJlcGx5ZUNoYXQgIT09IG51bGwpIHtcbiAgICAgICAgICAgICAgICAgICAgbXAgPSBtcCArICc8c3BhbiBjbGFzcz1cImJnLXdoaXRlIGNvbC1ibGFja1wiIHN0eWxlPVwiYm9yZGVyOiAxcHggc29saWQgI2ZmMDAyZDsgcGFkZGluZzogNXB4OyBib3JkZXItcmFkaXVzOiAxMHB4XCI+JyArIGNoYXQucmVwbHllQ2hhdFsnbWVzc2FnZSddICsgJzwvc3Bhbj48YnI+JztcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgbXAgPSBtcCArICcnICsgY2hhdC5tZXNzYWdlICsgJzxicj4nICtcbiAgICAgICAgICAgICAgICAgICAgJzxzcGFuIHN0eWxlPVwiZm9udC1zaXplOiAxMHB4OyBib3JkZXItcmFkaXVzOiAyMHB4OyAgYmFja2dyb3VuZC1jb2xvcjogd2hpdGU7IHBhZGRpbmc6MCAycHggMCAycHg7IGZsb2F0OiBsZWZ0XCI+JyArIGpRdWVyeS50aW1lYWdvKGNoYXQuZGF0ZSkgKyAnPC9zcGFuPicgK1xuICAgICAgICAgICAgICAgICAgICAnPGEgaHJlZj1cIiNcIiB0aXRsZT1cIlRyYW5zZsOpcmVyXCIgY2xhc3M9XCJmbG9hdC1yaWdodCAgYmctb3JhbmdlIHRyYW5zZmVyIGhhZG8gaGlkZSBcIiBpZD1cIicgKyBjaGF0LmlkICsgJ1wiIHN0eWxlPVwiYm9yZGVyLXJhZGl1czogMjBweDsgcGFkZGluZzogMCAzcHggMCAzcHg7IG1hcmdpbjogMCA1cHggMCA1cHhcIj48aSBjbGFzcz1cIm1hdGVyaWFsLWljb25zIGNvbC13aGl0ZVwiIHN0eWxlPVwiZm9udC1zaXplOiAxNnB4XCI+cmVkbzwvaT48L2E+JyArXG4gICAgICAgICAgICAgICAgICAgICc8YSBocmVmPVwiI1wiIHRpdGxlPVwiUsOpcG9uZHJlXCIgY2xhc3M9XCJmbG9hdC1yaWdodCBiZy1ibHVlIHJlcG9uZHJlIGhhZG8gaGlkZVwiIGlkPVwiJyArIGNoYXQuaWQgKyAnXCIgc3R5bGU9XCJwb3NpdGlvbjogcmVsYXRpdmU7IHBhZGRpbmc6IDAgM3B4IDAgM3B4OyBib3JkZXItcmFkaXVzOiAyMHB4OyBtYXJnaW46IDAgNXB4IDAgNXB4OyB6LWluZGV4OiAxMDAwXCI+PGkgY2xhc3M9XCJtYXRlcmlhbC1pY29ucyBjb2wtd2hpdGVcIiBzdHlsZT1cImZvbnQtc2l6ZTogMTZweFwiPnVuZG88L2k+PC9hPicgK1xuICAgICAgICAgICAgICAgICAgICAnPC9kaXY+JztcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuXG4gICAgICAgIHJldHVybiAoPGxpIGNsYXNzTmFtZT1cImNsZWFyZml4XCIga2V5PXtjaGF0LmlkfSBkYW5nZXJvdXNseVNldElubmVySFRNTD17e19faHRtbDogbXB9fS8+KVxuICAgIH0pO1xuXG4gICAgZm9yIChsZXQgaSA9IDA7IGkgPCBtbW0ubGVuZ3RoOyBpKyspIHtcbiAgICAgICAgbGV0IHBwcCA9IDA7XG4gICAgICAgIHRhY2hlcy5tYXAoKHRhY2hlKSA9PiB7XG4gICAgICAgICAgICBpZiAobW1tW2ldID09PSB0YWNoZS50YWNoZS5jaGFudGllcltcImlkXCJdICYmIHBwcCA9PT0gMCkge1xuICAgICAgICAgICAgICAgIGxldCBtcCA9ICcgJztcbiAgICAgICAgICAgICAgICBsZXQgY2hhbnRpZXIgPSB0YWNoZS50YWNoZS5jaGFudGllcjtcbiAgICAgICAgICAgICAgICBsZXQgY2xpZW50ID0gY2hhbnRpZXJbXCJjbGllbnRcIl07XG4gICAgICAgICAgICAgICAgbGV0IHNlY3Rpb24gPSB0YWNoZS50YWNoZS5zZWN0aW9uO1xuICAgICAgICAgICAgICAgIGxldCBwbGFubmluZyA9IHNlY3Rpb25bXCJwbGFubmluZ1wiXTtcblxuICAgICAgICAgICAgICAgIG1wID0gJzxkaXYgY2xhc3M9XCJwYW5lbCBwYW5lbC1wcmkgc2hhZG93XCIgc3R5bGU9XCJtYXJnaW4tYm90dG9tOiAwICFpbXBvcnRhbnQ7XCI+JyArXG4gICAgICAgICAgICAgICAgICAgICc8ZGl2IGNsYXNzPVwicGFuZWwtaGVhZGluZ1wiIHJvbGU9XCJ0YWJcIiBpZD1cImhlYWRpbmcnICsgdGFjaGUudGFjaGVbXCJpZFwiXSArICdcIj4nICtcbiAgICAgICAgICAgICAgICAgICAgJzxoNSBjbGFzcz1cInBhbmVsLXRpdGxlXCI+JyArXG4gICAgICAgICAgICAgICAgICAgICc8YSBjbGFzcz1cImNvbGxhcHNlZCBvdXRhaSAgY29sLXdoaXRlXCIgcm9sZT1cImJ1dHRvblwiXFxuJyArXG4gICAgICAgICAgICAgICAgICAgICcgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS10b2dnbGU9XCJjb2xsYXBzZVwiXFxuJyArXG4gICAgICAgICAgICAgICAgICAgICcgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS1wYXJlbnQ9XCIjYWNjb3JkaW9uXzFcIiBocmVmPVwiI2NvbGxhcHNlJyArIHRhY2hlLnRhY2hlW1wiaWRcIl0gKyAnXCJcXG4nICtcbiAgICAgICAgICAgICAgICAgICAgJyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWV4cGFuZGVkPVwiZmFsc2VcIlxcbicgK1xuICAgICAgICAgICAgICAgICAgICAnICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtY29udHJvbHM9XCJjb2xsYXBzZScgKyB0YWNoZS50YWNoZVtcImlkXCJdICsgJ1wiPiA8c3BhbiBjbGFzcz1cImNvbC15ZWxsb3dcIj4jICcgKyBjbGllbnRbXCJub21jbGllbnRcIl0gKyAnPC9zcGFuPjxici8+PHNwYW4gY2xhc3M9XCJoNlwiPiAjICcgKyBjaGFudGllcltcIm5vbWNoYW50aWVyXCJdICtcbiAgICAgICAgICAgICAgICAgICAgJyAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3NwYW4+PC9hPlxcbicgK1xuICAgICAgICAgICAgICAgICAgICAnICAgICAgICAgICAgICAgICAgICAgICAgPC9oNT5cXG4nICtcbiAgICAgICAgICAgICAgICAgICAgJyAgICAgICAgICAgICAgICAgICAgPC9kaXY+JyArXG4gICAgICAgICAgICAgICAgICAgICcgICAgICAgICAgICAgICAgIDxkaXYgaWQ9XCJjb2xsYXBzZScgKyB0YWNoZS50YWNoZVtcImlkXCJdICsgJ1wiIGNsYXNzPVwicGFuZWwtY29sbGFwc2UgY29sbGFwc2VcIiByb2xlPVwidGFicGFuZWxcIlxcbicgK1xuICAgICAgICAgICAgICAgICAgICAnICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtbGFiZWxsZWRieT1cImhlYWRpbmcnICsgdGFjaGUudGFjaGVbXCJpZFwiXSArICdcIj5cXG4nICtcbiAgICAgICAgICAgICAgICAgICAgJyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJiZy1ibHVlLWdyZXlcIiBzdHlsZT1cIm92ZXJmbG93OiBzY3JvbGxcIj5cXG4nO1xuICAgICAgICAgICAgICAgIGZvciAobGV0IGogPSAwOyBqIDwgbW1tbS5sZW5ndGg7IGorKykge1xuICAgICAgICAgICAgICAgICAgICBsZXQgcHBwcCA9IDA7XG4gICAgICAgICAgICAgICAgICAgIHRhY2hlcy5tYXAoKHRhY2hlKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICBpZiAobW1tbVtqXSA9PT0gdGFjaGUudGFjaGVbXCJpZFwiXSAmJiBwcHBwID09PSAwKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgbXAgPSBtcCArICc8ZGl2IGNsYXNzPVwic2hhZG93XCIgc3R5bGU9XCJwYWRkaW5nOiAyMHB4IDAgMCAxNXB4XCI+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICc8YSBpZD0nICsgdGFjaGUudGFjaGVbXCJpZFwiXSArICcgc3R5bGU9XCJwYWRkaW5nOjVweDsgbVwiIGNsYXNzPVwiYWJvdXQgZ2V0c3UgY2FyZFwiPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAnPGRpdiBjbGFzcz1cIm1lc3NhZ2UtZGF0YSBcIiBzdHlsZT1cImJvcmRlci1yYWRpdXM6IDIwcHg7XCI+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICc8aDUgY2xhc3M9XCJjb2wtcGluayBib2xvNjAwXCI+UGxhbm5pbmcgfCBTZWN0aW9uPC9oNT4nICtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJzxoNSBjbGFzcz1cImNvbC1ibGFja1wiPiogJyArIHBsYW5uaW5nW1wicGxhbm5pbmdcIl0gKyAnPC9icj4nICtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJyogJyArIHNlY3Rpb25bXCJsaWJlbGxlXCJdICsgJzwvaDU+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICc8aDUgY2xhc3M9XCJjb2wtcGluayBib2xvNjAwXCI+VGFjaGU6IDwvaDU+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICc8aDUgY2xhc3M9XCJjb2wtYmxhY2tcIj4nICsgdGFjaGUudGFjaGVbXCJsaWJlbGxlXCJdICsgJzwvaDU+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICc8c3BhbiBjbGFzcz1cIm1lc3NhZ2UtZGF0YS10aW1lIGNvbC1ibHVlLWdyZXlcIj4nICsgalF1ZXJ5LnRpbWVhZ28odGFjaGUuZGF0ZSkgKyAnPC9zcGFuPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAnPC9kaXY+PC9hPjwvZGl2Pic7XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBwcHBwID0gMTtcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgbXAgPSBtcCArICc8L2Rpdj48L2Rpdj48L2Rpdj4nO1xuICAgICAgICAgICAgICAgIGxpc3R0YWNoZXMucHVzaCg8ZGl2IHN0eWxlPXt7bWFyZ2luOiBcIjEwcHggNXB4IDEwcHggNXB4XCJ9fSBjbGFzc05hbWU9XCJjbGVhcmZpeFwiIGtleT17dGFjaGUuaWR9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IG1wfX0vPik7XG4gICAgICAgICAgICAgICAgcHBwID0gMTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG4gICAgfVxuICAgIHJlbmRlclRhY2hlcyA9IGxpc3R0YWNoZXMubWFwKCh0YWNoZSkgPT4ge1xuICAgICAgICByZXR1cm4gKHRhY2hlKTtcbiAgICB9KTtcbiAgICAkKCcjYWRmaWxlJykub2ZmKCkub24oXCJjbGlja1wiLCBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgICAgICAgJCgnI21vZGFsZXInKS5tb2RhbCgndG9nZ2xlJyk7XG4gICAgfSlcblxuICAgICQoJyNzZW5kY2hhdGUnKS5vZmYoKS5vbihcImNsaWNrXCIsIGFzeW5jIGZ1bmN0aW9uIChldmVudCkge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICBjb25zdCByZWNlaXZlciA9IGxvY2FsU3RvcmFnZS5nZXRJdGVtKCdyZWNlaXZlcmlkJyk7XG4gICAgICAgIGxldCByZXB5ID0gXCIwXCI7XG4gICAgICAgIGlmIChsb2NhbFN0b3JhZ2UuZ2V0SXRlbShcInJlcGx5aWRcIikgIT09IG51bGwpIHtcbiAgICAgICAgICAgIHJlcHkgPSBsb2NhbFN0b3JhZ2UuZ2V0SXRlbSgncmVwbHlpZCcpO1xuICAgICAgICB9XG4gICAgICAgIGlmIChsb2NhbFN0b3JhZ2UuZ2V0SXRlbShcInR5cGVcIikgPT09IFwiY2hhdFwiKSB7XG4gICAgICAgICAgICBheGlvcyh7XG4gICAgICAgICAgICAgICAgbWV0aG9kOiAnUE9TVCcsXG4gICAgICAgICAgICAgICAgdXJsOiAnL2NybS9zdGFydC9jaGF0L2FkZGVyLycgKyByZWNlaXZlciArICcvMCcgKyAnLycgKyByZXB5LFxuICAgICAgICAgICAgICAgIGRhdGE6IEpTT04uc3RyaW5naWZ5KHt4OiBtZXNzYX0pLFxuICAgICAgICAgICAgICAgIGNvbnRlbnRUeXBlOiAnYXBwbGljYXRpb24vanNvbjsgY2hhcnNldD11dGYtOCdcbiAgICAgICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICAgICAgICAgc2V0Q2hhdHMocmVzcG9uc2UuZGF0YSk7XG4gICAgICAgICAgICAgICAgJChcIiNjaGF0Y29udGVudFwiKS5hbmltYXRlKHtzY3JvbGxUb3A6ICQoJyNjaGF0Y29udGVudCcpLmhlaWdodCgpICsgMjUwMDB9LCA1MDApO1xuICAgICAgICAgICAgICAgICQoJy5yZXBvbmR1JykuYWRkQ2xhc3MoXCJoaWRlXCIpO1xuICAgICAgICAgICAgICAgIGxvY2FsU3RvcmFnZS5zZXRJdGVtKCdyZXBseWlkJywgXCIwXCIpO1xuICAgICAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfVxuICAgICAgICBpZiAobG9jYWxTdG9yYWdlLmdldEl0ZW0oXCJ0eXBlXCIpID09PSBcInRhY2hlXCIpIHtcbiAgICAgICAgICAgIGF4aW9zKHtcbiAgICAgICAgICAgICAgICBtZXRob2Q6ICdQT1NUJyxcbiAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL3N0YXJ0L2NoYXQvYWRkZXIvJyArIHJlY2VpdmVyICsgJy8xJyArICcvJyArIHJlcHksXG4gICAgICAgICAgICAgICAgZGF0YTogSlNPTi5zdHJpbmdpZnkoe3g6IG1lc3NhfSksXG4gICAgICAgICAgICAgICAgY29udGVudFR5cGU6ICdhcHBsaWNhdGlvbi9qc29uOyBjaGFyc2V0PXV0Zi04J1xuICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgICAgICBzZXRDaGF0cyhyZXNwb25zZS5kYXRhKTtcbiAgICAgICAgICAgICAgICAkKFwiI2NoYXRjb250ZW50XCIpLmFuaW1hdGUoe3Njcm9sbFRvcDogJCgnI2NoYXRjb250ZW50JykuaGVpZ2h0KCkgKyAyNTAwMH0sIDUwMCk7XG4gICAgICAgICAgICB9KS5jYXRjaChmdW5jdGlvbiAoZXJyb3IpIHtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG4gICAgfSlcblxuICAgICQoJyNhZGRGaWxlQ2hhdCcpLm9mZigpLm9uKFwiY2xpY2tcIiwgYXN5bmMgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KClcbiAgICAgICAgY29uc3QgcmVjZWl2ZXIgPSBsb2NhbFN0b3JhZ2UuZ2V0SXRlbSgncmVjZWl2ZXJpZCcpO1xuICAgICAgICBpZiAoJCh0aGlzKS5jbG9zZXN0KCdmb3JtJykudmFsaWQoKSkge1xuICAgICAgICAgICAgJCgnI2FkZEZpbGVDaGF0JykuaGlkZSgpXG4gICAgICAgICAgICAkKCcjY2xvc2VGaWxlQ2hhdCcpLmhpZGUoKVxuICAgICAgICAgICAgJCgnI2xvYWRGaWxlQ2hhdCcpLmNzcygnZGlzcGxheScsICcnKVxuICAgICAgICAgICAgaWYgKGxvY2FsU3RvcmFnZS5nZXRJdGVtKFwidHlwZVwiKSA9PT0gXCJjaGF0XCIpIHtcbiAgICAgICAgICAgICAgICBheGlvcyh7XG4gICAgICAgICAgICAgICAgICAgIG1ldGhvZDogJ1BPU1QnLFxuICAgICAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL2dlc3Rpb24vZmljaGllci9jaGF0L2FkZC8nICsgcmVjZWl2ZXIgKyAnLzAnLFxuICAgICAgICAgICAgICAgICAgICBkYXRhOiBuZXcgRm9ybURhdGEoJCgnI2FkZEZpbGVDaGF0Rm9ybScpWzBdKSxcbiAgICAgICAgICAgICAgICAgICAgY29udGVudFR5cGU6IGZhbHNlLFxuICAgICAgICAgICAgICAgICAgICBwcm9jZXNzRGF0YTogZmFsc2UsXG4gICAgICAgICAgICAgICAgICAgIGNhY2hlOiBmYWxzZSxcbiAgICAgICAgICAgICAgICAgICAgZGF0YVR5cGU6ICdqc29uJyxcbiAgICAgICAgICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgICAgICAgICAkKCcjbW9kYWxlcicpLm1vZGFsKCd0b2dnbGUnKTtcbiAgICAgICAgICAgICAgICAgICAgc2V0Q2hhdHMocmVzcG9uc2UuZGF0YSk7XG4gICAgICAgICAgICAgICAgICAgICQoXCIjY2hhdGNvbnRlbnRcIikuYW5pbWF0ZSh7c2Nyb2xsVG9wOiAkKCcjY2hhdGNvbnRlbnQnKS5oZWlnaHQoKSArIDI1MDAwfSwgNTAwKTtcbiAgICAgICAgICAgICAgICAgICAgJCgnI2FkZEZpbGVDaGF0Jykuc2hvdygpXG4gICAgICAgICAgICAgICAgICAgICQoJyNjbG9zZUZpbGVDaGF0Jykuc2hvdygpXG4gICAgICAgICAgICAgICAgICAgICQoJyNsb2FkRmlsZUNoYXQnKS5oaWRlKClcbiAgICAgICAgICAgICAgICB9KS5jYXRjaChmdW5jdGlvbiAoZXJyb3IpIHtcbiAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgaWYgKGxvY2FsU3RvcmFnZS5nZXRJdGVtKFwidHlwZVwiKSA9PT0gXCJ0YWNoZVwiKSB7XG4gICAgICAgICAgICAgICAgYXhpb3Moe1xuICAgICAgICAgICAgICAgICAgICBtZXRob2Q6ICdQT1NUJyxcbiAgICAgICAgICAgICAgICAgICAgdXJsOiAnL2NybS9nZXN0aW9uL2ZpY2hpZXIvY2hhdC9hZGQvJyArIHJlY2VpdmVyICsgJy8xJyxcbiAgICAgICAgICAgICAgICAgICAgZGF0YTogbmV3IEZvcm1EYXRhKCQoJyNhZGRGaWxlQ2hhdEZvcm0nKVswXSksXG4gICAgICAgICAgICAgICAgICAgIGNvbnRlbnRUeXBlOiBmYWxzZSxcbiAgICAgICAgICAgICAgICAgICAgcHJvY2Vzc0RhdGE6IGZhbHNlLFxuICAgICAgICAgICAgICAgICAgICBjYWNoZTogZmFsc2UsXG4gICAgICAgICAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgICAgICAgICAgJCgnI21vZGFsZXInKS5tb2RhbCgndG9nZ2xlJyk7XG4gICAgICAgICAgICAgICAgICAgIHNldENoYXRzKHJlc3BvbnNlLmRhdGEpO1xuICAgICAgICAgICAgICAgICAgICAkKFwiI2NoYXRjb250ZW50XCIpLmFuaW1hdGUoe3Njcm9sbFRvcDogJCgnI2NoYXRjb250ZW50JykuaGVpZ2h0KCkgKyAyNTAwMH0sIDUwMCk7XG4gICAgICAgICAgICAgICAgICAgICQoJyNhZGRGaWxlQ2hhdCcpLnNob3coKVxuICAgICAgICAgICAgICAgICAgICAkKCcjY2xvc2VGaWxlQ2hhdCcpLnNob3coKVxuICAgICAgICAgICAgICAgICAgICAkKCcjbG9hZEZpbGVDaGF0JykuaGlkZSgpXG4gICAgICAgICAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH1cbiAgICB9KVxuXG4gICAgJCgnLmNsaWNvJykub2ZmKCkub24oXCJjbGlja1wiLCBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgICAgICAgaWYgKCQoXCIuaGFkb1wiKS5oYXNDbGFzcyhcImhpZGVcIikpIHtcbiAgICAgICAgICAgICQoJy5oYWRvJykucmVtb3ZlQ2xhc3MoXCJoaWRlXCIpO1xuICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgJCgnLmhhZG8nKS5hZGRDbGFzcyhcImhpZGVcIik7XG4gICAgICAgIH1cbiAgICB9KTtcbiAgICAkKCcudHJhbnNmZXInKS5vZmYoKS5vbihcImNsaWNrXCIsIGZ1bmN0aW9uIChldmVudCkge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICBzZXRNZXNzKHRoaXMuaWQpO1xuICAgICAgICAkKCcjbW9kYWxvJykubW9kYWwoJ3RvZ2dsZScpO1xuICAgIH0pO1xuICAgICQoJyNkZWxldGVyZXBseScpLm9mZigpLm9uKFwiY2xpY2tcIiwgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgICQoJy5yZXBvbmR1JykuYWRkQ2xhc3MoXCJoaWRlXCIpO1xuICAgICAgICBsb2NhbFN0b3JhZ2Uuc2V0SXRlbSgncmVwbHlpZCcsIFwiMFwiKTtcbiAgICB9KTtcbiAgICAkKCcucmVwb25kcmUnKS5vZmYoKS5vbihcImNsaWNrXCIsIGZ1bmN0aW9uIChldmVudCkge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICBsZXQgeXVwID0gdGhpcy5pZDtcbiAgICAgICAgbG9jYWxTdG9yYWdlLnNldEl0ZW0oJ3JlcGx5aWQnLCB0aGlzLmlkKTtcbiAgICAgICAgY2hhdHMubWFwKChjaGF0KSA9PiB7XG4gICAgICAgICAgICBpZiAoTnVtYmVyKGNoYXQuaWQpID09PSBOdW1iZXIoeXVwKSkge1xuICAgICAgICAgICAgICAgICQoJy5yZXBvbmR1JykucmVtb3ZlQ2xhc3MoXCJoaWRlXCIpO1xuICAgICAgICAgICAgICAgICQoJy5yZXBseXMnKS5odG1sKCc8c3BhbiBjbGFzcz1cImNvbC1ibGFja1wiPlLDqXBvbmRyZSBhdSBtZXNzYWdlOiA8L3NwYW4+IDxicj4nICsgY2hhdFsnbWVzc2FnZSddKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG4gICAgfSk7XG4gICAgJCgnLmRlbG90ZScpLm9mZigpLm9uKFwiY2xpY2tcIiwgYXN5bmMgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgIGxldCBpZGQgPSB0aGlzLmlkO1xuICAgICAgICBjb25zdCByZWNlaXZlciA9IGxvY2FsU3RvcmFnZS5nZXRJdGVtKCdyZWNlaXZlcmlkJyk7XG4gICAgICAgICQoJyNjb25kZWxldGUnKS5tb2RhbCgndG9nZ2xlJyk7XG4gICAgICAgICQoJyNhY2NlcHQnKS5jbGljayhmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAkKCcjY29uZGVsZXRlJykubW9kYWwoJ2hpZGUnKVxuXG4gICAgICAgICAgICBpZiAobG9jYWxTdG9yYWdlLmdldEl0ZW0oXCJ0eXBlXCIpID09PSBcImNoYXRcIikge1xuICAgICAgICAgICAgICAgIGF4aW9zKHtcbiAgICAgICAgICAgICAgICAgICAgbWV0aG9kOiAnR0VUJyxcbiAgICAgICAgICAgICAgICAgICAgdXJsOiAnL2NybS9jaGF0L2RlbC8nICsgaWRkICsgJy8nICsgcmVjZWl2ZS5pZCArICcvJyArICQoJyNjdXJyZW50JykudmFsKCkgKyAnLzAnLFxuICAgICAgICAgICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnXG4gICAgICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgICAgICAgICAgbGV0IGRkID0gcmVzcG9uc2UuZGF0YTtcbiAgICAgICAgICAgICAgICAgICAgbGV0IHNvcnRlZCA9IGRkLnNvcnQoZnVuY3Rpb24gKGEsIGIpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybiBuZXcgRGF0ZShhLmRhdGUpIC0gbmV3IERhdGUoYi5kYXRlKTtcbiAgICAgICAgICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgICAgICAgICAgc2V0Q2hhdHMoc29ydGVkKTtcbiAgICAgICAgICAgICAgICAgICAgJChcIiNjaGF0Y29udGVudFwiKS5hbmltYXRlKHtzY3JvbGxUb3A6ICQoJyNjaGF0Y29udGVudCcpLmhlaWdodCgpICsgMjUwMDB9LCA1MDApO1xuICAgICAgICAgICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgfVxuICAgICAgICAgICAgaWYgKGxvY2FsU3RvcmFnZS5nZXRJdGVtKFwidHlwZVwiKSA9PT0gXCJ0YWNoZVwiKSB7XG4gICAgICAgICAgICAgICAgYXhpb3Moe1xuICAgICAgICAgICAgICAgICAgICBtZXRob2Q6ICdHRVQnLFxuICAgICAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL2NoYXQvZGVsLycgKyBpZGQgKyAnLycgKyByZWNlaXZlciArICcvJyArICQoJyNjdXJyZW50JykudmFsKCkgKyAnLzEnLFxuICAgICAgICAgICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnXG4gICAgICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgICAgICAgICAgbGV0IGRkID0gcmVzcG9uc2UuZGF0YTtcbiAgICAgICAgICAgICAgICAgICAgbGV0IHNvcnRlZCA9IGRkLnNvcnQoZnVuY3Rpb24gKGEsIGIpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybiBuZXcgRGF0ZShhLmRhdGUpIC0gbmV3IERhdGUoYi5kYXRlKTtcbiAgICAgICAgICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgICAgICAgICAgc2V0Q2hhdHMoc29ydGVkKTtcbiAgICAgICAgICAgICAgICAgICAgJChcIiNjaGF0Y29udGVudFwiKS5hbmltYXRlKHtzY3JvbGxUb3A6ICQoJyNjaGF0Y29udGVudCcpLmhlaWdodCgpICsgMjUwMDB9LCA1MDApO1xuICAgICAgICAgICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICB9KTtcbiAgICAkKCcjdHJhbWVzcycpLm9mZigpLm9uKFwiY2xpY2tcIiwgYXN5bmMgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgIGF4aW9zKHtcbiAgICAgICAgICAgIG1ldGhvZDogJ0dFVCcsXG4gICAgICAgICAgICB1cmw6ICcvY3JtL2NoYXQvc2hhcmUvJyArIG1lc3MgKyAnLycgKyByZWNlLFxuICAgICAgICAgICAgY29udGVudFR5cGU6ICdhcHBsaWNhdGlvbi9qc29uOyBjaGFyc2V0PXV0Zi04J1xuICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgJCgnI21vZGFsbycpLm1vZGFsKCd0b2dnbGUnKTtcbiAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgIH0pO1xuICAgIH0pO1xuXG4gICAgJCgnLnNlbHUnKS5jaGFuZ2UoZnVuY3Rpb24gKCkge1xuICAgICAgICBzZXRSZWNlKHRoaXMudmFsdWUpO1xuICAgIH0pO1xuXG4gICAgcmV0dXJuIChcbiAgICAgICAgPD5cbiAgICAgICAgICAgIHtkZXZpY2VUeXBlICE9PSBcIm1vYmlsZVwiICYmXG4gICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJtb2RhbCBmYWRlXCIgaWQ9XCJtb2RhbG9cIiB0YWJJbmRleD1cIi0xXCIgcm9sZT1cImRpYWxvZ1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgYXJpYS1sYWJlbGxlZGJ5PVwiZXhhbXBsZU1vZGFsTGFiZWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtaGlkZGVuPVwidHJ1ZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJtb2RhbC1kaWFsb2cgbW9kYWwtc20gbW9kYWwtbm90aWZ5XCIgcm9sZT1cImRvY3VtZW50XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJtb2RhbC1jb250ZW50XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwibW9kYWwtaGVhZGVyIGQtZmxleCBqdXN0aWZ5LWNvbnRlbnQtY2VudGVyIGJnLXByaW1hcnlcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxoND5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBTw4lMRUNUSU9OTkVSXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2g0PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJtb2RhbC1ib2R5XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDQgY2xhc3NOYW1lPVwiY29sLWdyZWVuXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJsaXN0LWdyb3VwXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtyZW5kZXJTZWxlY3RVc2Vyc31cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlclwiIHN0eWxlPXt7bWFyZ2luVG9wOiBcIjEwcHhcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJ1dHRvbiB0eXBlPVwiYnV0dG9uXCIgY2xhc3NOYW1lPVwiYnRuIGJ0bi1wcmltYXJ5IGJ0bi1zbVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkPVwidHJhbWVzc1wiPkVOVk9ZRVJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvYnV0dG9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9oND5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwibW9kYWwgZmFkZVwiIGlkPVwiY29uZGVsZXRlXCIgdGFiSW5kZXg9XCItMVwiIHJvbGU9XCJkaWFsb2dcIlxuICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtbGFiZWxsZWRieT1cImV4YW1wbGVNb2RhbExhYmVsXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWhpZGRlbj1cInRydWVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwibW9kYWwtZGlhbG9nIG1vZGFsLXNtIG1vZGFsLW5vdGlmeVwiIHJvbGU9XCJkb2N1bWVudFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwibW9kYWwtY29udGVudCB0ZXh0LWNlbnRlclwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cIm1vZGFsLWhlYWRlciBkLWZsZXgganVzdGlmeS1jb250ZW50LWNlbnRlciBiZy1waW5rXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDQgY2xhc3NOYW1lPVwiYm9sbzcwMFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIMOKVEVTIFZPVVMgU1VSID9cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvaDQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cIm1vZGFsLWJvZHlcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpIGNsYXNzTmFtZT1cImZhcyBmYS10aW1lcyBmYS00eCBhbmltYXRlZCByb3RhdGVJbiBjb2wtcGlua1wiPjwvaT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgdHlwZT1cImJ1dHRvblwiIGlkPVwiYWNjZXB0XCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYnRuIGJ0bi1saW5rIHdhdmVzLWVmZmVjdCB0ZXh0LXdoaXRlIGJnLXByaW1hcnlcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBPVUlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiB0eXBlPVwiYnV0dG9uXCIgaWQ9XCJjbG9zZUxpZXJcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJidG4gYnRuLWxpbmsgd2F2ZXMtZWZmZWN0IHRleHQtd2hpdGUgYmctcGlua1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtZGlzbWlzcz1cIm1vZGFsXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgTk9OXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29udGFpbmVyLWZsdWlkIGRpdGlcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiYmxvY2staGVhZGVyXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJyb3dcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbWQtNCBjaGF0IGJnLWJsdWUtZ3JleVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBzdHlsZT17e21hcmdpbjogXCIycHggMC41cHhcIiwgaGVpZ2h0OiBcIjcwMHB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDQgc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY29sb3I6IFwid2hpdGVcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGV4dEFsaWduOiBcImNlbnRlclwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBiYWNrZ3JvdW5kQ29sb3I6IFwiIzRlNzNkZlwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwYWRkaW5nOiBcIjEwcHhcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbWFyZ2luOiBcIjVweCA1cHggMCA1cHhcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PkNIQVQ8L2g0PlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjaGF0LWhlYWRlciBjbGVhcmZpeFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInJvd1wiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbGctNlwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9XCJqYXZhc2NyaXB0OnZvaWQoMCk7XCIgZGF0YS10b2dnbGU9XCJtb2RhbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS10YXJnZXQ9XCIjdmlld19pbmZvXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbWcgc3JjPVwiL2dhbGxlcnkvdXNlcmUucG5nXCIgaWQ9XCJ1dWVyXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB3aWR0aDogXCI2MHB4XCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGhlaWdodDogXCI2MHB4XCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJvcmRlcjogXCIycHggc29saWQgI0ZGRlwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB2aXNpYmlsaXR5OiBcImhpZGRlblwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhbHQ9XCJhdmF0YXJcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY2hhdC1hYm91dFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDQgY2xhc3NOYW1lPVwibS1iLTAgY29sLXdoaXRlIHVzZXNlbGVjdGVkXCI+PC9oND5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnIvPjxici8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGg0PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPVwiI1wiIGNsYXNzTmFtZT1cImNsaWNvIGhpZGVcIiB0aXRsZT1cIkFmZmljaGVyIGxlcyBPcHRpb25zXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tmbG9hdDogXCJyaWdodFwiLCB2aXNpYmlsaXR5OiBcImhpZGRlblwifX0+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cIm1hdGVyaWFsLWljb25zIGNvbC15ZWxsb3dcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tmb250U2l6ZTogXCIyMHB4XCJ9fT5odWI8L2k+PC9hPjwvaDQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjaGF0LWhpc3RvcnkgXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7aGVpZ2h0OiBcIjQ1MHB4XCIsIHdpZHRoOiBcIjEwMCVcIiwgb3ZlcmZsb3dZOiBcInNjcm9sbFwifX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkPVwiY2hhdGNvbnRlbnRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHVsIGNsYXNzTmFtZT1cIm0tYi0wXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7cmVuZGVyQ2hhdHN9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdWw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJyb3cgcmVwb25kdSBoaWRlXCIgc3R5bGU9e3ttYXJnaW46IFwiMXB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCIgY29sLW1kLTEyIGJnLWJsdWUgY29sLXdoaXRlXCIgc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHBhZGRpbmc6IFwiMTBweFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYm9yZGVyUmFkaXVzOiBcIjVweFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbWFyZ2luVG9wOiBcIjEwcHhcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGNsYXNzTmFtZT1cInJlcGx5c1wiPjwvc3Bhbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9XCIjXCIgaWQ9XCJkZWxldGVyZXBseVwiIHRpdGxlPVwiU3VwcHJpbWVyXCIgY2xhc3NOYW1lPVwiYmctcGlua1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e2JvcmRlclJhZGl1czogXCIyMHB4XCIsIHBvc2l0aW9uOiBcInJlbGF0aXZlXCIsIGZsb2F0OiBcInJpZ2h0XCJ9fT48aVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cIm1hdGVyaWFsLWljb25zIGNvbC13aGl0ZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tmb250U2l6ZTogXCIxOHB4XCJ9fT5jbGVhcjwvaT48L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbWFyZ2luQm90dG9tOiBcIjgwcHhcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGlzcGxheTogXCJmbGV4XCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGp1c3RpZnlDb250ZW50OiBcImZsZXgtZW5kXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHdpZHRoOiBcIjEwMCVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PlxuXG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPFJlYWN0UXVpbGwgY2xhc3NOYW1lPVwiYmctd2hpdGUgY29sLWJsYWNrXCIgc3R5bGU9e3toZWlnaHQ6IFwiMTAwcHhcIn19XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRoZW1lPVwic25vd1wiIHZhbHVlPXttZXNzYX0gb25DaGFuZ2U9e3NldE1lc3NhfS8+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImZsb2F0LXJpZ2h0XCIgc3R5bGU9e3ttYXJnaW5Ub3A6IFwiNXB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj1cIiNcIiBpZD1cImFkZmlsZVwiIHRpdGxlPVwiQWpvdXRlciB1biBmaWNoaWVyXCI+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cIm1hdGVyaWFsLWljb25zIGNvbC1saW1lXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7Zm9udFNpemU6IFwiMzBweFwiLCBtYXJnaW5SaWdodDogXCIyMHB4XCJ9fT51cGxvYWRfZmlsZTwvaT48L2E+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj1cIiNcIiBpZD1cInNlbmRjaGF0ZVwiIHRpdGxlPVwiRW52b3llclwiPjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJtYXRlcmlhbC1pY29ucyBjb2wtd2hpdGVcIiBzdHlsZT17e1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZm9udFNpemU6IFwiMzBweFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbWFyZ2luUmlnaHQ6IFwiNXB4XCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0+c2VuZDwvaT48L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbWQtNFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwZW9wbGUtbGlzdCBiZy13aGl0ZVwiIHN0eWxlPXt7aGVpZ2h0OiBcIjgyMHB4XCIsIG92ZXJmbG93OiBcInNjcm9sbFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGg0IHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbG9yOiBcIndoaXRlXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRleHRBbGlnbjogXCJjZW50ZXJcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYmFja2dyb3VuZENvbG9yOiBcIiM0ZTczZGZcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcGFkZGluZzogXCIxMHB4XCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG1hcmdpbjogXCI1cHggNXB4IDAgNXB4XCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fT5UQUNIRVM8L2g0PlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge3JlbmRlclRhY2hlc31cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImNvbC1tZC00XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBlb3BsZS1saXN0IGJnLXdoaXRlXCIgc3R5bGU9e3toZWlnaHQ6IFwiODIwcHhcIiwgb3ZlcmZsb3c6IFwic2Nyb2xsXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDQgc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY29sb3I6IFwid2hpdGVcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGV4dEFsaWduOiBcImNlbnRlclwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBiYWNrZ3JvdW5kQ29sb3I6IFwiIzRlNzNkZlwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwYWRkaW5nOiBcIjEwcHggMTBweCAxMHB4IDE1cHhcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbWFyZ2luOiBcIjVweCA1cHggMCA1cHhcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PkNPTVBURVM8L2g0PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx1bCBjbGFzc05hbWU9XCJsaXN0LXVuc3R5bGVkIGNoYXQtbGlzdCBtdC0yIG1iLTBcIiBzdHlsZT17e3BhZGRpbmdMZWZ0OiBcIjE1cHhcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7cmVuZFVzZXJzfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdWw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgPC8+XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgICAgIHtkZXZpY2VUeXBlID09PSBcIm1vYmlsZVwiICYmXG4gICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb250YWluZXItZmx1aWQgZGl0aVwiPlxuICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImJsb2NrLWhlYWRlclwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJyb3dcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImNvbC1tZC0xMiBjaGF0XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx1bCBjbGFzc05hbWU9XCJuYXYgbmF2LXRhYnNcIiBzdHlsZT17e2JhY2tncm91bmRDb2xvcjogXCIjNGU3M2RmXCIsIGNvbG9yOiBcIndoaXRlXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaSBjbGFzc05hbWU9XCJhY3RpdmVcIiBpZD1cInR0MVwiPjxhIGRhdGEtdG9nZ2xlPVwidGFiXCIgaHJlZj1cIiNob21lXCI+Q0hBVDwvYT48L2xpPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpIGlkPVwidHQyXCI+PGEgZGF0YS10b2dnbGU9XCJ0YWJcIiBocmVmPVwiI21lbnUxXCI+VEFDSEVTPC9hPjwvbGk+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGkgaWQ9XCJ0dDNcIj48YSBkYXRhLXRvZ2dsZT1cInRhYlwiIGhyZWY9XCIjbWVudTJcIj5DT01QVEVTPC9hPjwvbGk+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdWw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwidGFiLWNvbnRlbnQgYmctYmx1ZS1ncmV5XCIgc3R5bGU9e3twYWRkaW5nOiBcIjEwcHggMTBweCA1MHB4IDEwcHhcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBpZD1cImhvbWVcIiBjbGFzc05hbWU9XCJ0YWItcGFuZSBmYWRlIGluIGFjdGl2ZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY2hhdC1oZWFkZXIgY2xlYXJmaXhcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJyb3dcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLWxnLTZcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPVwiamF2YXNjcmlwdDp2b2lkKDApO1wiIGRhdGEtdG9nZ2xlPVwibW9kYWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtdGFyZ2V0PVwiI3ZpZXdfaW5mb1wiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aW1nIHNyYz1cIi9nYWxsZXJ5L3VzZXJlLnBuZ1wiIGlkPVwidXVlclwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgd2lkdGg6IFwiNjBweFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBoZWlnaHQ6IFwiNjBweFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBib3JkZXI6IFwiMnB4IHNvbGlkICNGRkZcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmlzaWJpbGl0eTogXCJoaWRkZW5cIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYWx0PVwiYXZhdGFyXCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImNoYXQtYWJvdXRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGg0IGNsYXNzTmFtZT1cIm0tYi0wIGNvbC13aGl0ZSB1c2VzZWxlY3RlZFwiPjwvaDQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz48YnIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxoND5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj1cIiNcIiBjbGFzc05hbWU9XCJjbGljb1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7ZmxvYXQ6IFwicmlnaHRcIiwgdmlzaWJpbGl0eTogXCJoaWRkZW5cIn19PjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJtYXRlcmlhbC1pY29ucyBjb2wteWVsbG93XCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7Zm9udFNpemU6IFwiMjBweFwifX0+aHViPC9pPjwvYT48L2g0PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY2hhdC1oaXN0b3J5IFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e2hlaWdodDogXCI0NTBweFwiLCB3aWR0aDogXCIxMDAlXCIsIG92ZXJmbG93WTogXCJzY3JvbGxcIn19XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZD1cImNoYXRjb250ZW50XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx1bCBjbGFzc05hbWU9XCJtLWItMFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge3JlbmRlckNoYXRzfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3VsPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbWFyZ2luVG9wOiBcIjEwcHhcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbWFyZ2luQm90dG9tOiBcIjgwcHhcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGlzcGxheTogXCJmbGV4XCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGp1c3RpZnlDb250ZW50OiBcImZsZXgtZW5kXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHdpZHRoOiBcIjEwMCVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8UmVhY3RRdWlsbCBjbGFzc05hbWU9XCJiZy13aGl0ZSBjb2wtYmxhY2tcIiBzdHlsZT17e2hlaWdodDogXCIxMDBweFwifX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGhlbWU9XCJzbm93XCIgdmFsdWU9e21lc3NhfSBvbkNoYW5nZT17c2V0TWVzc2F9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImZsb2F0LXJpZ2h0XCIgc3R5bGU9e3ttYXJnaW5Ub3A6IFwiNXB4XCJ9fT5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPVwiI1wiIGlkPVwiYWRmaWxlXCI+PGkgY2xhc3NOYW1lPVwibWF0ZXJpYWwtaWNvbnMgY29sLWxpbWVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZm9udFNpemU6IFwiMzBweFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbWFyZ2luUmlnaHQ6IFwiMjBweFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PnVwbG9hZF9maWxlPC9pPjwvYT5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPVwiI1wiIGlkPVwic2VuZGNoYXRlXCI+PGkgY2xhc3NOYW1lPVwibWF0ZXJpYWwtaWNvbnMgY29sLXdoaXRlXCIgc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZvbnRTaXplOiBcIjMwcHhcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG1hcmdpblJpZ2h0OiBcIjVweFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PnNlbmQ8L2k+PC9hPlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBpZD1cIm1lbnUxXCIgY2xhc3NOYW1lPVwidGFiLXBhbmUgZmFkZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtyZW5kZXJUYWNoZXN9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgaWQ9XCJtZW51MlwiIGNsYXNzTmFtZT1cInRhYi1wYW5lIGZhZGVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dWwgY2xhc3NOYW1lPVwibGlzdC11bnN0eWxlZCBjaGF0LWxpc3QgbXQtMiBtYi0wXCIgc3R5bGU9e3twYWRkaW5nTGVmdDogXCIxNXB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge3JlbmRlclVzZXJzfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdWw+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICB9XG4gICAgICAgIDwvPlxuXG4gICAgKVxufVxuXG50cnkge1xuICAgIGNvbnN0IHJvb3QgPSBjcmVhdGVSb290KGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjaGF0dGVyJykpO1xuICAgIHJvb3QucmVuZGVyKDxDaGF0dGVyLz4pO1xufSBjYXRjaCAoZSkge1xuXG59IiwiaW1wb3J0IFJlYWN0IGZyb20gXCJyZWFjdFwiO1xuaW1wb3J0IHtjcmVhdGVSb290fSBmcm9tICdyZWFjdC1kb20vY2xpZW50JztcbmltcG9ydCB7dXNlRWZmZWN0LCB1c2VTdGF0ZX0gZnJvbSBcInJlYWN0XCI7XG5pbXBvcnQgYXhpb3MgZnJvbSBcImF4aW9zXCI7XG5pbXBvcnQgJCBmcm9tIFwianF1ZXJ5XCI7XG5pbXBvcnQgKiBhcyBtb21lbnQgZnJvbSBcIm1vbWVudFwiO1xuaW1wb3J0IFJlYWN0SFRNTFRhYmxlVG9FeGNlbCBmcm9tICdyZWFjdC1odG1sLXRhYmxlLXRvLWV4Y2VsJztcblxuY29uc3QgRGF0YUZpcnN0ID0gKCkgPT4ge1xuXG4gICAgY29uc3QgW3RvZG9zLCBzZXRUb2Rvc10gPSB1c2VTdGF0ZShbXSk7XG4gICAgY29uc3QgW2NoYXRzLCBzZXRDaGF0c10gPSB1c2VTdGF0ZShbXSk7XG4gICAgY29uc3QgW3VzZXJzLCBzZXRVc2Vyc10gPSB1c2VTdGF0ZShbXSk7XG4gICAgbGV0IHRvZGVpID0gJCgnI3RvZGVpJykudmFsKCk7XG4gICAgbGV0IGN1cnJlbnQgPSAkKCcjY3VycmVudCcpLnZhbCgpO1xuXG4gICAgY29uc3QgZmV0Y2hkYXRhID0gYXN5bmMgKCkgPT4ge1xuICAgICAgICBpZiAoJCgnI3BhZ2UnKS52YWwoKSAhPT0gdW5kZWZpbmVkKSB7XG4gICAgICAgICAgICBheGlvcyh7XG4gICAgICAgICAgICAgICAgbWV0aG9kOiAnR0VUJyxcbiAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL3N0YXJ0L2dldHMnLFxuICAgICAgICAgICAgICAgIGNvbnRlbnRUeXBlOiAnYXBwbGljYXRpb24vanNvbjsgY2hhcnNldD11dGYtOCdcbiAgICAgICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICAgICAgICAgc2V0VG9kb3MocmVzcG9uc2UuZGF0YSk7XG4gICAgICAgICAgICB9KS5jYXRjaChmdW5jdGlvbiAoZXJyb3IpIHtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG4gICAgfTtcbiAgICBjb25zdCBmZXRjaFVzZXJzID0gYXN5bmMgKCkgPT4ge1xuICAgICAgICBpZiAoJCgnI3BhZ2UnKS52YWwoKSAhPT0gdW5kZWZpbmVkKSB7XG4gICAgICAgICAgICBheGlvcyh7XG4gICAgICAgICAgICAgICAgbWV0aG9kOiAnR0VUJyxcbiAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL3N0YXJ0L3VzZXJzL2dldCcsXG4gICAgICAgICAgICAgICAgY29udGVudFR5cGU6ICdhcHBsaWNhdGlvbi9qc29uOyBjaGFyc2V0PXV0Zi04J1xuICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgICAgICBzZXRVc2VycyhyZXNwb25zZS5kYXRhKTtcbiAgICAgICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH1cbiAgICB9O1xuICAgIGNvbnN0IGZldGNoQ2hhdHMgPSBhc3luYyAoKSA9PiB7XG4gICAgICAgIGNvbnN0IGlkID0gbG9jYWxTdG9yYWdlLmdldEl0ZW0oJ3Rva2VuJyk7XG4gICAgICAgIGlmIChpZCAhPT0gbnVsbCkge1xuICAgICAgICAgICAgYXhpb3Moe1xuICAgICAgICAgICAgICAgIG1ldGhvZDogJ0dFVCcsXG4gICAgICAgICAgICAgICAgdXJsOiAnL2NybS9zdGFydC9jaGF0cy9nZXQvJyArIGlkLFxuICAgICAgICAgICAgICAgIGNvbnRlbnRUeXBlOiAnYXBwbGljYXRpb24vanNvbjsgY2hhcnNldD11dGYtOCdcbiAgICAgICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICAgICAgICAgc2V0Q2hhdHMocmVzcG9uc2UuZGF0YSk7XG4gICAgICAgICAgICB9KS5jYXRjaChmdW5jdGlvbiAoZXJyb3IpIHtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG4gICAgfTtcblxuICAgIHVzZUVmZmVjdCgoKSA9PiB7XG4gICAgICAgIGZldGNoZGF0YSgpO1xuICAgICAgICBmZXRjaFVzZXJzKCk7XG4gICAgICAgIGNvbnN0IGludGVydmFsID0gc2V0SW50ZXJ2YWwoKCkgPT4ge1xuICAgICAgICAgICAgZmV0Y2hkYXRhKCk7XG4gICAgICAgICAgICBmZXRjaENoYXRzKCk7XG4gICAgICAgIH0sIDEwMDAwKTtcbiAgICAgICAgcmV0dXJuICgpID0+IGNsZWFySW50ZXJ2YWwoaW50ZXJ2YWwpO1xuICAgIH0sIFtdKVxuXG4gICAgZnVuY3Rpb24gZmlsdGVyQnlJZChqc29uT2JqZWN0LCBpZCkge1xuICAgICAgICByZXR1cm4ganNvbk9iamVjdC5maWx0ZXIoZnVuY3Rpb24gKGpzb25PYmplY3QpIHtcbiAgICAgICAgICAgIHJldHVybiAocGFyc2VJbnQoanNvbk9iamVjdFsnaWQnXSkgPT09IHBhcnNlSW50KGlkKSk7XG4gICAgICAgIH0pWzBdO1xuICAgIH1cblxuICAgIGZ1bmN0aW9uIGFkZFRhY2hlcnMoKSB7XG4gICAgICAgICQoJyNhZGRUb2RvRm9ybScpWzBdLnJlc2V0KCk7XG4gICAgICAgIENLRURJVE9SLmluc3RhbmNlcy50b2RvLnNldERhdGEoJyAnKTtcbiAgICAgICAgJCgnI2NodG9kb2FkZCcpLnJlbW92ZUNsYXNzKCdoaWRlJyk7XG4gICAgICAgICQoJyNjaHRvZG9lZGl0JykuYWRkQ2xhc3MoJ2hpZGUnKTtcbiAgICAgICAgJCgnI2RpdlRvZG8nKS5yZW1vdmVDbGFzcygnaGlkZScpO1xuICAgICAgICAkKCcjZGl2VG9kb3InKS5hZGRDbGFzcygnaGlkZScpO1xuICAgICAgICAkKCcjc21hbGxUYWNoZScpLm1vZGFsKCdzaG93Jyk7XG4gICAgfVxuXG4gICAgY29uc3Qgc2h1dG8gPSAoaWQpID0+IHtcbiAgICAgICAgJCgnLicgKyBpZCArICd0bycpLnJlbW92ZUNsYXNzKCdoaWRlJyk7XG4gICAgfVxuICAgIGNvbnN0IHNodXRvZCA9IChpZCkgPT4ge1xuICAgICAgICAkKCcuJyArIGlkICsgJ3RvJykuYWRkQ2xhc3MoJ2hpZGUnKTtcbiAgICB9XG5cbiAgICAkKCcjc2VuZGNoYXQnKS5vZmYoKS5vbihcImNsaWNrXCIsIGFzeW5jIGZ1bmN0aW9uIChldmVudCkge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICBsZXQgbWVzc2FnZSA9ICQoJ3RleHRhcmVhI2NoYXQnKS52YWwoKTtcbiAgICAgICAgY29uc3QgcmVjZWl2ZXIgPSBsb2NhbFN0b3JhZ2UuZ2V0SXRlbSgncmVjZWl2ZXJpZCcpO1xuICAgICAgICBjb25zdCB0b2RvID0gbG9jYWxTdG9yYWdlLmdldEl0ZW0oJ3RvZG9pZCcpO1xuICAgICAgICBheGlvcyh7XG4gICAgICAgICAgICBtZXRob2Q6ICdQT1NUJyxcbiAgICAgICAgICAgIHVybDogJy9jcm0vc3RhcnQvY2hhdC9hZGQvJyArIG1lc3NhZ2UgKyAnLycgKyB0b2RvICsgJy8nICsgcmVjZWl2ZXIsXG4gICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnXG4gICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICAgICBzZXRDaGF0cyhyZXNwb25zZS5kYXRhKTtcbiAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgIH0pO1xuICAgIH0pXG4gICAgJCgnI2FkZFRvZG8nKS5vZmYoKS5vbihcImNsaWNrXCIsIGFzeW5jIGZ1bmN0aW9uIChldmVudCkge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpXG4gICAgICAgIGlmICgkKHRoaXMpLmNsb3Nlc3QoJ2Zvcm0nKS52YWxpZCgpKSB7XG4gICAgICAgICAgICAkKCcjZGl2VG9kbycpLmhpZGUoKTtcbiAgICAgICAgICAgICQoJyNsb2FkVG9kbycpLmNzcygnZGlzcGxheScsICcnKVxuICAgICAgICAgICAgJCgnI3RvZG8nKS52YWwoQ0tFRElUT1IuaW5zdGFuY2VzWyd0b2RvJ10uZ2V0RGF0YSgpKTtcbiAgICAgICAgICAgIGF3YWl0IGF4aW9zKHtcbiAgICAgICAgICAgICAgICBtZXRob2Q6ICdQT1NUJyxcbiAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL3N0YXJ0L3RvZG8vYWRkJyxcbiAgICAgICAgICAgICAgICBkYXRhOiBuZXcgRm9ybURhdGEoJCgnI2FkZFRvZG9Gb3JtJylbMF0pLFxuICAgICAgICAgICAgICAgIGNvbnRlbnRUeXBlOiBmYWxzZSxcbiAgICAgICAgICAgICAgICBwcm9jZXNzRGF0YTogZmFsc2UsXG4gICAgICAgICAgICAgICAgY2FjaGU6IGZhbHNlLFxuICAgICAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgICAgIHNldFRvZG9zKHJlc3BvbnNlLmRhdGEpXG4gICAgICAgICAgICAgICAgJCgnI2RpdlRvZG8nKS5zaG93KCk7XG4gICAgICAgICAgICAgICAgJCgnI2xvYWRUb2RvJykuaGlkZSgpO1xuICAgICAgICAgICAgICAgICQoJyNzbWFsbFRhY2hlJykubW9kYWwoJ3RvZ2dsZScpO1xuICAgICAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgICAgICAgICAgJCgnI01vZGFsRXJyZXVyJykubW9kYWwoJ3Nob3cnKTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG4gICAgfSlcbiAgICAkKCcjdXBkVG9kbycpLm9mZigpLm9uKFwiY2xpY2tcIiwgYXN5bmMgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KClcbiAgICAgICAgaWYgKCQodGhpcykuY2xvc2VzdCgnZm9ybScpLnZhbGlkKCkpIHtcbiAgICAgICAgICAgICQoJyNkaXZUb2RvcicpLmhpZGUoKTtcbiAgICAgICAgICAgICQoJyNsb2FkVG9kbycpLmNzcygnZGlzcGxheScsICcnKVxuICAgICAgICAgICAgJCgnI3RvZG8nKS52YWwoQ0tFRElUT1IuaW5zdGFuY2VzWyd0b2RvJ10uZ2V0RGF0YSgpKTtcbiAgICAgICAgICAgIGNvbnN0IGlkID0gbG9jYWxTdG9yYWdlLmdldEl0ZW0oJ3Rva2VuJyk7XG4gICAgICAgICAgICBhd2FpdCBheGlvcyh7XG4gICAgICAgICAgICAgICAgbWV0aG9kOiAnUFVUJyxcbiAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL3N0YXJ0L3RvZG8vdXBkYXRlLycgKyBpZCxcbiAgICAgICAgICAgICAgICBkYXRhOiBuZXcgRm9ybURhdGEoJCgnI2FkZFRvZG9Gb3JtJylbMF0pLFxuICAgICAgICAgICAgICAgIGNvbnRlbnRUeXBlOiBmYWxzZSxcbiAgICAgICAgICAgICAgICBwcm9jZXNzRGF0YTogZmFsc2UsXG4gICAgICAgICAgICAgICAgY2FjaGU6IGZhbHNlLFxuICAgICAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgICAgIHNldFRvZG9zKHJlc3BvbnNlLmRhdGEpXG4gICAgICAgICAgICAgICAgJCgnI2NodG9kb2FkZCcpLnJlbW92ZUNsYXNzKCdoaWRlJyk7XG4gICAgICAgICAgICAgICAgJCgnI2NodG9kb2VkaXQnKS5hZGRDbGFzcygnaGlkZScpO1xuICAgICAgICAgICAgICAgICQoJyNkaXZUb2RvJykucmVtb3ZlQ2xhc3MoJ2hpZGUnKTtcbiAgICAgICAgICAgICAgICAkKCcjZGl2VG9kb3InKS5hZGRDbGFzcygnaGlkZScpO1xuICAgICAgICAgICAgICAgICQoJyNsb2FkVG9kbycpLmhpZGUoKTtcbiAgICAgICAgICAgICAgICAkKCcjc21hbGxUYWNoZScpLm1vZGFsKCd0b2dnbGUnKTtcbiAgICAgICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICAgICAgICAgICQoJyNUcmFpdGVtZW50JykubW9kYWwoJ2hpZGUnKTtcbiAgICAgICAgICAgICAgICAkKCcjTW9kYWxFcnJldXInKS5tb2RhbCgnc2hvdycpO1xuICAgICAgICAgICAgICAgICQoJyNsb2FkVG9kbycpLmhpZGUoKTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG4gICAgfSlcblxuICAgICQoZnVuY3Rpb24gKCkge1xuICAgICAgICAkKFwiLmRlbGV0eVwiKS5lYWNoKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICQodGhpcykub2ZmKCkub24oXCJjbGlja1wiLCBhc3luYyBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgbGV0IGlkID0gdGhpcy5pZDtcbiAgICAgICAgICAgICAgICAgICAgY29uc3QgdG9kbyA9IGxvY2FsU3RvcmFnZS5nZXRJdGVtKCd0b2RvaWQnKTtcbiAgICAgICAgICAgICAgICAgICAgYXhpb3Moe1xuICAgICAgICAgICAgICAgICAgICAgICAgbWV0aG9kOiAnREVMRVRFJyxcbiAgICAgICAgICAgICAgICAgICAgICAgIHVybDogJy9jcm0vc3RhcnQvY2hhdHMvZGVsZXRlLycgKyBpZCArJy8nKyB0b2RvLFxuICAgICAgICAgICAgICAgICAgICAgICAgY29udGVudFR5cGU6ICdhcHBsaWNhdGlvbi9qc29uOyBjaGFyc2V0PXV0Zi04J1xuICAgICAgICAgICAgICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgICAgICAgICAgICAgc2V0Q2hhdHMocmVzcG9uc2UuZGF0YSk7XG4gICAgICAgICAgICAgICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9KTtcbiAgICB9KTtcbiAgICAkKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgJChcIi5kZWxldG9kb1wiKS5lYWNoKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICQodGhpcykub2ZmKCkub24oXCJjbGlja1wiLCBhc3luYyBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgbGV0IGlkID0gdGhpcy5pZDtcbiAgICAgICAgICAgICAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnc2hvdycpO1xuICAgICAgICAgICAgICAgICAgICBhd2FpdCBheGlvcyh7XG4gICAgICAgICAgICAgICAgICAgICAgICBtZXRob2Q6ICdERUxFVEUnLFxuICAgICAgICAgICAgICAgICAgICAgICAgdXJsOiAnL2NybS9zdGFydC90b2RvL2RlbGV0ZS8nICsgaWQsXG4gICAgICAgICAgICAgICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgICAgICAgICAgICAgZGF0YVR5cGU6ICdqc29uJyxcbiAgICAgICAgICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHNldFRvZG9zKHJlc3BvbnNlLmRhdGEpO1xuICAgICAgICAgICAgICAgICAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnaGlkZScpO1xuICAgICAgICAgICAgICAgICAgICB9KS5jYXRjaChmdW5jdGlvbiAoZXJyb3IpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICQoJyNUcmFpdGVtZW50JykubW9kYWwoJ2hpZGUnKTtcbiAgICAgICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfSk7XG4gICAgfSk7XG4gICAgJChmdW5jdGlvbiAoKSB7XG4gICAgICAgICQoXCIuY29tbWVudG9cIikuZWFjaChmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAkKHRoaXMpLm9mZigpLm9uKFwiY2xpY2tcIiwgYXN5bmMgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgIGxldCBpZCA9IHRoaXMuaWQ7XG4gICAgICAgICAgICAgICAgbGV0IHNlbGEgPSBcIiBcIjtcbiAgICAgICAgICAgICAgICBsb2NhbFN0b3JhZ2Uuc2V0SXRlbSgndG9rZW4nLCBpZCk7XG4gICAgICAgICAgICAgICAgYXdhaXQgYXhpb3Moe1xuICAgICAgICAgICAgICAgICAgICBtZXRob2Q6ICdHRVQnLFxuICAgICAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL3N0YXJ0L3VzZXJzL2dldCcsXG4gICAgICAgICAgICAgICAgICAgIGNvbnRlbnRUeXBlOiAnYXBwbGljYXRpb24vanNvbjsgY2hhcnNldD11dGYtOCcsXG4gICAgICAgICAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgICAgICAgICAgbGV0IHJlY2VpdmVyID0gMDtcbiAgICAgICAgICAgICAgICAgICAgY29uc3Qgc2VsZU1lc3NhZ2UgPSBmaWx0ZXJCeUlkKHRvZG9zLCBpZCk7XG4gICAgICAgICAgICAgICAgICAgIGlmIChwYXJzZUludChjdXJyZW50KSA9PT0gcGFyc2VJbnQoc2VsZU1lc3NhZ2Uuc2VuZGVyLmlkKSkge1xuICAgICAgICAgICAgICAgICAgICAgICAgc2VsYSA9IGZpbHRlckJ5SWQodXNlcnMsIHBhcnNlSW50KHNlbGVNZXNzYWdlLm93bmVyLmlkKSk7XG4gICAgICAgICAgICAgICAgICAgICAgICAkKCcudXNlc2VsZWN0ZWQnKS50ZXh0KHNlbGEubm9tICsgJyAnICsgc2VsYS5wcmVub21zKTtcbiAgICAgICAgICAgICAgICAgICAgICAgICQoJy51c2VtZXNzYWdlJykuaHRtbChzZWxlTWVzc2FnZS50b2RvKTtcbiAgICAgICAgICAgICAgICAgICAgICAgIHJlY2VpdmVyID0gcGFyc2VJbnQoc2VsZU1lc3NhZ2Uub3duZXIuaWQpXG4gICAgICAgICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBzZWxhID0gZmlsdGVyQnlJZCh1c2VycywgcGFyc2VJbnQoc2VsZU1lc3NhZ2Uuc2VuZGVyLmlkKSk7XG4gICAgICAgICAgICAgICAgICAgICAgICAkKCcudXNlc2VsZWN0ZWQnKS50ZXh0KHNlbGEubm9tICsgJyAnICsgc2VsYS5wcmVub21zKTtcbiAgICAgICAgICAgICAgICAgICAgICAgICQoJy51c2VtZXNzYWdlJykuaHRtbChzZWxlTWVzc2FnZS50b2RvKTtcbiAgICAgICAgICAgICAgICAgICAgICAgIHJlY2VpdmVyID0gcGFyc2VJbnQoc2VsZU1lc3NhZ2Uuc2VuZGVyLmlkKVxuICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgc2V0VXNlcnMocmVzcG9uc2UuZGF0YSlcbiAgICAgICAgICAgICAgICAgICAgJCgnI2NoYXRNb2RhbCcpLm1vZGFsKCdzaG93Jyk7XG4gICAgICAgICAgICAgICAgICAgIGxvY2FsU3RvcmFnZS5zZXRJdGVtKCd0b2RvaWQnLCBzZWxlTWVzc2FnZS5pZCk7XG4gICAgICAgICAgICAgICAgICAgIGxvY2FsU3RvcmFnZS5zZXRJdGVtKCdyZWNlaXZlcmlkJywgcmVjZWl2ZXIpO1xuICAgICAgICAgICAgICAgICAgICBmZXRjaENoYXRzKCk7XG4gICAgICAgICAgICAgICAgICAgICQoJyNjaGF0Y29udGVudCcpLnNjcm9sbFRvcCgkKCcjY2hhdGNvbnRlbnQnKVswXS5zY3JvbGxIZWlnaHQpO1xuICAgICAgICAgICAgICAgIH0pXG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfSk7XG4gICAgfSk7XG4gICAgJChmdW5jdGlvbiAoKSB7XG4gICAgICAgICQoXCIudXBkb1wiKS5lYWNoKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICQodGhpcykub2ZmKCkub24oXCJjbGlja1wiLCBhc3luYyBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnc2hvdycpO1xuICAgICAgICAgICAgICAgICQoJyNkaXZUb2RvcicpLnJlbW92ZUNsYXNzKCdoaWRlJyk7XG4gICAgICAgICAgICAgICAgJCgnI2RpdlRvZG9yJykuY3NzKCdkaXNwbGF5JywgJycpXG4gICAgICAgICAgICAgICAgJCgnI2RpdlRvZG8nKS5hZGRDbGFzcygnaGlkZScpO1xuICAgICAgICAgICAgICAgICQoJyNhZGRUb2RvRm9ybScpWzBdLnJlc2V0KCk7XG4gICAgICAgICAgICAgICAgY29uc3QgZGQgPSB0aGlzLmlkXG4gICAgICAgICAgICAgICAgY29uc3QgaWQgPSBwYXJzZUludChkZC5zcGxpdCgnLCcpWzBdKTtcbiAgICAgICAgICAgICAgICBjb25zdCBkdXIgPSBkZC5zcGxpdCgnLCcpWzJdICsgJyAnICsgZGQuc3BsaXQoJywnKVsxXTtcbiAgICAgICAgICAgICAgICAkKCcjZGR0b2RvJykudmFsKGR1cik7XG4gICAgICAgICAgICAgICAgYXdhaXQgYXhpb3Moe1xuICAgICAgICAgICAgICAgICAgICBtZXRob2Q6ICdHRVQnLFxuICAgICAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL3N0YXJ0L3RvZG8vZ2V0LycgKyBpZCxcbiAgICAgICAgICAgICAgICAgICAgY29udGVudFR5cGU6ICdhcHBsaWNhdGlvbi9qc29uOyBjaGFyc2V0PXV0Zi04JyxcbiAgICAgICAgICAgICAgICAgICAgZGF0YVR5cGU6ICdqc29uJyxcbiAgICAgICAgICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgICAgICAgICBsb2NhbFN0b3JhZ2Uuc2V0SXRlbSgndG9rZW4nLCBpZC50b1N0cmluZygpKTtcbiAgICAgICAgICAgICAgICAgICAgbGV0IGRhdGEgPSByZXNwb25zZS5kYXRhO1xuICAgICAgICAgICAgICAgICAgICAkKCcjZGF0ZXRhY2hlJykudmFsKGRhdGEuZGF0ZSk7XG4gICAgICAgICAgICAgICAgICAgIENLRURJVE9SLmluc3RhbmNlcy50b2RvLnNldERhdGEoZGF0YS50b2RvKTtcbiAgICAgICAgICAgICAgICAgICAgJCgnI2NodG9kb2FkZCcpLmFkZENsYXNzKCdoaWRlJyk7XG4gICAgICAgICAgICAgICAgICAgICQoJyNjaHRvZG9lZGl0JykucmVtb3ZlQ2xhc3MoJ2hpZGUnKTtcbiAgICAgICAgICAgICAgICAgICAgJCgnI3NtYWxsVGFjaGUnKS5tb2RhbCgnc2hvdycpO1xuICAgICAgICAgICAgICAgICAgICAkKCcjVHJhaXRlbWVudCcpLm1vZGFsKCdoaWRlJyk7XG4gICAgICAgICAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgICAgICAgICAgICAgICQoJyNUcmFpdGVtZW50JykubW9kYWwoJ2hpZGUnKTtcbiAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9KTtcbiAgICB9KTtcbiAgICAkKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgJChcIi5nZXR1XCIpLmVhY2goZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgJCh0aGlzKS5vZmYoKS5vbihcImNsaWNrXCIsIGFzeW5jIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICB2YXIgc2VsZSA9IGZpbHRlckJ5SWQodXNlcnMsIHRoaXMuaWQpO1xuICAgICAgICAgICAgICAgICQoJy51c2VzZWxlY3RlZCcpLmh0bWwoc2VsZS5ub20gKyAnICcgKyBzZWxlLnByZW5vbXMpXG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfSk7XG4gICAgfSk7XG5cbiAgICBjb25zdCByZW5kZXJDaGF0cyA9IGNoYXRzLm1hcCgoY2hhdCkgPT4ge1xuICAgICAgICBsZXQgbXAgPSAnICc7XG4gICAgICAgIGxldCBkZWxvID0gJzxhIGNsYXNzPVwiZGVsZXR5XCIgaWQ9JyArIGNoYXQuaWQgKyAnPjxpIGNsYXNzPVwiZmEgZmEtdHJhc2ggY29sLXBpbmtcIiBzdHlsZT1cImZvbnQtc2l6ZTogMTZweFwiIGFyaWEtaGlkZGVuPVwidHJ1ZVwiIHRpdGxlPVwiU3VwcHJpbWVyIGNldHRlIGxpZ25lXCI+PC9pPjwvYT4nO1xuXG4gICAgICAgIGlmIChwYXJzZUludChjdXJyZW50KSA9PT0gcGFyc2VJbnQoY2hhdC5vd25lci5pZCkpIHtcbiAgICAgICAgICAgIG1wID0gJzxkaXYgY2xhc3M9XCJtZXNzYWdlLWRhdGEgdGV4dC1yaWdodFwiPicgK1xuICAgICAgICAgICAgICAgICc8c3BhbiBjbGFzcz1cIm1lc3NhZ2UtZGF0YS10aW1lXCI+JyArIG1vbWVudChjaGF0LmRhdGUpLmxvY2FsZShcImZyXCIpLmZvcm1hdCgnTExMTCcpICsgJzwvc3Bhbj48L2Rpdj4nICtcbiAgICAgICAgICAgICAgICAnPGRpdiBjbGFzcz1cIm1lc3NhZ2Ugb3RoZXItbWVzc2FnZSBmbG9hdC1yaWdodFwiPicgKyBjaGF0Lm1lc3NhZ2UgKyAnPGJyLz4nK2RlbG8rJzwvZGl2PidcbiAgICAgICAgICAgIDtcbiAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgIG1wID0gJzxkaXYgY2xhc3M9XCJtZXNzYWdlLWRhdGFcIj4nICtcbiAgICAgICAgICAgICAgICAnPHNwYW4gY2xhc3M9XCJtZXNzYWdlLWRhdGEtdGltZVwiPicgKyBtb21lbnQoY2hhdC5kYXRlKS5sb2NhbGUoXCJmclwiKS5mb3JtYXQoJ0xMTEwnKSArICc8L3NwYW4+PC9kaXY+JyArXG4gICAgICAgICAgICAgICAgJzxkaXYgY2xhc3M9XCJtZXNzYWdlIG15LW1lc3NhZ2VcIj4nICsgY2hhdC5tZXNzYWdlICsgJzwvZGl2Pic7XG4gICAgICAgIH1cbiAgICAgICAgcmV0dXJuICg8bGkgY2xhc3M9XCJjbGVhcmZpeFwiIGtleT17Y2hhdC5pZH0gZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IG1wfX0vPilcblxuICAgIH0pO1xuICAgIFxuXG4gICAgY29uc3QgcmVuZGVyTW9uZGF5ID0gdG9kb3MubWFwKCh0b2RvKSA9PiB7XG4gICAgICAgIGxldCBkZCA9IG1vbWVudCh0b2RvLmRhdGUpLmZvcm1hdChcImRkZGRcIik7XG4gICAgICAgIGxldCBkZWQgPSBtb21lbnQodG9kby5kYXRlKS5mb3JtYXQoXCJERC9NTS9ZWVlZIEhIOm1tXCIpO1xuICAgICAgICBsZXQgZGFkID0gbW9tZW50KHRvZG8uZGF0ZSkuZm9ybWF0KFwiWVlZWS9NTS9ERFwiKTtcblxuICAgICAgICBsZXQgc3RhdHV0ID0gJyc7XG4gICAgICAgIGlmKG5ldyBEYXRlKGRhZCkgPiBuZXcgRGF0ZSh0b2RlaSkpe1xuICAgICAgICAgICAgaWYodG9kby5wcmlvcml0ZSAhPT0gMil7XG4gICAgICAgICAgICAgICAgc3RhdHV0ID0gJzxzcGFuIGNsYXNzPVwiYm9sbzcwMCBiZy1ncmVlbiBjb2wtd2hpdGVcIj7DgCBGQUlSRTwvc3Bhbj48L2JyPidcbiAgICAgICAgICAgIH1lbHNle1xuICAgICAgICAgICAgICAgIHN0YXR1dCA9ICc8c3BhbiBjbGFzcz1cImJnLWRlZXAtb3JhbmdlIGNvbC13aGl0ZVwiPkVOIEFUVEVOVEU8L3NwYW4+PC9icj4nO1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG4gICAgICAgIGlmKG5ldyBEYXRlKGRhZCkgPCBuZXcgRGF0ZSh0b2RlaSkpe1xuICAgICAgICAgICAgaWYodG9kby5wcmlvcml0ZSAhPT0gMikge1xuICAgICAgICAgICAgICAgIHN0YXR1dCA9ICc8c3BhbiBjbGFzcz1cImJvbG83MDAgYmctYmx1ZS1ncmV5IGNvbC13aGl0ZVwiPkRBVEUgRVhQSVLDiUU8L3NwYW4+PC9icj4nXG4gICAgICAgICAgICB9ZWxzZXtcbiAgICAgICAgICAgICAgICBzdGF0dXQgPSAnPHNwYW4gY2xhc3M9XCJib2xvNzAwIGJnLWJsdWUtZ3JleSBjb2wtd2hpdGVcIj5EQVRFIEVYUElSw4lFPC9zcGFuPjwvYnI+PHNwYW4gY2xhc3M9XCJiZy1kZWVwLW9yYW5nZSBjb2wtd2hpdGVcIj5FTiBBVFRFTlRFPC9zcGFuPjwvYnI+J1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG5cbiAgICAgICAgbGV0IGZpaWkgPSAgXCIgXCI7XG4gICAgICAgIGxldCBmaWNoaWVycyA9IHRvZG8uZmljaGllcnM7XG4gICAgICAgIGlmKGZpY2hpZXJzLmxlbmd0aCA+IDApe1xuICAgICAgICAgICAgZmljaGllcnMubWFwKChmaWNoKSA9PiB7XG4gICAgICAgICAgICAgICAgZmlpaSA9ICc8cD48aSBjbGFzcz1cImZhIGZhLXBhcGVyY2xpcFwiPjwvaT48YSBocmVmPVwiLycrZmljaC5mb2xkZSsnLycrZmljaC5ub21maWNoaWVyKydcIiB0YXJnZXQ9XCJfYmxhbmtcIiBjbGFzcz1cImNvbC1kZWVwLXB1cnBsZVwiPiAnICsgZmljaC5ub21maWNoaWVyICsgJzwvYT48L2JyPjwvcD4nICsgZmlpaTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG5cbiAgICAgICAgbGV0IG1hbWllO1xuICAgICAgICBsZXQgc2VuZGVyID0gJzxwICBzdHlsZT1cIm1hcmdpbjowICFpbXBvcnRhbnRcIiBjbGFzcz1cInRleHQtY2VudGVyIGhpZGUgJyArIHRvZG8uaWQgKyAndG9cIj4nICtcbiAgICAgICAgICAgICc8YSBjbGFzcz1cImRlbGV0b2RvXCIgaWQ9JyArIHRvZG8uaWQgKyAnPjxpIGNsYXNzPVwiZmEgZmEtdHJhc2ggY29sLXBpbmtcIiBzdHlsZT1cImZvbnQtc2l6ZTogMTZweFwiIGFyaWEtaGlkZGVuPVwidHJ1ZVwiIHRpdGxlPVwiU3VwcHJpbWVyIGNldHRlIGxpZ25lXCI+PC9pPjwvYT48L3A+PC90ZD48L3RyPjwvdGFibGU+JztcblxuICAgICAgICBpZiAodG9kby5zZW5kZXIgJiYgcGFyc2VJbnQoY3VycmVudCkgIT09IHBhcnNlSW50KHRvZG8uc2VuZGVyLmlkKSkge1xuICAgICAgICAgICAgc2VuZGVyID0gJ0RlOiAnICsgJzxzcGFuIGNsYXNzPVwiY29sLXBpbmtcIj4nICsgdG9kby5zZW5kZXIubm9tICsgJyAnICsgdG9kby5zZW5kZXIucHJlbm9tcyArICc8L3NwYW4+JyArXG4gICAgICAgICAgICAgICAgJzxwIHN0eWxlPVwibWFyZ2luOjAgIWltcG9ydGFudFwiIGNsYXNzPVwidGV4dC1jZW50ZXIgaGlkZSAnICsgdG9kby5pZCArICd0b1wiPicgK1xuICAgICAgICAgICAgICAgICc8YSBjbGFzcz1cImNvbW1lbnRvXCIgaWQ9JyArIHRvZG8uaWQgKyAnPjxpIGNsYXNzPVwiZmEgZmEtY29tbWVudCB0ZXh0LXdhcm5pbmcgbS1yLTE1XCIgc3R5bGU9XCJmb250LXNpemU6IDE2cHhcIiBhcmlhLWhpZGRlbj1cInRydWVcIiB0aXRsZT1cIkNvbW1lbnRlclwiPjwvaT48L2E+PC9wPjwvdGQ+PC90cj48L3RhYmxlPic7XG4gICAgICAgIH1cblxuICAgICAgICBpZiAodG9kby5zZW5kZXIgJiYgcGFyc2VJbnQoY3VycmVudCkgPT09IHBhcnNlSW50KHRvZG8uc2VuZGVyLmlkKSkge1xuICAgICAgICAgICAgc2VuZGVyID0gJ8OAOiAnICsgJzxzcGFuIGNsYXNzPVwiY29sLXBpbmtcIj4nICsgdG9kby5vd25lci5ub20gKyAnICcgKyB0b2RvLm93bmVyLnByZW5vbXMgKyAnPC9zcGFuPicgK1xuICAgICAgICAgICAgICAgICc8cCBzdHlsZT1cIm1hcmdpbjowICFpbXBvcnRhbnRcIiBjbGFzcz1cInRleHQtY2VudGVyIGhpZGUgJyArIHRvZG8uaWQgKyAndG9cIj4nICtcbiAgICAgICAgICAgICAgICAnPGEgY2xhc3M9XCJjb21tZW50b1wiIGlkPScgKyB0b2RvLmlkICsgJz48aSBjbGFzcz1cImZhIGZhLWNvbW1lbnQgdGV4dC13YXJuaW5nIG0tci0xNVwiIHN0eWxlPVwiZm9udC1zaXplOiAxNnB4XCIgYXJpYS1oaWRkZW49XCJ0cnVlXCIgdGl0bGU9XCJDb21tZW50ZXJcIj48L2k+PC9hPicgK1xuICAgICAgICAgICAgICAgICc8YSBjbGFzcz1cImRlbGV0b2RvXCIgaWQ9JyArIHRvZG8uaWQgKyAnPjxpIGNsYXNzPVwiZmEgZmEtdHJhc2ggY29sLXBpbmtcIiBzdHlsZT1cImZvbnQtc2l6ZTogMTZweFwiIGFyaWEtaGlkZGVuPVwidHJ1ZVwiIHRpdGxlPVwiU3VwcHJpbWVyIGNldHRlIGxpZ25lXCI+PC9pPjwvYT48L3A+PC90ZD48L3RyPjwvdGFibGU+JztcbiAgICAgICAgfVxuXG4gICAgICAgIGlmIChkZCA9PT0gXCJsdW5kaVwiICYmIHRvZG8ucHJpb3JpdGUgPT09IDMpIHtcbiAgICAgICAgICAgIG1hbWllID0gJzx0YWJsZSBzdHlsZT1cIndpZHRoOjEwMCU7cGFkZGluZzo1cHg7IGJvcmRlcjogMnB4IHNvbGlkICM2MDdEOEI7IG1hcmdpbi1ib3R0b206NXB4XCI+PHRyPjx0ZCBjbGFzcz1cImJnLXdoaXRlIGNvbC1ibGFjayBtLXQtNVwiPicrc3RhdHV0Kyc8c3BhbiBjbGFzcz1cImJnLXBpbmsgY29sLXdoaXRlXCI+SU1QT1JUQU5UPC9zcGFuPjwvYnI+JyArIHRvZG8udG9kbyArIGZpaWkgKyAnICcgKyBzZW5kZXI7XG4gICAgICAgIH1cbiAgICAgICAgaWYgKGRkID09PSBcImx1bmRpXCIgJiYgdG9kby5wcmlvcml0ZSA9PT0gMikge1xuICAgICAgICAgICAgbWFtaWUgPSAnPHRhYmxlIHN0eWxlPVwid2lkdGg6MTAwJTtwYWRkaW5nOjVweDsgYm9yZGVyOiAycHggc29saWQgIzYwN0Q4QjsgbWFyZ2luLWJvdHRvbTo1cHhcIj48dHI+PHRkIGNsYXNzPVwiYmctd2hpdGUgY29sLWJsYWNrIG0tdC01XCI+JytzdGF0dXQrJzxzcGFuIGNsYXNzPVwiYmctZGVlcC1wdXJwbGUgY29sLXdoaXRlXCI+Tm90ZSBkdTogJytkZWQrJzwvc3Bhbj48L2JyPicgKyB0b2RvLnRvZG8gKyBmaWlpICsgJyAnICsgc2VuZGVyO1xuICAgICAgICB9XG4gICAgICAgIGlmIChkZCA9PT0gXCJsdW5kaVwiICYmIHRvZG8ucHJpb3JpdGUgPT09IDEpIHtcbiAgICAgICAgICAgIG1hbWllID0gJzx0YWJsZSBzdHlsZT1cIndpZHRoOjEwMCU7cGFkZGluZzo1cHg7IGJvcmRlcjogMnB4IHNvbGlkICM2MDdEOEI7IG1hcmdpbi1ib3R0b206NXB4XCI+PHRyPjx0ZCBjbGFzcz1cImJnLXdoaXRlIGNvbC1ibGFjayBtLXQtNVwiPicrc3RhdHV0Kyc8c3BhbiBjbGFzcz1cImJnLWRlZXAtcHVycGxlIGNvbC13aGl0ZVwiPk5vdGUgZHU6ICcrZGVkKyc8L3NwYW4+PC9icj4nICsgdG9kby50b2RvICsgZmlpaSArICcgJyArIHNlbmRlcjtcbiAgICAgICAgfVxuXG4gICAgICAgIHJldHVybiAoPGRpdiBvbk1vdXNlT3Zlcj17KCkgPT4ge1xuICAgICAgICAgICAgc2h1dG8odG9kby5pZClcbiAgICAgICAgfX0gb25Nb3VzZU91dD17KCkgPT4ge1xuICAgICAgICAgICAgc2h1dG9kKHRvZG8uaWQpXG4gICAgICAgIH19IGtleT17dG9kby5pZH0+XG4gICAgICAgICAgICB7ZGQgPT09IFwibHVuZGlcIiAmJiB0b2RvLnByaW9yaXRlID09PSAzICYmXG4gICAgICAgICAgICAgICAgPGRpdiBrZXk9e3RvZG8uaWR9IGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBtYW1pZX19PjwvZGl2PlxuICAgICAgICAgICAgfVxuICAgICAgICAgICAge2RkID09PSBcImx1bmRpXCIgJiYgdG9kby5wcmlvcml0ZSA9PT0gMiAmJlxuICAgICAgICAgICAgICAgIDxkaXYga2V5PXt0b2RvLmlkfSBkYW5nZXJvdXNseVNldElubmVySFRNTD17e19faHRtbDogbWFtaWV9fT48L2Rpdj5cbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIHtkZCA9PT0gXCJsdW5kaVwiICYmIHRvZG8ucHJpb3JpdGUgPT09IDEgJiZcbiAgICAgICAgICAgICAgICA8ZGl2IGtleT17dG9kby5pZH0gZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IG1hbWllfX0+PC9kaXY+XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgPC9kaXY+KVxuXG4gICAgfSk7XG4gICAgY29uc3QgcmVuZGVyVHVlc2RheSA9IHRvZG9zLm1hcCgodG9kbykgPT4ge1xuICAgICAgICBsZXQgZGQgPSBtb21lbnQodG9kby5kYXRlKS5mb3JtYXQoXCJkZGRkXCIpO1xuICAgICAgICBsZXQgZGVkID0gbW9tZW50KHRvZG8uZGF0ZSkuZm9ybWF0KFwiREQvTU0vWVlZWSBISDptbVwiKTtcbiAgICAgICAgbGV0IGRhZCA9IG1vbWVudCh0b2RvLmRhdGUpLmZvcm1hdChcIllZWVkvTU0vRERcIik7XG5cbiAgICAgICAgbGV0IHN0YXR1dCA9ICcnO1xuICAgICAgICBpZihuZXcgRGF0ZShkYWQpID4gbmV3IERhdGUodG9kZWkpKXtcbiAgICAgICAgICAgIGlmKHRvZG8ucHJpb3JpdGUgIT09IDIpe1xuICAgICAgICAgICAgICAgIHN0YXR1dCA9ICc8c3BhbiBjbGFzcz1cImJvbG83MDAgYmctZ3JlZW4gY29sLXdoaXRlXCI+w4AgRkFJUkU8L3NwYW4+PC9icj4nXG4gICAgICAgICAgICB9ZWxzZXtcbiAgICAgICAgICAgICAgICBzdGF0dXQgPSAnPHNwYW4gY2xhc3M9XCJiZy1kZWVwLW9yYW5nZSBjb2wtd2hpdGVcIj5FTiBBVFRFTlRFPC9zcGFuPjwvYnI+JztcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgICAgICBpZihuZXcgRGF0ZShkYWQpIDwgbmV3IERhdGUodG9kZWkpKXtcbiAgICAgICAgICAgIGlmKHRvZG8ucHJpb3JpdGUgIT09IDIpIHtcbiAgICAgICAgICAgICAgICBzdGF0dXQgPSAnPHNwYW4gY2xhc3M9XCJib2xvNzAwIGJnLWJsdWUtZ3JleSBjb2wtd2hpdGVcIj5EQVRFIEVYUElSw4lFPC9zcGFuPjwvYnI+J1xuICAgICAgICAgICAgfWVsc2V7XG4gICAgICAgICAgICAgICAgc3RhdHV0ID0gJzxzcGFuIGNsYXNzPVwiYm9sbzcwMCBiZy1ibHVlLWdyZXkgY29sLXdoaXRlXCI+REFURSBFWFBJUsOJRTwvc3Bhbj48L2JyPjxzcGFuIGNsYXNzPVwiYmctZGVlcC1vcmFuZ2UgY29sLXdoaXRlXCI+RU4gQVRURU5URTwvc3Bhbj48L2JyPidcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuXG5cbiAgICAgICAgbGV0IGZpaWkgPSAgXCIgXCI7XG4gICAgICAgIGxldCBmaWNoaWVycyA9IHRvZG8uZmljaGllcnM7XG4gICAgICAgIGlmKGZpY2hpZXJzLmxlbmd0aCA+IDApe1xuICAgICAgICAgICAgZmljaGllcnMubWFwKChmaWNoKSA9PiB7XG4gICAgICAgICAgICAgICAgZmlpaSA9ICc8cD48aSBjbGFzcz1cImZhIGZhLXBhcGVyY2xpcFwiPjwvaT48YSBocmVmPVwiLycrZmljaC5mb2xkZSsnLycrZmljaC5ub21maWNoaWVyKydcIiB0YXJnZXQ9XCJfYmxhbmtcIiBjbGFzcz1cImNvbC1kZWVwLXB1cnBsZVwiPiAnICsgZmljaC5ub21maWNoaWVyICsgJzwvYT48L2JyPjwvcD4nICsgZmlpaTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG4gICAgICAgIGxldCBtYW1pZTtcbiAgICAgICAgbGV0IHNlbmRlciA9ICc8cCAgc3R5bGU9XCJtYXJnaW46MCAhaW1wb3J0YW50XCIgY2xhc3M9XCJ0ZXh0LWNlbnRlciBoaWRlICcgKyB0b2RvLmlkICsgJ3RvXCI+JyArXG4gICAgICAgICAgICAnPGEgY2xhc3M9XCJkZWxldG9kb1wiIGlkPScgKyB0b2RvLmlkICsgJz48aSBjbGFzcz1cImZhIGZhLXRyYXNoIGNvbC1waW5rXCIgc3R5bGU9XCJmb250LXNpemU6IDE2cHhcIiBhcmlhLWhpZGRlbj1cInRydWVcIiB0aXRsZT1cIlN1cHByaW1lciBjZXR0ZSBsaWduZVwiPjwvaT48L2E+PC9wPjwvdGQ+PC90cj48L3RhYmxlPic7XG5cbiAgICAgICAgaWYgKHRvZG8uc2VuZGVyICYmIHBhcnNlSW50KGN1cnJlbnQpICE9PSBwYXJzZUludCh0b2RvLnNlbmRlci5pZCkpIHtcbiAgICAgICAgICAgIHNlbmRlciA9ICdEZTogJyArICc8c3BhbiBjbGFzcz1cImNvbC1waW5rXCI+JyArIHRvZG8uc2VuZGVyLm5vbSArICcgJyArIHRvZG8uc2VuZGVyLnByZW5vbXMgKyAnPC9zcGFuPicgK1xuICAgICAgICAgICAgICAgICc8cCBzdHlsZT1cIm1hcmdpbjowICFpbXBvcnRhbnRcIiBjbGFzcz1cInRleHQtY2VudGVyIGhpZGUgJyArIHRvZG8uaWQgKyAndG9cIj4nICtcbiAgICAgICAgICAgICAgICAnPGEgY2xhc3M9XCJjb21tZW50b1wiIGlkPScgKyB0b2RvLmlkICsgJz48aSBjbGFzcz1cImZhIGZhLWNvbW1lbnQgdGV4dC13YXJuaW5nIG0tci0xNVwiIHN0eWxlPVwiZm9udC1zaXplOiAxNnB4XCIgYXJpYS1oaWRkZW49XCJ0cnVlXCIgdGl0bGU9XCJDb21tZW50ZXJcIj48L2k+PC9hPjwvcD48L3RkPjwvdHI+PC90YWJsZT4nO1xuICAgICAgICB9XG5cbiAgICAgICAgaWYgKHRvZG8uc2VuZGVyICYmIHBhcnNlSW50KGN1cnJlbnQpID09PSBwYXJzZUludCh0b2RvLnNlbmRlci5pZCkpIHtcbiAgICAgICAgICAgIHNlbmRlciA9ICfDgDogJyArICc8c3BhbiBjbGFzcz1cImNvbC1waW5rXCI+JyArIHRvZG8ub3duZXIubm9tICsgJyAnICsgdG9kby5vd25lci5wcmVub21zICsgJzwvc3Bhbj4nICtcbiAgICAgICAgICAgICAgICAnPHAgc3R5bGU9XCJtYXJnaW46MCAhaW1wb3J0YW50XCIgY2xhc3M9XCJ0ZXh0LWNlbnRlciBoaWRlICcgKyB0b2RvLmlkICsgJ3RvXCI+JyArXG4gICAgICAgICAgICAgICAgJzxhIGNsYXNzPVwiY29tbWVudG9cIiBpZD0nICsgdG9kby5pZCArICc+PGkgY2xhc3M9XCJmYSBmYS1jb21tZW50IHRleHQtd2FybmluZyBtLXItMTVcIiBzdHlsZT1cImZvbnQtc2l6ZTogMTZweFwiIGFyaWEtaGlkZGVuPVwidHJ1ZVwiIHRpdGxlPVwiQ29tbWVudGVyXCI+PC9pPjwvYT4nICtcbiAgICAgICAgICAgICAgICAnPGEgY2xhc3M9XCJkZWxldG9kb1wiIGlkPScgKyB0b2RvLmlkICsgJz48aSBjbGFzcz1cImZhIGZhLXRyYXNoIGNvbC1waW5rXCIgc3R5bGU9XCJmb250LXNpemU6IDE2cHhcIiBhcmlhLWhpZGRlbj1cInRydWVcIiB0aXRsZT1cIlN1cHByaW1lciBjZXR0ZSBsaWduZVwiPjwvaT48L2E+PC9wPjwvdGQ+PC90cj48L3RhYmxlPic7XG4gICAgICAgIH1cblxuICAgICAgICBpZiAoZGQgPT09IFwibWFyZGlcIiAmJiB0b2RvLnByaW9yaXRlID09PSAzKSB7XG4gICAgICAgICAgICBtYW1pZSA9ICc8dGFibGUgc3R5bGU9XCJ3aWR0aDoxMDAlO3BhZGRpbmc6NXB4OyBib3JkZXI6IDJweCBzb2xpZCAjNjA3RDhCOyBtYXJnaW4tYm90dG9tOjVweFwiPjx0cj48dGQgY2xhc3M9XCJiZy13aGl0ZSBjb2wtYmxhY2sgbS10LTVcIj4nK3N0YXR1dCsnPHNwYW4gY2xhc3M9XCJiZy1waW5rIGNvbC13aGl0ZVwiPklNUE9SVEFOVDwvc3Bhbj48L2JyPicgKyB0b2RvLnRvZG8gKyBmaWlpICsgJyAnICsgc2VuZGVyO1xuICAgICAgICB9XG4gICAgICAgIGlmIChkZCA9PT0gXCJtYXJkaVwiICYmIHRvZG8ucHJpb3JpdGUgPT09IDIpIHtcbiAgICAgICAgICAgIG1hbWllID0gJzx0YWJsZSBzdHlsZT1cIndpZHRoOjEwMCU7cGFkZGluZzo1cHg7IGJvcmRlcjogMnB4IHNvbGlkICM2MDdEOEI7IG1hcmdpbi1ib3R0b206NXB4XCI+PHRyPjx0ZCBjbGFzcz1cImJnLXdoaXRlIGNvbC1ibGFjayBtLXQtNVwiPicrc3RhdHV0Kyc8c3BhbiBjbGFzcz1cImJnLWRlZXAtcHVycGxlIGNvbC13aGl0ZVwiPk5vdGUgZHU6ICcrZGVkKyc8L3NwYW4+PC9icj4nICsgdG9kby50b2RvICsgZmlpaSArICcgJyArIHNlbmRlcjtcbiAgICAgICAgfVxuICAgICAgICBpZiAoZGQgPT09IFwibWFyZGlcIiAmJiB0b2RvLnByaW9yaXRlID09PSAxKSB7XG4gICAgICAgICAgICBtYW1pZSA9ICc8dGFibGUgc3R5bGU9XCJ3aWR0aDoxMDAlO3BhZGRpbmc6NXB4OyBib3JkZXI6IDJweCBzb2xpZCAjNjA3RDhCOyBtYXJnaW4tYm90dG9tOjVweFwiPjx0cj48dGQgY2xhc3M9XCJiZy13aGl0ZSBjb2wtYmxhY2sgbS10LTVcIj4nK3N0YXR1dCsnPHNwYW4gY2xhc3M9XCJiZy1kZWVwLXB1cnBsZSBjb2wtd2hpdGVcIj5Ob3RlIGR1OiAnK2RlZCsnPC9zcGFuPjwvYnI+JyArIHRvZG8udG9kbyArIGZpaWkgKyAnICcgKyBzZW5kZXI7XG4gICAgICAgIH1cblxuICAgICAgICByZXR1cm4gKDxkaXYgb25Nb3VzZU92ZXI9eygpID0+IHtcbiAgICAgICAgICAgIHNodXRvKHRvZG8uaWQpXG4gICAgICAgIH19IG9uTW91c2VPdXQ9eygpID0+IHtcbiAgICAgICAgICAgIHNodXRvZCh0b2RvLmlkKVxuICAgICAgICB9fSBrZXk9e3RvZG8uaWR9PlxuICAgICAgICAgICAge2RkID09PSBcIm1hcmRpXCIgJiYgdG9kby5wcmlvcml0ZSA9PT0gMyAmJlxuICAgICAgICAgICAgICAgIDxkaXYga2V5PXt0b2RvLmlkfSBkYW5nZXJvdXNseVNldElubmVySFRNTD17e19faHRtbDogbWFtaWV9fT48L2Rpdj5cbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIHtkZCA9PT0gXCJtYXJkaVwiICYmIHRvZG8ucHJpb3JpdGUgPT09IDIgJiZcbiAgICAgICAgICAgICAgICA8ZGl2IGtleT17dG9kby5pZH0gZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IG1hbWllfX0+PC9kaXY+XG4gICAgICAgICAgICB9XG4gICAgICAgICAgICB7ZGQgPT09IFwibWFyZGlcIiAmJiB0b2RvLnByaW9yaXRlID09PSAxICYmXG4gICAgICAgICAgICAgICAgPGRpdiBrZXk9e3RvZG8uaWR9IGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBtYW1pZX19PjwvZGl2PlxuICAgICAgICAgICAgfVxuICAgICAgICA8L2Rpdj4pXG4gICAgfSk7XG4gICAgY29uc3QgcmVuZGVyV2VzbmVzZGF5ID0gdG9kb3MubWFwKCh0b2RvKSA9PiB7XG4gICAgICAgIGxldCBkZCA9IG1vbWVudCh0b2RvLmRhdGUpLmZvcm1hdChcImRkZGRcIik7XG4gICAgICAgIGxldCBkZWQgPSBtb21lbnQodG9kby5kYXRlKS5mb3JtYXQoXCJERC9NTS9ZWVlZIEhIOm1tXCIpO1xuICAgICAgICBsZXQgZGFkID0gbW9tZW50KHRvZG8uZGF0ZSkuZm9ybWF0KFwiWVlZWS9NTS9ERFwiKTtcblxuICAgICAgICBsZXQgc3RhdHV0ID0gJyc7XG4gICAgICAgIGlmKG5ldyBEYXRlKGRhZCkgPiBuZXcgRGF0ZSh0b2RlaSkpe1xuICAgICAgICAgICAgaWYodG9kby5wcmlvcml0ZSAhPT0gMil7XG4gICAgICAgICAgICAgICAgc3RhdHV0ID0gJzxzcGFuIGNsYXNzPVwiYm9sbzcwMCBiZy1ncmVlbiBjb2wtd2hpdGVcIj7DgCBGQUlSRTwvc3Bhbj48L2JyPidcbiAgICAgICAgICAgIH1lbHNle1xuICAgICAgICAgICAgICAgIHN0YXR1dCA9ICc8c3BhbiBjbGFzcz1cImJnLWRlZXAtb3JhbmdlIGNvbC13aGl0ZVwiPkVOIEFUVEVOVEU8L3NwYW4+PC9icj4nO1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG4gICAgICAgIGlmKG5ldyBEYXRlKGRhZCkgPCBuZXcgRGF0ZSh0b2RlaSkpe1xuICAgICAgICAgICAgaWYodG9kby5wcmlvcml0ZSAhPT0gMikge1xuICAgICAgICAgICAgICAgIHN0YXR1dCA9ICc8c3BhbiBjbGFzcz1cImJvbG83MDAgYmctYmx1ZS1ncmV5IGNvbC13aGl0ZVwiPkRBVEUgRVhQSVLDiUU8L3NwYW4+PC9icj4nXG4gICAgICAgICAgICB9ZWxzZXtcbiAgICAgICAgICAgICAgICBzdGF0dXQgPSAnPHNwYW4gY2xhc3M9XCJib2xvNzAwIGJnLWJsdWUtZ3JleSBjb2wtd2hpdGVcIj5EQVRFIEVYUElSw4lFPC9zcGFuPjwvYnI+PHNwYW4gY2xhc3M9XCJiZy1kZWVwLW9yYW5nZSBjb2wtd2hpdGVcIj5FTiBBVFRFTlRFPC9zcGFuPjwvYnI+J1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG5cblxuICAgICAgICBsZXQgZmlpaSA9ICBcIiBcIjtcbiAgICAgICAgbGV0IGZpY2hpZXJzID0gdG9kby5maWNoaWVycztcbiAgICAgICAgaWYoZmljaGllcnMubGVuZ3RoID4gMCl7XG4gICAgICAgICAgICBmaWNoaWVycy5tYXAoKGZpY2gpID0+IHtcbiAgICAgICAgICAgICAgICBmaWlpID0gJzxwPjxpIGNsYXNzPVwiZmEgZmEtcGFwZXJjbGlwXCI+PC9pPjxhIGhyZWY9XCIvJytmaWNoLmZvbGRlKycvJytmaWNoLm5vbWZpY2hpZXIrJ1wiIHRhcmdldD1cIl9ibGFua1wiIGNsYXNzPVwiY29sLWRlZXAtcHVycGxlXCI+ICcgKyBmaWNoLm5vbWZpY2hpZXIgKyAnPC9hPjwvYnI+PC9wPicgKyBmaWlpO1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH1cblxuICAgICAgICBsZXQgbWFtaWU7XG4gICAgICAgIGxldCBzZW5kZXIgPSAnPHAgIHN0eWxlPVwibWFyZ2luOjAgIWltcG9ydGFudFwiIGNsYXNzPVwidGV4dC1jZW50ZXIgaGlkZSAnICsgdG9kby5pZCArICd0b1wiPicgK1xuICAgICAgICAgICAgJzxhIGNsYXNzPVwiZGVsZXRvZG9cIiBpZD0nICsgdG9kby5pZCArICc+PGkgY2xhc3M9XCJmYSBmYS10cmFzaCBjb2wtcGlua1wiIHN0eWxlPVwiZm9udC1zaXplOiAxNnB4XCIgYXJpYS1oaWRkZW49XCJ0cnVlXCIgdGl0bGU9XCJTdXBwcmltZXIgY2V0dGUgbGlnbmVcIj48L2k+PC9hPjwvcD48L3RkPjwvdHI+PC90YWJsZT4nO1xuXG4gICAgICAgIGlmICh0b2RvLnNlbmRlciAmJiBwYXJzZUludChjdXJyZW50KSAhPT0gcGFyc2VJbnQodG9kby5zZW5kZXIuaWQpKSB7XG4gICAgICAgICAgICBzZW5kZXIgPSAnRGU6ICcgKyAnPHNwYW4gY2xhc3M9XCJjb2wtcGlua1wiPicgKyB0b2RvLnNlbmRlci5ub20gKyAnICcgKyB0b2RvLnNlbmRlci5wcmVub21zICsgJzwvc3Bhbj4nICtcbiAgICAgICAgICAgICAgICAnPHAgc3R5bGU9XCJtYXJnaW46MCAhaW1wb3J0YW50XCIgY2xhc3M9XCJ0ZXh0LWNlbnRlciBoaWRlICcgKyB0b2RvLmlkICsgJ3RvXCI+JyArXG4gICAgICAgICAgICAgICAgJzxhIGNsYXNzPVwiY29tbWVudG9cIiBpZD0nICsgdG9kby5pZCArICc+PGkgY2xhc3M9XCJmYSBmYS1jb21tZW50IHRleHQtd2FybmluZyBtLXItMTVcIiBzdHlsZT1cImZvbnQtc2l6ZTogMTZweFwiIGFyaWEtaGlkZGVuPVwidHJ1ZVwiIHRpdGxlPVwiQ29tbWVudGVyXCI+PC9pPjwvYT48L3A+PC90ZD48L3RyPjwvdGFibGU+JztcbiAgICAgICAgfVxuXG4gICAgICAgIGlmICh0b2RvLnNlbmRlciAmJiBwYXJzZUludChjdXJyZW50KSA9PT0gcGFyc2VJbnQodG9kby5zZW5kZXIuaWQpKSB7XG4gICAgICAgICAgICBzZW5kZXIgPSAnw4A6ICcgKyAnPHNwYW4gY2xhc3M9XCJjb2wtcGlua1wiPicgKyB0b2RvLm93bmVyLm5vbSArICcgJyArIHRvZG8ub3duZXIucHJlbm9tcyArICc8L3NwYW4+JyArXG4gICAgICAgICAgICAgICAgJzxwIHN0eWxlPVwibWFyZ2luOjAgIWltcG9ydGFudFwiIGNsYXNzPVwidGV4dC1jZW50ZXIgaGlkZSAnICsgdG9kby5pZCArICd0b1wiPicgK1xuICAgICAgICAgICAgICAgICc8YSBjbGFzcz1cImNvbW1lbnRvXCIgaWQ9JyArIHRvZG8uaWQgKyAnPjxpIGNsYXNzPVwiZmEgZmEtY29tbWVudCB0ZXh0LXdhcm5pbmcgbS1yLTE1XCIgc3R5bGU9XCJmb250LXNpemU6IDE2cHhcIiBhcmlhLWhpZGRlbj1cInRydWVcIiB0aXRsZT1cIkNvbW1lbnRlclwiPjwvaT48L2E+JyArXG4gICAgICAgICAgICAgICAgJzxhIGNsYXNzPVwiZGVsZXRvZG9cIiBpZD0nICsgdG9kby5pZCArICc+PGkgY2xhc3M9XCJmYSBmYS10cmFzaCBjb2wtcGlua1wiIHN0eWxlPVwiZm9udC1zaXplOiAxNnB4XCIgYXJpYS1oaWRkZW49XCJ0cnVlXCIgdGl0bGU9XCJTdXBwcmltZXIgY2V0dGUgbGlnbmVcIj48L2k+PC9hPjwvcD48L3RkPjwvdHI+PC90YWJsZT4nO1xuICAgICAgICB9XG5cbiAgICAgICAgaWYgKGRkID09PSBcIm1lcmNyZWRpXCIgJiYgdG9kby5wcmlvcml0ZSA9PT0gMykge1xuICAgICAgICAgICAgbWFtaWUgPSAnPHRhYmxlIHN0eWxlPVwid2lkdGg6MTAwJTtwYWRkaW5nOjVweDsgYm9yZGVyOiAycHggc29saWQgIzYwN0Q4QjsgbWFyZ2luLWJvdHRvbTo1cHhcIj48dHI+PHRkIGNsYXNzPVwiYmctd2hpdGUgY29sLWJsYWNrIG0tdC01XCI+JytzdGF0dXQrJzxzcGFuIGNsYXNzPVwiYmctcGluayBjb2wtd2hpdGVcIj5JTVBPUlRBTlQ8L3NwYW4+PC9icj4nICsgdG9kby50b2RvICsgZmlpaSArICcgJyArIHNlbmRlcjtcbiAgICAgICAgfVxuICAgICAgICBpZiAoZGQgPT09IFwibWVyY3JlZGlcIiAmJiB0b2RvLnByaW9yaXRlID09PSAyKSB7XG4gICAgICAgICAgICBtYW1pZSA9ICc8dGFibGUgc3R5bGU9XCJ3aWR0aDoxMDAlO3BhZGRpbmc6NXB4OyBib3JkZXI6IDJweCBzb2xpZCAjNjA3RDhCOyBtYXJnaW4tYm90dG9tOjVweFwiPjx0cj48dGQgY2xhc3M9XCJiZy13aGl0ZSBjb2wtYmxhY2sgbS10LTVcIj4nK3N0YXR1dCsnPHNwYW4gY2xhc3M9XCJiZy1kZWVwLXB1cnBsZSBjb2wtd2hpdGVcIj5Ob3RlIGR1OiAnK2RlZCsnPC9zcGFuPjwvYnI+JyArIHRvZG8udG9kbyArIGZpaWkgKyAnICcgKyBzZW5kZXI7XG4gICAgICAgIH1cbiAgICAgICAgaWYgKGRkID09PSBcIm1lcmNyZWRpXCIgJiYgdG9kby5wcmlvcml0ZSA9PT0gMSkge1xuICAgICAgICAgICAgbWFtaWUgPSAnPHRhYmxlIHN0eWxlPVwid2lkdGg6MTAwJTtwYWRkaW5nOjVweDsgYm9yZGVyOiAycHggc29saWQgIzYwN0Q4QjsgbWFyZ2luLWJvdHRvbTo1cHhcIj48dHI+PHRkIGNsYXNzPVwiYmctd2hpdGUgY29sLWJsYWNrIG0tdC01XCI+JytzdGF0dXQrJzxzcGFuIGNsYXNzPVwiYmctZGVlcC1wdXJwbGUgY29sLXdoaXRlXCI+Tm90ZSBkdTogJytkZWQrJzwvc3Bhbj48L2JyPicgKyB0b2RvLnRvZG8gKyBmaWlpICsgJyAnICsgc2VuZGVyO1xuICAgICAgICB9XG5cbiAgICAgICAgcmV0dXJuICg8ZGl2IG9uTW91c2VPdmVyPXsoKSA9PiB7XG4gICAgICAgICAgICBzaHV0byh0b2RvLmlkKVxuICAgICAgICB9fSBvbk1vdXNlT3V0PXsoKSA9PiB7XG4gICAgICAgICAgICBzaHV0b2QodG9kby5pZClcbiAgICAgICAgfX0ga2V5PXt0b2RvLmlkfT5cbiAgICAgICAgICAgIHtkZCA9PT0gXCJtZXJjcmVkaVwiICYmIHRvZG8ucHJpb3JpdGUgPT09IDMgJiZcbiAgICAgICAgICAgICAgICA8ZGl2IGtleT17dG9kby5pZH0gZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IG1hbWllfX0+PC9kaXY+XG4gICAgICAgICAgICB9XG4gICAgICAgICAgICB7ZGQgPT09IFwibWVyY3JlZGlcIiAmJiB0b2RvLnByaW9yaXRlID09PSAyICYmXG4gICAgICAgICAgICAgICAgPGRpdiBrZXk9e3RvZG8uaWR9IGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBtYW1pZX19PjwvZGl2PlxuICAgICAgICAgICAgfVxuICAgICAgICAgICAge2RkID09PSBcIm1lcmNyZWRpXCIgJiYgdG9kby5wcmlvcml0ZSA9PT0gMSAmJlxuICAgICAgICAgICAgICAgIDxkaXYga2V5PXt0b2RvLmlkfSBkYW5nZXJvdXNseVNldElubmVySFRNTD17e19faHRtbDogbWFtaWV9fT48L2Rpdj5cbiAgICAgICAgICAgIH1cbiAgICAgICAgPC9kaXY+KVxuICAgIH0pO1xuICAgIGNvbnN0IHJlbmRlclRodXJzZGF5ID0gdG9kb3MubWFwKCh0b2RvKSA9PiB7XG5cbiAgICAgICAgbGV0IGRkID0gbW9tZW50KHRvZG8uZGF0ZSkuZm9ybWF0KFwiZGRkZFwiKTtcbiAgICAgICAgbGV0IGRlZCA9IG1vbWVudCh0b2RvLmRhdGUpLmZvcm1hdChcIkREL01NL1lZWVkgSEg6bW1cIik7XG4gICAgICAgIGxldCBkYWQgPSBtb21lbnQodG9kby5kYXRlKS5mb3JtYXQoXCJZWVlZLU1NLUREXCIpO1xuXG4gICAgICAgIGxldCBzdGF0dXQgPSAnJztcblxuICAgICAgICBpZihuZXcgRGF0ZShkYWQpID4gbmV3IERhdGUodG9kZWkpKXtcbiAgICAgICAgICAgIGlmKHRvZG8ucHJpb3JpdGUgIT09IDIpe1xuICAgICAgICAgICAgICAgIHN0YXR1dCA9ICc8c3BhbiBjbGFzcz1cImJvbG83MDAgYmctZ3JlZW4gY29sLXdoaXRlXCI+w4AgRkFJUkU8L3NwYW4+PC9icj4nXG4gICAgICAgICAgICB9ZWxzZXtcbiAgICAgICAgICAgICAgICBzdGF0dXQgPSAnPHNwYW4gY2xhc3M9XCJiZy1kZWVwLW9yYW5nZSBjb2wtd2hpdGVcIj5FTiBBVFRFTlRFPC9zcGFuPjwvYnI+JztcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgICAgICBpZihuZXcgRGF0ZShkYWQpIDwgbmV3IERhdGUodG9kZWkpKXtcbiAgICAgICAgICAgIGlmKHRvZG8ucHJpb3JpdGUgIT09IDIpIHtcbiAgICAgICAgICAgICAgICBzdGF0dXQgPSAnPHNwYW4gY2xhc3M9XCJib2xvNzAwIGJnLWJsdWUtZ3JleSBjb2wtd2hpdGVcIj5EQVRFIEVYUElSw4lFPC9zcGFuPjwvYnI+J1xuICAgICAgICAgICAgfWVsc2V7XG4gICAgICAgICAgICAgICAgc3RhdHV0ID0gJzxzcGFuIGNsYXNzPVwiYm9sbzcwMCBiZy1ibHVlLWdyZXkgY29sLXdoaXRlXCI+REFURSBFWFBJUsOJRTwvc3Bhbj48L2JyPjxzcGFuIGNsYXNzPVwiYmctZGVlcC1vcmFuZ2UgY29sLXdoaXRlXCI+RU4gQVRURU5URTwvc3Bhbj48L2JyPidcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuXG4gICAgICAgIGxldCBmaWlpID0gIFwiIFwiO1xuICAgICAgICBsZXQgZmljaGllcnMgPSB0b2RvLmZpY2hpZXJzO1xuICAgICAgICBpZihmaWNoaWVycy5sZW5ndGggPiAwKXtcbiAgICAgICAgICAgIGZpY2hpZXJzLm1hcCgoZmljaCkgPT4ge1xuICAgICAgICAgICAgICAgIGZpaWkgPSAnPHA+PGkgY2xhc3M9XCJmYSBmYS1wYXBlcmNsaXBcIj48L2k+PGEgaHJlZj1cIi8nK2ZpY2guZm9sZGUrJy8nK2ZpY2gubm9tZmljaGllcisnXCIgdGFyZ2V0PVwiX2JsYW5rXCIgY2xhc3M9XCJjb2wtZGVlcC1wdXJwbGVcIj4gJyArIGZpY2gubm9tZmljaGllciArICc8L2E+PC9icj48L3A+JyArIGZpaWk7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfVxuXG4gICAgICAgIGxldCBtYW1pZTtcbiAgICAgICAgbGV0IHNlbmRlciA9ICc8cCAgc3R5bGU9XCJtYXJnaW46MCAhaW1wb3J0YW50XCIgY2xhc3M9XCJ0ZXh0LWNlbnRlciBoaWRlICcgKyB0b2RvLmlkICsgJ3RvXCI+JyArXG4gICAgICAgICAgICAnPGEgY2xhc3M9XCJkZWxldG9kb1wiIGlkPScgKyB0b2RvLmlkICsgJz48aSBjbGFzcz1cImZhIGZhLXRyYXNoIGNvbC1waW5rXCIgc3R5bGU9XCJmb250LXNpemU6IDE2cHhcIiBhcmlhLWhpZGRlbj1cInRydWVcIiB0aXRsZT1cIlN1cHByaW1lciBjZXR0ZSBsaWduZVwiPjwvaT48L2E+PC9wPjwvdGQ+PC90cj48L3RhYmxlPic7XG5cbiAgICAgICAgaWYgKHRvZG8uc2VuZGVyICYmIHBhcnNlSW50KGN1cnJlbnQpICE9PSBwYXJzZUludCh0b2RvLnNlbmRlci5pZCkpIHtcbiAgICAgICAgICAgIHNlbmRlciA9ICdEZTogJyArICc8c3BhbiBjbGFzcz1cImNvbC1waW5rXCI+JyArIHRvZG8uc2VuZGVyLm5vbSArICcgJyArIHRvZG8uc2VuZGVyLnByZW5vbXMgKyAnPC9zcGFuPicgK1xuICAgICAgICAgICAgICAgICc8cCBzdHlsZT1cIm1hcmdpbjowICFpbXBvcnRhbnRcIiBjbGFzcz1cInRleHQtY2VudGVyIGhpZGUgJyArIHRvZG8uaWQgKyAndG9cIj4nICtcbiAgICAgICAgICAgICAgICAnPGEgY2xhc3M9XCJjb21tZW50b1wiIGlkPScgKyB0b2RvLmlkICsgJz48aSBjbGFzcz1cImZhIGZhLWNvbW1lbnQgdGV4dC13YXJuaW5nIG0tci0xNVwiIHN0eWxlPVwiZm9udC1zaXplOiAxNnB4XCIgYXJpYS1oaWRkZW49XCJ0cnVlXCIgdGl0bGU9XCJDb21tZW50ZXJcIj48L2k+PC9hPjwvcD48L3RkPjwvdHI+PC90YWJsZT4nO1xuICAgICAgICB9XG5cbiAgICAgICAgaWYgKHRvZG8uc2VuZGVyICYmIHBhcnNlSW50KGN1cnJlbnQpID09PSBwYXJzZUludCh0b2RvLnNlbmRlci5pZCkpIHtcbiAgICAgICAgICAgIHNlbmRlciA9ICfDgDogJyArICc8c3BhbiBjbGFzcz1cImNvbC1waW5rXCI+JyArIHRvZG8ub3duZXIubm9tICsgJyAnICsgdG9kby5vd25lci5wcmVub21zICsgJzwvc3Bhbj4nICtcbiAgICAgICAgICAgICAgICAnPHAgc3R5bGU9XCJtYXJnaW46MCAhaW1wb3J0YW50XCIgY2xhc3M9XCJ0ZXh0LWNlbnRlciBoaWRlICcgKyB0b2RvLmlkICsgJ3RvXCI+JyArXG4gICAgICAgICAgICAgICAgJzxhIGNsYXNzPVwiY29tbWVudG9cIiBpZD0nICsgdG9kby5pZCArICc+PGkgY2xhc3M9XCJmYSBmYS1jb21tZW50IHRleHQtd2FybmluZyBtLXItMTVcIiBzdHlsZT1cImZvbnQtc2l6ZTogMTZweFwiIGFyaWEtaGlkZGVuPVwidHJ1ZVwiIHRpdGxlPVwiQ29tbWVudGVyXCI+PC9pPjwvYT4nICtcbiAgICAgICAgICAgICAgICAnPGEgY2xhc3M9XCJkZWxldG9kb1wiIGlkPScgKyB0b2RvLmlkICsgJz48aSBjbGFzcz1cImZhIGZhLXRyYXNoIGNvbC1waW5rXCIgc3R5bGU9XCJmb250LXNpemU6IDE2cHhcIiBhcmlhLWhpZGRlbj1cInRydWVcIiB0aXRsZT1cIlN1cHByaW1lciBjZXR0ZSBsaWduZVwiPjwvaT48L2E+PC9wPjwvdGQ+PC90cj48L3RhYmxlPic7XG4gICAgICAgIH1cblxuICAgICAgICBpZiAoZGQgPT09IFwiamV1ZGlcIiAmJiB0b2RvLnByaW9yaXRlID09PSAzKSB7XG4gICAgICAgICAgICBtYW1pZSA9ICc8dGFibGUgc3R5bGU9XCJ3aWR0aDoxMDAlO3BhZGRpbmc6NXB4OyBib3JkZXI6IDJweCBzb2xpZCAjNjA3RDhCOyBtYXJnaW4tYm90dG9tOjVweFwiPjx0cj48dGQgY2xhc3M9XCJiZy13aGl0ZSBjb2wtYmxhY2sgbS10LTVcIj4nK3N0YXR1dCsnPHNwYW4gY2xhc3M9XCJiZy1waW5rIGNvbC13aGl0ZVwiPklNUE9SVEFOVDwvc3Bhbj48L2JyPicgKyB0b2RvLnRvZG8gKyBmaWlpICsgJyAnICsgc2VuZGVyO1xuICAgICAgICB9XG4gICAgICAgIGlmIChkZCA9PT0gXCJqZXVkaVwiICYmIHRvZG8ucHJpb3JpdGUgPT09IDIpIHtcbiAgICAgICAgICAgIG1hbWllID0gJzx0YWJsZSBzdHlsZT1cIndpZHRoOjEwMCU7cGFkZGluZzo1cHg7IGJvcmRlcjogMnB4IHNvbGlkICM2MDdEOEI7IG1hcmdpbi1ib3R0b206NXB4XCI+PHRyPjx0ZCBjbGFzcz1cImJnLXdoaXRlIGNvbC1ibGFjayBtLXQtNVwiPicrc3RhdHV0Kyc8c3BhbiBjbGFzcz1cImJnLWRlZXAtcHVycGxlIGNvbC13aGl0ZVwiPk5vdGUgZHU6ICcrZGVkKyc8L3NwYW4+PC9icj4nICsgdG9kby50b2RvICsgZmlpaSArICcgJyArIHNlbmRlcjtcbiAgICAgICAgfVxuICAgICAgICBpZiAoZGQgPT09IFwiamV1ZGlcIiAmJiB0b2RvLnByaW9yaXRlID09PSAxKSB7XG4gICAgICAgICAgICBtYW1pZSA9ICc8dGFibGUgc3R5bGU9XCJ3aWR0aDoxMDAlO3BhZGRpbmc6NXB4OyBib3JkZXI6IDJweCBzb2xpZCAjNjA3RDhCOyBtYXJnaW4tYm90dG9tOjVweFwiPjx0cj48dGQgY2xhc3M9XCJiZy13aGl0ZSBjb2wtYmxhY2sgbS10LTVcIj4nK3N0YXR1dCsnPHNwYW4gY2xhc3M9XCJiZy1kZWVwLXB1cnBsZSBjb2wtd2hpdGVcIj5Ob3RlIGR1OiAnK2RlZCsnPC9zcGFuPjwvYnI+JyArIHRvZG8udG9kbyArIGZpaWkgKyAnICcgKyBzZW5kZXI7XG4gICAgICAgIH1cblxuICAgICAgICByZXR1cm4gKDxkaXYgb25Nb3VzZU92ZXI9eygpID0+IHtcbiAgICAgICAgICAgIHNodXRvKHRvZG8uaWQpXG4gICAgICAgIH19IG9uTW91c2VPdXQ9eygpID0+IHtcbiAgICAgICAgICAgIHNodXRvZCh0b2RvLmlkKVxuICAgICAgICB9fSBrZXk9e3RvZG8uaWR9PlxuICAgICAgICAgICAge2RkID09PSBcImpldWRpXCIgJiYgdG9kby5wcmlvcml0ZSA9PT0gMyAmJlxuICAgICAgICAgICAgICAgIDxkaXYga2V5PXt0b2RvLmlkfSBkYW5nZXJvdXNseVNldElubmVySFRNTD17e19faHRtbDogbWFtaWV9fT48L2Rpdj5cbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIHtkZCA9PT0gXCJqZXVkaVwiICYmIHRvZG8ucHJpb3JpdGUgPT09IDIgJiZcbiAgICAgICAgICAgICAgICA8ZGl2IGtleT17dG9kby5pZH0gZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IG1hbWllfX0+PC9kaXY+XG4gICAgICAgICAgICB9XG4gICAgICAgICAgICB7ZGQgPT09IFwiamV1ZGlcIiAmJiB0b2RvLnByaW9yaXRlID09PSAxICYmXG4gICAgICAgICAgICAgICAgPGRpdiBrZXk9e3RvZG8uaWR9IGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBtYW1pZX19PjwvZGl2PlxuICAgICAgICAgICAgfVxuICAgICAgICA8L2Rpdj4pXG4gICAgfSk7XG4gICAgY29uc3QgcmVuZGVyRnJpZGF5ID0gdG9kb3MubWFwKCh0b2RvKSA9PiB7XG4gICAgICAgIGxldCBkZCA9IG1vbWVudCh0b2RvLmRhdGUpLmZvcm1hdChcImRkZGRcIik7XG4gICAgICAgIGxldCBkZWQgPSBtb21lbnQodG9kby5kYXRlKS5mb3JtYXQoXCJERC9NTS9ZWVlZIEhIOm1tXCIpO1xuICAgICAgICBsZXQgZGFkID0gbW9tZW50KHRvZG8uZGF0ZSkuZm9ybWF0KFwiWVlZWS9NTS9ERFwiKTtcblxuICAgICAgICBsZXQgc3RhdHV0ID0gJyc7XG4gICAgICAgIGlmKG5ldyBEYXRlKGRhZCkgPiBuZXcgRGF0ZSh0b2RlaSkpe1xuICAgICAgICAgICAgaWYodG9kby5wcmlvcml0ZSAhPT0gMil7XG4gICAgICAgICAgICAgICAgc3RhdHV0ID0gJzxzcGFuIGNsYXNzPVwiYm9sbzcwMCBiZy1ncmVlbiBjb2wtd2hpdGVcIj7DgCBGQUlSRTwvc3Bhbj48L2JyPidcbiAgICAgICAgICAgIH1lbHNle1xuICAgICAgICAgICAgICAgIHN0YXR1dCA9ICc8c3BhbiBjbGFzcz1cImJnLWRlZXAtb3JhbmdlIGNvbC13aGl0ZVwiPkVOIEFUVEVOVEU8L3NwYW4+PC9icj4nO1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG4gICAgICAgIGlmKG5ldyBEYXRlKGRhZCkgPCBuZXcgRGF0ZSh0b2RlaSkpe1xuICAgICAgICAgICAgaWYodG9kby5wcmlvcml0ZSAhPT0gMikge1xuICAgICAgICAgICAgICAgIHN0YXR1dCA9ICc8c3BhbiBjbGFzcz1cImJvbG83MDAgYmctYmx1ZS1ncmV5IGNvbC13aGl0ZVwiPkRBVEUgRVhQSVLDiUU8L3NwYW4+PC9icj4nXG4gICAgICAgICAgICB9ZWxzZXtcbiAgICAgICAgICAgICAgICBzdGF0dXQgPSAnPHNwYW4gY2xhc3M9XCJib2xvNzAwIGJnLWJsdWUtZ3JleSBjb2wtd2hpdGVcIj5EQVRFIEVYUElSw4lFPC9zcGFuPjwvYnI+PHNwYW4gY2xhc3M9XCJiZy1kZWVwLW9yYW5nZSBjb2wtd2hpdGVcIj5FTiBBVFRFTlRFPC9zcGFuPjwvYnI+J1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG5cblxuICAgICAgICBsZXQgZmlpaSA9ICBcIiBcIjtcbiAgICAgICAgbGV0IGZpY2hpZXJzID0gdG9kby5maWNoaWVycztcblxuICAgICAgICBpZihmaWNoaWVycy5sZW5ndGggPiAwKXtcbiAgICAgICAgICAgIGZpY2hpZXJzLm1hcCgoZmljaCkgPT4ge1xuICAgICAgICAgICAgICAgIGZpaWkgPSAnPHA+PGkgY2xhc3M9XCJmYSBmYS1wYXBlcmNsaXBcIj48L2k+PGEgaHJlZj1cIi8nK2ZpY2guZm9sZGUrJy8nK2ZpY2gubm9tZmljaGllcisnXCIgdGFyZ2V0PVwiX2JsYW5rXCIgY2xhc3M9XCJjb2wtZGVlcC1wdXJwbGVcIj4gJyArIGZpY2gubm9tZmljaGllciArICc8L2E+PC9icj48L3A+JyArIGZpaWk7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfVxuXG4gICAgICAgIGxldCBtYW1pZTtcbiAgICAgICAgbGV0IHNlbmRlciA9ICc8cCAgc3R5bGU9XCJtYXJnaW46MCAhaW1wb3J0YW50XCIgY2xhc3M9XCJ0ZXh0LWNlbnRlciBoaWRlICcgKyB0b2RvLmlkICsgJ3RvXCI+JyArXG4gICAgICAgICAgICAnPGEgY2xhc3M9XCJkZWxldG9kb1wiIGlkPScgKyB0b2RvLmlkICsgJz48aSBjbGFzcz1cImZhIGZhLXRyYXNoIGNvbC1waW5rXCIgc3R5bGU9XCJmb250LXNpemU6IDE2cHhcIiBhcmlhLWhpZGRlbj1cInRydWVcIiB0aXRsZT1cIlN1cHByaW1lciBjZXR0ZSBsaWduZVwiPjwvaT48L2E+JyArXG4gICAgICAgICAgICAnPC9wPjwvdGQ+PC90cj48L3RhYmxlPic7XG5cbiAgICAgICAgaWYgKHRvZG8uc2VuZGVyICYmIHBhcnNlSW50KGN1cnJlbnQpICE9PSBwYXJzZUludCh0b2RvLnNlbmRlci5pZCkpIHtcbiAgICAgICAgICAgIHNlbmRlciA9ICdEZTogJyArICc8c3BhbiBjbGFzcz1cImNvbC1waW5rXCI+JyArIHRvZG8uc2VuZGVyLm5vbSArICcgJyArIHRvZG8uc2VuZGVyLnByZW5vbXMgKyAnPC9zcGFuPicgK1xuICAgICAgICAgICAgICAgICc8cCBzdHlsZT1cIm1hcmdpbjowICFpbXBvcnRhbnRcIiBjbGFzcz1cInRleHQtY2VudGVyIGhpZGUgJyArIHRvZG8uaWQgKyAndG9cIj4nICtcbiAgICAgICAgICAgICAgICAnPGEgY2xhc3M9XCJjb21tZW50b1wiIGlkPScgKyB0b2RvLmlkICsgJz48aSBjbGFzcz1cImZhIGZhLWNvbW1lbnQgdGV4dC13YXJuaW5nIG0tci0xNVwiIHN0eWxlPVwiZm9udC1zaXplOiAxNnB4XCIgYXJpYS1oaWRkZW49XCJ0cnVlXCIgdGl0bGU9XCJDb21tZW50ZXJcIj48L2k+PC9hPjwvcD48L3RkPjwvdHI+PC90YWJsZT4nO1xuICAgICAgICB9XG5cbiAgICAgICAgaWYgKHRvZG8uc2VuZGVyICYmIHBhcnNlSW50KGN1cnJlbnQpID09PSBwYXJzZUludCh0b2RvLnNlbmRlci5pZCkpIHtcbiAgICAgICAgICAgIHNlbmRlciA9ICfDgDogJyArICc8c3BhbiBjbGFzcz1cImNvbC1waW5rXCI+JyArIHRvZG8ub3duZXIubm9tICsgJyAnICsgdG9kby5vd25lci5wcmVub21zICsgJzwvc3Bhbj4nICtcbiAgICAgICAgICAgICAgICAnPHAgc3R5bGU9XCJtYXJnaW46MCAhaW1wb3J0YW50XCIgY2xhc3M9XCJ0ZXh0LWNlbnRlciBoaWRlICcgKyB0b2RvLmlkICsgJ3RvXCI+JyArXG4gICAgICAgICAgICAgICAgJzxhIGNsYXNzPVwiY29tbWVudG9cIiBpZD0nICsgdG9kby5pZCArICc+PGkgY2xhc3M9XCJmYSBmYS1jb21tZW50IHRleHQtd2FybmluZyBtLXItMTVcIiBzdHlsZT1cImZvbnQtc2l6ZTogMTZweFwiIGFyaWEtaGlkZGVuPVwidHJ1ZVwiIHRpdGxlPVwiQ29tbWVudGVyXCI+PC9pPjwvYT4nICtcbiAgICAgICAgICAgICAgICAnPGEgY2xhc3M9XCJkZWxldG9kb1wiIGlkPScgKyB0b2RvLmlkICsgJz48aSBjbGFzcz1cImZhIGZhLXRyYXNoIGNvbC1waW5rXCIgc3R5bGU9XCJmb250LXNpemU6IDE2cHhcIiBhcmlhLWhpZGRlbj1cInRydWVcIiB0aXRsZT1cIlN1cHByaW1lciBjZXR0ZSBsaWduZVwiPjwvaT48L2E+PC9wPjwvdGQ+PC90cj48L3RhYmxlPic7XG4gICAgICAgIH1cblxuXG4gICAgICAgIGlmIChkZCA9PT0gXCJ2ZW5kcmVkaVwiICYmIHRvZG8ucHJpb3JpdGUgPT09IDMpIHtcbiAgICAgICAgICAgIG1hbWllID0gJzx0YWJsZSBzdHlsZT1cIndpZHRoOjEwMCU7cGFkZGluZzo1cHg7IGJvcmRlcjogMnB4IHNvbGlkICM2MDdEOEI7IG1hcmdpbi1ib3R0b206NXB4XCI+PHRyPjx0ZCBjbGFzcz1cImJnLXdoaXRlIGNvbC1ibGFjayBtLXQtNVwiPicrc3RhdHV0Kyc8c3BhbiBjbGFzcz1cImJnLXBpbmsgY29sLXdoaXRlXCI+SU1QT1JUQU5UPC9zcGFuPjwvYnI+JyArIHRvZG8udG9kbyArIGZpaWkgKyAnICcgKyBzZW5kZXI7XG4gICAgICAgIH1cbiAgICAgICAgaWYgKGRkID09PSBcInZlbmRyZWRpXCIgJiYgdG9kby5wcmlvcml0ZSA9PT0gMikge1xuICAgICAgICAgICAgbWFtaWUgPSAnPHRhYmxlIHN0eWxlPVwid2lkdGg6MTAwJTtwYWRkaW5nOjVweDsgYm9yZGVyOiAycHggc29saWQgIzYwN0Q4QjsgbWFyZ2luLWJvdHRvbTo1cHhcIj48dHI+PHRkIGNsYXNzPVwiYmctd2hpdGUgY29sLWJsYWNrIG0tdC01XCI+JytzdGF0dXQrJzxzcGFuIGNsYXNzPVwiYmctZGVlcC1wdXJwbGUgY29sLXdoaXRlXCI+Tm90ZSBkdTogJytkZWQrJzwvc3Bhbj48L2JyPicgKyB0b2RvLnRvZG8gKyBmaWlpICsgJyAnICsgc2VuZGVyO1xuICAgICAgICB9XG4gICAgICAgIGlmIChkZCA9PT0gXCJ2ZW5kcmVkaVwiICYmIHRvZG8ucHJpb3JpdGUgPT09IDEpIHtcbiAgICAgICAgICAgIG1hbWllID0gJzx0YWJsZSBzdHlsZT1cIndpZHRoOjEwMCU7cGFkZGluZzo1cHg7IGJvcmRlcjogMnB4IHNvbGlkICM2MDdEOEI7IG1hcmdpbi1ib3R0b206NXB4XCI+PHRyPjx0ZCBjbGFzcz1cImJnLXdoaXRlIGNvbC1ibGFjayBtLXQtNVwiPicrc3RhdHV0Kyc8c3BhbiBjbGFzcz1cImJnLWRlZXAtcHVycGxlIGNvbC13aGl0ZVwiPk5vdGUgZHU6ICcrZGVkKyc8L3NwYW4+PC9icj4nICsgdG9kby50b2RvICsgZmlpaSArICcgJyArIHNlbmRlcjtcbiAgICAgICAgfVxuXG5cbiAgICAgICAgcmV0dXJuICg8ZGl2IG9uTW91c2VPdmVyPXsoKSA9PiB7XG4gICAgICAgICAgICBzaHV0byh0b2RvLmlkKVxuICAgICAgICB9fSBvbk1vdXNlT3V0PXsoKSA9PiB7XG4gICAgICAgICAgICBzaHV0b2QodG9kby5pZClcbiAgICAgICAgfX0ga2V5PXt0b2RvLmlkfT5cbiAgICAgICAgICAgIHtkZCA9PT0gXCJ2ZW5kcmVkaVwiICYmIHRvZG8ucHJpb3JpdGUgPT09IDMgJiZcbiAgICAgICAgICAgICAgICA8ZGl2IGtleT17dG9kby5pZH0gZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IG1hbWllfX0+PC9kaXY+XG4gICAgICAgICAgICB9XG4gICAgICAgICAgICB7ZGQgPT09IFwidmVuZHJlZGlcIiAmJiB0b2RvLnByaW9yaXRlID09PSAyICYmXG4gICAgICAgICAgICAgICAgPGRpdiBrZXk9e3RvZG8uaWR9IGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBtYW1pZX19PjwvZGl2PlxuICAgICAgICAgICAgfVxuICAgICAgICAgICAge2RkID09PSBcInZlbmRyZWRpXCIgJiYgdG9kby5wcmlvcml0ZSA9PT0gMSAmJlxuICAgICAgICAgICAgICAgIDxkaXYga2V5PXt0b2RvLmlkfSBkYW5nZXJvdXNseVNldElubmVySFRNTD17e19faHRtbDogbWFtaWV9fT48L2Rpdj5cbiAgICAgICAgICAgIH1cbiAgICAgICAgPC9kaXY+KVxuICAgIH0pO1xuICAgIGNvbnN0IHJlbmRlclNhdHVyZGF5ID0gdG9kb3MubWFwKCh0b2RvKSA9PiB7XG4gICAgICAgIGxldCBkZCA9IG1vbWVudCh0b2RvLmRhdGUpLmZvcm1hdChcImRkZGRcIik7XG4gICAgICAgIGxldCBkZWQgPSBtb21lbnQodG9kby5kYXRlKS5mb3JtYXQoXCJERC9NTS9ZWVlZIEhIOm1tXCIpO1xuICAgICAgICBsZXQgZGFkID0gbW9tZW50KHRvZG8uZGF0ZSkuZm9ybWF0KFwiWVlZWS9NTS9ERFwiKTtcblxuICAgICAgICBsZXQgc3RhdHV0ID0gJyc7XG4gICAgICAgIGlmKG5ldyBEYXRlKGRhZCkgPiBuZXcgRGF0ZSh0b2RlaSkpe1xuICAgICAgICAgICAgaWYodG9kby5wcmlvcml0ZSAhPT0gMil7XG4gICAgICAgICAgICAgICAgc3RhdHV0ID0gJzxzcGFuIGNsYXNzPVwiYm9sbzcwMCBiZy1ncmVlbiBjb2wtd2hpdGVcIj7DgCBGQUlSRTwvc3Bhbj48L2JyPidcbiAgICAgICAgICAgIH1lbHNle1xuICAgICAgICAgICAgICAgIHN0YXR1dCA9ICc8c3BhbiBjbGFzcz1cImJnLWRlZXAtb3JhbmdlIGNvbC13aGl0ZVwiPkVOIEFUVEVOVEU8L3NwYW4+PC9icj4nO1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG4gICAgICAgIGlmKG5ldyBEYXRlKGRhZCkgPCBuZXcgRGF0ZSh0b2RlaSkpe1xuICAgICAgICAgICAgaWYodG9kby5wcmlvcml0ZSAhPT0gMikge1xuICAgICAgICAgICAgICAgIHN0YXR1dCA9ICc8c3BhbiBjbGFzcz1cImJvbG83MDAgYmctYmx1ZS1ncmV5IGNvbC13aGl0ZVwiPkRBVEUgRVhQSVLDiUU8L3NwYW4+PC9icj4nXG4gICAgICAgICAgICB9ZWxzZXtcbiAgICAgICAgICAgICAgICBzdGF0dXQgPSAnPHNwYW4gY2xhc3M9XCJib2xvNzAwIGJnLWJsdWUtZ3JleSBjb2wtd2hpdGVcIj5EQVRFIEVYUElSw4lFPC9zcGFuPjwvYnI+PHNwYW4gY2xhc3M9XCJiZy1kZWVwLW9yYW5nZSBjb2wtd2hpdGVcIj5FTiBBVFRFTlRFPC9zcGFuPjwvYnI+J1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG5cbiAgICAgICAgbGV0IGZpaWkgPSAgXCIgXCI7XG4gICAgICAgIGxldCBmaWNoaWVycyA9IHRvZG8uZmljaGllcnM7XG4gICAgICAgIGlmKGZpY2hpZXJzLmxlbmd0aCA+IDApe1xuICAgICAgICAgICAgZmljaGllcnMubWFwKChmaWNoKSA9PiB7XG4gICAgICAgICAgICAgICAgZmlpaSA9ICc8cD48aSBjbGFzcz1cImZhIGZhLXBhcGVyY2xpcFwiPjwvaT48YSBocmVmPVwiLycrZmljaC5mb2xkZSsnLycrZmljaC5ub21maWNoaWVyKydcIiB0YXJnZXQ9XCJfYmxhbmtcIiBjbGFzcz1cImNvbC1kZWVwLXB1cnBsZVwiPiAnICsgZmljaC5ub21maWNoaWVyICsgJzwvYT48L2JyPjwvcD4nICsgZmlpaTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG4gICAgICAgIGxldCBtYW1pZTtcbiAgICAgICAgbGV0IHNlbmRlciA9ICc8cCAgc3R5bGU9XCJtYXJnaW46MCAhaW1wb3J0YW50XCIgY2xhc3M9XCJ0ZXh0LWNlbnRlciBoaWRlICcgKyB0b2RvLmlkICsgJ3RvXCI+JyArXG4gICAgICAgICAgICAnPGEgY2xhc3M9XCJkZWxldG9kb1wiIGlkPScgKyB0b2RvLmlkICsgJz48aSBjbGFzcz1cImZhIGZhLXRyYXNoIGNvbC1waW5rXCIgc3R5bGU9XCJmb250LXNpemU6IDE2cHhcIiBhcmlhLWhpZGRlbj1cInRydWVcIiB0aXRsZT1cIlN1cHByaW1lciBjZXR0ZSBsaWduZVwiPjwvaT48L2E+PC9wPjwvdGQ+PC90cj48L3RhYmxlPic7XG5cbiAgICAgICAgaWYgKHRvZG8uc2VuZGVyICYmIHBhcnNlSW50KGN1cnJlbnQpICE9PSBwYXJzZUludCh0b2RvLnNlbmRlci5pZCkpIHtcbiAgICAgICAgICAgIHNlbmRlciA9ICdEZTogJyArICc8c3BhbiBjbGFzcz1cImNvbC1waW5rXCI+JyArIHRvZG8uc2VuZGVyLm5vbSArICcgJyArIHRvZG8uc2VuZGVyLnByZW5vbXMgKyAnPC9zcGFuPicgK1xuICAgICAgICAgICAgICAgICc8cCBzdHlsZT1cIm1hcmdpbjowICFpbXBvcnRhbnRcIiBjbGFzcz1cInRleHQtY2VudGVyIGhpZGUgJyArIHRvZG8uaWQgKyAndG9cIj4nICtcbiAgICAgICAgICAgICAgICAnPGEgY2xhc3M9XCJjb21tZW50b1wiIGlkPScgKyB0b2RvLmlkICsgJz48aSBjbGFzcz1cImZhIGZhLWNvbW1lbnQgdGV4dC13YXJuaW5nIG0tci0xNVwiIHN0eWxlPVwiZm9udC1zaXplOiAxNnB4XCIgYXJpYS1oaWRkZW49XCJ0cnVlXCIgdGl0bGU9XCJDb21tZW50ZXJcIj48L2k+PC9hPjwvcD48L3RkPjwvdHI+PC90YWJsZT4nO1xuICAgICAgICB9XG5cbiAgICAgICAgaWYgKHRvZG8uc2VuZGVyICYmIHBhcnNlSW50KGN1cnJlbnQpID09PSBwYXJzZUludCh0b2RvLnNlbmRlci5pZCkpIHtcbiAgICAgICAgICAgIHNlbmRlciA9ICfDgDogJyArICc8c3BhbiBjbGFzcz1cImNvbC1waW5rXCI+JyArIHRvZG8ub3duZXIubm9tICsgJyAnICsgdG9kby5vd25lci5wcmVub21zICsgJzwvc3Bhbj4nICtcbiAgICAgICAgICAgICAgICAnPHAgc3R5bGU9XCJtYXJnaW46MCAhaW1wb3J0YW50XCIgY2xhc3M9XCJ0ZXh0LWNlbnRlciBoaWRlICcgKyB0b2RvLmlkICsgJ3RvXCI+JyArXG4gICAgICAgICAgICAgICAgJzxhIGNsYXNzPVwiY29tbWVudG9cIiBpZD0nICsgdG9kby5pZCArICc+PGkgY2xhc3M9XCJmYSBmYS1jb21tZW50IHRleHQtd2FybmluZyBtLXItMTVcIiBzdHlsZT1cImZvbnQtc2l6ZTogMTZweFwiIGFyaWEtaGlkZGVuPVwidHJ1ZVwiIHRpdGxlPVwiQ29tbWVudGVyXCI+PC9pPjwvYT4nICtcbiAgICAgICAgICAgICAgICAnPGEgY2xhc3M9XCJkZWxldG9kb1wiIGlkPScgKyB0b2RvLmlkICsgJz48aSBjbGFzcz1cImZhIGZhLXRyYXNoIGNvbC1waW5rXCIgc3R5bGU9XCJmb250LXNpemU6IDE2cHhcIiBhcmlhLWhpZGRlbj1cInRydWVcIiB0aXRsZT1cIlN1cHByaW1lciBjZXR0ZSBsaWduZVwiPjwvaT48L2E+PC9wPjwvdGQ+PC90cj48L3RhYmxlPic7XG4gICAgICAgIH1cblxuICAgICAgICBpZiAoZGQgPT09IFwic2FtZWRpXCIgJiYgdG9kby5wcmlvcml0ZSA9PT0gMykge1xuICAgICAgICAgICAgbWFtaWUgPSAnPHRhYmxlIHN0eWxlPVwid2lkdGg6MTAwJTtwYWRkaW5nOjVweDsgYm9yZGVyOiAycHggc29saWQgIzYwN0Q4QjsgbWFyZ2luLWJvdHRvbTo1cHhcIj48dHI+PHRkIGNsYXNzPVwiYmctd2hpdGUgY29sLWJsYWNrIG0tdC01XCI+JytzdGF0dXQrJzxzcGFuIGNsYXNzPVwiYmctcGluayBjb2wtd2hpdGVcIj5JTVBPUlRBTlQ8L3NwYW4+PC9icj4nICsgdG9kby50b2RvICsgZmlpaSArICcgJyArIHNlbmRlcjtcbiAgICAgICAgfVxuICAgICAgICBpZiAoZGQgPT09IFwic2FtZWRpXCIgJiYgdG9kby5wcmlvcml0ZSA9PT0gMikge1xuICAgICAgICAgICAgbWFtaWUgPSAnPHRhYmxlIHN0eWxlPVwid2lkdGg6MTAwJTtwYWRkaW5nOjVweDsgYm9yZGVyOiAycHggc29saWQgIzYwN0Q4QjsgbWFyZ2luLWJvdHRvbTo1cHhcIj48dHI+PHRkIGNsYXNzPVwiYmctd2hpdGUgY29sLWJsYWNrIG0tdC01XCI+JytzdGF0dXQrJzxzcGFuIGNsYXNzPVwiYmctZGVlcC1wdXJwbGUgY29sLXdoaXRlXCI+Tm90ZSBkdTogJytkZWQrJzwvc3Bhbj48L2JyPicgKyB0b2RvLnRvZG8gKyBmaWlpICsgJyAnICsgc2VuZGVyO1xuICAgICAgICB9XG4gICAgICAgIGlmIChkZCA9PT0gXCJzYW1lZGlcIiAmJiB0b2RvLnByaW9yaXRlID09PSAxKSB7XG4gICAgICAgICAgICBtYW1pZSA9ICc8dGFibGUgc3R5bGU9XCJ3aWR0aDoxMDAlO3BhZGRpbmc6NXB4OyBib3JkZXI6IDJweCBzb2xpZCAjNjA3RDhCOyBtYXJnaW4tYm90dG9tOjVweFwiPjx0cj48dGQgY2xhc3M9XCJiZy13aGl0ZSBjb2wtYmxhY2sgbS10LTVcIj4nK3N0YXR1dCsnPHNwYW4gY2xhc3M9XCJiZy1kZWVwLXB1cnBsZSBjb2wtd2hpdGVcIj5Ob3RlIGR1OiAnK2RlZCsnPC9zcGFuPjwvYnI+JyArIHRvZG8udG9kbyArIGZpaWkgKyAnICcgKyBzZW5kZXI7XG4gICAgICAgIH1cblxuXG4gICAgICAgIHJldHVybiAoPGRpdiBvbk1vdXNlT3Zlcj17KCkgPT4ge1xuICAgICAgICAgICAgc2h1dG8odG9kby5pZClcbiAgICAgICAgfX0gb25Nb3VzZU91dD17KCkgPT4ge1xuICAgICAgICAgICAgc2h1dG9kKHRvZG8uaWQpXG4gICAgICAgIH19IGtleT17dG9kby5pZH0+XG4gICAgICAgICAgICB7ZGQgPT09IFwic2FtZWRpXCIgJiYgdG9kby5wcmlvcml0ZSA9PT0gMyAmJlxuICAgICAgICAgICAgICAgIDxkaXYga2V5PXt0b2RvLmlkfSBkYW5nZXJvdXNseVNldElubmVySFRNTD17e19faHRtbDogbWFtaWV9fT48L2Rpdj5cbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIHtkZCA9PT0gXCJzYW1lZGlcIiAmJiB0b2RvLnByaW9yaXRlID09PSAyICYmXG4gICAgICAgICAgICAgICAgPGRpdiBrZXk9e3RvZG8uaWR9IGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBtYW1pZX19PjwvZGl2PlxuICAgICAgICAgICAgfVxuICAgICAgICAgICAge2RkID09PSBcInNhbWVkaVwiICYmIHRvZG8ucHJpb3JpdGUgPT09IDEgJiZcbiAgICAgICAgICAgICAgICA8ZGl2IGtleT17dG9kby5pZH0gZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IG1hbWllfX0+PC9kaXY+XG4gICAgICAgICAgICB9XG4gICAgICAgIDwvZGl2PilcblxuXG4gICAgfSk7XG4gICAgY29uc3QgcmVuZGVyU3VuZGF5ID0gdG9kb3MubWFwKCh0b2RvKSA9PiB7XG4gICAgICAgIGxldCBkZCA9IG1vbWVudCh0b2RvLmRhdGUpLmZvcm1hdChcImRkZGRcIik7XG4gICAgICAgIGxldCBkZWQgPSBtb21lbnQodG9kby5kYXRlKS5mb3JtYXQoXCJERC9NTS9ZWVlZIEhIOm1tXCIpO1xuICAgICAgICBsZXQgZGFkID0gbW9tZW50KHRvZG8uZGF0ZSkuZm9ybWF0KFwiWVlZWS9NTS9ERFwiKTtcblxuICAgICAgICBsZXQgc3RhdHV0ID0gJyc7XG4gICAgICAgIGlmKG5ldyBEYXRlKGRhZCkgPiBuZXcgRGF0ZSh0b2RlaSkpe1xuICAgICAgICAgICAgaWYodG9kby5wcmlvcml0ZSAhPT0gMil7XG4gICAgICAgICAgICAgICAgc3RhdHV0ID0gJzxzcGFuIGNsYXNzPVwiYm9sbzcwMCBiZy1ncmVlbiBjb2wtd2hpdGVcIj7DgCBGQUlSRTwvc3Bhbj48L2JyPidcbiAgICAgICAgICAgIH1lbHNle1xuICAgICAgICAgICAgICAgIHN0YXR1dCA9ICc8c3BhbiBjbGFzcz1cImJnLWRlZXAtb3JhbmdlIGNvbC13aGl0ZVwiPkVOIEFUVEVOVEU8L3NwYW4+PC9icj4nO1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG4gICAgICAgIGlmKG5ldyBEYXRlKGRhZCkgPCBuZXcgRGF0ZSh0b2RlaSkpe1xuICAgICAgICAgICAgaWYodG9kby5wcmlvcml0ZSAhPT0gMikge1xuICAgICAgICAgICAgICAgIHN0YXR1dCA9ICc8c3BhbiBjbGFzcz1cImJvbG83MDAgYmctYmx1ZS1ncmV5IGNvbC13aGl0ZVwiPkRBVEUgRVhQSVLDiUU8L3NwYW4+PC9icj4nXG4gICAgICAgICAgICB9ZWxzZXtcbiAgICAgICAgICAgICAgICBzdGF0dXQgPSAnPHNwYW4gY2xhc3M9XCJib2xvNzAwIGJnLWJsdWUtZ3JleSBjb2wtd2hpdGVcIj5EQVRFIEVYUElSw4lFPC9zcGFuPjwvYnI+PHNwYW4gY2xhc3M9XCJiZy1kZWVwLW9yYW5nZSBjb2wtd2hpdGVcIj5FTiBBVFRFTlRFPC9zcGFuPjwvYnI+J1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG5cbiAgICAgICAgbGV0IGZpaWkgPSAgXCIgXCI7XG4gICAgICAgIGxldCBmaWNoaWVycyA9IHRvZG8uZmljaGllcnM7XG4gICAgICAgIGlmKGZpY2hpZXJzLmxlbmd0aCA+IDApe1xuICAgICAgICAgICAgZmljaGllcnMubWFwKChmaWNoKSA9PiB7XG4gICAgICAgICAgICAgICAgZmlpaSA9ICc8cD48aSBjbGFzcz1cImZhIGZhLXBhcGVyY2xpcFwiPjwvaT48YSBocmVmPVwiLycrZmljaC5mb2xkZSsnLycrZmljaC5ub21maWNoaWVyKydcIiB0YXJnZXQ9XCJfYmxhbmtcIiBjbGFzcz1cImNvbC1kZWVwLXB1cnBsZVwiPiAnICsgZmljaC5ub21maWNoaWVyICsgJzwvYT48L2JyPjwvcD4nICsgZmlpaTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG5cbiAgICAgICAgbGV0IG1hbWllO1xuICAgICAgICBsZXQgc2VuZGVyID0gJzxwICBzdHlsZT1cIm1hcmdpbjowICFpbXBvcnRhbnRcIiBjbGFzcz1cInRleHQtY2VudGVyIGhpZGUgJyArIHRvZG8uaWQgKyAndG9cIj4nICtcbiAgICAgICAgICAgICc8YSBjbGFzcz1cImRlbGV0b2RvXCIgaWQ9JyArIHRvZG8uaWQgKyAnPjxpIGNsYXNzPVwiZmEgZmEtdHJhc2ggY29sLXBpbmtcIiBzdHlsZT1cImZvbnQtc2l6ZTogMTZweFwiIGFyaWEtaGlkZGVuPVwidHJ1ZVwiIHRpdGxlPVwiU3VwcHJpbWVyIGNldHRlIGxpZ25lXCI+PC9pPjwvYT48L3A+PC90ZD48L3RyPjwvdGFibGU+JztcblxuICAgICAgICBpZiAodG9kby5zZW5kZXIgJiYgcGFyc2VJbnQoY3VycmVudCkgIT09IHBhcnNlSW50KHRvZG8uc2VuZGVyLmlkKSkge1xuICAgICAgICAgICAgc2VuZGVyID0gJ0RlOiAnICsgJzxzcGFuIGNsYXNzPVwiY29sLXBpbmtcIj4nICsgdG9kby5zZW5kZXIubm9tICsgJyAnICsgdG9kby5zZW5kZXIucHJlbm9tcyArICc8L3NwYW4+JyArXG4gICAgICAgICAgICAgICAgJzxwIHN0eWxlPVwibWFyZ2luOjAgIWltcG9ydGFudFwiIGNsYXNzPVwidGV4dC1jZW50ZXIgaGlkZSAnICsgdG9kby5pZCArICd0b1wiPicgK1xuICAgICAgICAgICAgICAgICc8YSBjbGFzcz1cImNvbW1lbnRvXCIgaWQ9JyArIHRvZG8uaWQgKyAnPjxpIGNsYXNzPVwiZmEgZmEtY29tbWVudCB0ZXh0LXdhcm5pbmcgbS1yLTE1XCIgc3R5bGU9XCJmb250LXNpemU6IDE2cHhcIiBhcmlhLWhpZGRlbj1cInRydWVcIiB0aXRsZT1cIkNvbW1lbnRlclwiPjwvaT48L2E+PC9wPjwvdGQ+PC90cj48L3RhYmxlPic7XG4gICAgICAgIH1cblxuICAgICAgICBpZiAodG9kby5zZW5kZXIgJiYgcGFyc2VJbnQoY3VycmVudCkgPT09IHBhcnNlSW50KHRvZG8uc2VuZGVyLmlkKSkge1xuICAgICAgICAgICAgc2VuZGVyID0gJ8OAOiAnICsgJzxzcGFuIGNsYXNzPVwiY29sLXBpbmtcIj4nICsgdG9kby5vd25lci5ub20gKyAnICcgKyB0b2RvLm93bmVyLnByZW5vbXMgKyAnPC9zcGFuPicgK1xuICAgICAgICAgICAgICAgICc8cCBzdHlsZT1cIm1hcmdpbjowICFpbXBvcnRhbnRcIiBjbGFzcz1cInRleHQtY2VudGVyIGhpZGUgJyArIHRvZG8uaWQgKyAndG9cIj4nICtcbiAgICAgICAgICAgICAgICAnPGEgY2xhc3M9XCJjb21tZW50b1wiIGlkPScgKyB0b2RvLmlkICsgJz48aSBjbGFzcz1cImZhIGZhLWNvbW1lbnQgdGV4dC13YXJuaW5nIG0tci0xNVwiIHN0eWxlPVwiZm9udC1zaXplOiAxNnB4XCIgYXJpYS1oaWRkZW49XCJ0cnVlXCIgdGl0bGU9XCJDb21tZW50ZXJcIj48L2k+PC9hPicgK1xuICAgICAgICAgICAgICAgICc8YSBjbGFzcz1cImRlbGV0b2RvXCIgaWQ9JyArIHRvZG8uaWQgKyAnPjxpIGNsYXNzPVwiZmEgZmEtdHJhc2ggY29sLXBpbmtcIiBzdHlsZT1cImZvbnQtc2l6ZTogMTZweFwiIGFyaWEtaGlkZGVuPVwidHJ1ZVwiIHRpdGxlPVwiU3VwcHJpbWVyIGNldHRlIGxpZ25lXCI+PC9pPjwvYT48L3A+PC90ZD48L3RyPjwvdGFibGU+JztcbiAgICAgICAgfVxuXG4gICAgICAgIGlmIChkZCA9PT0gXCJkaW1hbmNoZVwiICYmIHRvZG8ucHJpb3JpdGUgPT09IDMpIHtcbiAgICAgICAgICAgIG1hbWllID0gJzx0YWJsZSBzdHlsZT1cIndpZHRoOjEwMCU7cGFkZGluZzo1cHg7IGJvcmRlcjogMnB4IHNvbGlkICM2MDdEOEI7IG1hcmdpbi1ib3R0b206NXB4XCI+PHRyPjx0ZCBjbGFzcz1cImJnLXdoaXRlIGNvbC1ibGFjayBtLXQtNVwiPicrc3RhdHV0Kyc8c3BhbiBjbGFzcz1cImJnLXBpbmsgY29sLXdoaXRlXCI+SU1QT1JUQU5UPC9zcGFuPjwvYnI+JyArIHRvZG8udG9kbyArIGZpaWkgKyAnICcgKyBzZW5kZXI7XG4gICAgICAgIH1cbiAgICAgICAgaWYgKGRkID09PSBcImRpbWFuY2hlXCIgJiYgdG9kby5wcmlvcml0ZSA9PT0gMikge1xuICAgICAgICAgICAgbWFtaWUgPSAnPHRhYmxlIHN0eWxlPVwid2lkdGg6MTAwJTtwYWRkaW5nOjVweDsgYm9yZGVyOiAycHggc29saWQgIzYwN0Q4QjsgbWFyZ2luLWJvdHRvbTo1cHhcIj48dHI+PHRkIGNsYXNzPVwiYmctd2hpdGUgY29sLWJsYWNrIG0tdC01XCI+JytzdGF0dXQrJzxzcGFuIGNsYXNzPVwiYmctZGVlcC1wdXJwbGUgY29sLXdoaXRlXCI+Tm90ZSBkdTogJytkZWQrJzwvc3Bhbj48L2JyPicgKyB0b2RvLnRvZG8gKyBmaWlpICsgJyAnICsgc2VuZGVyO1xuICAgICAgICB9XG4gICAgICAgIGlmIChkZCA9PT0gXCJkaW1hbmNoZVwiICYmIHRvZG8ucHJpb3JpdGUgPT09IDEpIHtcbiAgICAgICAgICAgIG1hbWllID0gJzx0YWJsZSBzdHlsZT1cIndpZHRoOjEwMCU7cGFkZGluZzo1cHg7IGJvcmRlcjogMnB4IHNvbGlkICM2MDdEOEI7IG1hcmdpbi1ib3R0b206NXB4XCI+PHRyPjx0ZCBjbGFzcz1cImJnLXdoaXRlIGNvbC1ibGFjayBtLXQtNVwiPicrc3RhdHV0Kyc8c3BhbiBjbGFzcz1cImJnLWRlZXAtcHVycGxlIGNvbC13aGl0ZVwiPk5vdGUgZHU6ICcrZGVkKyc8L3NwYW4+PC9icj4nICsgdG9kby50b2RvICsgZmlpaSArICcgJyArIHNlbmRlcjtcbiAgICAgICAgfVxuXG5cbiAgICAgICAgcmV0dXJuICg8ZGl2IG9uTW91c2VPdmVyPXsoKSA9PiB7XG4gICAgICAgICAgICBzaHV0byh0b2RvLmlkKVxuXG4gICAgICAgIH19IG9uTW91c2VPdXQ9eygpID0+IHtcbiAgICAgICAgICAgIHNodXRvZCh0b2RvLmlkKVxuICAgICAgICB9fSBrZXk9e3RvZG8uaWR9PlxuICAgICAgICAgICAge2RkID09PSBcImRpbWFuY2hlXCIgJiYgdG9kby5wcmlvcml0ZSA9PT0gMyAmJlxuICAgICAgICAgICAgICAgIDxkaXYga2V5PXt0b2RvLmlkfSBkYW5nZXJvdXNseVNldElubmVySFRNTD17e19faHRtbDogbWFtaWV9fT48L2Rpdj5cbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIHtkZCA9PT0gXCJkaW1hbmNoZVwiICYmIHRvZG8ucHJpb3JpdGUgPT09IDIgJiZcbiAgICAgICAgICAgICAgICA8ZGl2IGtleT17dG9kby5pZH0gZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IG1hbWllfX0+PC9kaXY+XG4gICAgICAgICAgICB9XG4gICAgICAgICAgICB7ZGQgPT09IFwiZGltYW5jaGVcIiAmJiB0b2RvLnByaW9yaXRlID09PSAxICYmXG4gICAgICAgICAgICAgICAgPGRpdiBrZXk9e3RvZG8uaWR9IGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBtYW1pZX19PjwvZGl2PlxuICAgICAgICAgICAgfVxuICAgICAgICA8L2Rpdj4pXG5cblxuICAgIH0pO1xuXG5cbiAgICByZXR1cm4gKFxuICAgICAgICA8PlxuICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJtb2RhbCBmYWRlXCIgaWQ9XCJDb25maXJtRGVsZXRlXCIgdGFiSW5kZXg9XCItMVwiIHJvbGU9XCJkaWFsb2dcIlxuICAgICAgICAgICAgICAgICBhcmlhLWxhYmVsbGVkYnk9XCJleGFtcGxlTW9kYWxMYWJlbFwiXG4gICAgICAgICAgICAgICAgIGFyaWEtaGlkZGVuPVwidHJ1ZVwiPlxuICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwibW9kYWwtZGlhbG9nIG1vZGFsLXNtIG1vZGFsLW5vdGlmeVwiIHJvbGU9XCJkb2N1bWVudFwiPlxuICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cIm1vZGFsLWNvbnRlbnQgdGV4dC1jZW50ZXJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwibW9kYWwtaGVhZGVyIGQtZmxleCBqdXN0aWZ5LWNvbnRlbnQtY2VudGVyIGJnLXBpbmtcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDQgY2xhc3NOYW1lPVwiYm9sbzcwMFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICDDilRFUyBWT1VTIFNVUiA/XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9oND5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJtb2RhbC1ib2R5XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGkgY2xhc3NOYW1lPVwiZmFzIGZhLXRpbWVzIGZhLTR4IGFuaW1hdGVkIHJvdGF0ZUluIGNvbC1waW5rXCI+PC9pPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInRleHQtY2VudGVyXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiB0eXBlPVwiYnV0dG9uXCIgaWQ9XCJhY2NlcHRvXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJ0biBidG4tbGluayB3YXZlcy1lZmZlY3QgdGV4dC13aGl0ZSBiZy1wcmltYXJ5IG0tci0xMFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBPVUlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IHR5cGU9XCJidXR0b25cIiBpZD1cImNsb3NlTGllclwiIGNsYXNzTmFtZT1cImJ0biBidG4tbGluayB3YXZlcy1lZmZlY3QgdGV4dC13aGl0ZSBiZy1waW5rXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtZGlzbWlzcz1cIm1vZGFsXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIE5PTlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgPC9kaXY+XG5cbiAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwibW9kYWwgZmFkZVwiIGlkPVwiY2hhdE1vZGFsXCIgZGF0YS1icy1iYWNrZHJvcD1cInN0YXRpY1wiIGRhdGEtYnMta2V5Ym9hcmQ9XCJmYWxzZVwiIHRhYkluZGV4PVwiLTFcIlxuICAgICAgICAgICAgICAgICBhcmlhLWxhYmVsbGVkYnk9XCJzdGF0aWNCYWNrZHJvcExhYmVsXCIgYXJpYS1oaWRkZW49XCJ0cnVlXCI+XG4gICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJtb2RhbC1kaWFsb2cgbW9kYWwtbWRcIj5cbiAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJtb2RhbC1jb250ZW50XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImNvbnRhaW5lclwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicm93IGNoYXQtd2luZG93IFwiIGlkPVwiY2hhdF93aW5kb3dfMVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e21hcmdpbkxlZnQ6XCIxMHB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbCBwYW5lbC1kZWZhdWx0XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsLWhlYWRpbmcgdG9wLWJhclwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLW1kLTEwIGNvbC14cy0xMFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDMgY2xhc3NOYW1lPVwicGFuZWwtdGl0bGVcIj48c3BhblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZ2x5cGhpY29uIGdseXBoaWNvbi1jb21tZW50XCI+PC9zcGFuPiBDaGF0PC9oMz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsLWJvZHkgbXNnX2NvbnRhaW5lcl9iYXNlXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJyb3cgbXNnX2NvbnRhaW5lciBiYXNlX3NlbnRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbWQtMTAgY29sLXhzLTEwXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cIm1lc3NhZ2VzIG1zZ19zZW50XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHA+dGhhdCBtb25nb2RiIHRoaW5nIGxvb2tzIGdvb2QsIGh1aD9cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGlueSBtYXN0ZXIgZGIsIGFuZCBodWdlIGRvY3VtZW50IHN0b3JlPC9wPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aW1lIGRhdGVUaW1lPVwiMjAwOS0xMS0xM1QyMDowMFwiPlRpbW90aHkg4oCiIDUxIG1pbjwvdGltZT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbWQtMiBjb2wteHMtMiBhdmF0YXJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbWdcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzcmM9XCJodHRwOi8vd3d3LmJpdHJlYmVscy5jb20vd3AtY29udGVudC91cGxvYWRzLzIwMTEvMDIvT3JpZ2luYWwtRmFjZWJvb2stR2Vlay1Qcm9maWxlLUF2YXRhci0xLmpwZ1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiIGltZy1yZXNwb25zaXZlIFwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJyb3cgbXNnX2NvbnRhaW5lciBiYXNlX3JlY2VpdmVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbWQtMiBjb2wteHMtMiBhdmF0YXJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbWdcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzcmM9XCJodHRwOi8vd3d3LmJpdHJlYmVscy5jb20vd3AtY29udGVudC91cGxvYWRzLzIwMTEvMDIvT3JpZ2luYWwtRmFjZWJvb2stR2Vlay1Qcm9maWxlLUF2YXRhci0xLmpwZ1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiIGltZy1yZXNwb25zaXZlIFwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLW1kLTEwIGNvbC14cy0xMFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJtZXNzYWdlcyBtc2dfcmVjZWl2ZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwPnRoYXQgbW9uZ29kYiB0aGluZyBsb29rcyBnb29kLCBodWg/XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRpbnkgbWFzdGVyIGRiLCBhbmQgaHVnZSBkb2N1bWVudCBzdG9yZTwvcD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGltZSBkYXRlVGltZT1cIjIwMDktMTEtMTNUMjA6MDBcIj5UaW1vdGh5IOKAoiA1MSBtaW48L3RpbWU+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJyb3cgbXNnX2NvbnRhaW5lciBiYXNlX3JlY2VpdmVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbWQtMiBjb2wteHMtMiBhdmF0YXJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbWdcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzcmM9XCJodHRwOi8vd3d3LmJpdHJlYmVscy5jb20vd3AtY29udGVudC91cGxvYWRzLzIwMTEvMDIvT3JpZ2luYWwtRmFjZWJvb2stR2Vlay1Qcm9maWxlLUF2YXRhci0xLmpwZ1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiIGltZy1yZXNwb25zaXZlIFwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLXhzLTEwIGNvbC1tZC0xMFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJtZXNzYWdlcyBtc2dfcmVjZWl2ZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwPnRoYXQgbW9uZ29kYiB0aGluZyBsb29rcyBnb29kLCBodWg/XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRpbnkgbWFzdGVyIGRiLCBhbmQgaHVnZSBkb2N1bWVudCBzdG9yZTwvcD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGltZSBkYXRlVGltZT1cIjIwMDktMTEtMTNUMjA6MDBcIj5UaW1vdGh5IOKAoiA1MSBtaW48L3RpbWU+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJyb3cgbXNnX2NvbnRhaW5lciBiYXNlX3NlbnRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wteHMtMTAgY29sLW1kLTEwXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cIm1lc3NhZ2VzIG1zZ19zZW50XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHA+dGhhdCBtb25nb2RiIHRoaW5nIGxvb2tzIGdvb2QsIGh1aD9cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGlueSBtYXN0ZXIgZGIsIGFuZCBodWdlIGRvY3VtZW50IHN0b3JlPC9wPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aW1lIGRhdGVUaW1lPVwiMjAwOS0xMS0xM1QyMDowMFwiPlRpbW90aHkg4oCiIDUxIG1pbjwvdGltZT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbWQtMiBjb2wteHMtMiBhdmF0YXJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbWdcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzcmM9XCJodHRwOi8vd3d3LmJpdHJlYmVscy5jb20vd3AtY29udGVudC91cGxvYWRzLzIwMTEvMDIvT3JpZ2luYWwtRmFjZWJvb2stR2Vlay1Qcm9maWxlLUF2YXRhci0xLmpwZ1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiIGltZy1yZXNwb25zaXZlIFwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJyb3cgbXNnX2NvbnRhaW5lciBiYXNlX3JlY2VpdmVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbWQtMiBjb2wteHMtMiBhdmF0YXJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbWdcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzcmM9XCJodHRwOi8vd3d3LmJpdHJlYmVscy5jb20vd3AtY29udGVudC91cGxvYWRzLzIwMTEvMDIvT3JpZ2luYWwtRmFjZWJvb2stR2Vlay1Qcm9maWxlLUF2YXRhci0xLmpwZ1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiIGltZy1yZXNwb25zaXZlIFwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLXhzLTEwIGNvbC1tZC0xMFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJtZXNzYWdlcyBtc2dfcmVjZWl2ZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwPnRoYXQgbW9uZ29kYiB0aGluZyBsb29rcyBnb29kLCBodWg/XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRpbnkgbWFzdGVyIGRiLCBhbmQgaHVnZSBkb2N1bWVudCBzdG9yZTwvcD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGltZSBkYXRlVGltZT1cIjIwMDktMTEtMTNUMjA6MDBcIj5UaW1vdGh5IOKAoiA1MSBtaW48L3RpbWU+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJyb3cgbXNnX2NvbnRhaW5lciBiYXNlX3NlbnRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbWQtMTAgY29sLXhzLTEwIFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJtZXNzYWdlcyBtc2dfc2VudFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwPnRoYXQgbW9uZ29kYiB0aGluZyBsb29rcyBnb29kLCBodWg/XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRpbnkgbWFzdGVyIGRiLCBhbmQgaHVnZSBkb2N1bWVudCBzdG9yZTwvcD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGltZSBkYXRlVGltZT1cIjIwMDktMTEtMTNUMjA6MDBcIj5UaW1vdGh5IOKAoiA1MSBtaW48L3RpbWU+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLW1kLTIgY29sLXhzLTIgYXZhdGFyXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aW1nXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3JjPVwiaHR0cDovL3d3dy5iaXRyZWJlbHMuY29tL3dwLWNvbnRlbnQvdXBsb2Fkcy8yMDExLzAyL09yaWdpbmFsLUZhY2Vib29rLUdlZWstUHJvZmlsZS1BdmF0YXItMS5qcGdcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cIiBpbWctcmVzcG9uc2l2ZSBcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsLWZvb3RlclwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiaW5wdXQtZ3JvdXBcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRleHRhcmVhICB0eXBlPVwidGV4dFwiIGlkPVwiY2hhdFwiIHJvdz1cIjVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZm9ybS1jb250cm9sIGlucHV0LXNtIGNoYXRfaW5wdXRcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcGxhY2Vob2xkZXI9XCJWb3RyZSBtZXNzYWdlIGljaS4uLlwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gY2xhc3NOYW1lPVwiaW5wdXQtZ3JvdXAtYnRuXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICA8YnV0dG9uIGNsYXNzTmFtZT1cImJ0biBidG4tcHJpbWFyeSBidG4tc21cIiBpZD1cInNlbmRjaGF0XCI+RW52b3llcjwvYnV0dG9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9zcGFuPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgPC9kaXY+XG5cbiAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29udGFpbmVyLWZsdWlkIGRpdGlcIj5cbiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImJsb2NrLWhlYWRlclwiPlxuXG4gICAgICAgICAgICAgICAgICAgIDxSZWFjdEhUTUxUYWJsZVRvRXhjZWxcbiAgICAgICAgICAgICAgICAgICAgICAgIGlkPVwidGVzdC10YWJsZS14bHMtYnV0dG9uXCJcbiAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJ0biBiZy1ncmVlbiB0ZXh0LXdoaXRlIG0tci01XCJcbiAgICAgICAgICAgICAgICAgICAgICAgIHRhYmxlPVwiYWdlbmRhXCJcbiAgICAgICAgICAgICAgICAgICAgICAgIGZpbGVuYW1lPVwidm90cmUgYWdlbmRhXCJcbiAgICAgICAgICAgICAgICAgICAgICAgIHNoZWV0PVwidGFibGV4bHNcIlxuICAgICAgICAgICAgICAgICAgICAgICAgYnV0dG9uVGV4dD1cIkVYUE9SVEVSIEVOIEVYQ0VMXCIvPlxuXG4gICAgICAgICAgICAgICAgICAgIDxidXR0b24gY2xhc3NOYW1lPVwiYnRuIGJnLWJsdWUgdGV4dC13aGl0ZSBtLXItNVwiIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgIGFkZFRhY2hlcnMoKVxuICAgICAgICAgICAgICAgICAgICB9fT48aSBjbGFzc05hbWU9XCJmYSBmYS1jaXJjbGUtcGx1c1wiLz4gQUpPVVRFUiBVTkUgTk9URVxuICAgICAgICAgICAgICAgICAgICA8L2J1dHRvbj5cblxuICAgICAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPXt7b3ZlcmZsb3c6IFwic2Nyb2xsXCIsIHBhZGRpbmc6IFwiMjBweFwiLCBoZWlnaHQ6IFwiMTVjbVwiLCBib3JkZXI6IFwiMnB4IHNvbGlkICM0ZTczZGZcIn19XG4gICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwic2hhZG93IHRhYmxlLXJlc3BvbnNpdmVcIj5cblxuICAgICAgICAgICAgICAgICAgICAgICAgPGg0IGNsYXNzTmFtZT1cImJvbG83MDBcIj5UT1VURSBWT1RSRSBBR0VOREEgPC9oND5cbiAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZSBjbGFzc05hbWU9XCJ0YWJsZS1ib3JkZXJlZFwiIGlkPVwiYWdlbmRhXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e21pbkhlaWdodDogXCIxMjBweFwiLCBiYWNrZ3JvdW5kQ29sb3I6ICcjRjBGOEZGJ319PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aGVhZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHIgY2xhc3NOYW1lPVwiY29sLWJsYWNrIHRleHQtY2VudGVyICBcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cInRleHQtY2VudGVyXCIgc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG1pbldpZHRoOiBcIjIzMHB4XCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBib3JkZXI6IFwiMXB4IHNvbGlkICM2MDdEOEJcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJvcmRlckJvdHRvbTogXCI2cHggc29saWQgI0Y0NDMzNlwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PkxVTkRJXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlclwiIHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBtaW5XaWR0aDogXCIyMzBweFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYm9yZGVyOiBcIjFweCBzb2xpZCAjNjA3RDhCXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBib3JkZXJCb3R0b206IFwiNnB4IHNvbGlkICM2NzNBQjdcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fT5NQVJESVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoPlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlclwiIHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBtaW5XaWR0aDogXCIyMzBweFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYm9yZGVyOiBcIjFweCBzb2xpZCAjNjA3RDhCXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBib3JkZXJCb3R0b206IFwiNnB4IHNvbGlkICM5QzI3QjBcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9fT5NRVJDUkVESVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwidGV4dC1jZW50ZXJcIiBzdHlsZT17e1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbWluV2lkdGg6IFwiMjMwcHhcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJvcmRlcjogXCIxcHggc29saWQgIzYwN0Q4QlwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYm9yZGVyQm90dG9tOiBcIjZweCBzb2xpZCAjRkY5ODAwXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0+SkVVRElcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cInRleHQtY2VudGVyXCIgc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG1pbldpZHRoOiBcIjIzMHB4XCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBib3JkZXI6IFwiMXB4IHNvbGlkICM2MDdEOEJcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJvcmRlckJvdHRvbTogXCI2cHggc29saWQgIzIxOTZGM1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PlZFTkRSRURJXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGg+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cInRleHQtY2VudGVyXCIgc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG1pbldpZHRoOiBcIjIzMHB4XCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBib3JkZXI6IFwiMXB4IHNvbGlkICM2MDdEOEJcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJvcmRlckJvdHRvbTogXCI2cHggc29saWQgIzYwN0Q4QlwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PlNBTUVESVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoPlxuXG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cInRleHQtY2VudGVyXCIgc3R5bGU9e3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG1pbldpZHRoOiBcIjIzMHB4XCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBib3JkZXI6IFwiMXB4IHNvbGlkICM2MDdEOEJcIixcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJvcmRlckJvdHRvbTogXCI2cHggc29saWQgIzAwOTY4OFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PkRJTUFOQ0hFXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGg+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGhlYWQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRib2R5PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImNvbC1ibGFja1wiIHZhbGlnbj1cInRvcFwiPntyZW5kZXJNb25kYXl9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImNvbC1ibGFja1wiIHZhbGlnbj1cInRvcFwiPntyZW5kZXJUdWVzZGF5fTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJjb2wtYmxhY2tcIiB2YWxpZ249XCJ0b3BcIj57cmVuZGVyV2VzbmVzZGF5fTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJjb2wtYmxhY2tcIiB2YWxpZ249XCJ0b3BcIj57cmVuZGVyVGh1cnNkYXl9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImNvbC1ibGFja1wiIHZhbGlnbj1cInRvcFwiPntyZW5kZXJGcmlkYXl9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cImNvbC1ibGFja1wiIHZhbGlnbj1cInRvcFwiPntyZW5kZXJTYXR1cmRheX08L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiY29sLWJsYWNrXCIgdmFsaWduPVwidG9wXCI+e3JlbmRlclN1bmRheX08L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90Ym9keT5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG4gICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgIDwvPlxuICAgICk7XG59XG50cnkge1xuICAgIGNvbnN0IHJvb3QgPSBjcmVhdGVSb290KGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdkYXRhZmlyc3QnKSk7XG4gICAgcm9vdC5yZW5kZXIoPERhdGFGaXJzdC8+KTtcbn0gY2F0Y2ggKGUpIHtcblxufVxuIiwiaW1wb3J0IFJlYWN0IGZyb20gXCJyZWFjdFwiO1xuaW1wb3J0IHtjcmVhdGVSb290fSBmcm9tICdyZWFjdC1kb20vY2xpZW50JztcbmltcG9ydCB7dXNlRWZmZWN0LCB1c2VTdGF0ZX0gZnJvbSBcInJlYWN0XCI7XG5pbXBvcnQgYXhpb3MgZnJvbSBcImF4aW9zXCI7XG5pbXBvcnQgJCBmcm9tIFwianF1ZXJ5XCI7XG5pbXBvcnQgKiBhcyBtb21lbnQgZnJvbSBcIm1vbWVudFwiO1xuaW1wb3J0IHtFZGl0VGV4dH0gZnJvbSAncmVhY3QtZWRpdC10ZXh0JztcbmltcG9ydCBSZWFjdEhUTUxUYWJsZVRvRXhjZWwgZnJvbSAncmVhY3QtaHRtbC10YWJsZS10by1leGNlbCc7XG5cblxuY29uc3QgUGxhbmluZyA9ICgpID0+IHtcblxuICAgIGNvbnN0IFtkYXRhcywgc2V0RGF0YXNdID0gdXNlU3RhdGUoW10pO1xuICAgIGNvbnN0IFt0ZWFtcywgc2V0VGVhbXNdID0gdXNlU3RhdGUoW10pO1xuICAgIGNvbnN0IFthdGVhbXMsIHNldGFUZWFtc10gPSB1c2VTdGF0ZShbXSk7XG4gICAgY29uc3QgbGVuZ3RoID0gT2JqZWN0LmtleXMoZGF0YXMpLmxlbmd0aDtcblxuICAgIGlmIChsZW5ndGggPT09IDApIHtcbiAgICAgICAgYXhpb3Moe1xuICAgICAgICAgICAgbWV0aG9kOiAnR0VUJyxcbiAgICAgICAgICAgIHVybDogJy9jcm0vcGxhbm5pbmcvZ2V0cycsXG4gICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnXG4gICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICAgICBzZXREYXRhcyhyZXNwb25zZS5kYXRhKTtcbiAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIGZ1bmN0aW9uIGNvbXBhcmUoZGF0ZVRpbWVBLCBkYXRlVGltZUIpIHtcbiAgICAgICAgY29uc3QgbW9tZW50QSA9IG1vbWVudChkYXRlVGltZUEsIFwiREQvTU0vWVlZWVwiKS52YWx1ZU9mKCk7XG4gICAgICAgIGNvbnN0IG1vbWVudEIgPSBtb21lbnQoZGF0ZVRpbWVCLCBcIkREL01NL1lZWVlcIikudmFsdWVPZigpO1xuICAgICAgICBpZiAobW9tZW50QSA+IG1vbWVudEIpIHJldHVybiAxO1xuICAgICAgICBlbHNlIGlmIChtb21lbnRBIDwgbW9tZW50QikgcmV0dXJuIC0xO1xuICAgICAgICBlbHNlIHJldHVybiAwO1xuICAgIH1cbiAgICBjb25zdCBmb3JtYXROdW1iZXIgPSAobnVtLCBwcmVjaXNpb24sIHNlcGFyYXRvcikgPT4ge1xuICAgICAgICBsZXQgcGFydHM7XG4gICAgICAgIG51bSA9IE51bWJlcihudW0pO1xuICAgICAgICBudW0gPSAodHlwZW9mIHByZWNpc2lvbiAhPT0gJ3VuZGVmaW5lZCcgPyBudW0udG9GaXhlZChwcmVjaXNpb24pIDogbnVtKS50b1N0cmluZygpO1xuICAgICAgICBwYXJ0cyA9IG51bS5zcGxpdCgnLicpO1xuICAgICAgICBwYXJ0c1swXSA9IHBhcnRzWzBdLnRvU3RyaW5nKCkucmVwbGFjZSgvKFxcZCkoPz0oXFxkezN9KSsoPyFcXGQpKS9nLCAnJDEnICsgKHNlcGFyYXRvcikpO1xuICAgICAgICByZXR1cm4gcGFydHMuam9pbignLCcpO1xuICAgIH1cblxuICAgIHVzZUVmZmVjdCgoKSA9PiB7XG4gICAgICAgIGF4aW9zKHtcbiAgICAgICAgICAgIG1ldGhvZDogJ0dFVCcsXG4gICAgICAgICAgICB1cmw6ICcvY3JtL3BsYW5uaW5nL2VxdWlwZXMvZ2V0JyxcbiAgICAgICAgICAgIGNvbnRlbnRUeXBlOiAnYXBwbGljYXRpb24vanNvbjsgY2hhcnNldD11dGYtOCdcbiAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgIHNldGFUZWFtcyhyZXNwb25zZS5kYXRhKTtcbiAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgIH0pO1xuICAgIH0sIFtkYXRhc10pXG5cbiAgICBjb25zdCAkc2VscGxhbm5pbmcgPSAkKCcuc2VscGxhbm5pbmcnKTtcbiAgICAkKCcuc2VscGxhbm5pbmcnKS5odG1sKCcnKTtcblxuICAgIGNvbnN0ICRzZWxzZWN0aW9uID0gJCgnLnNlbHNlY3Rpb24nKTtcbiAgICAkKCcuc2Vsc2VjdGlvbiAnKS5odG1sKCcnKTtcblxuICAgIGNvbnN0ICRzZWxlcXVpcGUgPSAkKCcuc2VsZXF1aXBlJyk7XG4gICAgJCgnLnNlbGVxdWlwZSAnKS5odG1sKCcnKTtcbiAgICBsZXQgamprID0gbnVsbFxuXG4gICAgZGF0YXMubWFwKChkYXRhKSA9PiB7XG4gICAgICAgIGNvbnN0IGNoYW50aWVycyA9IGRhdGEuY2hhbnRpZXJzO1xuICAgICAgICBpZiAoY2hhbnRpZXJzLmxlbmd0aCA+IDApIHtcbiAgICAgICAgICAgIGNoYW50aWVycy5tYXAoKGNoYW50aWVyKSA9PiB7XG4gICAgICAgICAgICAgICAgbGV0IGNvdW50ID0gMDtcbiAgICAgICAgICAgICAgICBjb25zdCBwbGFubmluZ3MgPSBjaGFudGllci5wbGFubmluZ3M7XG4gICAgICAgICAgICAgICAgcGxhbm5pbmdzLm1hcCgocGxhKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgIGlmIChwbGEuY29yYmVpbGxlID09PSBudWxsKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBjb3VudCsrO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgICAgICBpZiAoY291bnQgPiAwKSB7XG4gICAgICAgICAgICAgICAgICAgIGNvbnN0IGdyb3VwID0gJCgnPG9wdGdyb3VwIGxhYmVsPVwiJyArIGRhdGEubm9tY2xpZW50ICsgJyB8ICcgKyBjaGFudGllci5ub21jaGFudGllciArICdcIiAvPicpO1xuICAgICAgICAgICAgICAgICAgICBwbGFubmluZ3MubWFwKChwbGFubmluZykgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgaWYgKHBsYW5uaW5nLmNvcmJlaWxsZSA9PT0gbnVsbCkge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICQoJzxvcHRpb24gdmFsdWU9XCInICsgcGxhbm5pbmcuaWQgKyAnXCIgIC8+JykuaHRtbChwbGFubmluZy5wbGFubmluZykuYXBwZW5kVG8oZ3JvdXApO1xuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICAgICAgZ3JvdXAuYXBwZW5kVG8oJHNlbHBsYW5uaW5nKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfVxuICAgIH0pO1xuICAgIGRhdGFzLm1hcCgoZGF0YSkgPT4ge1xuICAgICAgICBjb25zdCBjaGFudGllcnMgPSBkYXRhLmNoYW50aWVycztcbiAgICAgICAgaWYgKGNoYW50aWVycy5sZW5ndGggPiAwKSB7XG4gICAgICAgICAgICBjaGFudGllcnMubWFwKChjaGFudGllcikgPT4ge1xuICAgICAgICAgICAgICAgIGNvbnN0IHBsYW5uaW5ncyA9IGNoYW50aWVyLnBsYW5uaW5ncztcbiAgICAgICAgICAgICAgICBwbGFubmluZ3MubWFwKChwbGFubmluZykgPT4ge1xuICAgICAgICAgICAgICAgICAgICBsZXQgY291bnQgPSAwO1xuICAgICAgICAgICAgICAgICAgICBjb25zdCBzZWN0aW9ucyA9IHBsYW5uaW5nLnNlY3Rpb247XG4gICAgICAgICAgICAgICAgICAgIHNlY3Rpb25zLm1hcCgoc2VjKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICBpZiAoc2VjLmNvcmJlaWxsZSA9PT0gbnVsbCkge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvdW50Kys7XG4gICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgICAgICAgICBpZiAoY291bnQgPiAwKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBjb25zdCBncm91cCA9ICQoJzxvcHRncm91cCBsYWJlbD1cIicgKyBkYXRhLm5vbWNsaWVudCArICcgfCAnICsgY2hhbnRpZXIubm9tY2hhbnRpZXIgKyAnXCIgLz4nKTtcbiAgICAgICAgICAgICAgICAgICAgICAgIHNlY3Rpb25zLm1hcCgoc2VjdGlvbikgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmIChzZWN0aW9uLmNvcmJlaWxsZSA9PT0gbnVsbCkge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAkKCc8b3B0aW9uIHZhbHVlPVwiJyArIHNlY3Rpb24uaWQgKyAnXCIgIC8+JykuaHRtbChzZWN0aW9uLmxpYmVsbGUpLmFwcGVuZFRvKGdyb3VwKTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICAgICAgICAgIGdyb3VwLmFwcGVuZFRvKCRzZWxzZWN0aW9uKTtcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH1cbiAgICB9KTtcbiAgICB0ZWFtcy5tYXAoKHRlYW0pID0+IHtcbiAgICAgICAgamprID0gJzxvcHRpb24gdmFsdWU9XCInICsgdGVhbS5pZCArICdcIj4nICsgdGVhbS5kZXNpZ25hdGlvbiArICc8L29wdGlvbj4nICsgamprO1xuICAgIH0pO1xuXG4gICAgJCgnLnNlbGVxdWlwZSAnKS5odG1sKGpqayk7XG4gICAgJChcIiNzb3J0Y2hhbnRpZXJcIikub24oXCJjaGFuZ2VcIiwgZnVuY3Rpb24gKCkge1xuICAgICAgICBsZXQgYWEgPSAnYWEnO1xuICAgICAgICBpZiAoJCh0aGlzKS52YWwoKS5sZW5ndGggPiAwKSB7XG4gICAgICAgICAgICBhYSA9ICQodGhpcykudmFsKCk7XG4gICAgICAgIH1cbiAgICAgICAgYXhpb3Moe1xuICAgICAgICAgICAgbWV0aG9kOiAnR0VUJyxcbiAgICAgICAgICAgIHVybDogJy9jcm0vcGxhbm5pbmcvc2VhcmNoLycgKyBhYSxcbiAgICAgICAgICAgIGNvbnRlbnRUeXBlOiAnYXBwbGljYXRpb24vanNvbjsgY2hhcnNldD11dGYtOCcsXG4gICAgICAgICAgICBkYXRhVHlwZTogJ2pzb24nLFxuICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgc2V0RGF0YXMocmVzcG9uc2UuZGF0YSk7XG4gICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICB9KTtcbiAgICB9KTtcbiAgICAkKFwiI3NvcnRjaGFudGllcjFcIikub24oXCJjaGFuZ2VcIiwgZnVuY3Rpb24gKCkge1xuICAgICAgICBsZXQgYWEgPSAnYWEnO1xuICAgICAgICBpZiAoJCh0aGlzKS52YWwoKS5sZW5ndGggPiAwKSB7XG4gICAgICAgICAgICBhYSA9ICQodGhpcykudmFsKCk7XG4gICAgICAgIH1cbiAgICAgICAgYXhpb3Moe1xuICAgICAgICAgICAgbWV0aG9kOiAnR0VUJyxcbiAgICAgICAgICAgIHVybDogJy9jcm0vcGxhbm5pbmcvc2VhcmNoLycgKyBhYSxcbiAgICAgICAgICAgIGNvbnRlbnRUeXBlOiAnYXBwbGljYXRpb24vanNvbjsgY2hhcnNldD11dGYtOCcsXG4gICAgICAgICAgICBkYXRhVHlwZTogJ2pzb24nLFxuICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgc2V0RGF0YXMocmVzcG9uc2UuZGF0YSk7XG4gICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICB9KTtcbiAgICB9KTtcbiAgICAkKFwiI3NvcnRjaGFudGllcjJcIikub24oXCJjaGFuZ2VcIiwgZnVuY3Rpb24gKCkge1xuICAgICAgICBsZXQgYWEgPSAnYWEnO1xuICAgICAgICBpZiAoJCh0aGlzKS52YWwoKS5sZW5ndGggPiAwKSB7XG4gICAgICAgICAgICBhYSA9ICQodGhpcykudmFsKCk7XG4gICAgICAgIH1cbiAgICAgICAgYXhpb3Moe1xuICAgICAgICAgICAgbWV0aG9kOiAnR0VUJyxcbiAgICAgICAgICAgIHVybDogJy9jcm0vcGxhbm5pbmcvc2VhcmNoLycgKyBhYSxcbiAgICAgICAgICAgIGNvbnRlbnRUeXBlOiAnYXBwbGljYXRpb24vanNvbjsgY2hhcnNldD11dGYtOCcsXG4gICAgICAgICAgICBkYXRhVHlwZTogJ2pzb24nLFxuICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgc2V0RGF0YXMocmVzcG9uc2UuZGF0YSk7XG4gICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICB9KTtcbiAgICB9KTtcbiAgICAkKFwiI3RzZWN0aW9uXCIpLm9uKFwiY2hhbmdlXCIsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgbGV0IGFhID0gJ2FhJztcbiAgICAgICAgaWYgKCQodGhpcykudmFsKCkubGVuZ3RoID4gMCkge1xuICAgICAgICAgICAgYWEgPSAkKHRoaXMpLnZhbCgpO1xuICAgICAgICB9XG4gICAgICAgIGF4aW9zKHtcbiAgICAgICAgICAgIG1ldGhvZDogJ0dFVCcsXG4gICAgICAgICAgICB1cmw6ICcvY3JtL3BsYW5uaW5nL2NoYW50aWVyL2dldC8nICsgYWEsXG4gICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgZGF0YVR5cGU6ICdqc29uJyxcbiAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgIHNldFRlYW1zKHJlc3BvbnNlLmRhdGEpO1xuICAgICAgICB9KS5jYXRjaChmdW5jdGlvbiAoZXJyb3IpIHtcbiAgICAgICAgfSk7XG4gICAgfSk7XG5cbiAgICBjb25zdCBzaG93UGxhbm5pbmcgPSAoaWQpID0+IHtcbiAgICAgICAgaWYgKCQoJy4nICsgaWQgKyAncGxhbm4nKS5oYXNDbGFzcyhcImhpZGVcIikpIHtcbiAgICAgICAgICAgICQoJy4nICsgaWQgKyAncGxhbm4nKS5yZW1vdmVDbGFzcygnaGlkZScpO1xuICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgJCgnLicgKyBpZCArICdwbGFubicpLmFkZENsYXNzKCdoaWRlJyk7XG4gICAgICAgIH1cbiAgICB9XG4gICAgY29uc3Qgc2hvd1NlY3Rpb24gPSAoaWQpID0+IHtcbiAgICAgICAgaWYgKCQoJy4nICsgaWQgKyAnc2VjJykuaGFzQ2xhc3MoXCJoaWRlXCIpKSB7XG4gICAgICAgICAgICAkKCcuJyArIGlkICsgJ3NlYycpLnJlbW92ZUNsYXNzKCdoaWRlJyk7XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAkKCcuJyArIGlkICsgJ3NlYycpLmFkZENsYXNzKCdoaWRlJyk7XG4gICAgICAgIH1cblxuICAgIH1cbiAgICBjb25zdCBzaG93VGFjaGUgPSAoaWQpID0+IHtcbiAgICAgICAgaWYgKCQoJy4nICsgaWQgKyAndGFjaCcpLmhhc0NsYXNzKFwiaGlkZVwiKSkge1xuICAgICAgICAgICAgJCgnLicgKyBpZCArICd0YWNoJykucmVtb3ZlQ2xhc3MoJ2hpZGUnKTtcbiAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICQoJy4nICsgaWQgKyAndGFjaCcpLmFkZENsYXNzKCdoaWRlJyk7XG4gICAgICAgIH1cblxuICAgIH1cbiAgICBjb25zdCBzaG93RXF1aXBlID0gKGlkKSA9PiB7XG4gICAgICAgIGlmICgkKCcuJyArIGlkICsgJ2VxdWlwJykuaGFzQ2xhc3MoXCJoaWRlXCIpKSB7XG4gICAgICAgICAgICAkKCcuJyArIGlkICsgJ2VxdWlwJykucmVtb3ZlQ2xhc3MoJ2hpZGUnKTtcbiAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICQoJy4nICsgaWQgKyAnZXF1aXAnKS5hZGRDbGFzcygnaGlkZScpO1xuICAgICAgICB9XG5cbiAgICB9XG4gICAgY29uc3QgZGVscGxhbm5pbmcgPSBhc3luYyAoaWQpID0+IHtcbiAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnc2hvdycpO1xuICAgICAgICBhd2FpdCBheGlvcyh7XG4gICAgICAgICAgICBtZXRob2Q6ICdERUxFVEUnLFxuICAgICAgICAgICAgdXJsOiAnL2NybS9wbGFubmluZy9kZWxwbGFubmluZy8nICsgaWQsXG4gICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgZGF0YVR5cGU6ICdqc29uJyxcbiAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgIHNldERhdGFzKHJlc3BvbnNlLmRhdGEpO1xuICAgICAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnaGlkZScpO1xuICAgICAgICB9KS5jYXRjaChmdW5jdGlvbiAoZXJyb3IpIHtcbiAgICAgICAgfSk7XG4gICAgfVxuICAgIGNvbnN0IGRlbHNlY3Rpb24gPSBhc3luYyAoaWQpID0+IHtcbiAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnc2hvdycpO1xuICAgICAgICBhd2FpdCBheGlvcyh7XG4gICAgICAgICAgICBtZXRob2Q6ICdERUxFVEUnLFxuICAgICAgICAgICAgdXJsOiAnL2NybS9wbGFubmluZy9zZWN0aW9uL2RlbC8nICsgaWQsXG4gICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgZGF0YVR5cGU6ICdqc29uJyxcbiAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgIHNldERhdGFzKHJlc3BvbnNlLmRhdGEpO1xuICAgICAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnaGlkZScpO1xuICAgICAgICB9KS5jYXRjaChmdW5jdGlvbiAoZXJyb3IpIHtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgJCgnI2FkZGVQbGFubmluZycpLm9mZigpLm9uKFwiY2xpY2tcIiwgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgIGlmICgkKHRoaXMpLmNsb3Nlc3QoJ2Zvcm0nKS52YWxpZCgpKSB7XG4gICAgICAgICAgICAkKCcjZGl2YWRkcGxhbicpLmhpZGUoKVxuICAgICAgICAgICAgJCgnI2xvYWRQbGFubmluZycpLmNzcygnZGlzcGxheScsICcnKVxuICAgICAgICAgICAgYXhpb3Moe1xuICAgICAgICAgICAgICAgIG1ldGhvZDogJ1BPU1QnLFxuICAgICAgICAgICAgICAgIHVybDogJy9jcm0vcGxhbm5pbmcvYWRkZScsXG4gICAgICAgICAgICAgICAgZGF0YTogSlNPTi5zdHJpbmdpZnkoJCgnI2FkZFBsYW5uaW5nRm9ybScpLnNlcmlhbGl6ZU9iamVjdCgpKSxcbiAgICAgICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgICAgIHNldERhdGFzKHJlc3BvbnNlLmRhdGEpO1xuICAgICAgICAgICAgICAgICQoJyNkaXZhZGRwbGFuJykuc2hvdygpO1xuICAgICAgICAgICAgICAgICQoJyNsb2FkUGxhbm5pbmcnKS5oaWRlKCk7XG4gICAgICAgICAgICAgICAgJCgnI21kTW9kYWxQbGFubmluZycpLm1vZGFsKCd0b2dnbGUnKVxuICAgICAgICAgICAgICAgIHNldFRpbWVvdXQoZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgICAgICBzaG93UGxhbm5pbmcoJCgnI2FkZFBsYW5uaW5nRm9ybScpLnNlcmlhbGl6ZU9iamVjdCgpWydjaGFudGllciddKTtcbiAgICAgICAgICAgICAgICB9LCA1MDApO1xuICAgICAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfVxuICAgIH0pO1xuICAgICQoJyN1cGRQbGFubmluZycpLm9mZigpLm9uKFwiY2xpY2tcIiwgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgIGlmICgkKHRoaXMpLmNsb3Nlc3QoJ2Zvcm0nKS52YWxpZCgpKSB7XG4gICAgICAgICAgICAkKCcjZGl2dXBkcGxhbicpLmhpZGUoKVxuICAgICAgICAgICAgJCgnI2xvYWRQbGFubmluZycpLmNzcygnZGlzcGxheScsICcnKTtcbiAgICAgICAgICAgIGNvbnN0IGlkID0gbG9jYWxTdG9yYWdlLmdldEl0ZW0oJ3Rva2VuJyk7XG4gICAgICAgICAgICBheGlvcyh7XG4gICAgICAgICAgICAgICAgbWV0aG9kOiAnUFVUJyxcbiAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL3BsYW5uaW5nL3VwZGF0ZXIvJyArIGlkLFxuICAgICAgICAgICAgICAgIGRhdGE6IEpTT04uc3RyaW5naWZ5KCQoJyNhZGRQbGFubmluZ0Zvcm0nKS5zZXJpYWxpemVPYmplY3QoKSksXG4gICAgICAgICAgICAgICAgY29udGVudFR5cGU6ICdhcHBsaWNhdGlvbi9qc29uOyBjaGFyc2V0PXV0Zi04JyxcbiAgICAgICAgICAgICAgICBkYXRhVHlwZTogJ2pzb24nLFxuICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgICAgICBzZXREYXRhcyhyZXNwb25zZS5kYXRhKTtcbiAgICAgICAgICAgICAgICAkKCcjZGl2YWRkcGxhbicpLnNob3coKTtcbiAgICAgICAgICAgICAgICAkKCcjbG9hZFBsYW5uaW5nJykuaGlkZSgpO1xuICAgICAgICAgICAgICAgICQoJyNtZE1vZGFsUGxhbm5pbmcnKS5tb2RhbCgndG9nZ2xlJylcbiAgICAgICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH1cbiAgICB9KTtcblxuICAgICQoJyNhZGRlU2VjdGlvbicpLm9mZigpLm9uKFwiY2xpY2tcIiwgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KClcbiAgICAgICAgaWYgKCQodGhpcykuY2xvc2VzdCgnZm9ybScpLnZhbGlkKCkpIHtcbiAgICAgICAgICAgICQoJyNkaXZhZGRTZWN0aW9uJykuYWRkQ2xhc3MoJ2hpZGUnKTtcbiAgICAgICAgICAgICQoJyNsb2FkU2VjdGlvbicpLmNzcygnZGlzcGxheScsICcnKVxuICAgICAgICAgICAgbGV0IHBwID0gJCgnI2FkZFNlY3Rpb25Gb3JtJykuc2VyaWFsaXplT2JqZWN0KClbJ3BsYW5uaW5nJ107XG4gICAgICAgICAgICBheGlvcyh7XG4gICAgICAgICAgICAgICAgbWV0aG9kOiAnUE9TVCcsXG4gICAgICAgICAgICAgICAgdXJsOiAnL2NybS9wbGFubmluZy9zZWN0aW9uL2FkZGUnLFxuICAgICAgICAgICAgICAgIGRhdGE6IEpTT04uc3RyaW5naWZ5KCQoJyNhZGRTZWN0aW9uRm9ybScpLnNlcmlhbGl6ZU9iamVjdCgpKSxcbiAgICAgICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgICAgIHNldERhdGFzKHJlc3BvbnNlLmRhdGEpO1xuICAgICAgICAgICAgICAgICQoJyNkaXZhZGRTZWN0aW9uJykucmVtb3ZlQ2xhc3MoJ2hpZGUnKTtcbiAgICAgICAgICAgICAgICAkKCcjbG9hZFNlY3Rpb24nKS5oaWRlKCk7XG4gICAgICAgICAgICAgICAgJCgnI21kTW9kYWxTZWN0aW9uJykubW9kYWwoJ3RvZ2dsZScpXG4gICAgICAgICAgICAgICAgc2V0VGltZW91dChmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgICAgIHNob3dTZWN0aW9uKHBwKTtcbiAgICAgICAgICAgICAgICB9LCA1MDApO1xuICAgICAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfVxuICAgIH0pO1xuICAgICQoJyN1cGRTZWN0aW9uJykub2ZmKCkub24oXCJjbGlja1wiLCBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgaWYgKCQodGhpcykuY2xvc2VzdCgnZm9ybScpLnZhbGlkKCkpIHtcbiAgICAgICAgICAgICQoJyNkaXZ1cGRTZWN0aW9uJykuYWRkQ2xhc3MoJ2hpZGUnKTtcbiAgICAgICAgICAgICQoJyNsb2FkU2VjdGlvbicpLmNzcygnZGlzcGxheScsICcnKTtcbiAgICAgICAgICAgIGNvbnN0IGlkID0gbG9jYWxTdG9yYWdlLmdldEl0ZW0oJ3Rva2VuJyk7XG4gICAgICAgICAgICBheGlvcyh7XG4gICAgICAgICAgICAgICAgbWV0aG9kOiAnUFVUJyxcbiAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL3BsYW5uaW5nL3NlY3Rpb24vdXBkYXRlci8nICsgaWQsXG4gICAgICAgICAgICAgICAgZGF0YTogSlNPTi5zdHJpbmdpZnkoJCgnI2FkZFNlY3Rpb25Gb3JtJykuc2VyaWFsaXplT2JqZWN0KCkpLFxuICAgICAgICAgICAgICAgIGNvbnRlbnRUeXBlOiAnYXBwbGljYXRpb24vanNvbjsgY2hhcnNldD11dGYtOCcsXG4gICAgICAgICAgICAgICAgZGF0YVR5cGU6ICdqc29uJyxcbiAgICAgICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICAgICAgICAgc2V0RGF0YXMocmVzcG9uc2UuZGF0YSk7XG4gICAgICAgICAgICAgICAgJCgnI2RpdmFkZFNlY3Rpb24nKS5yZW1vdmVDbGFzcygnaGlkZScpO1xuICAgICAgICAgICAgICAgICQoJyNzbGZhJykuYWRkQ2xhc3MoJ2hpZGUnKTtcbiAgICAgICAgICAgICAgICAkKCcjc2xmYicpLnJlbW92ZUNsYXNzKCdoaWRlJyk7XG4gICAgICAgICAgICAgICAgJCgnI2xvYWRTZWN0aW9uJykuaGlkZSgpO1xuICAgICAgICAgICAgICAgICQoJyNtZE1vZGFsU2VjdGlvbicpLm1vZGFsKCd0b2dnbGUnKVxuICAgICAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfVxuICAgIH0pO1xuXG4gICAgJCgnI2FkZGVUYWNoZScpLm9mZigpLm9uKFwiY2xpY2tcIiwgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KClcbiAgICAgICAgaWYgKCQodGhpcykuY2xvc2VzdCgnZm9ybScpLnZhbGlkKCkpIHtcbiAgICAgICAgICAgICQoJyNkaXZhZGRUYWNoZScpLmhpZGUoKVxuICAgICAgICAgICAgJCgnI2xvYWRUYWNoZScpLmNzcygnZGlzcGxheScsICcnKVxuICAgICAgICAgICAgJCgnI3RhY2hlJykudmFsKENLRURJVE9SLmluc3RhbmNlc1sndGFjaGUnXS5nZXREYXRhKCkpXG4gICAgICAgICAgICBsZXQgcHAgPSAkKCcjYWRkVGFjaGVGb3JtJykuc2VyaWFsaXplT2JqZWN0KClbJ3NlY3Rpb24nXTtcbiAgICAgICAgICAgIGF4aW9zKHtcbiAgICAgICAgICAgICAgICBtZXRob2Q6ICdQT1NUJyxcbiAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL3BsYW5uaW5nL3RhY2hlL2FkZGUnLFxuICAgICAgICAgICAgICAgIGRhdGE6IEpTT04uc3RyaW5naWZ5KCQoJyNhZGRUYWNoZUZvcm0nKS5zZXJpYWxpemVPYmplY3QoKSksXG4gICAgICAgICAgICAgICAgY29udGVudFR5cGU6ICdhcHBsaWNhdGlvbi9qc29uOyBjaGFyc2V0PXV0Zi04JyxcbiAgICAgICAgICAgICAgICBkYXRhVHlwZTogJ2pzb24nLFxuICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgICAgICBzZXREYXRhcyhyZXNwb25zZS5kYXRhKTtcbiAgICAgICAgICAgICAgICAkKCcjZGl2YWRkVGFjaGUnKS5zaG93KCk7XG4gICAgICAgICAgICAgICAgJCgnI2xvYWRUYWNoZScpLmhpZGUoKTtcbiAgICAgICAgICAgICAgICAkKCcjbWRNb2RhbFRhY2hlJykubW9kYWwoJ3RvZ2dsZScpXG4gICAgICAgICAgICAgICAgc2V0VGltZW91dChmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgICAgIHNob3dUYWNoZShwcCk7XG4gICAgICAgICAgICAgICAgfSwgNTAwKTtcbiAgICAgICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH1cbiAgICB9KTtcbiAgICAkKCcjdXBkVGFjaGUnKS5vZmYoKS5vbihcImNsaWNrXCIsIGZ1bmN0aW9uIChldmVudCkge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpXG4gICAgICAgIGlmICgkKHRoaXMpLmNsb3Nlc3QoJ2Zvcm0nKS52YWxpZCgpKSB7XG4gICAgICAgICAgICAkKCcjZGl2dXBkVGFjaGUnKS5oaWRlKClcbiAgICAgICAgICAgICQoJyNsb2FkVGFjaGUnKS5jc3MoJ2Rpc3BsYXknLCAnJylcbiAgICAgICAgICAgICQoJyN0YWNoZScpLnZhbChDS0VESVRPUi5pbnN0YW5jZXNbJ3RhY2hlJ10uZ2V0RGF0YSgpKTtcbiAgICAgICAgICAgIGNvbnN0IGlkID0gbG9jYWxTdG9yYWdlLmdldEl0ZW0oJ3Rva2VuJyk7XG4gICAgICAgICAgICBheGlvcyh7XG4gICAgICAgICAgICAgICAgbWV0aG9kOiAnUE9TVCcsXG4gICAgICAgICAgICAgICAgdXJsOiAnL2NybS9wbGFubmluZy90YWNoZS91cGRhdGUvJyArIGlkLFxuICAgICAgICAgICAgICAgIGRhdGE6IEpTT04uc3RyaW5naWZ5KCQoJyNhZGRUYWNoZUZvcm0nKS5zZXJpYWxpemVPYmplY3QoKSksXG4gICAgICAgICAgICAgICAgY29udGVudFR5cGU6ICdhcHBsaWNhdGlvbi9qc29uOyBjaGFyc2V0PXV0Zi04JyxcbiAgICAgICAgICAgICAgICBkYXRhVHlwZTogJ2pzb24nLFxuICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgICAgICBzZXREYXRhcyhyZXNwb25zZS5kYXRhKTtcblxuICAgICAgICAgICAgICAgICQoJyNkaXZhZGRUYWNoZScpLnJlbW92ZUNsYXNzKCdoaWRlJyk7XG4gICAgICAgICAgICAgICAgJCgnI2RpdmFkZFRhY2hlJykucmVtb3ZlQ2xhc3MoJ2hpZGUnKTtcbiAgICAgICAgICAgICAgICAkKCcjZGl2YWRkVGFjaGUnKS5zaG93KCk7XG4gICAgICAgICAgICAgICAgJCgnI2RpdnVwZFRhY2hlJykuYWRkQ2xhc3MoJ2hpZGUnKTtcblxuICAgICAgICAgICAgICAgICQoJyN0bGZiJykucmVtb3ZlQ2xhc3MoJ2hpZGUnKTtcbiAgICAgICAgICAgICAgICAkKCcjdGxmYScpLmFkZENsYXNzKCdoaWRlJyk7XG5cbiAgICAgICAgICAgICAgICAkKCcjbG9hZFRhY2hlJykuaGlkZSgpO1xuICAgICAgICAgICAgICAgIENLRURJVE9SLmluc3RhbmNlc1sndGFjaGUnXS5zZXREYXRhKCcgJylcbiAgICAgICAgICAgICAgICAkKCcudG9jJykuYWRkQ2xhc3MoJ2NvbC1waW5rJyk7XG5cblxuICAgICAgICAgICAgICAgICQoJyNtZE1vZGFsVGFjaGUnKS5tb2RhbCgndG9nZ2xlJylcbiAgICAgICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH1cbiAgICB9KVxuXG4gICAgJChmdW5jdGlvbiAoKSB7XG4gICAgICAgICQoXCIuZ2V0cGxhbm5pbmdcIikuZWFjaChmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAkKHRoaXMpLm9mZigpLm9uKFwiY2xpY2tcIiwgYXN5bmMgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgIGxldCBpZCA9IHRoaXMuaWQ7XG4gICAgICAgICAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnc2hvdycpO1xuICAgICAgICAgICAgICAgIGF3YWl0IGF4aW9zKHtcbiAgICAgICAgICAgICAgICAgICAgbWV0aG9kOiAnR0VUJyxcbiAgICAgICAgICAgICAgICAgICAgdXJsOiAnL2NybS9wbGFubmluZy9nZXQvJyArIGlkLFxuICAgICAgICAgICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgICAgICAgICBkYXRhVHlwZTogJ2pzb24nLFxuICAgICAgICAgICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICAgICAgICAgICAgIGxvY2FsU3RvcmFnZS5zZXRJdGVtKCd0b2tlbicsIGlkLnRvU3RyaW5nKCkpO1xuICAgICAgICAgICAgICAgICAgICBsZXQgZGF0YSA9IHJlc3BvbnNlLmRhdGE7XG4gICAgICAgICAgICAgICAgICAgICQoJyNtZE1vZGFsUGxhbm5pbmcnKS5tb2RhbCgndG9nZ2xlJyk7XG5cbiAgICAgICAgICAgICAgICAgICAgJCgnI3BsZmEnKS5yZW1vdmVDbGFzcygnaGlkZScpO1xuICAgICAgICAgICAgICAgICAgICAkKCcjcGxmYicpLmFkZENsYXNzKCdoaWRlJyk7XG5cbiAgICAgICAgICAgICAgICAgICAgJCgnI2RpdnVwZHBsYW4nKS5yZW1vdmVDbGFzcygnaGlkZScpO1xuICAgICAgICAgICAgICAgICAgICAkKCcjZGl2YWRkcGxhbicpLmFkZENsYXNzKCdoaWRlJyk7XG5cbiAgICAgICAgICAgICAgICAgICAgJCgnLmNsb3MnKS5hZGRDbGFzcygnY29sLXBpbmsnKTtcbiAgICAgICAgICAgICAgICAgICAgJChcIiNwbGFueVwiKS52YWwoZGF0YS5wbGFubmluZyk7XG5cbiAgICAgICAgICAgICAgICAgICAgJCgnI2FkZFBsYW5uaW5nRm9ybScpLmZpbmQoJ3NlbGVjdFtpZD1cImNoYW50aWVyXCJdJykudmFsKGRhdGEuY2hhbnRpZXIuaWQudG9TdHJpbmcoKSk7XG5cbiAgICAgICAgICAgICAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnaGlkZScpO1xuICAgICAgICAgICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH0pO1xuICAgICAgICAkKFwiLmdldHNlY3Rpb25cIikuZWFjaChmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAkKHRoaXMpLm9mZigpLm9uKFwiY2xpY2tcIiwgYXN5bmMgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgIGxldCBpZCA9IHRoaXMuaWQ7XG4gICAgICAgICAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnc2hvdycpO1xuICAgICAgICAgICAgICAgIGF3YWl0IGF4aW9zKHtcbiAgICAgICAgICAgICAgICAgICAgbWV0aG9kOiAnR0VUJyxcbiAgICAgICAgICAgICAgICAgICAgdXJsOiAnL2NybS9wbGFubmluZy9zZWN0aW9uL2dldC8nICsgaWQsXG4gICAgICAgICAgICAgICAgICAgIGNvbnRlbnRUeXBlOiAnYXBwbGljYXRpb24vanNvbjsgY2hhcnNldD11dGYtOCcsXG4gICAgICAgICAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgICAgICAgICAgbG9jYWxTdG9yYWdlLnNldEl0ZW0oJ3Rva2VuJywgaWQudG9TdHJpbmcoKSk7XG4gICAgICAgICAgICAgICAgICAgIGxldCBkYXRhID0gcmVzcG9uc2UuZGF0YTtcbiAgICAgICAgICAgICAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnaGlkZScpO1xuICAgICAgICAgICAgICAgICAgICAkKCcjbWRNb2RhbFNlY3Rpb24nKS5tb2RhbCgndG9nZ2xlJyk7XG5cbiAgICAgICAgICAgICAgICAgICAgJCgnI3NsZmEnKS5yZW1vdmVDbGFzcygnaGlkZScpO1xuICAgICAgICAgICAgICAgICAgICAkKCcjc2xmYicpLmFkZENsYXNzKCdoaWRlJyk7XG5cbiAgICAgICAgICAgICAgICAgICAgJCgnI2RpdnVwZFNlY3Rpb24nKS5yZW1vdmVDbGFzcygnaGlkZScpO1xuICAgICAgICAgICAgICAgICAgICAkKCcjZGl2YWRkU2VjdGlvbicpLmFkZENsYXNzKCdoaWRlJyk7XG5cbiAgICAgICAgICAgICAgICAgICAgJCgnLmNsb3N0JykuYWRkQ2xhc3MoJ2NvbC1waW5rJyk7XG4gICAgICAgICAgICAgICAgICAgICQoXCIjc2VjdHlcIikudmFsKGRhdGEubGliZWxsZSk7XG5cbiAgICAgICAgICAgICAgICAgICAgJCgnI2FkZFNlY3Rpb25Gb3JtJykuZmluZCgnc2VsZWN0W2lkPVwicGxhbm5pbmdcIl0nKS52YWwoZGF0YS5wbGFubmluZy5pZC50b1N0cmluZygpKTtcblxuXG4gICAgICAgICAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfSk7XG4gICAgICAgICQoXCIuZGVsdGFjaGVcIikuZWFjaChmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAkKHRoaXMpLm9mZigpLm9uKFwiY2xpY2tcIiwgYXN5bmMgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgIGxldCBpZCA9IHRoaXMuaWQ7XG4gICAgICAgICAgICAgICAgJCgnI0NvbmZpcm1EZWxldGUnKS5tb2RhbCgnc2hvdycpO1xuICAgICAgICAgICAgICAgICQoJyNhY2NlcHRvJykub2ZmKCkub24oXCJjbGlja1wiLCBhc3luYyBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgICAgICQoJyNUcmFpdGVtZW50JykubW9kYWwoJ3Nob3cnKTtcbiAgICAgICAgICAgICAgICAgICAgJCgnI0NvbmZpcm1EZWxldGUnKS5tb2RhbCgnaGlkZScpO1xuICAgICAgICAgICAgICAgICAgICBhd2FpdCBheGlvcyh7XG4gICAgICAgICAgICAgICAgICAgICAgICBtZXRob2Q6ICdERUxFVEUnLFxuICAgICAgICAgICAgICAgICAgICAgICAgdXJsOiAnL2NybS9wbGFubmluZy90YWNoZS9kZWxldGUvJyArIGlkLFxuICAgICAgICAgICAgICAgICAgICAgICAgY29udGVudFR5cGU6ICdhcHBsaWNhdGlvbi9qc29uOyBjaGFyc2V0PXV0Zi04JyxcbiAgICAgICAgICAgICAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgICAgICAgICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBzZXREYXRhcyhyZXNwb25zZS5kYXRhKTtcbiAgICAgICAgICAgICAgICAgICAgICAgICQoJyNUcmFpdGVtZW50JykubW9kYWwoJ2hpZGUnKTtcbiAgICAgICAgICAgICAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH0pO1xuICAgICAgICAkKFwiLmdldHRhY2hlXCIpLmVhY2goZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgJCh0aGlzKS5vZmYoKS5vbihcImNsaWNrXCIsIGFzeW5jIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICBsZXQgaWQgPSB0aGlzLmlkO1xuICAgICAgICAgICAgICAgICQoJyNUcmFpdGVtZW50JykubW9kYWwoJ3Nob3cnKTtcbiAgICAgICAgICAgICAgICBhd2FpdCBheGlvcyh7XG4gICAgICAgICAgICAgICAgICAgIG1ldGhvZDogJ0dFVCcsXG4gICAgICAgICAgICAgICAgICAgIHVybDogJy9jcm0vcGxhbm5pbmcvdGFjaGUvZ2V0LycgKyBpZCxcbiAgICAgICAgICAgICAgICAgICAgY29udGVudFR5cGU6ICdhcHBsaWNhdGlvbi9qc29uOyBjaGFyc2V0PXV0Zi04JyxcbiAgICAgICAgICAgICAgICAgICAgZGF0YVR5cGU6ICdqc29uJyxcbiAgICAgICAgICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuXG4gICAgICAgICAgICAgICAgICAgIGxvY2FsU3RvcmFnZS5zZXRJdGVtKCd0b2tlbicsIGlkLnRvU3RyaW5nKCkpO1xuICAgICAgICAgICAgICAgICAgICBsZXQgZGF0YSA9IHJlc3BvbnNlLmRhdGE7XG4gICAgICAgICAgICAgICAgICAgIGNvbnN0IGRlYnV0ID0gbW9tZW50KGRhdGEuZGVidXQpLmZvcm1hdCgnREQvTU0vWVlZWSBISDptbScpO1xuICAgICAgICAgICAgICAgICAgICAkKCcjZGRlYnV0JykudmFsKGRlYnV0KTtcbiAgICAgICAgICAgICAgICAgICAgY29uc3QgZmluID0gbW9tZW50KGRhdGEuZmluKS5mb3JtYXQoJ0REL01NL1lZWVkgSEg6bW0nKTtcbiAgICAgICAgICAgICAgICAgICAgJCgnI2RmaW4nKS52YWwoZmluKTtcblxuICAgICAgICAgICAgICAgICAgICAkKCcjbWRNb2RhbFRhY2hlJykubW9kYWwoJ3RvZ2dsZScpO1xuICAgICAgICAgICAgICAgICAgICAkKCcjVHJhaXRlbWVudCcpLm1vZGFsKCdoaWRlJyk7XG5cbiAgICAgICAgICAgICAgICAgICAgQ0tFRElUT1IuaW5zdGFuY2VzWyd0YWNoZSddLnNldERhdGEoZGF0YS5saWJlbGxlKVxuICAgICAgICAgICAgICAgICAgICAkKCcudG9jJykuYWRkQ2xhc3MoJ2NvbC1waW5rJyk7XG5cbiAgICAgICAgICAgICAgICAgICAgJCgnI3RsZmEnKS5yZW1vdmVDbGFzcygnaGlkZScpO1xuICAgICAgICAgICAgICAgICAgICAkKCcjdGxmYicpLmFkZENsYXNzKCdoaWRlJyk7XG5cbiAgICAgICAgICAgICAgICAgICAgJCgnI2RpdnVwZFRhY2hlJykucmVtb3ZlQ2xhc3MoJ2hpZGUnKTtcbiAgICAgICAgICAgICAgICAgICAgJCgnI2RpdnVwZFRhY2hlJykucmVtb3ZlQ2xhc3MoJ2hpZGUnKTtcbiAgICAgICAgICAgICAgICAgICAgJCgnI2RpdnVwZFRhY2hlJykuc2hvdygpO1xuICAgICAgICAgICAgICAgICAgICAkKCcjZGl2YWRkVGFjaGUnKS5hZGRDbGFzcygnaGlkZScpO1xuXG5cbiAgICAgICAgICAgICAgICAgICAgJCgnI2FkZFRhY2hlRm9ybScpLmZpbmQoJ3NlbGVjdFtpZD1cInRzZWN0aW9uXCJdJykudmFsKGRhdGEuc2VjdGlvbi5pZC50b1N0cmluZygpKTtcbiAgICAgICAgICAgICAgICAgICAgJCgnI2FkZFRhY2hlRm9ybScpLmZpbmQoJ3NlbGVjdFtpZD1cInRldGF0XCJdJykudmFsKGRhdGEuZXRhdC50b1N0cmluZygpKTtcbiAgICAgICAgICAgICAgICAgICAgJCgnI2FkZFRhY2hlRm9ybScpLmZpbmQoJ3NlbGVjdFtpZD1cInBlcnNvdVwiXScpLnZhbChkYXRhLnBlcnNvbm5lbHMuaWQudG9TdHJpbmcoKSk7XG5cblxuICAgICAgICAgICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH0pO1xuICAgICAgICAkKFwiLmRlbGVxdWlwZVwiKS5lYWNoKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICQodGhpcykub2ZmKCkub24oXCJjbGlja1wiLCBhc3luYyBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgbGV0IGlkID0gdGhpcy5pZDtcbiAgICAgICAgICAgICAgICAkKCcjQ29uZmlybURlbGV0ZScpLm1vZGFsKCdzaG93Jyk7XG4gICAgICAgICAgICAgICAgJCgnI2FjY2VwdG8nKS5vZmYoKS5vbihcImNsaWNrXCIsIGFzeW5jIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnc2hvdycpO1xuICAgICAgICAgICAgICAgICAgICAkKCcjQ29uZmlybURlbGV0ZScpLm1vZGFsKCdoaWRlJyk7XG4gICAgICAgICAgICAgICAgICAgIGF3YWl0IGF4aW9zKHtcbiAgICAgICAgICAgICAgICAgICAgICAgIG1ldGhvZDogJ0RFTEVURScsXG4gICAgICAgICAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL3BsYW5uaW5nL2VxdWlwZS9kZWxldGUvJyArIGlkLFxuICAgICAgICAgICAgICAgICAgICAgICAgY29udGVudFR5cGU6ICdhcHBsaWNhdGlvbi9qc29uOyBjaGFyc2V0PXV0Zi04JyxcbiAgICAgICAgICAgICAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgICAgICAgICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBzZXREYXRhcyhyZXNwb25zZS5kYXRhKTtcbiAgICAgICAgICAgICAgICAgICAgICAgICQoJyNUcmFpdGVtZW50JykubW9kYWwoJ2hpZGUnKTtcbiAgICAgICAgICAgICAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH0pO1xuICAgICAgICAkKFwiLmdldGVxdWlwZVwiKS5lYWNoKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICQodGhpcykub2ZmKCkub24oXCJjbGlja1wiLCBhc3luYyBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgbGV0IGlkID0gdGhpcy5pZDtcbiAgICAgICAgICAgICAgICAkKCcjVHJhaXRlbWVudCcpLm1vZGFsKCdzaG93Jyk7XG4gICAgICAgICAgICAgICAgYXdhaXQgYXhpb3Moe1xuICAgICAgICAgICAgICAgICAgICBtZXRob2Q6ICdHRVQnLFxuICAgICAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL3BsYW5uaW5nL2VxdWlwZS9nZXQvJyArIGlkLFxuICAgICAgICAgICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgICAgICAgICBkYXRhVHlwZTogJ2pzb24nLFxuICAgICAgICAgICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG5cbiAgICAgICAgICAgICAgICAgICAgbG9jYWxTdG9yYWdlLnNldEl0ZW0oJ3Rva2VuJywgaWQudG9TdHJpbmcoKSk7XG4gICAgICAgICAgICAgICAgICAgIGxldCBkYXRhID0gcmVzcG9uc2UuZGF0YTtcbiAgICAgICAgICAgICAgICAgICAgY29uc29sZS5sb2coZGF0YSk7XG5cbiAgICAgICAgICAgICAgICAgICAgJCgnI21kTW9kYWxFcXVpcGUnKS5tb2RhbCgndG9nZ2xlJyk7XG4gICAgICAgICAgICAgICAgICAgICQoJyNUcmFpdGVtZW50JykubW9kYWwoJ2hpZGUnKTtcblxuICAgICAgICAgICAgICAgICAgICAkKCcuZXF1aScpLmFkZENsYXNzKCdjb2wtcGluaycpO1xuXG4gICAgICAgICAgICAgICAgICAgICQoJyNkaXZ1cGRFcXVpcGUnKS5yZW1vdmVDbGFzcygnaGlkZScpO1xuICAgICAgICAgICAgICAgICAgICAkKCcjZGl2dXBkRXF1aXBlJykucmVtb3ZlQ2xhc3MoJ2hpZGUnKTtcbiAgICAgICAgICAgICAgICAgICAgJCgnI2RpdnVwZEVxdWlwZScpLnNob3coKTtcbiAgICAgICAgICAgICAgICAgICAgJCgnI2RpdmFkZFRFcXVpcGUnKS5hZGRDbGFzcygnaGlkZScpO1xuXG4gICAgICAgICAgICAgICAgICAgICQoJyNhZGRFcXVpcGVGb3JtJykuZmluZCgnaW5wdXRbaWQ9XCJlZGVzaWduXCJdJykudmFsKGRhdGEuZGVzaWduYXRpb24pO1xuICAgICAgICAgICAgICAgICAgICAkKCcjYWRkRXF1aXBlRm9ybScpLmZpbmQoJ3NlbGVjdFtpZD1cInRzZWN0aW9uXCJdJykudmFsKGRhdGEuc2VjdGlvbi5pZC50b1N0cmluZygpKTtcblxuICAgICAgICAgICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH0pO1xuICAgIH0pO1xuXG4gICAgJCgnI2FkZGVFcXVpcGUnKS5vZmYoKS5vbihcImNsaWNrXCIsIGZ1bmN0aW9uIChldmVudCkge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpXG4gICAgICAgIGlmICgkKHRoaXMpLmNsb3Nlc3QoJ2Zvcm0nKS52YWxpZCgpKSB7XG4gICAgICAgICAgICAkKCcjZGl2YWRkVEVxdWlwZScpLmhpZGUoKVxuICAgICAgICAgICAgJCgnI2xvYWRFcXVpcGUnKS5jc3MoJ2Rpc3BsYXknLCAnJylcbiAgICAgICAgICAgIGxldCBwcCA9ICQoJyNhZGRFcXVpcGVGb3JtJykuc2VyaWFsaXplT2JqZWN0KClbJ3NlY3Rpb24nXTtcbiAgICAgICAgICAgIGF4aW9zKHtcbiAgICAgICAgICAgICAgICBtZXRob2Q6ICdQT1NUJyxcbiAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL3BsYW5uaW5nL2VxdWlwZS9hZGRlJyxcbiAgICAgICAgICAgICAgICBkYXRhOiBKU09OLnN0cmluZ2lmeSgkKCcjYWRkRXF1aXBlRm9ybScpLnNlcmlhbGl6ZU9iamVjdCgpKSxcbiAgICAgICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgICAgIHNldERhdGFzKHJlc3BvbnNlLmRhdGEpO1xuICAgICAgICAgICAgICAgICQoJyNkaXZhZGRFcXVpcGUnKS5zaG93KCk7XG4gICAgICAgICAgICAgICAgJCgnI2xvYWRFcXVpcGUnKS5oaWRlKCk7XG4gICAgICAgICAgICAgICAgJCgnI21kTW9kYWxFcXVpcGUnKS5tb2RhbCgndG9nZ2xlJylcbiAgICAgICAgICAgICAgICBzZXRUaW1lb3V0KGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICAgICAgc2hvd0VxdWlwZShwcCk7XG4gICAgICAgICAgICAgICAgfSwgNTAwKTtcbiAgICAgICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH1cbiAgICB9KTtcbiAgICAkKCcjdXBkRXF1aXBlJykub2ZmKCkub24oXCJjbGlja1wiLCBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKVxuICAgICAgICBpZiAoJCh0aGlzKS5jbG9zZXN0KCdmb3JtJykudmFsaWQoKSkge1xuICAgICAgICAgICAgJCgnI2RpdnVwZEVxdWlwZScpLmhpZGUoKVxuICAgICAgICAgICAgJCgnI2xvYWRFcXVpcGUnKS5jc3MoJ2Rpc3BsYXknLCAnJylcbiAgICAgICAgICAgIGNvbnN0IGlkID0gbG9jYWxTdG9yYWdlLmdldEl0ZW0oJ3Rva2VuJyk7XG4gICAgICAgICAgICBheGlvcyh7XG4gICAgICAgICAgICAgICAgbWV0aG9kOiAnUE9TVCcsXG4gICAgICAgICAgICAgICAgdXJsOiAnL2NybS9wbGFubmluZy9lcXVpcGUvdXBkYXRlLycgKyBpZCxcbiAgICAgICAgICAgICAgICBkYXRhOiBKU09OLnN0cmluZ2lmeSgkKCcjYWRkRXF1aXBlRm9ybScpLnNlcmlhbGl6ZU9iamVjdCgpKSxcbiAgICAgICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgICAgIHNldERhdGFzKHJlc3BvbnNlLmRhdGEpO1xuICAgICAgICAgICAgICAgICQoJyNtZE1vZGFsRXF1aXBlJykubW9kYWwoJ3RvZ2dsZScpXG4gICAgICAgICAgICB9KS5jYXRjaChmdW5jdGlvbiAoZXJyb3IpIHtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG4gICAgfSlcbiAgICBhc3luYyBmdW5jdGlvbiBzYXZlT3JkcmUoaWQsIHZhbCkge1xuICAgICAgICAkKCcjVHJhaXRlbWVudCcpLm1vZGFsKCdzaG93Jyk7XG4gICAgICAgIGF3YWl0IGF4aW9zKHtcbiAgICAgICAgICAgIG1ldGhvZDogJ1BPU1QnLFxuICAgICAgICAgICAgdXJsOiAnL2NybS9wbGFubmluZy90YWNoZS9vcmRyZS8nICsgaWQgKyAnLycgKyB2YWwudmFsdWUsXG4gICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICAgICBzZXREYXRhcyhyZXNwb25zZS5kYXRhKTtcbiAgICAgICAgICAgICQoJyNUcmFpdGVtZW50JykubW9kYWwoJ2hpZGUnKTtcbiAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgICAgICAkKCcjVHJhaXRlbWVudCcpLm1vZGFsKCdoaWRlJyk7XG4gICAgICAgICAgICAkKCcjTW9kYWxFcnJldXInKS5tb2RhbCgnc2hvdycpO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBhc3luYyBmdW5jdGlvbiBzYXZlUGxhbm5pbmcoaWQsIHZhbCwgaWRjaGFuKSB7XG4gICAgICAgICQoJyNUcmFpdGVtZW50JykubW9kYWwoJ3Nob3cnKTtcbiAgICAgICAgYXdhaXQgYXhpb3Moe1xuICAgICAgICAgICAgbWV0aG9kOiAnUE9TVCcsXG4gICAgICAgICAgICB1cmw6ICcvY3JtL3BsYW5uaW5nL29yZHJlLycgKyBpZCArICcvJyArIHZhbC52YWx1ZSxcbiAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgIHNldERhdGFzKHJlc3BvbnNlLmRhdGEpO1xuICAgICAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnaGlkZScpO1xuICAgICAgICAgICAgc2V0VGltZW91dChmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgc2hvd1BsYW5uaW5nKGlkY2hhbik7XG4gICAgICAgICAgICB9LCA1MDApO1xuICAgICAgICB9KS5jYXRjaChmdW5jdGlvbiAoZXJyb3IpIHtcbiAgICAgICAgICAgICQoJyNUcmFpdGVtZW50JykubW9kYWwoJ2hpZGUnKTtcbiAgICAgICAgICAgICQoJyNNb2RhbEVycmV1cicpLm1vZGFsKCdzaG93Jyk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIGFzeW5jIGZ1bmN0aW9uIHNhdmVTZWN0aW9uKGlkLCB2YWwsIGlkcGxhbikge1xuICAgICAgICAkKCcjVHJhaXRlbWVudCcpLm1vZGFsKCdzaG93Jyk7XG4gICAgICAgIGF3YWl0IGF4aW9zKHtcbiAgICAgICAgICAgIG1ldGhvZDogJ1BPU1QnLFxuICAgICAgICAgICAgdXJsOiAnL2NybS9wbGFubmluZy9zZWN0aW9uL29yZHJlLycgKyBpZCArICcvJyArIHZhbC52YWx1ZSxcbiAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgIHNldERhdGFzKHJlc3BvbnNlLmRhdGEpO1xuICAgICAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnaGlkZScpO1xuICAgICAgICAgICAgc2V0VGltZW91dChmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgc2hvd1NlY3Rpb24oaWRwbGFuKTtcbiAgICAgICAgICAgIH0sIDUwMCk7XG4gICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnaGlkZScpO1xuICAgICAgICAgICAgJCgnI01vZGFsRXJyZXVyJykubW9kYWwoJ3Nob3cnKTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgY29uc3QgcmVuZGVyUGxhbm5pbmdzID0gZGF0YXMubWFwKChkYXRhKSA9PiB7XG4gICAgICAgIGxldCBjaGFudGllcnMgPSBkYXRhLmNoYW50aWVycztcbiAgICAgICAgY29uc3QgcmVuZGVyY2hhbnRpZXJzID0gY2hhbnRpZXJzLm1hcCgoY2hhbnRpZXIpID0+IHtcblxuICAgICAgICAgICAgbGV0IG91bnQgPSAwO1xuICAgICAgICAgICAgbGV0IHBsYW5pbm5ncyA9IGNoYW50aWVyLnBsYW5uaW5ncztcblxuICAgICAgICAgICAgcGxhbmlubmdzID0gcGxhbmlubmdzLnNvcnQoZnVuY3Rpb24gKGEsIGIpIHtcbiAgICAgICAgICAgICAgICByZXR1cm4gYS5yYW5nLnRvU3RyaW5nKCkgLSBiLnJhbmcudG9TdHJpbmcoKVxuICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgIHBsYW5pbm5ncy5tYXAoKHBsYW5uaW5nKSA9PiB7XG4gICAgICAgICAgICAgICAgaWYgKHBsYW5uaW5nLmNvcmJlaWxsZSA9PT0gbnVsbCkge1xuICAgICAgICAgICAgICAgICAgICBvdW50ID0gb3VudCArIDE7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfSk7XG5cblxuICAgICAgICAgICAgY29uc3QgcmVuZGVyUGxhbm5pbmcgPSBwbGFuaW5uZ3MubWFwKChwbGFubmluZykgPT4ge1xuICAgICAgICAgICAgICAgIGlmIChwbGFubmluZy5jb3JiZWlsbGUgPT09IG51bGwpIHtcbiAgICAgICAgICAgICAgICAgICAgbGV0IHNlY3Rpb25zID0gcGxhbm5pbmcuc2VjdGlvbjtcblxuICAgICAgICAgICAgICAgICAgICBzZWN0aW9ucyA9IHNlY3Rpb25zLnNvcnQoZnVuY3Rpb24gKGEsIGIpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICByZXR1cm4gYS5yYW5nLnRvU3RyaW5nKCkgLSBiLnJhbmcudG9TdHJpbmcoKVxuICAgICAgICAgICAgICAgICAgICB9KTtcblxuICAgICAgICAgICAgICAgICAgICBjb25zdCByZW5kZXJTZWN0aW9uID0gc2VjdGlvbnMubWFwKChzZWN0aW9uKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICBpZiAoc2VjdGlvbi5jb3JiZWlsbGUgPT09IG51bGwpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBsZXQgdGFjaGVzID0gc2VjdGlvbi50YWNoZXM7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgdGFjaGVzID0gdGFjaGVzLnNvcnQoZnVuY3Rpb24gKGEsIGIpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcmV0dXJuIGEub3JkcmUgLSBiLm9yZHJlXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgY29uc3QgcmVuZGVydGFjaGVzID0gdGFjaGVzLm1hcCgodGFjaGUpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgKHRhY2hlLmNvcmJlaWxsZSA9PT0gbnVsbCkge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbGV0IHBlcnNvbm5lbHMgPSB0YWNoZS5wZXJzb25uZWw7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb25zdCByZW5kZXJQZXJzID0gcGVyc29ubmVscy5tYXAoKHBlcnMpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICByZXR1cm4gKDxiIGNsYXNzTmFtZT1cIm5vd3JhcGVcIj4mcmFxdW87Jm5ic3A7e3BlcnMubm9tc308YnIvPjwvYj4pXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGxldCBlcXVpcGVzID0gdGFjaGUuZXF1aXBlcztcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbnN0IHJlbmRlckVxdWkgPSBlcXVpcGVzLm1hcCgoZXF1aSkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybiAoPGIgY2xhc3NOYW1lPVwibm93cmFwZVwiPiZyYXF1bzsmbmJzcDt7ZXF1aS5kZXNpZ25hdGlvbn08YnIvPjwvYj4pXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KTtcblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbGV0IHRhY2hlciA9ICcgJztcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmICh0YWNoZS5ldGF0ID09PSAnw4AgZmFpcmUnKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGFjaGVyID0gJzxzcGFuIGNsYXNzPVwibGFiZWwgYmctZ3JlZW4gZm9udC0xMlwiPicgKyB0YWNoZS5ldGF0ICsgJzwvc3Bhbj4nO1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiAodGFjaGUuZXRhdCA9PT0gJ0FjaGV2w6llJykge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRhY2hlciA9ICc8c3BhbiBjbGFzcz1cImxhYmVsIGJnLXBpbmsgZm9udC0xMlwiPicgKyB0YWNoZS5ldGF0ICsgJzwvc3Bhbj4nO1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiAodGFjaGUuZXRhdCA9PT0gJ0VuIGF0dGVudGUnKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGFjaGVyID0gJzxzcGFuIGNsYXNzPVwibGFiZWwgYmctb3JhbmdlIGZvbnQtMTJcIj4nICsgdGFjaGUuZXRhdCArICc8L3NwYW4+JztcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgKHRhY2hlLmV0YXQgPT09ICdFbiBjb3VycycpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0YWNoZXIgPSAnPHNwYW4gY2xhc3M9XCJsYWJlbCBiZy1ibHVlIGZvbnQtMTJcIj4nICsgdGFjaGUuZXRhdCArICc8L3NwYW4+JztcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbGV0IGxpYiA9ICc8YSBocmVmPVwiL2NybS90YWNoZS8nICsgdGFjaGUuaWQgKyAnXCIgY2xhc3M9XCJjb2wtYmxhY2tcIj4nICsgdGFjaGUubGliZWxsZSArICc8L2E+JztcblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcmV0dXJuIChcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHIga2V5PXt0YWNoZS5pZH0gY2xhc3NOYW1lPXtzZWN0aW9uLmlkICsgJ3RhY2gnICsgJyBoaWRlJ30+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LXJpZ2h0XCIgc3R5bGU9e3t2ZXJ0aWNhbEFsaWduOiBcIm1pZGRsZVwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8RWRpdFRleHRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0eXBlPSd0ZXh0J1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT0nYmFkZ2UgYmFkZ2UtcGlsbCBiYWRnZS1zdWNjZXNzJ1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG5hbWU9e3RhY2hlLmlkfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRlZmF1bHRWYWx1ZT17dGFjaGUub3JkcmV9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25TYXZlPXt2YWwgPT4gc2F2ZU9yZHJlKHRhY2hlLmlkLCB2YWwpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwibXcxMDAgbWw5MFwiIHN0eWxlPXt7d2hpdGVTcGFjZTogXCJicmVhay1zcGFjZXNcIn19XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYW5nZXJvdXNseVNldElubmVySFRNTD17e19faHRtbDogbGlifX0vPlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e3ZlcnRpY2FsQWxpZ246IFwibWlkZGxlXCIsIHRleHRUcmFuc2Zvcm06IFwidXBwZXJjYXNlXCJ9fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXJcIj48c3BhblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwibGFiZWwgYmctYmx1ZSBmb250LTEyXCI+e21vbWVudCh0YWNoZS5kZWJ1dCkubG9jYWxlKFwiZnJcIikuZm9ybWF0KCdsbGwnKX08L3NwYW4+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7dmVydGljYWxBbGlnbjogXCJtaWRkbGVcIiwgdGV4dFRyYW5zZm9ybTogXCJ1cHBlcmNhc2VcIn19XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlciBcIj48c3BhblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwibGFiZWwgYmctYmx1ZSBmb250LTEyXCI+e21vbWVudCh0YWNoZS5maW4pLmxvY2FsZShcImZyXCIpLmZvcm1hdCgnbGxsJyl9PC9zcGFuPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlciBcIiBzdHlsZT17e3ZlcnRpY2FsQWxpZ246IFwibWlkZGxlXCJ9fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IHRhY2hlcn19Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7dmVydGljYWxBbGlnbjogXCJtaWRkbGVcIn19PntyZW5kZXJQZXJzfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e3ZlcnRpY2FsQWxpZ246IFwibWlkZGxlXCJ9fT57cmVuZGVyRXF1aX08L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e3ZlcnRpY2FsQWxpZ246IFwibWlkZGxlXCJ9fT48YSBocmVmPVwiI1wiIGNsYXNzTmFtZT1cImdldHRhY2hlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZD17dGFjaGUuaWR9PjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYS1lZGl0IGNvbC1ncmVlbiBmb250LTE2XCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2E+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7dmVydGljYWxBbGlnbjogXCJtaWRkbGVcIn19PjxhIGhyZWY9XCIjXCIgY2xhc3NOYW1lPVwiZGVsdGFjaGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkPXt0YWNoZS5pZH0+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImZhIGZhLXRyYXNoIGNvbC1waW5rIGZvbnQtMTZcIi8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvYT48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+KTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgbGV0IHByc2VjdGlvbiA9ICc8ZGl2IGNsYXNzPVwicHJvZ3Jlc3NcIj4nICtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJzxkaXYgY2xhc3M9XCJwcm9ncmVzcy1iYXIgYmctZ3JlZW5cIicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAncm9sZT1cInByb2dyZXNzYmFyXCInICtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJ2FyaWEtdmFsdWVub3c9JyArIHNlY3Rpb24uZXRhdCArXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICcgYXJpYS12YWx1ZW1pbj1cIjBcIicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAnYXJpYS12YWx1ZW1heD1cIjEwMFwiJyArXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICdzdHlsZT13aWR0aDonICsgc2VjdGlvbi5ldGF0ICsgJyUnICtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJz48L2Rpdj4nICtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJzwvZGl2Pic7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgcmV0dXJuIChcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBzdHlsZT17e2JhY2tncm91bmRDb2xvcjogXCIjZTFmNWVlXCJ9fSBrZXk9e3NlY3Rpb24uaWR9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPXtwbGFubmluZy5pZCArICdzZWMnICsgJyBoaWRlJ30gb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNob3dUYWNoZShzZWN0aW9uLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cIm13NjAgdGV4dC1jZW50ZXJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgeyBzZWN0aW9uLnJhbmcgIT09IG51bGwgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPEVkaXRUZXh0XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHR5cGU9J3RleHQnXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT0nYmFkZ2UgYmFkZ2UtcGlsbCBiYWRnZS1wcmltYXJ5J1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBuYW1lPXtzZWN0aW9uLmlkLnRvU3RyaW5nKCl9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRlZmF1bHRWYWx1ZT17c2VjdGlvbi5yYW5nLnRvU3RyaW5nKCl9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uU2F2ZT17dmFsID0+IHNhdmVTZWN0aW9uKHNlY3Rpb24uaWQsIHZhbCwgcGxhbm5pbmcuaWQpfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8+fVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwiY29sLWJsdWUgbWw2MFwiIGNvbFNwYW49XCIyXCI+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtZm9sZGVyLW9wZW5cIi8+Jm5ic3A7e3NlY3Rpb24ubGliZWxsZX08L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xTcGFuPVwiNFwiPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBwcnNlY3Rpb259fS8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPntmb3JtYXROdW1iZXIoc2VjdGlvbi5ldGF0LCAwLCAnICcpfSU8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e3ZlcnRpY2FsQWxpZ246IFwibWlkZGxlXCJ9fT48YSBocmVmPVwiI1wiIGNsYXNzTmFtZT1cImdldHNlY3Rpb25cIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWQ9e3NlY3Rpb24uaWR9PjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImZhIGZhLWVkaXQgY29sLWdyZWVuIGZvbnQtMTVcIi8+PC9hPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7dmVydGljYWxBbGlnbjogXCJtaWRkbGVcIn19PjxhIGhyZWY9XCIjXCIgb25DbGljaz17KCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkZWxzZWN0aW9uKHNlY3Rpb24uaWQpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0+PGkgY2xhc3NOYW1lPVwiZmEgZmEtdHJhc2ggY29sLXBpbmsgZm9udC0xNVwiLz48L2E+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7cmVuZGVydGFjaGVzfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Lz4pXG4gICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICAgICAgICAgIGxldCBwcnBsYW5uaW5nID0gJzxkaXYgY2xhc3M9XCJwcm9ncmVzc1wiPicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgJzxkaXYgY2xhc3M9XCJwcm9ncmVzcy1iYXIgYmctZ3JlZW5cIicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgJ3JvbGU9XCJwcm9ncmVzc2JhclwiJyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnYXJpYS12YWx1ZW5vdz0nICsgcGxhbm5pbmcucHJvZ3Jlc3Npb24gK1xuICAgICAgICAgICAgICAgICAgICAgICAgJyBhcmlhLXZhbHVlbWluPVwiMFwiJyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnYXJpYS12YWx1ZW1heD1cIjEwMFwiJyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnc3R5bGU9d2lkdGg6JyArIHBsYW5uaW5nLnByb2dyZXNzaW9uICsgJyUnICtcbiAgICAgICAgICAgICAgICAgICAgICAgICc+PC9kaXY+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnPC9kaXY+JztcblxuICAgICAgICAgICAgICAgICAgICByZXR1cm4gKDw+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dHIgc3R5bGU9e3tiYWNrZ3JvdW5kQ29sb3I6IFwiI2ZjZmNmMlwifX0ga2V5PXtwbGFubmluZy5pZH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9e2NoYW50aWVyLmlkICsgJ3BsYW5uJyArICcgaGlkZSd9IG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBzaG93U2VjdGlvbihwbGFubmluZy5pZClcbiAgICAgICAgICAgICAgICAgICAgICAgIH19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48RWRpdFRleHRcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdHlwZT0ndGV4dCdcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPSdiYWRnZSBiYWRnZS1waWxsIGJhZGdlLWRhbmdlcidcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbmFtZT17cGxhbm5pbmcuaWQudG9TdHJpbmcoKX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGVmYXVsdFZhbHVlPXtwbGFubmluZy5yYW5nLnRvU3RyaW5nKCl9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uU2F2ZT17dmFsID0+IHNhdmVQbGFubmluZyhwbGFubmluZy5pZCwgdmFsLCBjaGFudGllci5pZCl9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgLz48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzc05hbWU9XCJjb2wtcGluayBtbDMwXCIgY29sU3Bhbj1cIjJcIj48aVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYS1mb2xkZXItb3BlblwiLz4mbmJzcDt7cGxhbm5pbmcucGxhbm5pbmd9PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sU3Bhbj1cIjRcIj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBkYW5nZXJvdXNseVNldElubmVySFRNTD17e19faHRtbDogcHJwbGFubmluZ319Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+e3BsYW5uaW5nLnByb2dyZXNzaW9ufSU8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e3ZlcnRpY2FsQWxpZ246IFwibWlkZGxlXCJ9fT48YSBocmVmPVwiI1wiIGNsYXNzTmFtZT1cImdldHBsYW5uaW5nXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkPXtwbGFubmluZy5pZH0+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtZWRpdCBjb2wtZ3JlZW4gZm9udC0xNVwiLz48L2E+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgc3R5bGU9e3t2ZXJ0aWNhbEFsaWduOiBcIm1pZGRsZVwifX0+PGEgaHJlZj1cIiNcIiBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRlbHBsYW5uaW5nKHBsYW5uaW5nLmlkKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PjxpIGNsYXNzTmFtZT1cImZhIGZhLXRyYXNoIGNvbC1waW5rIGZvbnQtMTVcIi8+PC9hPjwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAge3JlbmRlclNlY3Rpb259XG4gICAgICAgICAgICAgICAgICAgIDwvPik7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgIGlmIChvdW50ID4gMCkge1xuICAgICAgICAgICAgICAgIHJldHVybiAoPD5cbiAgICAgICAgICAgICAgICAgICAgPHRyIHN0eWxlPXt7YmFja2dyb3VuZENvbG9yOiBcIiNkYmRmZWZcIn19IG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHNob3dQbGFubmluZyhjaGFudGllci5pZClcbiAgICAgICAgICAgICAgICAgICAgfX0+XG4gICAgICAgICAgICAgICAgICAgICAgICA8dGQvPlxuICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbFNwYW49XCIxMFwiIGNsYXNzTmFtZT1cInRleHQtdXBwZXJjYXNlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e2NvbG9yOiAnIzRlNzNkZid9fT57ZGF0YS5ub21jbGllbnR9IHwge2NoYW50aWVyLm5vbWNoYW50aWVyfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgIDwvdHI+XG4gICAgICAgICAgICAgICAgICAgIHtyZW5kZXJQbGFubmluZ31cbiAgICAgICAgICAgICAgICA8Lz4pO1xuICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICByZXR1cm4gKDw+PC8+KVxuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICAgICAgcmV0dXJuICg8PntyZW5kZXJjaGFudGllcnN9PC8+KVxuICAgIH0pO1xuICAgIGNvbnN0IHJlbmRlckpvdXIgPSBkYXRhcy5tYXAoKGRhdGEpID0+IHtcbiAgICAgICAgbGV0IGNoYW50aWVycyA9IGRhdGEuY2hhbnRpZXJzO1xuICAgICAgICBjb25zdCByZW5kZXJjaGFudGllcnMgPSBjaGFudGllcnMubWFwKChjaGFudGllcikgPT4ge1xuICAgICAgICAgICAgbGV0IG91bnQgPSAwO1xuICAgICAgICAgICAgbGV0IHBsYW5pbm5ncyA9IGNoYW50aWVyLnBsYW5uaW5ncztcbiAgICAgICAgICAgIHBsYW5pbm5ncyA9IHBsYW5pbm5ncy5zb3J0KGZ1bmN0aW9uIChhLCBiKSB7XG4gICAgICAgICAgICAgICAgcmV0dXJuIGEucmFuZy50b1N0cmluZygpIC0gYi5yYW5nLnRvU3RyaW5nKClcbiAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgcGxhbmlubmdzLm1hcCgocGxhbm5pbmcpID0+IHtcbiAgICAgICAgICAgICAgICBpZiAocGxhbm5pbmcuY29yYmVpbGxlID09PSBudWxsKSB7XG4gICAgICAgICAgICAgICAgICAgIG91bnQgPSBvdW50ICsgMTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgICAgIGNvbnN0IHJlbmRlclBsYW5uaW5nID0gcGxhbmlubmdzLm1hcCgocGxhbm5pbmcpID0+IHtcbiAgICAgICAgICAgICAgICBpZiAocGxhbm5pbmcuY29yYmVpbGxlID09PSBudWxsKSB7XG4gICAgICAgICAgICAgICAgICAgIGxldCBzZWN0aW9ucyA9IHBsYW5uaW5nLnNlY3Rpb247XG4gICAgICAgICAgICAgICAgICAgIHNlY3Rpb25zID0gc2VjdGlvbnMuc29ydChmdW5jdGlvbiAoYSwgYikge1xuICAgICAgICAgICAgICAgICAgICAgICAgcmV0dXJuIGEucmFuZy50b1N0cmluZygpIC0gYi5yYW5nLnRvU3RyaW5nKClcbiAgICAgICAgICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgICAgICAgICAgY29uc3QgcmVuZGVyU2VjdGlvbiA9IHNlY3Rpb25zLm1hcCgoc2VjdGlvbikgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgaWYgKHNlY3Rpb24uY29yYmVpbGxlID09PSBudWxsKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgbGV0IHRhY2hlcyA9IHNlY3Rpb24udGFjaGVzO1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRhY2hlcyA9IHRhY2hlcy5zb3J0KGZ1bmN0aW9uIChhLCBiKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybiBhLm9yZHJlIC0gYi5vcmRyZVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbnN0IHJlbmRlcnRhY2hlcyA9IHRhY2hlcy5tYXAoKHRhY2hlKSA9PiB7XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbGV0IGRhdGUxID0gbW9tZW50KCkuZm9ybWF0KFwiWVlZWS1NTS1ERFwiKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBsZXQgZGF0ZTIgPSBtb21lbnQodGFjaGUuZGVidXQpLmZvcm1hdChcIllZWVktTU0tRERcIik7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGxldCBkYXRlMyA9IG1vbWVudCh0YWNoZS5maW4pLmZvcm1hdChcIllZWVktTU0tRERcIik7XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgKGRhdGUzID49IGRhdGUxICYmIGRhdGUxID49IGRhdGUyKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiAodGFjaGUuY29yYmVpbGxlID09PSBudWxsKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbGV0IHBlcnNvbm5lbHMgPSB0YWNoZS5wZXJzb25uZWw7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY29uc3QgcmVuZGVyUGVycyA9IHBlcnNvbm5lbHMubWFwKChwZXJzKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybiAoPGIgY2xhc3NOYW1lPVwibm93cmFwZVwiPiZyYXF1bzsmbmJzcDt7cGVycy5ub21zfTxici8+PC9iPilcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBsZXQgZXF1aXBlcyA9IHRhY2hlLmVxdWlwZXM7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY29uc3QgcmVuZGVyRXF1aSA9IGVxdWlwZXMubWFwKChlcXVpKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybiAoPGIgY2xhc3NOYW1lPVwibm93cmFwZVwiPiZyYXF1bzsmbmJzcDt7ZXF1aS5kZXNpZ25hdGlvbn08YnIvPjwvYj4pXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBsZXQgdGFjaGVyID0gJyAnO1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmICh0YWNoZS5ldGF0ID09PSAnw4AgZmFpcmUnKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRhY2hlciA9ICc8c3BhbiBjbGFzcz1cImxhYmVsIGJnLWdyZWVuIGZvbnQtMTJcIj4nICsgdGFjaGUuZXRhdCArICc8L3NwYW4+JztcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiAodGFjaGUuZXRhdCA9PT0gJ0FjaGV2w6llJykge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0YWNoZXIgPSAnPHNwYW4gY2xhc3M9XCJsYWJlbCBiZy1waW5rIGZvbnQtMTJcIj4nICsgdGFjaGUuZXRhdCArICc8L3NwYW4+JztcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiAodGFjaGUuZXRhdCA9PT0gJ0VuIGF0dGVudGUnKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRhY2hlciA9ICc8c3BhbiBjbGFzcz1cImxhYmVsIGJnLW9yYW5nZSBmb250LTEyXCI+JyArIHRhY2hlLmV0YXQgKyAnPC9zcGFuPic7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgKHRhY2hlLmV0YXQgPT09ICdFbiBjb3VycycpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGFjaGVyID0gJzxzcGFuIGNsYXNzPVwibGFiZWwgYmctYmx1ZSBmb250LTEyXCI+JyArIHRhY2hlLmV0YXQgKyAnPC9zcGFuPic7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbGV0IGxpYiA9ICc8YSBocmVmPVwiL2NybS90YWNoZS8nICsgdGFjaGUuaWQgKyAnXCIgY2xhc3M9XCJjb2wtYmxhY2tcIj4nICsgdGFjaGUubGliZWxsZSArICc8YiBjbGFzcz1cImNvbC1waW5rXCI+PGJyLz5TZWN0aW9uOjwvYj4gJyArIHNlY3Rpb24ubGliZWxsZSArICc8YnIvPjxiIGNsYXNzPVwiY29sLXBpbmtcIj5QbGFubmluZzo8L2I+ICcgKyBwbGFubmluZy5wbGFubmluZyArXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICc8L2E+PGJyLz48YiBjbGFzcz1cImNvbC1waW5rXCI+Q2hhbnRpZXI6PC9iPiA8YSBocmVmPVwiL2NybS90YWNoZS8nICsgdGFjaGUuaWQgKyAnXCIgY2xhc3M9XCJwcmlcIj4nICsgZGF0YS5ub21jbGllbnQgKyAnfCcgKyBjaGFudGllci5ub21jaGFudGllciArICc8L2E+JztcblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybiAoXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBrZXk9e3RhY2hlLmlkfT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwibXcxMDBcIiBzdHlsZT17e3doaXRlU3BhY2U6IFwiYnJlYWstc3BhY2VzXCJ9fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBsaWJ9fS8+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e3ZlcnRpY2FsQWxpZ246IFwibWlkZGxlXCIsIHRleHRUcmFuc2Zvcm06IFwidXBwZXJjYXNlXCJ9fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cInRleHQtY2VudGVyXCI+PHNwYW5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJsYWJlbCBiZy1ibHVlIGZvbnQtMTJcIj57bW9tZW50KHRhY2hlLmRlYnV0KS5sb2NhbGUoXCJmclwiKS5mb3JtYXQoJ2xsbCcpfTwvc3Bhbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e3ZlcnRpY2FsQWxpZ246IFwibWlkZGxlXCIsIHRleHRUcmFuc2Zvcm06IFwidXBwZXJjYXNlXCJ9fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cInRleHQtY2VudGVyIFwiPjxzcGFuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwibGFiZWwgYmctYmx1ZSBmb250LTEyXCI+e21vbWVudCh0YWNoZS5maW4pLmxvY2FsZShcImZyXCIpLmZvcm1hdCgnbGxsJyl9PC9zcGFuPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtY2VudGVyIFwiIHN0eWxlPXt7dmVydGljYWxBbGlnbjogXCJtaWRkbGVcIn19XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IHRhY2hlcn19Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e3ZlcnRpY2FsQWxpZ246IFwibWlkZGxlXCJ9fT57cmVuZGVyUGVyc308L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7dmVydGljYWxBbGlnbjogXCJtaWRkbGVcIn19PntyZW5kZXJFcXVpfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7dmVydGljYWxBbGlnbjogXCJtaWRkbGVcIn19PjxhIGhyZWY9XCIjXCIgY2xhc3NOYW1lPVwiZ2V0dGFjaGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZD17dGFjaGUuaWR9PjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtZWRpdCBjb2wtZ3JlZW4gZm9udC0xNlwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvYT48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7dmVydGljYWxBbGlnbjogXCJtaWRkbGVcIn19PjxhIGhyZWY9XCIjXCIgY2xhc3NOYW1lPVwiZGVsdGFjaGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZD17dGFjaGUuaWR9PjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtdHJhc2ggY29sLXBpbmsgZm9udC0xNlwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvYT48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPik7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgbGV0IHByc2VjdGlvbiA9ICc8ZGl2IGNsYXNzPVwicHJvZ3Jlc3NcIj4nICtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJzxkaXYgY2xhc3M9XCJwcm9ncmVzcy1iYXIgYmctZ3JlZW5cIicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAncm9sZT1cInByb2dyZXNzYmFyXCInICtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJ2FyaWEtdmFsdWVub3c9JyArIHNlY3Rpb24uZXRhdCArXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICcgYXJpYS12YWx1ZW1pbj1cIjBcIicgK1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAnYXJpYS12YWx1ZW1heD1cIjEwMFwiJyArXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICdzdHlsZT13aWR0aDonICsgc2VjdGlvbi5ldGF0ICsgJyUnICtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJz48L2Rpdj4nICtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJzwvZGl2Pic7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgcmV0dXJuIChcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtyZW5kZXJ0YWNoZXN9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvPilcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgICAgICAgICAgbGV0IHBycGxhbm5pbmcgPSAnPGRpdiBjbGFzcz1cInByb2dyZXNzXCI+JyArXG4gICAgICAgICAgICAgICAgICAgICAgICAnPGRpdiBjbGFzcz1cInByb2dyZXNzLWJhciBiZy1ncmVlblwiJyArXG4gICAgICAgICAgICAgICAgICAgICAgICAncm9sZT1cInByb2dyZXNzYmFyXCInICtcbiAgICAgICAgICAgICAgICAgICAgICAgICdhcmlhLXZhbHVlbm93PScgKyBwbGFubmluZy5wcm9ncmVzc2lvbiArXG4gICAgICAgICAgICAgICAgICAgICAgICAnIGFyaWEtdmFsdWVtaW49XCIwXCInICtcbiAgICAgICAgICAgICAgICAgICAgICAgICdhcmlhLXZhbHVlbWF4PVwiMTAwXCInICtcbiAgICAgICAgICAgICAgICAgICAgICAgICdzdHlsZT13aWR0aDonICsgcGxhbm5pbmcucHJvZ3Jlc3Npb24gKyAnJScgK1xuICAgICAgICAgICAgICAgICAgICAgICAgJz48L2Rpdj4nICtcbiAgICAgICAgICAgICAgICAgICAgICAgICc8L2Rpdj4nO1xuXG4gICAgICAgICAgICAgICAgICAgIHJldHVybiAoPD5cbiAgICAgICAgICAgICAgICAgICAgICAgIHtyZW5kZXJTZWN0aW9ufVxuICAgICAgICAgICAgICAgICAgICA8Lz4pO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICBpZiAob3VudCA+IDApIHtcbiAgICAgICAgICAgICAgICByZXR1cm4gKDw+XG4gICAgICAgICAgICAgICAgICAgIHtyZW5kZXJQbGFubmluZ31cbiAgICAgICAgICAgICAgICA8Lz4pO1xuICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICByZXR1cm4gKDw+PC8+KVxuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICAgICAgcmV0dXJuICg8PntyZW5kZXJjaGFudGllcnN9PC8+KVxuICAgIH0pO1xuICAgIGNvbnN0IHJlbmRlclNlbWFpbmUgPSBkYXRhcy5tYXAoKGRhdGEpID0+IHtcbiAgICAgICAgbGV0IGNoYW50aWVycyA9IGRhdGEuY2hhbnRpZXJzO1xuICAgICAgICBjb25zdCByZW5kZXJjaGFudGllcnMgPSBjaGFudGllcnMubWFwKChjaGFudGllcikgPT4ge1xuXG4gICAgICAgICAgICBsZXQgb3VudCA9IDA7XG4gICAgICAgICAgICBsZXQgcGxhbmlubmdzID0gY2hhbnRpZXIucGxhbm5pbmdzO1xuXG4gICAgICAgICAgICBwbGFuaW5uZ3MgPSBwbGFuaW5uZ3Muc29ydChmdW5jdGlvbiAoYSwgYikge1xuICAgICAgICAgICAgICAgIHJldHVybiBhLnJhbmcudG9TdHJpbmcoKSAtIGIucmFuZy50b1N0cmluZygpXG4gICAgICAgICAgICB9KTtcblxuICAgICAgICAgICAgcGxhbmlubmdzLm1hcCgocGxhbm5pbmcpID0+IHtcbiAgICAgICAgICAgICAgICBpZiAocGxhbm5pbmcuY29yYmVpbGxlID09PSBudWxsKSB7XG4gICAgICAgICAgICAgICAgICAgIG91bnQgPSBvdW50ICsgMTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9KTtcblxuICAgICAgICAgICAgY29uc3QgcmVuZGVyUGxhbm5pbmcgPSBwbGFuaW5uZ3MubWFwKChwbGFubmluZykgPT4ge1xuICAgICAgICAgICAgICAgIGlmIChwbGFubmluZy5jb3JiZWlsbGUgPT09IG51bGwpIHtcbiAgICAgICAgICAgICAgICAgICAgbGV0IHNlY3Rpb25zID0gcGxhbm5pbmcuc2VjdGlvbjtcbiAgICAgICAgICAgICAgICAgICAgc2VjdGlvbnMgPSBzZWN0aW9ucy5zb3J0KGZ1bmN0aW9uIChhLCBiKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICByZXR1cm4gYS5yYW5nLnRvU3RyaW5nKCkgLSBiLnJhbmcudG9TdHJpbmcoKVxuICAgICAgICAgICAgICAgICAgICB9KTtcblxuICAgICAgICAgICAgICAgICAgICBjb25zdCByZW5kZXJTZWN0aW9uID0gc2VjdGlvbnMubWFwKChzZWN0aW9uKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICBpZiAoc2VjdGlvbi5jb3JiZWlsbGUgPT09IG51bGwpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBsZXQgdGFjaGVzID0gc2VjdGlvbi50YWNoZXM7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgdGFjaGVzID0gdGFjaGVzLnNvcnQoZnVuY3Rpb24gKGEsIGIpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcmV0dXJuIGEub3JkcmUgLSBiLm9yZHJlXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgY29uc3QgcmVuZGVydGFjaGVzID0gdGFjaGVzLm1hcCgodGFjaGUpID0+IHtcblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBsZXQgZGF0ZTAgPSBtb21lbnQoKS5zdGFydE9mKCdpc29XZWVrJykuZm9ybWF0KFwiWVlZWS1NTS1ERFwiKTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbGV0IGRhdGUxID0gbW9tZW50KCkuZW5kT2YoJ2lzb1dlZWsnKS5mb3JtYXQoXCJZWVlZLU1NLUREXCIpO1xuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGxldCBkYXRlMiA9IG1vbWVudCh0YWNoZS5kZWJ1dCkuZm9ybWF0KFwiWVlZWS1NTS1ERFwiKTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbGV0IGRhdGUzID0gbW9tZW50KHRhY2hlLmZpbikuZm9ybWF0KFwiWVlZWS1NTS1ERFwiKTtcblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiAoZGF0ZTAgPD0gZGF0ZTIgJiYgZGF0ZTIgPD0gZGF0ZTEpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmICh0YWNoZS5jb3JiZWlsbGUgPT09IG51bGwpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBsZXQgcGVyc29ubmVscyA9IHRhY2hlLnBlcnNvbm5lbDtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb25zdCByZW5kZXJQZXJzID0gcGVyc29ubmVscy5tYXAoKHBlcnMpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcmV0dXJuICg8YiBjbGFzc05hbWU9XCJub3dyYXBlXCI+JnJhcXVvOyZuYnNwO3twZXJzLm5vbXN9PGJyLz48L2I+KVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGxldCBlcXVpcGVzID0gdGFjaGUuZXF1aXBlcztcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb25zdCByZW5kZXJFcXVpID0gZXF1aXBlcy5tYXAoKGVxdWkpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcmV0dXJuICg8YiBjbGFzc05hbWU9XCJub3dyYXBlXCI+JnJhcXVvOyZuYnNwO3tlcXVpLmRlc2lnbmF0aW9ufTxici8+PC9iPilcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBsZXQgdGFjaGVyID0gJyAnO1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmICh0YWNoZS5ldGF0ID09PSAnw4AgZmFpcmUnKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRhY2hlciA9ICc8c3BhbiBjbGFzcz1cImxhYmVsIGJnLWdyZWVuIGZvbnQtMTJcIj4nICsgdGFjaGUuZXRhdCArICc8L3NwYW4+JztcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiAodGFjaGUuZXRhdCA9PT0gJ0FjaGV2w6llJykge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0YWNoZXIgPSAnPHNwYW4gY2xhc3M9XCJsYWJlbCBiZy1waW5rIGZvbnQtMTJcIj4nICsgdGFjaGUuZXRhdCArICc8L3NwYW4+JztcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiAodGFjaGUuZXRhdCA9PT0gJ0VuIGF0dGVudGUnKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRhY2hlciA9ICc8c3BhbiBjbGFzcz1cImxhYmVsIGJnLW9yYW5nZSBmb250LTEyXCI+JyArIHRhY2hlLmV0YXQgKyAnPC9zcGFuPic7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgKHRhY2hlLmV0YXQgPT09ICdFbiBjb3VycycpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGFjaGVyID0gJzxzcGFuIGNsYXNzPVwibGFiZWwgYmctYmx1ZSBmb250LTEyXCI+JyArIHRhY2hlLmV0YXQgKyAnPC9zcGFuPic7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbGV0IGxpYiA9ICc8YSBocmVmPVwiL2NybS90YWNoZS8nICsgdGFjaGUuaWQgKyAnXCIgY2xhc3M9XCJjb2wtYmxhY2tcIj4nICsgdGFjaGUubGliZWxsZSArICc8YiBjbGFzcz1cImNvbC1waW5rXCI+PGJyLz5TZWN0aW9uOjwvYj4gJyArIHNlY3Rpb24ubGliZWxsZSArICc8YnIvPjxiIGNsYXNzPVwiY29sLXBpbmtcIj5QbGFubmluZzo8L2I+ICcgKyBwbGFubmluZy5wbGFubmluZyArXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICc8L2E+PGJyLz48YiBjbGFzcz1cImNvbC1waW5rXCI+Q2hhbnRpZXI6PC9iPiA8YSBocmVmPVwiL2NybS90YWNoZS8nICsgdGFjaGUuaWQgKyAnXCIgY2xhc3M9XCJwcmlcIj4nICsgZGF0YS5ub21jbGllbnQgKyAnfCcgKyBjaGFudGllci5ub21jaGFudGllciArICc8L2E+JztcblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybiAoXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ciBrZXk9e3RhY2hlLmlkfT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZC8+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3NOYW1lPVwibXcxMDBcIiBzdHlsZT17e3doaXRlU3BhY2U6IFwiYnJlYWstc3BhY2VzXCJ9fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiBsaWJ9fS8+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e3ZlcnRpY2FsQWxpZ246IFwibWlkZGxlXCIsIHRleHRUcmFuc2Zvcm06IFwidXBwZXJjYXNlXCJ9fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cInRleHQtY2VudGVyXCI+PHNwYW5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJsYWJlbCBiZy1ibHVlIGZvbnQtMTJcIj57bW9tZW50KHRhY2hlLmRlYnV0KS5sb2NhbGUoXCJmclwiKS5mb3JtYXQoJ2xsbCcpfTwvc3Bhbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e3ZlcnRpY2FsQWxpZ246IFwibWlkZGxlXCIsIHRleHRUcmFuc2Zvcm06IFwidXBwZXJjYXNlXCJ9fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cInRleHQtY2VudGVyIFwiPjxzcGFuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwibGFiZWwgYmctYmx1ZSBmb250LTEyXCI+e21vbWVudCh0YWNoZS5maW4pLmxvY2FsZShcImZyXCIpLmZvcm1hdCgnbGxsJyl9PC9zcGFuPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzTmFtZT1cInRleHQtY2VudGVyIFwiIHN0eWxlPXt7dmVydGljYWxBbGlnbjogXCJtaWRkbGVcIn19XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IHRhY2hlcn19Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBzdHlsZT17e3ZlcnRpY2FsQWxpZ246IFwibWlkZGxlXCJ9fT57cmVuZGVyUGVyc308L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7dmVydGljYWxBbGlnbjogXCJtaWRkbGVcIn19PntyZW5kZXJFcXVpfTwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PC90ZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7dmVydGljYWxBbGlnbjogXCJtaWRkbGVcIn19PjxhIGhyZWY9XCIjXCIgY2xhc3NOYW1lPVwiZ2V0dGFjaGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZD17dGFjaGUuaWR9PjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtZWRpdCBjb2wtZ3JlZW4gZm9udC0xNlwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvYT48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHN0eWxlPXt7dmVydGljYWxBbGlnbjogXCJtaWRkbGVcIn19PjxhIGhyZWY9XCIjXCIgY2xhc3NOYW1lPVwiZGVsdGFjaGVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZD17dGFjaGUuaWR9PjxpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiZmEgZmEtdHJhc2ggY29sLXBpbmsgZm9udC0xNlwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvYT48L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPik7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICByZXR1cm4gKFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge3JlbmRlcnRhY2hlc31cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC8+KVxuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICAgICAgcmV0dXJuICg8PlxuICAgICAgICAgICAgICAgICAgICAgICAge3JlbmRlclNlY3Rpb259XG4gICAgICAgICAgICAgICAgICAgIDwvPik7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgIGlmIChvdW50ID4gMCkge1xuICAgICAgICAgICAgICAgIHJldHVybiAoPD5cbiAgICAgICAgICAgICAgICAgICAge3JlbmRlclBsYW5uaW5nfVxuICAgICAgICAgICAgICAgIDwvPik7XG4gICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgIHJldHVybiAoPD48Lz4pXG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuICAgICAgICByZXR1cm4gKDw+e3JlbmRlcmNoYW50aWVyc308Lz4pXG4gICAgfSk7XG4gICAgY29uc3QgcmVuZGVyYVRlYW1zID0gYXRlYW1zLm1hcCgoYXRlYW0pID0+IHtcbiAgICAgICAgbGV0IG1lbWJyZXMgPSBhdGVhbS5wZXJzb25uZWxzO1xuICAgICAgICBsZXQgdGFjaGVzID0gYXRlYW0udGFjaGVzO1xuICAgICAgICBsZXQgY2hlZiA9IFwiIFwiO1xuICAgICAgICBpZihhdGVhbS5jaGVmICE9PSBudWxsKXtcbiAgICAgICAgICAgIGNoZWYgPSBhdGVhbS5jaGVmLm5vbXM7XG4gICAgICAgIH1cbiAgICAgICAgY29uc3QgcmVuZGVyTWVtYnJlcyA9IG1lbWJyZXMubWFwKChtZW1icmUpID0+e1xuICAgICAgICAgICAgcmV0dXJuKDw+PHNwYW4gY2xhc3NOYW1lPVwiY29sLWJsYWNrXCI+KiB7bWVtYnJlLm5vbXN9PC9zcGFuPjxici8+PC8+KTtcbiAgICAgICAgfSk7XG4gICAgICAgIGNvbnN0IHJlbmRlVGFjaGVzID0gdGFjaGVzLm1hcCgodGFjaGUpID0+e1xuICAgICAgICAgICAgcmV0dXJuKDw+XG4gICAgICAgICAgICAgICAgPHNwYW4gY2xhc3NOYW1lPVwiY29sLWJsYWNrXCIgZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6IHRhY2hlLmxpYmVsbGV9fS8+XG4gICAgICAgICAgICAgICAgPGJyLz5cbiAgICAgICAgICAgICAgICA8c3BhbiBjbGFzc05hbWU9XCJjb2wtYmxhY2tcIj5FdGF0OiA8YiBjbGFzc05hbWU9XCJjb2wtYmx1ZVwiPnt0YWNoZS5ldGF0fTwvYj48L3NwYW4+XG4gICAgICAgICAgICA8Lz4pO1xuICAgICAgICB9KTtcbiAgICAgICAgcmV0dXJuICg8ZGl2IGtleT17YXRlYW0uaWR9IGNsYXNzTmFtZT1cImNvbC1tZC0zIHNoYWRvdyBjb2wtYmx1ZVwiIHN0eWxlPXt7IG1hcmdpbjogXCI1cHhcIiwgYmFja2dyb3VuZENvbG9yOiBcIiNGRkZcIiwgYm9yZGVyTGVmdDogXCI2cHggc29saWQgIzMzN2FiN1wiLCBtaW5IZWlnaHQ6XCIzNTBweFwifX0+XG4gICAgICAgICAgICA8aDUgY2xhc3NOYW1lPVwidGV4dC1jZW50ZXJcIj5cbiAgICAgICAgICAgICAgICA8YSBocmVmPVwiI1wiIGNsYXNzTmFtZT1cImdldGVxdWlwZVwiIGlkPXthdGVhbS5pZH0gc3R5bGU9e3ttYXJnaW5SaWdodDpcIjEwcHhcIn19PjxpIGNsYXNzTmFtZT1cImZhIGZhLWVkaXQgY29sLWdyZWVuIGZvbnQtMTZcIiAvPjwvYT5cbiAgICAgICAgICAgICAgICA8YSBocmVmPVwiI1wiIGNsYXNzTmFtZT1cImRlbGVxdWlwZVwiIGlkPXthdGVhbS5pZH0+PGkgY2xhc3NOYW1lPVwiZmEgZmEtdHJhc2ggY29sLXBpbmsgZm9udC0xNlwiLz48L2E+XG4gICAgICAgICAgICA8L2g1PlxuICAgICAgICAgICAgPGg0IGNsYXNzTmFtZT1cImNvbC1waW5rIGJvbG83MDBcIj48dT4geyBhdGVhbS5kZXNpZ25hdGlvbiB9IDwvdT48L2g0PlxuICAgICAgICAgICAgPGg1IGNsYXNzTmFtZT1cImNvbC1ibHVlXCI+PHU+Q2hhbnRpZXI6PC91PiA8YnIvPiA8c3BhbiBjbGFzc05hbWU9XCJjb2wtYmxhY2tcIj4qIHsgYXRlYW0uY2hhbnRpZXJbMF0ubm9tY2hhbnRpZXIgfTwvc3Bhbj48L2g1PlxuICAgICAgICAgICAgPGg1IGNsYXNzTmFtZT1cImNvbC1ibHVlXCI+PHU+Q2hlZjo8L3U+IDxici8+IDxzcGFuIGNsYXNzTmFtZT1cImNvbC1ibGFja1wiPiogeyBjaGVmIH08L3NwYW4+PC9oNT5cbiAgICAgICAgICAgIDxoNSBjbGFzc05hbWU9XCJjb2wtYmx1ZVwiPjx1Pk1lbWJyZXM6PC91PiA8YnIvPiB7cmVuZGVyTWVtYnJlc308L2g1PlxuICAgICAgICAgICAgPGg1IGNsYXNzTmFtZT1cImNvbC1ibHVlXCI+PHU+VGFjaGVzOjwvdT4gPGJyLz4ge3JlbmRlVGFjaGVzfTwvaDU+XG4gICAgICAgIDwvZGl2Pik7XG4gICAgfSk7XG5cbiAgICByZXR1cm4gKFxuICAgICAgICA8PlxuICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJtb2RhbCBmYWRlXCIgaWQ9XCJDb25maXJtRGVsZXRlXCIgdGFiSW5kZXg9XCItMVwiIHJvbGU9XCJkaWFsb2dcIlxuICAgICAgICAgICAgICAgICBhcmlhLWxhYmVsbGVkYnk9XCJleGFtcGxlTW9kYWxMYWJlbFwiXG4gICAgICAgICAgICAgICAgIGFyaWEtaGlkZGVuPVwidHJ1ZVwiPlxuICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwibW9kYWwtZGlhbG9nIG1vZGFsLXNtIG1vZGFsLW5vdGlmeVwiIHJvbGU9XCJkb2N1bWVudFwiPlxuICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cIm1vZGFsLWNvbnRlbnQgdGV4dC1jZW50ZXJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwibW9kYWwtaGVhZGVyIGQtZmxleCBqdXN0aWZ5LWNvbnRlbnQtY2VudGVyIGJnLXBpbmtcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDQgY2xhc3NOYW1lPVwiYm9sbzcwMFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICDDilRFUyBWT1VTIFNVUiA/XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9oND5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJtb2RhbC1ib2R5XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGkgY2xhc3NOYW1lPVwiZmFzIGZhLXRpbWVzIGZhLTR4IGFuaW1hdGVkIHJvdGF0ZUluIGNvbC1waW5rXCI+PC9pPlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInRleHQtY2VudGVyXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiB0eXBlPVwiYnV0dG9uXCIgaWQ9XCJhY2NlcHRvXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJ0biBidG4tbGluayB3YXZlcy1lZmZlY3QgdGV4dC13aGl0ZSBiZy1wcmltYXJ5IG0tci0xMFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBPVUlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IHR5cGU9XCJidXR0b25cIiBpZD1cImNsb3NlTGllclwiIGNsYXNzTmFtZT1cImJ0biBidG4tbGluayB3YXZlcy1lZmZlY3QgdGV4dC13aGl0ZSBiZy1waW5rXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtZGlzbWlzcz1cIm1vZGFsXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIE5PTlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cIm1vZGFsIGZhZGVcIiBpZD1cImNoYXRNb2RhbFwiIGRhdGEtYnMtYmFja2Ryb3A9XCJzdGF0aWNcIiBkYXRhLWJzLWtleWJvYXJkPVwiZmFsc2VcIiB0YWJJbmRleD1cIi0xXCJcbiAgICAgICAgICAgICAgICAgYXJpYS1sYWJlbGxlZGJ5PVwic3RhdGljQmFja2Ryb3BMYWJlbFwiIGFyaWEtaGlkZGVuPVwidHJ1ZVwiPlxuICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwibW9kYWwtZGlhbG9nIG1vZGFsLWxnXCI+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwibW9kYWwtY29udGVudFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJtb2RhbC1oZWFkZXJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aSBjbGFzc05hbWU9XCJidG4gbWF0ZXJpYWwtaWNvbnMgYmctYmx1ZVwiIGlkPVwiY2xvc2VcIiBkYXRhLWRpc21pc3M9XCJtb2RhbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tmbG9hdDogXCJyaWdodFwifX0+Y2xlYXI8L2k+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwibW9kYWwtYm9keVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY2hhdC1hcHBcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBpZD1cInBsaXN0XCIgY2xhc3NOYW1lPVwicGVvcGxlLWxpc3RcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx1bCBjbGFzc05hbWU9XCJsaXN0LXVuc3R5bGVkIGNoYXQtbGlzdCBtdC0yIG1iLTBcIj5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC91bD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY2hhdFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjaGF0LWhlYWRlciBjbGVhcmZpeFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicm93XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLWxnLTZcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9XCJqYXZhc2NyaXB0OnZvaWQoMCk7XCIgZGF0YS10b2dnbGU9XCJtb2RhbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhLXRhcmdldD1cIiN2aWV3X2luZm9cIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aW1nIHNyYz1cImh0dHBzOi8vYm9vdGRleS5jb20vaW1nL0NvbnRlbnQvYXZhdGFyL2F2YXRhcjIucG5nXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFsdD1cImF2YXRhclwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY2hhdC1hYm91dFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxoNCBjbGFzc05hbWU9XCJtLWItMCBjb2wtYmx1ZSBib2xvNjAwIHVzZXNlbGVjdGVkXCI+PC9oND5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDUgY2xhc3NOYW1lPVwidXNlbWVzc2FnZVwiIHN0eWxlPXt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJhY2tncm91bmRDb2xvcjogXCIjZThmMWYzXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHBhZGRpbmc6IFwiMTBweFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBib3JkZXJSYWRpdXM6IFwiMjBweFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0+PC9oNT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbGctNiBoaWRkZW4tc20gdGV4dC1yaWdodFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJ1dHRvbiBjbGFzc05hbWU9XCJidG4gYnRuLW91dGxpbmUtc2Vjb25kYXJ5XCI+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYS1jYW1lcmFcIj48L2k+PC9idXR0b24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnV0dG9uIGNsYXNzTmFtZT1cImJ0biBidG4tb3V0bGluZS1wcmltYXJ5XCI+PGlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJmYSBmYS1pbWFnZVwiPjwvaT48L2J1dHRvbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxidXR0b24gY2xhc3NOYW1lPVwiYnRuIGJ0bi1vdXRsaW5lLXByaW1hcnlcIj48aVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImZhIGZhLWxpbmtcIj48L2k+PC9idXR0b24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImNoYXQtaGlzdG9yeVwiIHN0eWxlPXt7aGVpZ2h0OiBcIjQwMHB4XCIsIG92ZXJmbG93OiBcInNjcm9sbFwifX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWQ9XCJjaGF0Y29udGVudFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx1bCBjbGFzc05hbWU9XCJtLWItMFwiPlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC91bD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPXt7ZGlzcGxheTogXCJmbGV4XCIsIGp1c3RpZnlDb250ZW50OiBcImZsZXgtZW5kXCIsIHdpZHRoOiBcIjEwMCVcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZXh0YXJlYSBjbGFzc05hbWU9XCJmb3JtLWNvbnRyb2xcIiBhcmlhLWxhYmVsPVwiV2l0aCB0ZXh0YXJlYVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7d2lkdGg6IFwiMTAwJVwiLCBtYXJnaW5MZWZ0OiBcIjIwcHhcIn19IHBsYWNlaG9sZGVyPVwiTWVzc2FnZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkPVwiY2hhdFwiPjwvdGV4dGFyZWE+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJ1dHRvbiB0eXBlPVwiYnV0dG9uXCIgaWQ9XCJzZW5kY2hhdFwiIGNsYXNzTmFtZT1cImJ0biBidG4tcHJpbWFyeSBidG4tc21cIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tyaWdodDogXCIwXCJ9fT5FbnZvecOpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9idXR0b24+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgIDwvZGl2PlxuXG4gICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImJ0bi1ncm91cFwiPlxuICAgICAgICAgICAgICAgIDxidXR0b24gdHlwZT1cImJ1dHRvblwiIGRhdGEtY29sb3I9XCJibHVlXCIgY2xhc3NOYW1lPVwiYnRuIGJnLXByaSB0ZXh0LXdoaXRlIHdhdmVzLWVmZmVjdFwiXG4gICAgICAgICAgICAgICAgICAgICAgICBkYXRhLXRvZ2dsZT1cIm1vZGFsXCIgZGF0YS10YXJnZXQ9XCIjbWRNb2RhbFBsYW5uaW5nXCI+KyBQTEFOTklOR1xuICAgICAgICAgICAgICAgIDwvYnV0dG9uPlxuXG4gICAgICAgICAgICAgICAgPGJ1dHRvbiB0eXBlPVwiYnV0dG9uXCIgY2xhc3NOYW1lPVwiYnRuIGJ0bi1pbmZvIHRleHQtd2hpdGUgd2F2ZXMtZWZmZWN0XCIgZGF0YS10b2dnbGU9XCJtb2RhbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICBkYXRhLXRhcmdldD1cIiNtZE1vZGFsU2VjdGlvblwiPisgU0VDVElPTlxuICAgICAgICAgICAgICAgIDwvYnV0dG9uPlxuXG4gICAgICAgICAgICAgICAgPGJ1dHRvbiB0eXBlPVwiYnV0dG9uXCIgY2xhc3NOYW1lPVwiYnRuIGJnLXB1cnBsZSB0ZXh0LXdoaXRlIHdhdmVzLWVmZmVjdFwiIGRhdGEtdG9nZ2xlPVwibW9kYWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS10YXJnZXQ9XCIjbWRNb2RhbFRhY2hlXCI+KyBUQUNIRVxuICAgICAgICAgICAgICAgIDwvYnV0dG9uPlxuXG4gICAgICAgICAgICAgICAgPGJ1dHRvbiB0eXBlPVwiYnV0dG9uXCIgY2xhc3NOYW1lPVwiYnRuIGJnLW9yYW5nZSB0ZXh0LXdoaXRlIHdhdmVzLWVmZmVjdFwiIGRhdGEtdG9nZ2xlPVwibW9kYWxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS10YXJnZXQ9XCIjbWRNb2RhbEVxdWlwZVwiPisgRVFVSVBFXG4gICAgICAgICAgICAgICAgPC9idXR0b24+XG4gICAgICAgICAgICA8L2Rpdj5cblxuICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbWQtMTJcIiBzdHlsZT17e3BhZGRpbmdMZWZ0OiBcIjBcIn19PlxuICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwtZ3JvdXBcIiBpZD1cImFjY29yZGlvbl8yXCIgcm9sZT1cInRhYmxpc3RcIiBhcmlhLW11bHRpc2VsZWN0YWJsZT1cInRydWVcIj5cbiAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbCBwYW5lbC1wcmlcIiBzdHlsZT17e21hcmdpblRvcDpcIjIwcHhcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbC1oZWFkaW5nIGJnLXByaVwiIHJvbGU9XCJ0YWJcIiBpZD1cImhlYWRpbmdQbGFcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDUgY2xhc3NOYW1lPVwicGFuZWwtdGl0bGUgXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGNsYXNzTmFtZT1cImNvbGxhcHNlZCB0ZXh0LXdoaXRlXCIgcm9sZT1cImJ1dHRvblwiIGRhdGEtdG9nZ2xlPVwiY29sbGFwc2VcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhLXBhcmVudD1cIiNhY2NvcmRpb25fMlwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGhyZWY9XCIjY29sbGFwc2VQbGFcIiBhcmlhLWV4cGFuZGVkPVwiZmFsc2VcIiBhcmlhLWNvbnRyb2xzPVwiY29sbGFwc2VQbGFcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e2ZvbnRTaXplOiBcIjE0cHhcIiwgZm9udFdlaWdodDogXCI1MDBcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgUGxhbm5pbmcgZ8OpbsOpcmFsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2g1PlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGlkPVwiY29sbGFwc2VQbGFcIiBjbGFzc05hbWU9XCJwYW5lbC1jb2xsYXBzZSBjb2xsYXBzZVwiIHJvbGU9XCJ0YWJwYW5lbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtbGFiZWxsZWRieT1cImhlYWRpbmdQbGFcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsLWJvZHlcIiBzdHlsZT17e292ZXJmbG93OiBcInNjcm9sbFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiYm9keVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJ0YWJsZS1yZXNwb25zaXZlXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPFJlYWN0SFRNTFRhYmxlVG9FeGNlbFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZD1cInRlc3QtdGFibGUteGxzLWJ1dHRvblwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImJ0biBiZy1ncmVlbiB0ZXh0LXdoaXRlIG0tci01IGZsb2F0LXJpZ2h0XCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGFibGU9XCJwbGFubmluZ2VcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBmaWxlbmFtZT1cIlBMQU5OSU5HIEdFTkVSQUxcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzaGVldD1cInRhYmxleGxzXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYnV0dG9uVGV4dD1cIkVYUE9SVEVSIEVOIEVYQ0VMXCIvPlxuXG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImNvbC1tZC00XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiaW5wdXQtZ3JvdXBcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiZm9ybS1saW5lXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGlucHV0IHR5cGU9XCJ0ZXh0XCIgY2xhc3NOYW1lPVwiZm9ybS1jb250cm9sXCIgaWQ9XCJzb3J0Y2hhbnRpZXJcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwbGFjZWhvbGRlcj1cIkFmZmljaGVyIHBhciBjaGFudGllclwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIGNsYXNzTmFtZT1cInRhYmxlIHRhYmxlLWhvdmVyIGRhc2hib2FyZC10YXNrLWluZm9zXCIgaWQ9XCJwbGFubmluZ2VcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoZWFkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwidGV4dC1jZW50ZXJcIj4jPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJtdzQwMFwiPiBDTElFTlQtQ0hBTlRJRVJTIHwgUExBTk5JTkcgfCBaT05FIHwgVEFDSEVTPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJtdzEwMFwiPkTDiUJVVDwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwibXcxMDBcIj5GSU48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cInRleHQtY2VudGVyXCI+U1RBVFVTPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD5TVVBFUlZJU0VVUlM8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPsOJUVVJUEVTPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD5QUk9HUkVTU0lPTjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwibXc2MFwiPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoZWFkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGJvZHk+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtyZW5kZXJQbGFubmluZ3N9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGJvZHk+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90YWJsZT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbCBwYW5lbC1wcmlcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwtaGVhZGluZyBiZy1wcmlcIiByb2xlPVwidGFiXCIgaWQ9XCJoZWFkaW5nUGxhU0VcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDUgY2xhc3NOYW1lPVwicGFuZWwtdGl0bGUgXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGNsYXNzTmFtZT1cImNvbGxhcHNlZCB0ZXh0LXdoaXRlXCIgcm9sZT1cImJ1dHRvblwiIGRhdGEtdG9nZ2xlPVwiY29sbGFwc2VcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhLXBhcmVudD1cIiNhY2NvcmRpb25fMlwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGhyZWY9XCIjY29sbGFwc2VQbGFTRVwiIGFyaWEtZXhwYW5kZWQ9XCJmYWxzZVwiIGFyaWEtY29udHJvbHM9XCJjb2xsYXBzZVBsYVNFXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9e3tmb250U2l6ZTogXCIxNHB4XCIsIGZvbnRXZWlnaHQ6IFwiNTAwXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFRhY2hlcyBkZSBsYSBzZW1haW5lXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvYT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2g1PlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGlkPVwiY29sbGFwc2VQbGFTRVwiIGNsYXNzTmFtZT1cInBhbmVsLWNvbGxhcHNlIGNvbGxhcHNlXCIgcm9sZT1cInRhYnBhbmVsXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYXJpYS1sYWJlbGxlZGJ5PVwiaGVhZGluZ1BsYVNFXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJwYW5lbC1ib2R5XCIgc3R5bGU9e3tvdmVyZmxvdzogXCJzY3JvbGxcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImJvZHlcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwidGFibGUtcmVzcG9uc2l2ZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxSZWFjdEhUTUxUYWJsZVRvRXhjZWxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWQ9XCJ0ZXN0LXRhYmxlLXhscy1idXR0b25cIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJidG4gYmctZ3JlZW4gdGV4dC13aGl0ZSBtLXItNSBmbG9hdC1yaWdodFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRhYmxlPVwicGxhbm5pbmdlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZmlsZW5hbWU9XCJQTEFOTklORyBHRU5FUkFMXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc2hlZXQ9XCJ0YWJsZXhsc1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJ1dHRvblRleHQ9XCJFWFBPUlRFUiBFTiBFWENFTFwiLz5cblxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbWQtNFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImlucHV0LWdyb3VwXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImZvcm0tbGluZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbnB1dCB0eXBlPVwidGV4dFwiIGNsYXNzTmFtZT1cImZvcm0tY29udHJvbFwiIGlkPVwic29ydGNoYW50aWVyMlwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHBsYWNlaG9sZGVyPVwiQWZmaWNoZXIgcGFyIGNoYW50aWVyXCIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgY2xhc3NOYW1lPVwidGFibGUgdGFibGUtaG92ZXIgZGFzaGJvYXJkLXRhc2staW5mb3NcIiBpZD1cInBsYW5uaW5nZVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGhlYWQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlclwiPiM8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cIm13NDAwXCI+VEFDSEVTPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJtdzEwMFwiPkTDiUJVVDwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwibXcxMDBcIj5GSU48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cInRleHQtY2VudGVyXCI+U1RBVFVTPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD5TVVBFUlZJU0VVUlM8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPsOJUVVJUEVTPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD5QUk9HUkVTU0lPTjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwibXc2MFwiPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RoZWFkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGJvZHk+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtyZW5kZXJTZW1haW5lfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3Rib2R5PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwgcGFuZWwtcHJpXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInBhbmVsLWhlYWRpbmcgYmctcHJpXCIgcm9sZT1cInRhYlwiIGlkPVwiaGVhZGluZ1BsYUpPXCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGg1IGNsYXNzTmFtZT1cInBhbmVsLXRpdGxlIFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBjbGFzc05hbWU9XCJjb2xsYXBzZWQgdGV4dC13aGl0ZVwiIHJvbGU9XCJidXR0b25cIiBkYXRhLXRvZ2dsZT1cImNvbGxhcHNlXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS1wYXJlbnQ9XCIjYWNjb3JkaW9uXzJcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBocmVmPVwiI2NvbGxhcHNlUGxhSk9cIiBhcmlhLWV4cGFuZGVkPVwiZmFsc2VcIiBhcmlhLWNvbnRyb2xzPVwiY29sbGFwc2VQbGFKT1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7Zm9udFNpemU6IFwiMTRweFwiLCBmb250V2VpZ2h0OiBcIjUwMFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBUYWNoZXMgZHUgam91clxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9oNT5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBpZD1cImNvbGxhcHNlUGxhSk9cIiBjbGFzc05hbWU9XCJwYW5lbC1jb2xsYXBzZVwiIHJvbGU9XCJ0YWJwYW5lbFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFyaWEtbGFiZWxsZWRieT1cImhlYWRpbmdQbGFKT1wiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicGFuZWwtYm9keVwiIHN0eWxlPXt7b3ZlcmZsb3c6IFwic2Nyb2xsXCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJib2R5XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInRhYmxlLXJlc3BvbnNpdmVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8UmVhY3RIVE1MVGFibGVUb0V4Y2VsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkPVwidGVzdC10YWJsZS14bHMtYnV0dG9uXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3NOYW1lPVwiYnRuIGJnLWdyZWVuIHRleHQtd2hpdGUgbS1yLTUgZmxvYXQtcmlnaHRcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0YWJsZT1cInBsYW5uaW5nZVwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZpbGVuYW1lPVwiUExBTk5JTkcgR0VORVJBTFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNoZWV0PVwidGFibGV4bHNcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBidXR0b25UZXh0PVwiRVhQT1JURVIgRU4gRVhDRUxcIi8+XG5cblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLW1kLTRcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJpbnB1dC1ncm91cFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJmb3JtLWxpbmVcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aW5wdXQgdHlwZT1cInRleHRcIiBjbGFzc05hbWU9XCJmb3JtLWNvbnRyb2xcIiBpZD1cInNvcnRjaGFudGllcjFcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwbGFjZWhvbGRlcj1cIkFmZmljaGVyIHBhciBjaGFudGllclwiLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIGNsYXNzTmFtZT1cInRhYmxlIHRhYmxlLWhvdmVyIGRhc2hib2FyZC10YXNrLWluZm9zXCIgaWQ9XCJwbGFubmluZ2VcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoZWFkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwidGV4dC1jZW50ZXJcIj4jPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJtdzQwMFwiPlRBQ0hFUzwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3NOYW1lPVwibXcxMDBcIj5Ew4lCVVQ8L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cIm13MTAwXCI+RklOPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzc05hbWU9XCJ0ZXh0LWNlbnRlclwiPlNUQVRVUzwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+U1VQRVJWSVNFVVJTPC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0aD7DiVFVSVBFUzwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+UFJPR1JFU1NJT048L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzTmFtZT1cIm13NjBcIj48L3RoPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRoPjwvdGg+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGg+PC90aD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90aGVhZD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRib2R5PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7cmVuZGVySm91cn1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90Ym9keT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImNvbC1tZC0xMlwiPlxuICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwicm93XCI+XG4gICAgICAgICAgICAgICAgICAgIHtyZW5kZXJhVGVhbXN9XG4gICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICA8L2Rpdj5cblxuICAgICAgICA8Lz5cbiAgICApO1xuXG5cbn1cblxudHJ5IHtcbiAgICBjb25zdCByb290ID0gY3JlYXRlUm9vdChkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgncGxhbmluZycpKTtcbiAgICByb290LnJlbmRlcig8UGxhbmluZy8+KTtcbn0gY2F0Y2ggKGUpIHtcbn1cblxuIiwiaW1wb3J0IHtjcmVhdGVSb290fSBmcm9tIFwicmVhY3QtZG9tL2NsaWVudFwiO1xuaW1wb3J0IFJlYWN0IGZyb20gXCJyZWFjdFwiO1xuaW1wb3J0IHt1c2VFZmZlY3QsIHVzZVN0YXRlLCB1c2VDYWxsYmFja30gZnJvbSBcInJlYWN0XCI7XG5pbXBvcnQgYXhpb3MgZnJvbSBcImF4aW9zXCI7XG5pbXBvcnQgJCBmcm9tIFwianF1ZXJ5XCI7XG5pbXBvcnQgR2FsbGVyeSBmcm9tIFwicmVhY3QtcGhvdG8tZ2FsbGVyeVwiO1xuaW1wb3J0IENhcm91c2VsLCB7TW9kYWwsIE1vZGFsR2F0ZXdheX0gZnJvbSBcInJlYWN0LWltYWdlc1wiO1xuaW1wb3J0ICogYXMgbW9tZW50IGZyb20gXCJtb21lbnRcIjtcblxuY29uc3QgVGFjaGluZyA9ICgpID0+IHtcblxuICAgIGNvbnN0IFt0YWNoZSwgc2V0VGFjaGVdID0gdXNlU3RhdGUoKTtcbiAgICBjb25zdCBbY2hhdHMsIHNldENoYXRzXSA9IHVzZVN0YXRlKFtdKTtcbiAgICBjb25zdCBbY3VycmVudEltYWdlLCBzZXRDdXJyZW50SW1hZ2VdID0gdXNlU3RhdGUoMCk7XG4gICAgY29uc3QgW3ZpZXdlcklzT3Blbiwgc2V0Vmlld2VySXNPcGVuXSA9IHVzZVN0YXRlKGZhbHNlKTtcblxuICAgIGxldCB0YWlkID0gJCgnI3RhaWQnKS52YWwoKTtcbiAgICBsZXQgY3VycmVudCA9ICQoJyNjdXJyZW50JykudmFsKCk7XG5cbiAgICBjb25zdCBvcGVuTGlnaHRib3ggPSB1c2VDYWxsYmFjaygoZXZlbnQsIHtpbmRleH0pID0+IHtcbiAgICAgICAgc2V0Q3VycmVudEltYWdlKGluZGV4KTtcbiAgICAgICAgc2V0Vmlld2VySXNPcGVuKHRydWUpO1xuICAgIH0sIFtdKTtcblxuICAgIGNvbnN0IGNsb3NlTGlnaHRib3ggPSAoKSA9PiB7XG4gICAgICAgIHNldEN1cnJlbnRJbWFnZSgwKTtcbiAgICAgICAgc2V0Vmlld2VySXNPcGVuKGZhbHNlKTtcbiAgICB9O1xuXG4gICAgY29uc3QgZmV0Y2hUYWNoZXMgPSBhc3luYyAoKSA9PiB7XG4gICAgICAgIGF4aW9zKHtcbiAgICAgICAgICAgIG1ldGhvZDogJ0dFVCcsXG4gICAgICAgICAgICB1cmw6ICcvY3JtL3RhY2hlL2dldC8nICsgdGFpZCxcbiAgICAgICAgICAgIGNvbnRlbnRUeXBlOiAnYXBwbGljYXRpb24vanNvbjsgY2hhcnNldD11dGYtOCdcbiAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgIHNldFRhY2hlKHJlc3BvbnNlLmRhdGEpO1xuICAgICAgICB9KS5jYXRjaChmdW5jdGlvbiAoZXJyb3IpIHtcbiAgICAgICAgfSk7XG4gICAgfTtcblxuICAgIGNvbnN0IGZldGNoQ2hhdCA9IGFzeW5jICgpID0+IHtcbiAgICAgICAgd2luZG93LnNldEludGVydmFsKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgIGF4aW9zKHtcbiAgICAgICAgICAgICAgICBtZXRob2Q6ICdHRVQnLFxuICAgICAgICAgICAgICAgIHVybDogJy9jcm0vY2hhdC90YWNoZS8nICsgdGFpZCxcbiAgICAgICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnXG4gICAgICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgICAgIHNldENoYXRzKHJlc3BvbnNlLmRhdGEpO1xuICAgICAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfSwgNTAwMCk7XG4gICAgfTtcblxuICAgIHVzZUVmZmVjdCgoKSA9PiB7XG4gICAgICAgIGZldGNoVGFjaGVzKCk7XG4gICAgICAgIGZldGNoQ2hhdCgpO1xuICAgIH0sIFtdKVxuXG4gICAgY29uc3Qgc2hvd0FkZEZpbGUgPSAoKSA9PiB7XG4gICAgICAgICQoJyNtb2RhbEZpY2hlJykubW9kYWwoJ3RvZ2dsZScpXG4gICAgfVxuXG4gICAgYXN5bmMgZnVuY3Rpb24gZGVsUGljKGEpIHtcbiAgICAgICAgYXdhaXQgYXhpb3Moe1xuICAgICAgICAgICAgbWV0aG9kOiAnREVMRVRFJyxcbiAgICAgICAgICAgIHVybDogJy9jcm0vZ2VzdGlvbi9kZWxmaWNoaWVyLycgKyBhLFxuICAgICAgICAgICAgY29udGVudFR5cGU6ICdhcHBsaWNhdGlvbi9qc29uOyBjaGFyc2V0PXV0Zi04JyxcbiAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICAgICBsb2NhdGlvbi5yZWxvYWQoKTtcbiAgICAgICAgfSlcbiAgICB9XG5cbiAgICAkKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgJChcIi5kZWxldG9cIikuZWFjaChmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAkKHRoaXMpLm9mZigpLm9uKFwiY2xpY2tcIiwgYXN5bmMgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgIGxldCBpZCA9IHRoaXMuaWQ7XG4gICAgICAgICAgICAgICAgJCgnI1RyYWl0ZW1lbnQnKS5tb2RhbCgnc2hvdycpO1xuICAgICAgICAgICAgICAgIGF3YWl0IGF4aW9zKHtcbiAgICAgICAgICAgICAgICAgICAgbWV0aG9kOiAnREVMRVRFJyxcbiAgICAgICAgICAgICAgICAgICAgdXJsOiAnL2NybS9jaGF0L2RlbC90YWNoZS8nICsgaWQgKyAnLycgKyB0YWlkLFxuICAgICAgICAgICAgICAgICAgICBjb250ZW50VHlwZTogJ2FwcGxpY2F0aW9uL2pzb247IGNoYXJzZXQ9dXRmLTgnLFxuICAgICAgICAgICAgICAgICAgICBkYXRhVHlwZTogJ2pzb24nLFxuICAgICAgICAgICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICAgICAgICAgICAgICQoJyNUcmFpdGVtZW50JykubW9kYWwoJ2hpZGUnKTtcbiAgICAgICAgICAgICAgICAgICAgc2V0Q2hhdHMocmVzcG9uc2UuZGF0YSk7XG4gICAgICAgICAgICAgICAgfSlcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9KTtcbiAgICAgICAgJChcIi5kZWxldGFcIikuZWFjaChmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAkKHRoaXMpLm9mZigpLm9uKFwiY2xpY2tcIiwgYXN5bmMgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgIGxldCBpZCA9IHRoaXMuaWQ7XG4gICAgICAgICAgICAgICAgYXdhaXQgYXhpb3Moe1xuICAgICAgICAgICAgICAgICAgICBtZXRob2Q6ICdERUxFVEUnLFxuICAgICAgICAgICAgICAgICAgICB1cmw6ICcvY3JtL2dlc3Rpb24vZGVsZmljaGllci8nICsgaWQsXG4gICAgICAgICAgICAgICAgICAgIGNvbnRlbnRUeXBlOiAnYXBwbGljYXRpb24vanNvbjsgY2hhcnNldD11dGYtOCcsXG4gICAgICAgICAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgICAgICAgICAgbG9jYXRpb24ucmVsb2FkKCk7XG4gICAgICAgICAgICAgICAgfSlcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9KTtcbiAgICB9KTtcbiAgICBjb25zdCBhZGRDaGF0ID0gKCkgPT4ge1xuICAgICAgICBheGlvcyh7XG4gICAgICAgICAgICBtZXRob2Q6ICdQT1NUJyxcbiAgICAgICAgICAgIHVybDogJy9jcm0vY2hhdC90YWNoZS9hZGQvJyArIHRhY2hlLmlkICsgJy8nICsgJCgnI21lc3NhJykudmFsKCksXG5cbiAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICAgICBzZXRDaGF0cyhyZXNwb25zZS5kYXRhKTtcbiAgICAgICAgICAgICQoJyNtZXNzYScpLnZhbCgnJyk7XG4gICAgICAgIH0pLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICAkKCcjYWRkRmlsZVRhY2hlJykub2ZmKCkub24oXCJjbGlja1wiLCBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKVxuICAgICAgICBpZiAoJCh0aGlzKS5jbG9zZXN0KCdmb3JtJykudmFsaWQoKSkge1xuICAgICAgICAgICAgJCgnI2FkZEZpbGVUYWNoZScpLmFkZENsYXNzKCdoaWRlJyk7XG4gICAgICAgICAgICAkKCcjY2xvc2VGaWxlVGFjaGUnKS5hZGRDbGFzcygnaGlkZScpO1xuICAgICAgICAgICAgJCgnI2xvYWRGaWxlVGFjaGUnKS5jc3MoJ2Rpc3BsYXknLCAnJyk7XG4gICAgICAgICAgICBheGlvcyh7XG4gICAgICAgICAgICAgICAgbWV0aG9kOiAnUE9TVCcsXG4gICAgICAgICAgICAgICAgdXJsOiAnL2NybS9nZXN0aW9uL2ZpY2hpZXIvdGFjaGUvYWRkLycgKyB0YWNoZS5pZCxcbiAgICAgICAgICAgICAgICBkYXRhOiBuZXcgRm9ybURhdGEoJCgnI2FkZEZpbGVUYWNoZUZvcm0nKVswXSksXG4gICAgICAgICAgICAgICAgY29udGVudFR5cGU6IGZhbHNlLFxuICAgICAgICAgICAgICAgIHByb2Nlc3NEYXRhOiBmYWxzZSxcbiAgICAgICAgICAgICAgICBjYWNoZTogZmFsc2UsXG4gICAgICAgICAgICAgICAgZGF0YVR5cGU6ICdqc29uJyxcbiAgICAgICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4gICAgICAgICAgICAgICAgc2V0VGFjaGUocmVzcG9uc2UuZGF0YSk7XG4gICAgICAgICAgICAgICAgJCgnI2FkZEZpbGVUYWNoZScpLnJlbW92ZUNsYXNzKCdoaWRlJyk7XG4gICAgICAgICAgICAgICAgJCgnI2Nsb3NlRmlsZVRhY2hlJykucmVtb3ZlQ2xhc3MoJ2hpZGUnKTtcbiAgICAgICAgICAgICAgICAkKCcjbG9hZEZpbGVUYWNoZScpLmhpZGUoKTtcbiAgICAgICAgICAgICAgICAkKCcjbW9kYWxGaWNoZScpLm1vZGFsKCd0b2dnbGUnKVxuICAgICAgICAgICAgfSkuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfVxuICAgIH0pO1xuXG4gICAgaWYgKHRhY2hlICE9PSB1bmRlZmluZWQpIHtcbiAgICAgICAgbGV0IGZpY2hpZXJzID0gdGFjaGUuZmljaGllcnM7XG4gICAgICAgIGxldCByZW5kZXJGaWNoaWVycyA9ICcnO1xuICAgICAgICBsZXQgcmVuZGVyQ2hhdHMgPSAnJztcbiAgICAgICAgbGV0IHBob3RvcyA9IG51bGw7XG4gICAgICAgIGNvbnN0IGRvbm5lZSA9IFtdO1xuICAgICAgICBjb25zdCByZXMgPSB7fTtcbiAgICAgICAgaWYgKGZpY2hpZXJzLmxlbmd0aCA+IDApIHtcbiAgICAgICAgICAgIGZpY2hpZXJzLm1hcCgoZmljaGUpID0+IHtcbiAgICAgICAgICAgICAgICBpZiAoZmljaGUuY2F0ZWdvcmllID09PSAnSU1BR0VTJykge1xuICAgICAgICAgICAgICAgICAgICByZXMuc3JjID0gJy8nICsgZmljaGUuZm9sZGUgKyAnLycgKyBmaWNoZS5ub21maWNoaWVyO1xuICAgICAgICAgICAgICAgICAgICByZXMud2lkdGggPSA4MDtcbiAgICAgICAgICAgICAgICAgICAgcmVzLmlkID0gZmljaGUuaWQ7XG4gICAgICAgICAgICAgICAgICAgIHJlcy5oZWlnaHQgPSA1MDtcbiAgICAgICAgICAgICAgICAgICAgZG9ubmVlLnB1c2goey4uLnJlc30pXG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfSlcbiAgICAgICAgICAgIHBob3RvcyA9IEpTT04ucGFyc2UoSlNPTi5zdHJpbmdpZnkoZG9ubmVlKSk7XG4gICAgICAgICAgICByZW5kZXJGaWNoaWVycyA9IGZpY2hpZXJzLm1hcCgoZmljaGUpID0+IHtcbiAgICAgICAgICAgICAgICBpZiAoZmljaGUuY2F0ZWdvcmllID09PSAnRklDSElFUlMnKSB7XG4gICAgICAgICAgICAgICAgICAgIHJldHVybiAoXG4gICAgICAgICAgICAgICAgICAgICAgICA8dGFibGU+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQga2V5PXtmaWNoZS5pZC50b1N0cmluZygpfSBzdHlsZT17e2ZvbnRTaXplOiBcIjEzcHhcIn19PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGFcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBocmVmPXtgLyR7ZmljaGUuZm9sZGV9LyR7ZmljaGUubm9tZmljaGllcn1gfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7Y29sb3I6IFwiIzAwMFwiLCBtYXJnaW5MZWZ0OiBcIjIwcHhcIn19PiZyYXF1bzsge2ZpY2hlLm5vbWZpY2hpZXJ9PC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBjbGFzc05hbWU9XCJkZWxldGFcIiBpZD17ZmljaGUuaWR9PjxpIGNsYXNzTmFtZT1cImZhIGZhLXRyYXNoIGNvbC1waW5rXCIgc3R5bGU9e3tmb250U2l6ZTogXCIxNnB4XCJ9fVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhcmlhLWhpZGRlbj1cInRydWVcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0aXRsZT1cIlN1cHByaW1lciBjZXR0ZSBsaWduZVwiPjwvaT48L2E+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+XG4gICAgICAgICAgICAgICAgICAgIClcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9KVxuICAgICAgICB9XG4gICAgICAgIGlmIChjaGF0cy5sZW5ndGggPiAwKSB7XG4gICAgICAgICAgICByZW5kZXJDaGF0cyA9IGNoYXRzLm1hcCgoY2hhdCkgPT4ge1xuICAgICAgICAgICAgICAgIGxldCBkZWwgPSBcIiBcIjtcbiAgICAgICAgICAgICAgICBpZiAocGFyc2VJbnQoY2hhdC5vd25lci5pZCkgPT09IHBhcnNlSW50KGN1cnJlbnQpKSB7XG4gICAgICAgICAgICAgICAgICAgIGRlbCA9ICc8YSBjbGFzcz1cImRlbGV0b1wiIGlkPScgKyBjaGF0LmlkICsgJz48aSBjbGFzcz1cImZhIGZhLXRyYXNoIGNvbC1waW5rXCIgc3R5bGU9XCJmb250LXNpemU6IDE2cHhcIiBhcmlhLWhpZGRlbj1cInRydWVcIiB0aXRsZT1cIlN1cHByaW1lciBjZXR0ZSBsaWduZVwiPjwvaT48L2E+JztcbiAgICAgICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgICAgICBkZWwgPSBcIiBcIjtcbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICByZXR1cm4gKFxuICAgICAgICAgICAgICAgICAgICA8ZGl2IGtleT17Y2hhdC5pZC50b1N0cmluZygpfSBjbGFzc05hbWU9XCJiZy1ncmF5XCJcbiAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e3BhZGRpbmc6IFwiMTBweFwiLCBib3JkZXJSYWRpdXM6IFwiMjBweFwiLCBtYXJnaW5Cb3R0b206IFwiMTBweFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICA8cCBjbGFzc05hbWU9XCJjb2wtYmx1ZVwiPkRlOiA8c3BhblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzTmFtZT1cImNvbC1waW5rXCI+e2NoYXQub3duZXIubm9tICsgJyAnICsgY2hhdC5vd25lci5wcmVub21zfTwvc3Bhbj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnIvPiA8c3BhblxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJjb2wtYmx1ZS1ncmV5XCI+bGUge21vbWVudChjaGF0LmRhdGUpLmxvY2FsZShcImZyXCIpLmZvcm1hdCgnTExMTCcpfTwvc3Bhbj48L3A+XG4gICAgICAgICAgICAgICAgICAgICAgICA8cD57Y2hhdC5tZXNzYWdlfTwvcD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxwIGNsYXNzTmFtZT1cInRleHQtcmlnaHRcIiBkYW5nZXJvdXNseVNldElubmVySFRNTD17e19faHRtbDogZGVsfX0vPlxuICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICApXG4gICAgICAgICAgICB9KVxuICAgICAgICB9XG5cbiAgICAgICAgbG9jYWxTdG9yYWdlLnNldEl0ZW0oJ3JlbG9hZGQnLCAndGFjaGUvJyArIHRhY2hlLmlkKTtcblxuICAgICAgICByZXR1cm4gKFxuICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb250YWluZXItZmx1aWRcIj5cbiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImJsb2NrLWhlYWRlclwiPlxuICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cInJvdyBjbGVhcmZpeCBwLWItNVwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzc05hbWU9XCJjb2wtbWQtMTJcIj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDMgY2xhc3NOYW1lPVwiYm9sbzcwMCBjb2wtcGlua1wiPkdlc3Rpb25uYWlyZSBkZXMgdGFjaGVzPC9oMz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImNhcmRcIiBzdHlsZT17e3BhZGRpbmc6IFwiMjBweFwifX0+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxoNCBjbGFzc05hbWU9XCJib2xvNzAwIGNvbC1ibHVlXCI+JnJhcXVvOyBUYWNoZTwvaDQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxoNiBjbGFzc05hbWU9XCJmb250LTE0IG0tbC0yMFwiIGRhbmdlcm91c2x5U2V0SW5uZXJIVE1MPXt7X19odG1sOiB0YWNoZS5saWJlbGxlfX0vPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aHIvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDQgY2xhc3NOYW1lPVwiZm9udC0xNCAgY29sLWJsdWUtZ3JleSBtLXQtMjBcIj4mcmFxdW87IFNlY3Rpb246IDxzcGFuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJjb2wtYmxhY2tcIj57dGFjaGUuc2VjdGlvbi5saWJlbGxlfTwvc3Bhbj48L2g0PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDQgY2xhc3NOYW1lPVwiZm9udC0xNCAgY29sLWJsdWUtZ3JleVwiPiZyYXF1bzsgUGxhbm5pbmc6IDxzcGFuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzc05hbWU9XCJjb2wtYmxhY2tcIj57dGFjaGUuc2VjdGlvbi5wbGFubmluZy5wbGFubmluZ308L3NwYW4+PC9oND5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGg0IGNsYXNzTmFtZT1cImZvbnQtMTQgIGNvbC1ibHVlLWdyZXlcIj4mcmFxdW87IENoYW50aWVyOiA8YVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaHJlZj17YC9jcm0vZ2VzdGlvbi8ke3RhY2hlLmNoYW50aWVyLmlkfWB9PiB7dGFjaGUuY2hhbnRpZXIuY2xpZW50Lm5vbWNsaWVudH0gfCB7dGFjaGUuY2hhbnRpZXIubm9tY2hhbnRpZXJ9PC9hPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2g0PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImNvbC1tZC01XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGg0IGNsYXNzTmFtZT1cImJvbG83MDBcIj5Db21tZW50YWlyZXM8L2g0PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZXh0YXJlYSBpZD1cIm1lc3NhXCIgbmFtZT1cInczcmV2aWV3XCIgcm93cz1cIjRcIiBjb2xzPVwiNTBcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT17e3dpZHRoOiBcIjEwMCVcIn19PjwvdGV4dGFyZWE+PGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnV0dG9uIHR5cGU9XCJidXR0b25cIiBjbGFzc05hbWU9XCJidG4gYnRuLXByaW1hcnkgdGV4dC1yaWdodFwiIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYWRkQ2hhdCgpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0+RW52b3llclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvYnV0dG9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiYmctd2hpdGUgY29sLWJsYWNrXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPXt7b3ZlcmZsb3dZOiBcInNjcm9sbFwiLCBoZWlnaHQ6IFwiNjAwcHhcIiwgcGFkZGluZzogXCIxMHB4XCJ9fT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge3JlbmRlckNoYXRzfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XG4gICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzTmFtZT1cImNvbC1tZC03XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGg0IGNsYXNzTmFtZT1cImJvbG83MDBcIj5Eb2N1bWVudHMgfCBJbWFnZXM8L2g0PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxidXR0b24gdHlwZT1cImJ1dHRvblwiIGNsYXNzTmFtZT1cImJ0biBidG4tcHJpbWFyeSB0ZXh0LWNlbnRlclwiIG9uQ2xpY2s9eygpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc2hvd0FkZEZpbGUoKVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH19PkFKT1VURVIgREVTIEZJQ0hJRVJTIE9VIElNQUdFU1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvYnV0dG9uPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxoNSBjbGFzc05hbWU9XCJib2xvNjAwIGNvbC1waW5rXCI+PHU+RmljaGllcnM8L3U+PC9oNT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB7cmVuZGVyRmljaGllcnN9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyLz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDUgY2xhc3NOYW1lPVwiYm9sbzYwMCBjb2wtcGlua1wiPjx1PkltYWdlczwvdT48L2g1PlxuXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAge3Bob3RvcyAhPT0gbnVsbCAmJiBwaG90b3MubGVuZ3RoID4gMCAmJlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8R2FsbGVyeSBwaG90b3M9e3Bob3Rvc30gb25DbGljaz17b3BlbkxpZ2h0Ym94fSBkaXJlY3Rpb249e1wiY29sdW1uXCJ9Lz5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGg1IGNsYXNzTmFtZT1cImJvbG82MDAgY29sLXBpbmtcIj48dT5TdXBwcmltZXIgbGVzIHBob3RvczwvdT48L2g1PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHtwaG90b3MgIT09IG51bGwgJiYgcGhvdG9zLm1hcCgoaW1nLCBpbmRleCkgPT4gKFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDU+ICZyYXF1bzsgPGEgaHJlZj1cIiNcIiBvbkNsaWNrPXsoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkZWxQaWMoaW1nLmlkKTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfX0gY2xhc3NOYW1lPVwiYm9sbzYwMFwiPlBob3RvIHtpbmRleCArIDF9PC9hPjwvaDU+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgKSl9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPE1vZGFsR2F0ZXdheT5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAge3ZpZXdlcklzT3BlbiAmJiB0cnVlID8gKFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPE1vZGFsIG9uQ2xvc2U9e2Nsb3NlTGlnaHRib3h9PlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxDYXJvdXNlbFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjdXJyZW50SW5kZXg9e2N1cnJlbnRJbWFnZX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmlld3M9e3Bob3Rvcy5tYXAoeCA9PiAoe1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLi4ueCxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNyY3NldDogeC5zcmNTZXQsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjYXB0aW9uOiB4LnRpdGxlXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0pKX1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9Nb2RhbD5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgKSA6IG51bGx9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9Nb2RhbEdhdGV3YXk+XG4gICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cblxuICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICApO1xuICAgIH0gZWxzZSB7XG4gICAgICAgIHJldHVybiAoPD48Lz4pO1xuICAgIH1cblxufVxuXG50cnkge1xuICAgIGNvbnN0IHJvb3QgPSBjcmVhdGVSb290KGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCd0YWNoaW5nJykpO1xuICAgIHJvb3QucmVuZGVyKDxUYWNoaW5nLz4pO1xufSBjYXRjaCAoZSkge1xufVxuIiwiaW1wb3J0IHtpb30gZnJvbSBcInNvY2tldC5pby1jbGllbnRcIjtcclxuXHJcbmNvbnN0IHNvY2tldCA9IGlvKFwiaHR0cDovL2xvY2FsaG9zdDozMDAxXCIpO1xyXG5cclxuc29ja2V0Lm9uKFwiY29ubmVjdFwiLCAoKSA9PiB7XHJcbiAgICBjb25zb2xlLmxvZyhcIvCflKUgU29ja2V0IGNvbm5lY3TDqSA6XCIsIHNvY2tldC5pZCk7XHJcbn0pO1xyXG5cclxuc29ja2V0Lm9uKFwiY2xpZW50X3VwZGF0ZWRcIiwgKGRhdGEpID0+IHtcclxuICAgIGNvbnNvbGUubG9nKFwi8J+ToSBFdmVudCByZcOndSA6XCIsIGRhdGEpO1xyXG59KTtcclxuXHJcblxyXG5cclxuIl0sIm5hbWVzIjpbInNvY2tldCIsIlJlYWN0IiwiY3JlYXRlUm9vdCIsInVzZUVmZmVjdCIsInVzZVN0YXRlIiwiYXhpb3MiLCIkIiwibW9tZW50IiwiZGV2aWNlVHlwZSIsIlJlYWN0UXVpbGwiLCJRdWlsbCIsIkNoYXR0ZXIiLCJtZXNzYSIsInNldE1lc3NhIiwiY2hhdHMiLCJzZXRDaGF0cyIsInRhY2hlcyIsInNldFRhY2hlcyIsInVzZXJzIiwic2V0VXNlcnMiLCJyZWNlaXZlIiwic2V0UmVjZWl2ZSIsInJlY2UiLCJzZXRSZWNlIiwibWVzcyIsInNldE1lc3MiLCJsaW5rIiwibGlzdHRhY2hlIiwibGlzdHRhY2hlcyIsImxpc3RrIiwicmVuZGVyVGFjaGVzIiwiZmV0Y2hVc2VycyIsIm1ldGhvZCIsInVybCIsImNvbnRlbnRUeXBlIiwidGhlbiIsInJlc3BvbnNlIiwiZGF0YSIsImVycm9yIiwiZmV0Y2hDaGF0cyIsImF6IiwibG9jYWxTdG9yYWdlIiwiZ2V0SXRlbSIsImF0dHIiLCJhbmltYXRlIiwic2Nyb2xsVG9wIiwiaGVpZ2h0IiwiY3NzIiwiaHRtbCIsInZhbCIsImRkIiwic29ydGVkIiwic29ydCIsImEiLCJiIiwiRGF0ZSIsImRhdGUiLCJmZXRjaFRhY2hlcyIsImpRdWVyeSIsImRvY3VtZW50IiwicmVhZHkiLCJ0aW1lYWdvIiwic2V0dGluZ3MiLCJzdHJpbmdzIiwicHJlZml4QWdvIiwicHJlZml4RnJvbU5vdyIsInN1ZmZpeEFnbyIsInN1ZmZpeEZyb21Ob3ciLCJzZWNvbmRzIiwibWludXRlIiwibWludXRlcyIsImhvdXIiLCJob3VycyIsImRheSIsImRheXMiLCJtb250aCIsIm1vbnRocyIsInllYXIiLCJ5ZWFycyIsIndvcmRTZXBhcmF0b3IiLCJudW1iZXJzIiwicmVtb3ZlQ2xhc3MiLCJpbnRlcnZhbCIsInNldEludGVydmFsIiwiY2xlYXJJbnRlcnZhbCIsIm9wZW5GaWxlIiwiZmlsZSIsImV4dGVuc2lvbiIsInN1YnN0ciIsImxhc3RJbmRleE9mIiwiZWFjaCIsIm9mZiIsIm9uIiwiYWRkQ2xhc3MiLCJwcCIsImlkIiwidXUiLCJtYXAiLCJ1c2VyIiwicGFyc2VJbnQiLCJzZWxlIiwicGhvdG8iLCJub20iLCJwcmVub21zIiwiY29udGFjdCIsInNldEl0ZW0iLCJ0YWNoZSIsInB1c2giLCJjaGFudGllciIsIm1tbSIsImZpbHRlciIsImVsZW0iLCJpbmRleCIsInNlbGYiLCJpbmRleE9mIiwibW1tbSIsInJlbmRlclVzZXJzIiwibWFyZ2luVG9wIiwid2lkdGgiLCJtYXJnaW5SaWdodCIsImJvcmRlclJhZGl1cyIsInVzZXJuYW1lIiwicmVuZFVzZXJzIiwicmVuZGVyU2VsZWN0VXNlcnMiLCJmb250U2l6ZSIsInJlbmRlckNoYXRzIiwiY2hhdCIsIm1wIiwib3duZXIiLCJmaWNoaWVyIiwidHlweSIsInJlcGx5ZUNoYXQiLCJtZXNzYWdlIiwiX19odG1sIiwicHBwIiwiaSIsImNsaWVudCIsInNlY3Rpb24iLCJwbGFubmluZyIsInBwcHAiLCJqIiwibGVuZ3RoIiwibWFyZ2luIiwiZXZlbnQiLCJtb2RhbCIsInByZXZlbnREZWZhdWx0IiwicmVjZWl2ZXIiLCJyZXB5IiwiSlNPTiIsInN0cmluZ2lmeSIsIngiLCJjbG9zZXN0IiwidmFsaWQiLCJoaWRlIiwiRm9ybURhdGEiLCJwcm9jZXNzRGF0YSIsImNhY2hlIiwiZGF0YVR5cGUiLCJzaG93IiwiaGFzQ2xhc3MiLCJ5dXAiLCJOdW1iZXIiLCJpZGQiLCJjbGljayIsImNoYW5nZSIsInZhbHVlIiwiY29sb3IiLCJ0ZXh0QWxpZ24iLCJiYWNrZ3JvdW5kQ29sb3IiLCJwYWRkaW5nIiwiYm9yZGVyIiwidmlzaWJpbGl0eSIsIm92ZXJmbG93WSIsInBvc2l0aW9uIiwibWFyZ2luQm90dG9tIiwiZGlzcGxheSIsImp1c3RpZnlDb250ZW50Iiwib3ZlcmZsb3ciLCJwYWRkaW5nTGVmdCIsInJvb3QiLCJnZXRFbGVtZW50QnlJZCIsInJlbmRlciIsImUiLCJSZWFjdEhUTUxUYWJsZVRvRXhjZWwiLCJEYXRhRmlyc3QiLCJ0b2RvcyIsInNldFRvZG9zIiwidG9kZWkiLCJjdXJyZW50IiwiZmV0Y2hkYXRhIiwidW5kZWZpbmVkIiwiZmlsdGVyQnlJZCIsImpzb25PYmplY3QiLCJhZGRUYWNoZXJzIiwicmVzZXQiLCJDS0VESVRPUiIsImluc3RhbmNlcyIsInRvZG8iLCJzZXREYXRhIiwic2h1dG8iLCJzaHV0b2QiLCJnZXREYXRhIiwic2VsYSIsInNlbGVNZXNzYWdlIiwic2VuZGVyIiwidGV4dCIsInNjcm9sbEhlaWdodCIsInNwbGl0IiwiZHVyIiwidG9TdHJpbmciLCJkZWxvIiwibG9jYWxlIiwiZm9ybWF0IiwicmVuZGVyTW9uZGF5IiwiZGVkIiwiZGFkIiwic3RhdHV0IiwicHJpb3JpdGUiLCJmaWlpIiwiZmljaGllcnMiLCJmaWNoIiwiZm9sZGUiLCJub21maWNoaWVyIiwibWFtaWUiLCJyZW5kZXJUdWVzZGF5IiwicmVuZGVyV2VzbmVzZGF5IiwicmVuZGVyVGh1cnNkYXkiLCJyZW5kZXJGcmlkYXkiLCJyZW5kZXJTYXR1cmRheSIsInJlbmRlclN1bmRheSIsIm1hcmdpbkxlZnQiLCJtaW5IZWlnaHQiLCJtaW5XaWR0aCIsImJvcmRlckJvdHRvbSIsIkVkaXRUZXh0IiwiUGxhbmluZyIsImRhdGFzIiwic2V0RGF0YXMiLCJ0ZWFtcyIsInNldFRlYW1zIiwiYXRlYW1zIiwic2V0YVRlYW1zIiwiT2JqZWN0Iiwia2V5cyIsImNvbXBhcmUiLCJkYXRlVGltZUEiLCJkYXRlVGltZUIiLCJtb21lbnRBIiwidmFsdWVPZiIsIm1vbWVudEIiLCJmb3JtYXROdW1iZXIiLCJudW0iLCJwcmVjaXNpb24iLCJzZXBhcmF0b3IiLCJwYXJ0cyIsInRvRml4ZWQiLCJyZXBsYWNlIiwiam9pbiIsIiRzZWxwbGFubmluZyIsIiRzZWxzZWN0aW9uIiwiJHNlbGVxdWlwZSIsImpqayIsImNoYW50aWVycyIsImNvdW50IiwicGxhbm5pbmdzIiwicGxhIiwiY29yYmVpbGxlIiwiZ3JvdXAiLCJub21jbGllbnQiLCJub21jaGFudGllciIsImFwcGVuZFRvIiwic2VjdGlvbnMiLCJzZWMiLCJsaWJlbGxlIiwidGVhbSIsImRlc2lnbmF0aW9uIiwiYWEiLCJzaG93UGxhbm5pbmciLCJzaG93U2VjdGlvbiIsInNob3dUYWNoZSIsInNob3dFcXVpcGUiLCJkZWxwbGFubmluZyIsImRlbHNlY3Rpb24iLCJzZXJpYWxpemVPYmplY3QiLCJzZXRUaW1lb3V0IiwiZmluZCIsImRlYnV0IiwiZmluIiwiZXRhdCIsInBlcnNvbm5lbHMiLCJjb25zb2xlIiwibG9nIiwic2F2ZU9yZHJlIiwic2F2ZVBsYW5uaW5nIiwiaWRjaGFuIiwic2F2ZVNlY3Rpb24iLCJpZHBsYW4iLCJyZW5kZXJQbGFubmluZ3MiLCJyZW5kZXJjaGFudGllcnMiLCJvdW50IiwicGxhbmlubmdzIiwicmFuZyIsInJlbmRlclBsYW5uaW5nIiwicmVuZGVyU2VjdGlvbiIsIm9yZHJlIiwicmVuZGVydGFjaGVzIiwicGVyc29ubmVsIiwicmVuZGVyUGVycyIsInBlcnMiLCJub21zIiwiZXF1aXBlcyIsInJlbmRlckVxdWkiLCJlcXVpIiwidGFjaGVyIiwibGliIiwidmVydGljYWxBbGlnbiIsIndoaXRlU3BhY2UiLCJ0ZXh0VHJhbnNmb3JtIiwicHJzZWN0aW9uIiwicHJwbGFubmluZyIsInByb2dyZXNzaW9uIiwicmVuZGVySm91ciIsImRhdGUxIiwiZGF0ZTIiLCJkYXRlMyIsInJlbmRlclNlbWFpbmUiLCJkYXRlMCIsInN0YXJ0T2YiLCJlbmRPZiIsInJlbmRlcmFUZWFtcyIsImF0ZWFtIiwibWVtYnJlcyIsImNoZWYiLCJyZW5kZXJNZW1icmVzIiwibWVtYnJlIiwicmVuZGVUYWNoZXMiLCJib3JkZXJMZWZ0IiwicmlnaHQiLCJmb250V2VpZ2h0IiwidXNlQ2FsbGJhY2siLCJHYWxsZXJ5IiwiQ2Fyb3VzZWwiLCJNb2RhbCIsIk1vZGFsR2F0ZXdheSIsIlRhY2hpbmciLCJzZXRUYWNoZSIsImN1cnJlbnRJbWFnZSIsInNldEN1cnJlbnRJbWFnZSIsInZpZXdlcklzT3BlbiIsInNldFZpZXdlcklzT3BlbiIsInRhaWQiLCJvcGVuTGlnaHRib3giLCJjbG9zZUxpZ2h0Ym94IiwiZmV0Y2hDaGF0Iiwid2luZG93Iiwic2hvd0FkZEZpbGUiLCJkZWxQaWMiLCJsb2NhdGlvbiIsInJlbG9hZCIsImFkZENoYXQiLCJyZW5kZXJGaWNoaWVycyIsInBob3RvcyIsImRvbm5lZSIsInJlcyIsImZpY2hlIiwiY2F0ZWdvcmllIiwic3JjIiwicGFyc2UiLCJkZWwiLCJpbWciLCJzcmNzZXQiLCJzcmNTZXQiLCJjYXB0aW9uIiwidGl0bGUiLCJpbyJdLCJzb3VyY2VSb290IjoiIn0=