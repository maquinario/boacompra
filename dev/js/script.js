// Site interface script object

Site = {

};

// Specific modules for each feature object
Mod = {

};

$(function(){
  $('[data-js]').each(function(){
    var mod = String($(this).data('js'));
    Mod[mod]();
  });
});
