let head = document.querySelectorAll('.head');

head.forEach((item) => {
    item.addEventListener('click', () => {
        // Close all other sections
        head.forEach((otherItem) => {
            if (otherItem !== item) {
                let otherContent = otherItem.nextElementSibling;
                if (otherContent && otherContent.classList.contains('active')) {
                    otherContent.classList.remove('active');
                }
                otherItem.classList.remove('active');
                let otherArrow = otherItem.querySelector('.fa-angle-right, .fa-angle-down');
                if (otherArrow && otherArrow.classList.contains('fa-angle-down')) {
                    otherArrow.classList.remove('fa-angle-down');
                    otherArrow.classList.add('fa-angle-right');
                }
            }
        });

        // Toggle the 'active' class on the clicked content element
        let contentElement = item.nextElementSibling;
        if (contentElement) {
            contentElement.classList.toggle('active');
        }

        // Toggle the 'active' class on the clicked head for color
        item.classList.toggle('active');

        // Toggle the arrow icon inside the clicked header
        let arrowIcon = item.querySelector('.fa-angle-right, .fa-angle-down');
        if (arrowIcon) {
            arrowIcon.classList.toggle('fa-angle-right');
            arrowIcon.classList.toggle('fa-angle-down');
        }
    });
});
console.log("This message comes from an external JS file!");

document.addEventListener('DOMContentLoaded', function() {
    const articles = document.querySelectorAll('.appear');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.2 });

    articles.forEach(article => observer.observe(article));

});

