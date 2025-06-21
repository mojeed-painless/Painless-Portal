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