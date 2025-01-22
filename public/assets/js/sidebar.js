function openSidebar() {
    // Buka sidebar
    document.getElementById("mySidebar").style.width = "250px";

    // Geser konten utama
    document.getElementById("mainContent").classList.add("shifted");
}

function closeSidebar() {
    // Tutup sidebar
    document.getElementById("mySidebar").style.width = "0";

    // Kembalikan konten utama
    document.getElementById("mainContent").classList.remove("shifted");
}