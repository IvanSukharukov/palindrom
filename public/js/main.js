/**
*Поиск палиндромов ajax запросом
*/
function search_palindromes(event) {
   var form = $('#is_palindrom');
   event.preventDefault();
   $.ajax({
      url: '/palindrom/searchpalindrom',
      type: 'POST',
      data: form.serialize(),
      success: function (response) {
         $("#result_palindromes").html(response);
      },
      error: function () {
         alert('Ошибка, попробуйте позже');
      }
   });
}