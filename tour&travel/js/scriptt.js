function validateSignupForm() {
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
    
    if (password !== confirmPassword) {
        alert("Passwords do not match!");
        return false;
    }

    // ajax
    const formData = new FormData(document.getElementById("signupForm"));
    
    fetch('signup.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("message").innerHTML = data;
    })
    .catch(error => console.error('Error:', error));
    
    return false; 
}

function validateLoginForm() {
    
    
    //  AJAX 
    const formData = new FormData(document.getElementById("loginForm"));
    
    fetch('login.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if (data.trim() === "success") {
            window.location.href = "home.php"; // Redirect to welcome.php after successful login
        } else {
            document.getElementById("message").innerHTML = data;
        }
    })
    .catch(error => console.error('Error:', error));
    
    return false; 
}