setInterval(function () {
  $.ajax({
    url: baseURL + "SessionHelper/checkTimeout",
    type: "GET",
    //data: resp
    dataType:"text",
    success:function(resp){
      let cleanResp=resp.replace(/\s/g, '');
      console.log(cleanResp)
      if (cleanResp=="Logout"){
         console.log(cleanResp+"<-ajaxREsponse to logout");
         console.log(baseURL);
         window.location.assign(baseURL)
      // }else{
      //   console.log("not logout");
        }
    }
  });
}, 5000);

// Closing the ses
  //  function closeSessionAjax() {
  //   $.ajax({
  //       url: baseURL + "SessionHelper",
  //       type: "GET",
  //       // data: {
  //       //     login: "false",
  //       // },
  //       success:function (data) {
  //           console.log(data+"<-ajaxResponse")
  //       },
  //   });
  //  }
