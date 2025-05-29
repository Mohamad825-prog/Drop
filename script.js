
// Order now
function showModal() {
    document.getElementById('orderModal').style.display = 'block';
}

function closeModal() {
    document.getElementById('orderModal').style.display = 'none';
}

// Optional: Close when Clicking Outside the Modal
window.onclick = function (event) {
    const modal = document.getElementById('orderModal');
    if (event.target === modal) {
        modal.style.display = "none";
    }
}