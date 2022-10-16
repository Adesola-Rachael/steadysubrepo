$('.action-print').on('click', function(event) {
  event.preventDefault();
  /* Act on the event */
  alert('here')
  $("#invoice_page").print();
  // window.print();
});