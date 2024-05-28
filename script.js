document.getElementById('booking-form').addEventListener('submit', function(event) {
    event.preventDefault();

    var formData = new FormData(event.target);
    var xhr = new XMLHttpRequest();

    xhr.open('POST', 'send-booking.php');
    xhr.send(formData);

    xhr.onload = function() {
        if (xhr.status === 200) {
            alert('Booking sent successfully!');
            event.target.reset();
        } else {
            alert('Error sending booking.');
        }
    };
})
