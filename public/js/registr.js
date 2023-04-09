if (sessionStorage.getItem("data") != null) {
    window.location.href = "people.html";
}

$(".formsub").submit(function (event) {
    event.preventDefault();
    var userInfo = new FormData();
    userInfo.append("avatar", document.getElementById("avatar").files[0]);
    userInfo.append("username", document.getElementById("username").value);
    userInfo.append("email", document.getElementById("email").value);
    userInfo.append("password", document.getElementById("password").value);

    $.ajax({
        method: "POST",
        url: "http://library-back/registration",
        processData: false,
        contentType: false,
        data: userInfo,
        success: function (data) {
            if (data["message"]) alert(data["message"]);
            else {
                console.log(data);
                sessionStorage.setItem("data", JSON.stringify(data));
                window.location.href = "people.html";
            }
        },
    });
});
