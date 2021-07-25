setInterval(function () {
  $.ajax({
    url: baseURL + "SessionHelper/checkTimeout",
    type: "GET",
    data: {
      timeoutCheck: "true",
    },
    success: function (resp) {
      // console.log(resp);
      if (resp == "Logout") {
        console.log("Logging out");
        //   closeSessionAjax();
      } else {
        console.log("NOT logging out");
        console.log(resp);
      }
    },
  });
}, 5000);

// Closing the ses
//    function closeSessionAjax() {
//     $.ajax({
//         url: "./library/sessionHelper.php",
//         type: "GET",
//         data: {
//             login: "false",
//         },
//         success: function (resp) {
//             location.reload();
//         },
//     });
//    }
