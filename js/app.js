// cookies lišta
let cookieModal = document.querySelector(".cookie-consent-modal")
let cancelCookieBtn = document.querySelector(".btn.cancel")
let acceptCookieBtn = document.querySelector(".btn.accept")

cancelCookieBtn.addEventListener("click", function(){
    cookieModal.classList.remove("active")
})
acceptCookieBtn.addEventListener("click", function(){
    cookieModal.classList.remove("active")
    localStorage.setItem("cookieAccepted", "yes")
})


setTimeout(function (){
    let cookieAccepted = localStorage.getItem("cookieAccepted")
    if (cookieAccepted != "yes"){
        
    }
    cookieModal.classList.add("active")
}, 2000)



// kontakt
function message() {
    var Name = document.getElementById('name');
    var email = document.getElementById('email');
    var msg = document.getElementById('msg');
    var consentCheckbox = document.getElementById('consent');
    const success = document.getElementById('success');
    const danger = document.getElementById('danger');

    // Overenie prázdnych políčok a súhlasu so spracovaním osobných údajov
    if (Name.value === '' || email.value === '' || msg.value === '' || !consentCheckbox.checked) {
        danger.style.display = 'block';
    } else {
        // Overenie e-mailovej adresy
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (emailRegex.test(email.value)) {
            setTimeout(() => {
                Name.value = '';
                email.value = '';
                msg.value = '';
                consentCheckbox.checked = false;
            }, 2000);

            success.style.display = 'block';

            alert('Správa bola odoslaná');
        } else {
            alert('Zadajte platnú e-mailovú adresu, správa nebude môcť byť odoslaná');
            danger.style.display = 'block';
        }
    }

    setTimeout(() => {
        danger.style.display = 'none';
        success.style.display = 'none';
    }, 3500);
}