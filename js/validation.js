$(function(){
  // jQuery("#form1").validationEngine();
  $("#form1").validationEngine("attach", {focusFirstField: false});

  $("input").on("input", function () {
      if ($("#form1").validationEngine("validate")) {
          $("#send").prop("disabled", false);
      } else {
          $("#send").prop("disabled", true);
      }
  });

  $("#send").on("click", function () {
    if ($("#form1").validationEngine("validate")) {
        $("#form1").submit();
    }
  });
});