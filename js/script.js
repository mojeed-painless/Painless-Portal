let head = document.querySelectorAll('.head');

head.forEach((item) => {
    item.addEventListener('click', () => {

        // Find the corresponding content element
           let contentElement = item.nextElementSibling;

        // Toggle the 'active' class on the content element
        if (contentElement) {
            contentElement.classList.toggle('active');
        }


         // Find the arrow icon inside the clicked header
        let arrowIcon = item.querySelector('.fa-angle-right, .fa-angle-down');
        if (arrowIcon) {
            arrowIcon.classList.toggle('fa-angle-right');
            arrowIcon.classList.toggle('fa-angle-down');
        }
        
    });
});



// Course page script

let runButton = document.querySelectorAll('.run-btn');


runButton.forEach((item) => {
    item.addEventListener('click', () => {
        // Go up to the closest .example-code parent
        let exampleCode = item.closest('.example-code');
        if (exampleCode) {
            // Find the next sibling .example-output
            let codeOutput = exampleCode.nextElementSibling;
            if (codeOutput && codeOutput.classList.contains('example-output')) {
                codeOutput.classList.add('active-output');
            }
        }
    });
})




function showForm(formId) {
    document.querySelectorAll('.form-box').forEach(form => form.classList.remove('active'));
    document.getElementById(formId).classList.add('active');
}


const userInput = document.getElementById('username');
const passwordInput = document.getElementById('password');




// Function to toggle password visibility

// function togglePasswordVisibility() {
//     const passwordInput = document.getElementById('password');
//     const toggleButton = document.querySelector('.toggle-password');

//     if (passwordInput.type === 'password') {
//         passwordInput.type = 'text';
//         toggleButton.classList.add('fa-eye-slash');
//         toggleButton.classList.remove('fa-eye');
//     } else {
//         passwordInput.type = 'password';
//         toggleButton.classList.add('fa-eye');
//         toggleButton.classList.remove('fa-eye-slash');
//     }
// }




// Utility to store multiple users in localStorage
function saveUser(user) {
    let users = JSON.parse(localStorage.getItem('users') || '[]');
    // Check for duplicate email
    if (users.some(u => u.email === user.email)) {
        return false;
    }
    users.push(user);
    localStorage.setItem('users', JSON.stringify(users));
    return true;
}

document.addEventListener('DOMContentLoaded', () => {
    // Add default admin if not present
    let users = JSON.parse(localStorage.getItem('users') || '[]');
    if (!users.some(u => u.username === 'admin')) {
        users.push({
            name: 'Admin',
            email: 'admin@portal.com',
            username: 'admin',
            password: 'admin123',
            role: 'admin',
            approved: true
        });
        localStorage.setItem('users', JSON.stringify(users));
    }

    // ...rest of your code...
});

// Registration form input storage
document.addEventListener('DOMContentLoaded', () => {
    const registerForm = document.querySelector('#register-form form');
    if (registerForm) {
        registerForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const name = registerForm.querySelector('input[name="name"]').value.toLowerCase();
            const email = registerForm.querySelector('input[name="email"]').value.toLowerCase();
            const username = registerForm.querySelector('input[name="username"]').value.toLowerCase();
            const password = registerForm.querySelector('input[name="password"]').value.toLowerCase();
            const role = registerForm.querySelector('select[name="role"]').value.toLowerCase();

            const successMsg = document.querySelector('.success-message')
            const errorMsg2 = document.querySelector('.error-message2');
            const errorMsg3 = document.querySelector('.error-message3');

            // Save user and check for duplicate email or username
            let users = JSON.parse(localStorage.getItem('users') || '[]');
            if (users.some(u => u.email === email)) {
                errorMsg2.style.display = 'block';
                setTimeout(() => {
                    errorMsg2.style.display = 'none';
                }, 3000);
                return;
            }
            if (users.some(u => u.username === username)) {
                errorMsg3.style.display = 'block';
                setTimeout(() => {
                    errorMsg3.style.display = 'none';
                }, 3000);
                return;
            }

            users.push({ name, email, username, password, role });
            localStorage.setItem('users', JSON.stringify(users));

            successMsg.style.display = 'block';
                setTimeout(() => {
                    successMsg.style.display = 'none';
                }, 3000);

            showForm('login-form');
        });
    }

    // Admin page: restrict access to admins only and show all info
    if (window.location.pathname.endsWith('admin.html')) {
        const currentUserUsername = localStorage.getItem('username');
        const users = JSON.parse(localStorage.getItem('users') || '[]');
        const currentUser = users.find(u => u.username === currentUserUsername);

        if (!currentUser || currentUser.role !== 'admin' || !currentUser.approved) {
            alert('Access denied. Only admins can view this page.');
            window.location.href = 'index.html';
            return;
        }

        const tableBody = document.getElementById('users-table-body');
        if (tableBody) {
            tableBody.innerHTML = users.map((u, idx) => `
                <tr>
                    <td>${u.name}</td>
                    <td>${u.email}</td>
                    <td>${u.username}</td>
                    <td>${u.password}</td>
                    <td>${u.role}</td>
                    <td>
                        ${u.approved ? `<span class="approved-status">Approved</span>` : `<button onclick="approveUser(${idx})">Approve</button>`}
                    </td>
                    <td>
                        <button onclick="deleteUser(${idx})" class="delete">Delete</button>
                    </td>
                </tr>
            `).join('');
        }
    }
});

// Approve user function for admin
function approveUser(index) {
    let users = JSON.parse(localStorage.getItem('users') || '[]');
    users[index].approved = true;
    localStorage.setItem('users', JSON.stringify(users));
    location.reload();
}

// Delete user function for admin
function deleteUser(index) {
    if (confirm('Are you sure you want to delete this user? This action cannot be undone.')) {
        let users = JSON.parse(localStorage.getItem('users') || '[]');
        users.splice(index, 1);
        localStorage.setItem('users', JSON.stringify(users));
        location.reload();
    }
}

// Login logic: check username and password, redirect by role
function openWebsite() {
    const userName = userInput.value.toLowerCase();
    const passwordValue = passwordInput.value.toLowerCase();
    const errorMsg = document.querySelector('.error-message');

    const users = JSON.parse(localStorage.getItem('users') || '[]');
    const foundUser = users.find(u => u.username === userName && u.password === passwordValue);

    if (foundUser) {
        if (!foundUser.approved) {
            errorMsg.textContent = 'Your account is not yet approved by admin.';
            errorMsg.style.display = 'block';
            setTimeout(() => {
                errorMsg.style.display = 'none';
                errorMsg.textContent = '';
            }, 3000);
            return;
        }

        localStorage.setItem('username', foundUser.username);
        if (foundUser.role === 'admin') {
            window.location.href = 'admin.html';
        } else {
            window.location.href = 'welcome.html';
        }
    } else {
        errorMsg.textContent = 'Invalid username or password.';
        errorMsg.style.display = 'block';
        setTimeout(() => {
            errorMsg.style.display = 'none';
            errorMsg.textContent = '';
        }, 3000);
    }
}