document.getElementById("psw-repeat").addEventListener("change", matchPassword);
document.getElementById("accept").addEventListener("change", enableSubmit)

function matchPassword()
{
  var password = document.getElementById("psw");
  var confirmPassword = document.getElementById("psw-repeat");

  document.getElementById("psw-repeat-message").innerHTML = "";
  removeInvalidStatus("psw-repeat");

  if(password.value == confirmPassword.value)
  {
    return true;
  }else
  {
    document.getElementById("psw-repeat").className += " error";
    document.getElementById("psw-repeat-message").innerHTML = "<font color=\"red\">&#9888; Passwords don't match. </font>";
    return false;
  }
}

function enableSubmit() {
    var submit = document.getElementById("signSubmit");
    if(document.getElementById("accept").checked)
    {
        submit.disabled = false;
        submit.className = submit.className.replace(" not-allowed", "");
    }
    else
    {
        submit.disabled = true;
        submit.className += " not-allowed";
    }
}

function removeInvalidStatus(id)
{
  document.getElementById(id).className = document.getElementById(id).className.replace(" error", "");
}