// Function to display popup on page load
window.onload = function() {
    document.getElementById('popup').style.display = 'flex';

    // Fetch visitor's IP address and location details
    fetch('https://ipinfo.io/json?token=bd40b974f79be3')
        .then(response => response.json())
        .then(data => {
            document.getElementById('visitor-ip').textContent = data.ip;
            document.getElementById('location').textContent = `${data.city}, ${data.region}, ${data.country}`;
            document.getElementById('isp').textContent = data.org;
        })
        .catch(error => console.error('Error fetching IP info:', error));

    // Display current date and time
    const currentDate = new Date();
    document.getElementById('current-date').textContent = currentDate.toLocaleString();
};

// Function to close popup
function closePopup() {
    document.getElementById('popup').style.display = 'none';
}
