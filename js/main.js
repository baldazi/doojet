$(()=>{
  $("#slMon").hide();
  $("#typeRCH").hide();
  $("#ckMon").click(()=>{
    $("#slMon").toggle();
    $("#resHD").toggle();
  });
  $("#entRCH").focus(()=>{$("#typeRCH").addClass("d-flex justify-content-around").show();$("#choix_r0").hide();});
  //$("#entRCH").on('blur',()=>{$("#typeRCH").delay(6000).hide();});
  $("#btnModifDn").click(()=>{$("#formDn input").attr({disabled:false});});
  $("#closeDn").click(()=>{$("#formDn input").attr({disabled:true});});
  /*$(".btnADD").click(()=>{
    var date = $("span", this).val();
    $(".dateRES").val(date);
  });*/
});
function add_date(j,m,a){
  $(".dateRES").val(a+'-'+'0'+m+'-'+j);
  $(".heurdRES").val("10:00:00");
  $(".heurfRES").val("18:00:00");
}
