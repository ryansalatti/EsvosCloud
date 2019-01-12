function searchCloud() {
  // Declare variables 
  var input, filter, table, tr, th, i;
  input = document.getElementById("searchCloud");
  filter = input.value.toUpperCase();
  table = document.getElementById("cloudcontent");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    th = tr[i].getElementsByTagName("th")[0];
    if (th) {
      if (th.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
  trash = document.getElementById("trashcontent");
  trt = trash.getElementsByTagName("tr");
  
  for (i = 0; i < trt.length; i++) {
    th = trt[i].getElementsByTagName("th")[0];
    if (th) {
      if (th.innerHTML.toUpperCase().indexOf(filter) > -1) {
        trt[i].style.display = "";
      } else {
        trt[i].style.display = "none";
      }
    } 
  }
}

setTimeout(func1, 100);

function func1()
{
	$('#mainmenu').removeClass('hidden');
}
$(function() {
    $('#form2').submit(function() {
        $.ajax({
            data: $(this).serialize(),
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            success: function(r) {
            window.location.reload();
            }
        });
        return false;
    });
});

$(function() {
$("#form1").submit(function() { 
        $.ajax({
            data: $(this).serialize(),
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            success: function(r) {
            window.location.reload();
            }
        });
        return false;
    });
});

$(document).ready(function(){
	$('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
		localStorage.setItem('activeTab', $(e.target).attr('href'));
	});
	var activeTab = localStorage.getItem('activeTab');
	if(activeTab){
		$('#mainTabs a[href="' + activeTab + '"]').tab('show');
	}
});

$('#messagetab').click(function(e) {
$('.chat_sidebar').addClass("hidden");
$('.message_section').removeClass("hidden");
})



$('.msg-back').click(function(e) {
$('.message_section').addClass("hidden");
$('.chat_sidebar').removeClass("hidden");
})

function searchCloud() {
  // Declare variables 
  var input, filter, table, tr, th, i;
  input = document.getElementById("searchCloud");
  filter = input.value.toUpperCase();
  table = document.getElementById("cloudcontent");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    th = tr[i].getElementsByTagName("th")[0];
    if (th) {
      if (th.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
  trash = document.getElementById("trashcontent");
  trt = trash.getElementsByTagName("tr");
  
  for (i = 0; i < trt.length; i++) {
    th = trt[i].getElementsByTagName("th")[0];
    if (th) {
      if (th.innerHTML.toUpperCase().indexOf(filter) > -1) {
        trt[i].style.display = "";
      } else {
        trt[i].style.display = "none";
      }
    } 
  }
}


function purgeFile(id) {
document.getElementById('purgeTrashFile').value = id;
}


function trashq(id) {
document.getElementById("trashq").value = id;
}

function trashr(id) {
 document.getElementById("trashr").value = id;    
}

function downloadq(id) {

    var form = $('<form></form>');

    form.attr("method", "post");
    form.attr("action", "");
    form.attr("id", "formdownload");

        var field = $('<input></input>');

        field.attr("type", "hidden");
        field.attr("name", "downloadFile");
        field.attr("value", id);     
        form.append(field);

     $(document.body).append(form);
    $(".downloadFile").on('click', function() {
      form.submit();
      return false;
      });   
}

function modal(name) {
   document.getElementById("imageid").src='https://f001.backblazeb2.com/file/esvos-test/'+name;
}

function dblclick(event) {
    
    var elem = $(this),
        clickTimeout = elem.data('clickTimeout');

	var array = event.split('-'),
        id = array[0],
        type = array[1],
        name = array[2];
        var ext = name.substr(name.lastIndexOf('.') + 1);
        if(clickTimeout) {        
        // Double click
        clearTimeout(clickTimeout);
        elem.data('clickTimeout', null);
        if(type=='folder') {
        //window.history.replaceState(null, null, '/cloud/'+name);
	//window.location.reload(false); 
        }
        if(type=='file' && ext=='png' || ext=='jpg' || ext=='jpeg' || ext=='bmp' || ext=='gif' || ext=='tif') {
        modal(name);
        $('.modal-img').modal('show');
        }
        } else {
        // Single click
    
        elem.data('clickTimeout', setTimeout(function() {
        elem.data('clickTimeout', null);
        trashq(id);
        downloadq(id);

        }, 300));
    }

    return false;
}



function dblclickr(event) {
    var elem = $(this),
        clickTimeout = elem.data('clickTimeout');
	
	var array = event.split('-'),
        id = array[0],
        type = array[1];
        
    if(clickTimeout) {        
        // Double click
        clearTimeout(clickTimeout);
        elem.data('clickTimeout', null);
        modal(id);
      $('.modal-img').modal('show');
    } else {
        // Single click
        elem.data('clickTimeout', setTimeout(function() {
        elem.data('clickTimeout', null);
        trashr(id);
        purgeFile(id);
        }, 300));
    }

    return false;
}



$(document).on('click', '.caret-icon', function() {
   $(this).toggleClass('fa-caret-up fa-caret-down');
})

window.onload = function() {
$('.caret-icon').click();
}

$('#sidemenu a').click(function(e) {
$(this).addClass('active')
$('#sidemenu a').removeClass("active");
  e.preventDefault();
  });

$('#trashmenu .userTable tr').click(function(e) {
$('#trashmenu .userTable tr').removeClass("selected");
$('#trashselectmenu').addClass("hidden");
  var $this = $(this);
  if (!$this.hasClass('selected')) {
    $this.addClass('selected');
    $('#trashselectmenu').removeClass("hidden");
  } 
  e.preventDefault();
});

$('#allfilesmenu .userTable tr').click(function(e) {
$('#allfilesmenu .userTable tr').removeClass("selected");
$('#selectmenu').addClass("hidden");
  var $this = $(this);
  if (!$this.hasClass('selected')) {
    $this.addClass('selected');
    $('#selectmenu').removeClass("hidden");
  } 
  e.preventDefault();
});
$('.sidebar').click(function(e) {
     $('.userTable tr').removeClass("selected");
     $('#selectmenu').addClass("hidden");
     $('#trashselectmenu').addClass("hidden");
});  
$('.navbar').click(function(e) {
     $('.userTable tr').removeClass("selected");
     $('#selectmenu').addClass("hidden");
     $('#trashselectmenu').addClass("hidden");
});  
$('.trHead th').click(function(e) {
     $('.userTable tr').removeClass("selected");
     $('#selectmenu').addClass("hidden");
     $('#trashselectmenu').addClass("hidden");
});  

$(document).ready(function() {
    // show the alert
    setTimeout(function() {
        $(".alert").alert('close');
    }, 8000);
});

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
