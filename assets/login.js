$(".login-btn").click(function (e) {
    e.preventDefault();
    let email_login = $("#email").val();
    let password_login = $("#password").val();
    $.post('requests/login.php', { email: email_login, password: password_login }, function (response) {
        if (response == "success") {
            window.location.href = "home.php";
        }
    })
});