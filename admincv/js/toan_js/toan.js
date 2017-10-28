jQuery.ajax({
  url: '/path/to/file',
  type: 'POST',
  dataType: 'xml/html/script/json/jsonp',
  data: {param1: 'value1'},
  complete: function(xhr, textStatus) {
    //called when complete
  },
  success: function(data, textStatus, xhr) {
    //called when successful
  },
  error: function(xhr, textStatus, errorThrown) {
    //called when there is an error
  }
});
