const emailRe = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
var registerForm = document.forms["registerForm"];
var passwordInput = registerForm["password"];
var confirmPasswordInput = registerForm["confirmPassword"];
var emailInput = registerForm["email"];

function registerValidate() {
  if (passwordInput.value != confirmPasswordInput.value) {
    alert("Passwords do not match!");
    return false;
  }
  if (!emailRe.test(emailInput.value)) {
    alert("Invalid email address!");
    return false;
  }
  return true;
}
