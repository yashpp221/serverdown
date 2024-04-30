document.getElementById('searchForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var mobileNumber = document.getElementById('mobileNumber').value.trim();
    if (mobileNumber !== '') {
        window.location.href = 'https://sunitafashion.com/' + mobileNumber;
    } else {
        alert('Please enter a valid mobile number.');
    }
});
