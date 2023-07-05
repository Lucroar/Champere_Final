function myFunction() {
  
  var link = document.getElementById("framework").value;
  
  switch (link) {
    case "1":
      document.getElementById("action_page").action = "cha_sys_new_index.html";
    case "2":
      document.getElementById("action_page").action = "cha_sys_view_faqs.html";
    case "3":
      document.getElementById("action_page").action = "cha_sys_new_index.html";
    case "4":
      document.getElementById("action_page").action = "cha_sys_new_index.html";
    case "5":
      document.getElementById("action_page").action = "cha_sys_new_index.html";
    case "6":
      document.getElementById("action_page").action = "cha_sys_new_index.html";
  }

}
