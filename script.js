$(document).ready(function () {
    $("#myForm").submit(function () {

        var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var course = $("#course").val();

        if (name == "" || email == "" || phone == "" || course == "") {
            alert("Please fill all fields");
            return false;
        }
    });
});
