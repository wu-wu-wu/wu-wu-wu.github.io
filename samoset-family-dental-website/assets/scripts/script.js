//feature validation and assumed polyfill for date input feature (IE)
Modernizr.load({
    test: Modernizr.inputtypes.date,
    nope: "js/jquery-ui.custom.js",//polyfill for nope support for date input
    callback: function() {
      $("input[type=date]").datepicker();
    }
  });