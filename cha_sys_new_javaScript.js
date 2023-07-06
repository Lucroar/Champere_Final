function myFunction() {
  
  var link = document.getElementById("framework").value;
  
  switch (link) {
    
    case "1":
      document.getElementById("action_page").action = "/admin/cha_sys_admin_index.html";
      break;
    case "2":
      document.getElementById("action_page").action = "cha_sys_view_faqs.html";
      break;
    case "3":
      document.getElementById("action_page").action = "cha_sys_view_profile.html";
      break;
    case "4":
      document.getElementById("action_page").action = "cha_sys_new_about-us.html";
      break;
    case "5":
      document.getElementById("action_page").action = "cha_sys_new_customerLogin.html";
      break;
    case "6":
      document.getElementById("action_page").action = "cha_sys_new_adminlogin.html";
      break;
    default:
      document.getElementById("action_page").action = "";
      break;
  }

}
