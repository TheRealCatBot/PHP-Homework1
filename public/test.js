document.addEventListener('DOMContentLoaded', function() {
    let quizCards = document.querySelectorAll('.card');

    quizCards.forEach(function(card) {
        card.addEventListener('click', function() {
            alert('quiz button has been pressed');
        });
    });
});