// strat of sendAjax Funtion//
function sendAjax(request ,callback=''){
    var url = request.url?request.url:'/';
    var method = request.method?request.method:'get';
    var data = request.data?request.data:{};
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url:url,
        method: method,
        data: data,

        success: function(response){
            
            if (typeof(callback) != 'String') {
                callback(response);
            }
        }
    });
}

//start of showModal function//

function showModal(url)
{
    $('#myModal').modal('show');
    sendAjax({
        url:url
    },function(data){
        $('#modal-body').html(data);
    })
}


// program Store Js
$(document).off('submit', '#program-store-form')
  .on('submit','#program-store-form', function (event) {
    event.preventDefault();
    var url = $(this).attr('action');
    var method = $(this).attr('method');
    var data = $(this).serializeArray();

    sendAjax({
      url: url,
      method: method,
      data: data
    }, function (response) {
      window.location.href=response;
    });
  });

// Company Strore JS
// $(document).off('submit', '#company-store-form')
//   .on('submit','#company-store-form', function (event) {
//     event.preventDefault();
//     var url = $(this).attr('action');
//     var method = $(this).attr('method');
//     var data = $(this).serializeArray();

//     sendAjax({
//       url: url,
//       method: method,
//       data: data
//     }, function (response) {
//       window.location.href = response;
//     });
//   });
