// script.js - Pertemuan 5: Javascript Dasar
// File ini berisi logika interaktivitas halaman profil

// Ambil elemen yang diperlukan
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
    btnToggle.innerHTML = '<i class="bi bi-brightness-high-fill"></i>';
    }
});

// FETCH API: FAKTA KUCING

const isiFakta = document.querySelector("#isi-fakta");
const btnRefresh = document.querySelector("#btnRefresh");

async function ambilFakta() {
    //tampilkan loading indicator
    isiFakta.textContent = "⏳ Memuat fakta...";

    try {
        const response = await fetch("https://api.ryocantsleep.com/api/cysecfacts");

        // cek HTTP ok (status 200-299)
        if (!response.ok) {
            throw new Error("HTTP ERROR: " + response.status);
        }

        const data = await response.json();

        // tampilkan fakta ke DOM
        isiFakta.textContent = data.fact;
    } catch (error) {
        // tampilkan pesan
        isiFakta.textContent = "⚠️ Gagal memuat fakta. Cek koneksi internet Anda.";
        console.error("Error: ", error.message);
    }
}

// jalankan saat halaman pertama kali dimuat
ambilFakta();

// jalankan saat button diclick
btnRefresh.addEventListener("click", ambilFakta);