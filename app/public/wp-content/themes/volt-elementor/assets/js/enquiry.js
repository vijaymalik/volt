// enquiry.js 
document.addEventListener('DOMContentLoaded', function () {
    const arrowLine = document.getElementById('arrow-line');
    const selectElement = document.getElementById('nearbySelect');

    // Check before using them
    if (arrowLine && selectElement) {
        arrowLine.addEventListener('click', function () {
            console.log('Arrow clicked');
            console.log(selectElement.value);
            selectElement.focus();
        });
    } else {
        console.warn('enquiry.js: #arrow-line or #nearbySelect not found on this page.');
    }
});
