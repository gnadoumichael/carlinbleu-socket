
import $ from 'jquery';

$('#addUser').off().on("click",  function (event) {
     if ($(this).closest('form').valid()) {
          $('#loadUser').css('display', '');
          $('#addUser').hide();
          $('#addUserForm').trigger("submit");
     }
})

$('#addccount').off().on("click",  function (event) {
     if ($(this).closest('form').valid()) {
          $('#loadccount').css('display', '');
          $('#addccount').hide();
          $('#addUserForm').trigger("submit");
     }
})