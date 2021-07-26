setInterval(function () {
  $.ajax({
    url: baseURL + "SessionHelper/checkTimeout",
    type: "GET",
    //data: resp
    dataType: "text",
    success: function (resp) {
      let cleanResp = resp.replace(/\s/g, "");
      console.log(cleanResp);
      if (cleanResp == "Logout") {
        window.location.assign(baseURL);
      } else {
        console.log("not logout");
      }
    },
  });
}, 60000);
