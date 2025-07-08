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



function openWebsite() {
    const userName = userInput.value;
    const passwordValue = passwordInput.value;
    const errorMsg = document.querySelector('.error-message');

    // errorMsg.textContent = '';

    if (
        userName == 'Painless' && passwordValue == '0000' ||
        userName == 'Faith' && passwordValue == '0000'
    ) {
        localStorage.setItem('username', userName);
        window.location.href = 'welcome.html'; 
       
    } else {
        // errorMsg.textContent = 'Invalid email or password. Please try again.';
        errorMsg.style.display = 'block'; 
        userInput.value = ''; 
        passwordInput.value = ''; 
    
        // Hide the error after 3 seconds
        setTimeout(() => {
            errorMsg.style.display = 'none';
        }, 3000);
    }


}

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