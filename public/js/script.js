document.addEventListener("DOMContentLoaded", function() {
    const contactBtn = document.getElementById("contactBtn");
    if (contactBtn) {
        contactBtn.addEventListener("click", function(event) {
            event.preventDefault();
            alert("Mohon maaf fitur ini belum dapat mengirim form ☺️");
        });
    }
});

document.addEventListener("DOMContentLoaded", function() {
    const backBtn = document.getElementById("backBtn");
    if (backBtn) {
        backBtn.addEventListener("click", function(event) {
            event.preventDefault();
            alert("Apakah anda yakin untuk kembali ke halaman utama?");
            window.location.href = "/";
        });
    }
});

document.addEventListener("DOMContentLoaded", function() {
    const aboutBtn = document.getElementById("aboutBtn");
    if (aboutBtn) {
        aboutBtn.addEventListener("click", function(event) {
            event.preventDefault();
            alert("Apakah anda yakin untuk menuju About Page?");
            window.location.href = "/about";
        });
    }
});