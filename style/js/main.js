$(document).ready(function(){
    $('.bottomnav-right a').click(function(){
      $('.bottomnav-right a').removeClass("active");
      $(this).addClass("active");
  });
  });
$('.rename').click(function(e){
e.preventDefault();
var $this = $(this);
var fileName = $(this).data("file");
  $("#modalregister").data("fileName", fileName).modal("toggle", $this);

});

$("#basicModal").on("shown.bs.modal", function(e){
//data-fileName attribute associated with the modal added in the click event of the button
alert($(this).data("fileName"));
//my data-file associated with the button 
alert($(e.relatedTarget).data("file"));
});
