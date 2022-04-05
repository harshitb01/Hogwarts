$(".loginBtn").click(function () {
    $(".login").show();
    $(".signUp").hide();
    $(".loginBtn").css({ "border-bottom": "2px solid #ff4141" });
    $(".signUpBtn").css({ "border-style": "none" });
});

$(".signUpBtn").click(function () {
    $(".login").hide();
    $(".signUp").show();
    $(".signUpBtn").css({ "border-bottom": "2px solid #ff4141" });
    $(".loginBtn").css({ "border-style": "none" });
});
const inputs = document.querySelectorAll(".input");
function addcl() {
    let parent = this.parentNode.parentNode;
    parent.classList.add("focus");
}
function remcl() {
    let parent = this.parentNode.parentNode;
    if (this.value == "") {
        parent.classList.remove("focus");
    }
}
inputs.forEach((input) => {
    input.addEventListener("focus", addcl);
    input.addEventListener("blur", remcl);
});
