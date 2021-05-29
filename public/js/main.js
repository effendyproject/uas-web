$(document).ready(function () {
    const navbar = document.querySelector(".navbar")

    window.addEventListener("scroll", () => {
        let y = window.scrollY
        if (y > 150) {
            navbar.classList.add("navbar-shrink")
        } else {
            navbar.classList.remove("navbar-shrink")
        }
    })

    function validateEmail(email) {
        const re = /^(([^<>()[\]\\.,:\s@"]+(\.[^<>()[\]\\.,:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        return re.test(String(email).toLowerCase())
    }

    $("#btn-submit").click(() => {
        const email = document.querySelector(".form #emailForm")
        const subject = document.querySelector(".form #subject")
        const message = document.querySelector(".form #message")
        if (!validateEmail(email.value)) {
            email.classList.add("input-danger")
            return alert("Email tidak valid")
        } else {
            email.classList.remove("input-danger")
        }

        if (subject.value.length < 1) {
            subject.classList.add("input-danger")
            return alert("Subject tidak boleh kosong")
        } else {
            subject.classList.remove("input-danger")
        }

        if (message.value.length < 1) {
            message.classList.add("input-danger")
            return alert("Pesan tidak boleh kosong")
        } else {
            message.classList.remove("input-danger")
        }

        email.value = ""
        subject.value = ""
        message.value = ""
        return alert("Your Message Successfull Sended")
    })

    $('#btn-login').click(() => document.location = 'member.html')
})


