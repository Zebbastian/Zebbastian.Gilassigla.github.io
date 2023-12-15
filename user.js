function addUser() {
    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    // Create a user object
    var user = {
        username: username,
        email: email,
        password: password
    };

    // Perform client-side validation if needed...

    // Send the user data to the server using fetch
    fetch('http://localhost:3000/user', {
        method: 'POST',
  
    })
    .then(response => response.text())
    .then(data => {
        console.log('User added:', data);
        alert('User added successfully!');
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Error adding user.');
    });
}
