const accordion = document.getElementsByClassName('contentBx');

for (let i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener('click', function(event) {
        if (!event.target.closest('input')) { // Check if the clicked element is not an input field
            this.classList.toggle('active');
        }
    });
}
