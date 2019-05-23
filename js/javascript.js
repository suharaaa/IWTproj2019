//NAVBAR
////////////////////////////Toggle Function/////////////////////////////
// Open the full screen search box 
// function openSearch() {
//   document.getElementById("myOverlay").style.display = "block";
// }

// // Close the full screen search box 
// function closeSearch() {
//   document.getElementById("myOverlay").style.display = "none";
// }

function toggleFunction(x) {
  x.classList.toggle("change");
}




//Contact Us
///////////////////////////SEARCH OVERLAY FUNC/////////////////////////

function validateForm() {
    var x = document.forms["myForm"]["name"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
  }

//Every Page
  function emailValidate() {
    var x = document.forms["formEmail"]["email"].value;
    if (x == "") {
      alert("Email must be filled out");
      return false;
    }

  }


//Footer Email
function displayPara() {
    document.getElementById("demo").innerHTML = "Yeahhh!!! Now You will get notified about our special offers and discounts"
}




// Create a "close" button and append it to each list item
// var myNodelist = document.getElementsByTagName("li");
// var i;
// for (i = 0; i < myNodelist.length; i++) {
//   var span = document.createElement("SPAN");
//   var txt = document.createTextNode("\u00D7");
//   span.className = "close";
//   span.appendChild(txt);
//   myNodelist[i].appendChild(span);
// }


// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

// Add a "checked" symbol when clicking on a list item
var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'li') {
    ev.target.classList.toggle('checked');
  }
}, false);

// Create a new list item when clicking on the "Add" button
function addToDo() {

  var li = document.createElement("li");
  var inputValue = document.getElementById("myInput").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);

  if (inputValue === '') {

    alert("You must write something!");

  } else {

    document.getElementById("myUL").appendChild(li);

  }

  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}
// var $rows = $('#OwnerHistoryTable tr');
// $('#myInput').keyup(function() {
//     var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
    
//     $rows.show().filter(function() {
//         var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
//         return !~text.indexOf(val);
//     }).hide();
// });

// var $rows = $('#OwnerHistoryTable tr');
// $('#myInput').keyup(function() {

//     var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
//         reg = RegExp(val, 'i'),
//         text;

//     $rows.show().filter(function() {
//         text = $(this).text().replace(/\s+/g, ' ');
//         return !reg.test(text);
//     }).hide();
// });

//Owner Purchase History Table Filter
// $(document).ready(function(){
//   $("#myInput").on("keyup", function() {
//     var value = $(this).val().toLowerCase();
//     $("#OwnerHistoryTable tr").filter(function() {
//       $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
//     });
//   });
// });