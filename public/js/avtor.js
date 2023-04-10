// if (sessionStorage.getItem("data") != null) {
//     window.location.href = "people.html";
// }
//
// $(".buttonsub").click(function (event) {
//     event.preventDefault();
//     $.ajax({
//         method: "POST",
//         url: "http://library-back/auth",
//         data: $("#form").serialize(),
//     }).done(function (data) {
//         if (data["message"]) alert(data["message"]);
//         else {
//             console.log(data);
//             sessionStorage.setItem("data", JSON.stringify(data));
//             window.location.href = "people.html";
//         }
//     });
// });
