const locationInput = document.getElementById("event_location");
const mapsLinkDiv = document.getElementById("google-maps-link");
const mapsLink = document.getElementById("maps-link");

locationInput.addEventListener("input", () => {
    const location = locationInput.value.trim();
    if (location) {
        mapsLink.href = `https://www.google.com/maps?q=${encodeURIComponent(location)}`;
        mapsLinkDiv.style.display = "block";
    } else {
        mapsLinkDiv.style.display = "none";
    }
});