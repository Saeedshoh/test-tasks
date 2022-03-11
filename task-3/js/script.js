$(document).ready(function () {
  fetch("https://ipapi.co/json/")
    .then((d) => d.json())
    .then((d) =>
      $.ajax({
        url: "php/ajaxfile.php?ip=" + d.ip + '&city=' + d.city,
        type: "get",
        contentType: false,
        processData: false,
        success: function (json) {
          
        },
      })
    );
});
