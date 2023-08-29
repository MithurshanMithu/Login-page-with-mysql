document.addEventListener("DOMContentLoaded", function() {
  const loginForm = document.getElementById("login-form");

  loginForm.addEventListener("submit", function(event) {
    event.preventDefault();
    const username = loginForm.username.value;
    const password = loginForm.password.value;

    if (username === "" || password === "") {
      alert("Both fields are required");
    } else {
      loginForm.submit();
    }
  });
});
