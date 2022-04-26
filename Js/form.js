// phone number verification less than 10

//DOM elements getElementById
var phone = document.getElementById("phone");
var phone_err = document.getElementById("phone_err");
var phone_err_label = document.getElementById("phone_err_label");

// flag for error
let is_phone_err = 0; // phone outfoucs color channge

phone.addEventListener('input', () => {
    var phoneNumber_err = phone.value;
    phoneNumber_err = phoneNumber_err.length;
    if (phoneNumber_err >= 11) {
        phone.style.color = "red";
        phone_err_label.style.color = "red";
        phone.style.borderColor = "red";
        phone_err.style.display = "block";
        phone_err_label.style.transition = "all 0.5s";
        phone_err.style.transition = "all 0.5s";
        phone.style.transition = "all 0.5s";
        is_phone_err = 1;
    } else {
        phone.style.color = "#006eff";
        phone_err_label.style.color = "#006eff";
        phone.style.borderColor = "#006eff";
        phone_err.style.display = "none";
        phone_err_label.style.transition = "all 0.5s";
        phone_err.style.transition = "all 0.5s";
        phone.style.transition = "all 0.5s";
        is_phone_err = 0;
    }
});

//phone focus addEventListener
phone.addEventListener("blur", () => {
    phone.style.color = "#474747";
    phone_err_label.style.color = "#80868B";
    phone.style.borderColor = "#80868B";
    if (is_phone_err == 1) {
        phone.style.color = "red";
        phone_err_label.style.color = "red";
        phone.style.borderColor = "red";
    }
})