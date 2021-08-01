<div class="container">
   <div class="wrapper">
      <h1>Приложение</h1>
      <span>Веб-приложение, которое находит палиндромы</span>

      <form method="post" action="" id="is_palindrom">
         <div>
            <input type="text" name="string_is_palindrom" placeholder="палиндром">
         </div>
         <div>
            <input type="submit" name="search_palindrom" id="search_palindrom" onclick="search_palindromes(event)" value=" Найти">
         </div>
      </form>

      <div id="result_palindromes"></div>
   </div>

</div>