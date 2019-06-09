$(function(){
  $('a[href^="#"]').click(function(){
  var speed = 500;
  var href= $(this).attr("href");
  var target = $(href == "#" || href == "" ? 'html' : href);
  var position = target.offset().top - 100;
  console.log(target.offset().top)
  $("html, body").animate({scrollTop:position}, speed, "easeInOutQuart");
  $('ul li a.active').removeClass('active');
  $(this).addClass('active');
  $(".navbar-collapse").collapse('hide');
  return false;
  });

  $("#form1").validationEngine("attach", {focusFirstField: false});

  $("input").on("input", function () {
      if ($("#form1").validationEngine("validate")) {
          $("#send").prop("disabled", false);
      } else {
          $("#send").prop("disabled", true);
      }
  });

  $('#send').on('click', function() {
    $.post('../_send.php', {
      name: $('#name').val(),
      kana: $('#kana').val(),
      address: $('#address').val(),
      email: $('#email').val(),
      message: $('#message').val(),
    }, function($data) {
      alert($data);
      $('#name').val('');
      $('#kana').val('');
      $('#address').val('');
      $('#email').val('');
      $('#message').val('');
      $("#send").prop("disabled", true);
    });
  
    return false;
  });
});