const logregBox = document.querySelector('.logreg-box');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');

registerLink.addEventListener('click', () => {
    logregBox.classList.add('active');
});

loginLink.addEventListener('click', () => {
    logregBox.classList.remove('active');
});

$(document).ready(function() {
    $('form').submit(function(event) {
      event.preventDefault();
      $.ajax({
        url: '../login.php',
        type: 'post',
        data: $('form').serialize(),
        success: function(response) {
          if (response === 'error') {
            $('#popup').show();
          } else {
            window.location.href = 'home.html';
          }
        }
      });
    });
    
$('#close-popup').click(function() {
    $('#popup').hide();
    });
});
  
