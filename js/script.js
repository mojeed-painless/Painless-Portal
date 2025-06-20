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