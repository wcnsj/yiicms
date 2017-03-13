var i = -1;
var toastCount = 0;
var $toastlast;
var getMessage = function () {
    var msg = 'Hi, welcome to Inspinia. This is example of Toastr notification box.';
    return msg;
};
function notification(shortCutFunction,title,msg) {
    var toastIndex = toastCount++;
    toastr.options = {
        closeButton: $('#closeButton').prop('checked'),
        debug: $('#debugInfo').prop('checked'),
        progressBar: $('#progressBar').prop('checked'),
        preventDuplicates: $('#preventDuplicates').prop('checked'),
        positionClass: $('#positionGroup input:radio:checked').val() || 'toast-top-right',
        onclick: null
    };
    toastr.options = {
      "closeButton": true,
      "debug": false,
      "progressBar": true,
      "preventDuplicates": false,
      "positionClass": "toast-top-right",
      "onclick": null,
      "showDuration": "400",
      "hideDuration": "1000",
      "timeOut": "7000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
    $("#toastrOptions").text("Command: toastr["
            + shortCutFunction
            + "](\""
            + msg
            + (title ? "\", \"" + title : '')
            + "\")\n\ntoastr.options = "
            + JSON.stringify(toastr.options, null, 2)
    );
    var $toast = toastr[shortCutFunction](msg, title); // Wire up an event handler to a button in the toast, if it exists
    $toastlast = $toast;
    if ($toast.find('#okBtn').length) {
        $toast.delegate('#okBtn', 'click', function () {
            alert('you clicked me. i was toast #' + toastIndex + '. goodbye!');
            $toast.remove();
        });
    }
    if ($toast.find('#surpriseBtn').length) {
        $toast.delegate('#surpriseBtn', 'click', function () {
            alert('Surprise! you clicked me. i was toast #' + toastIndex + '. You could perform an action here.');
        });
    }
}

function selectAll(obj) {
  if(obj.chk.checked){
    for(var i = 0;i<obj.elements.length;i++){
      if(obj.elements[i].type == "checkbox"){
        obj.elements[i].checked = true;
      }
    }
  }else{
    for(var i = 0;i<obj.elements.length;i++){
      if(obj.elements[i].type == "checkbox"){
        obj.elements[i].checked = false;
      }
    }
  }
}