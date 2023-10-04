$('#btn').on('click', function() {
   $.ajax({
       url: '/breed',
       data: {test: '123'},
       type: 'POST',
       success: function(res) {
           console.log(res);
       },
       error: function() {
           alert('Ошибка');
       }
   });
});