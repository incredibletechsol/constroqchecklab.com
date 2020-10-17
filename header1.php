
<style>
    #google_translate_element{
  display: none;
}
</style>
<h1>My Web Page</h1>
<p>Hello Kasturi !</p>
<p>Translate this page:</p>
<div id="google_translate_element"></div>

<script type="text/javascript"
   src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<div class="flag">
   <a href="#" class="flag_link eng" data-lang="en"><img class="img-fluid" src="images/a.jpg" alt=""></a>
   <a href="#" class="flag_link taj" data-lang="la"><img class="img-fluid" src="images/b.jpg" alt=""></a>
   <a href="#" class="flag_link rus" data-lang="mr"><img class="img-fluid" src="images/c.jpg" alt=""></a>
</div>

<script type="text/javascript">
   function googleTranslateElementInit() {
       new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
   }
   
   var flags = document.getElementsByClassName('flag_link');


Array.prototype.forEach.call(flags, function(e){
  e.addEventListener('click', function(){
    var lang = e.getAttribute('data-lang'); 
    var languageSelect = document.querySelector("select.goog-te-combo");
    languageSelect.value = lang; 
    languageSelect.dispatchEvent(new Event("change"));
  }); 
});
</script>