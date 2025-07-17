document.addEventListener("DOMContentLoaded", function() {
    const name = "Mutiara";
    console.log("Selamat datang di website " + name + "!");
    alert("Haloo! Selamat Datang di Profil Mutiara!");
});

function validateForm() {
    const nama = document.getElementById("nama").value.trim();
    const email = document.getElementById("email").value.trim();
    const pesan = document.getElementById("pesan").value.trim();

    if (nama === "" || email === "" || pesan === "") {
        alert("Semua field wajib diisi.");
        return false;
    }

    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!regex.test(email)) {
        alert("Format email tidak valid.");
        return false;
    }

    return true;
}