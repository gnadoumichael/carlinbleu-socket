
import $ from 'jquery';

$('#addUser').off().on("click",  function (event) {
     if ($(this).closest('form').valid()) {
          $('#loadUser').css('display', '');
          $('#addUser').hide();
          $('#addUserForm').trigger("submit");
     }
})
