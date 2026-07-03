// script.js - Pertemuan 5: Javascript Dasar
// File ini berisi logika interaktivitas halaman profil

// Pilih tombol dan body
const btnToggle = document.querySelector("#btnToggle"); // querySelector untuk memilih elemen dengan id btnToggle
const body = document.body;

// Baca Preferensi saat halaman pertama kali dimuat
if (localStorage.getItem("lightMode") === "true") {
    body.classList.add("light");
    btnToggle.innerHTML = '<i class="bi bi-moon-stars-fill"></i>'; // jika di local storage lightMode true, maka tambahkan class light di body
} else {
    body.classList.remove("light");
    btnToggle.innerHTML = '<i class="bi bi-brightness-high-fill"></i>';
}

btnToggle.addEventListener("click", () => {
    body.classList.toggle("light");
    const isLight = body.classList.contains("light") // cek apakah body sedang ada class light?
    //simpan status true or false ke localStorage
    localStorage.setItem("lightMode", isLight)

    if (isLight) {
        btnToggle.innerHTML = '<i class="bi bi-moon-stars-fill"></i>'; // jika di local storage lightMode true, maka tambahkan class light di body
    } else {
    body.classList.remove("light");
    btnToggle.innerHTML = '<i class="bi bi-brightness-high-fill"></i>';
    }
});