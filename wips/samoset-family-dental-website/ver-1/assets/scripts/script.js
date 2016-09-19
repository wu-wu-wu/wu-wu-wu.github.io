//feature validation and assumed polyfill for date input feature (IE)
Modernizr.load({
    test: Modernizr.inputtypes.date,
    nope: "jquery-ui.js",//polyfill for nope support for date input
    callback: function() {
      $("input[type=date]").datepicker();
    }
  });
 
//JQuery datepicket UI element attached to apptdateinput form element
//$('#apptdateinput').datepicker(); 

