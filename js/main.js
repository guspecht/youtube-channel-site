// Start Email confirmation
const confirm = document.querySelector('.confirmation');
const error = document.querySelector('.error');
const emailInput = document.querySelector('#email')

const emailConfirm = document.querySelector('.emailok');
const emailError = document.querySelector('.emailerror');
const emailContactInput = document.querySelector('#contactEmail')

// Email and Contact
// newsletter
if(confirm){
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Your email has been added, Good luck!',
        showConfirmButton: false,
        timer: 2500
      })
}
// Contact
if(emailConfirm){
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'We will be in touch!',
        showConfirmButton: false,
        timer: 2500
      })
}

// Show an alert of error, it will scroll to the email part and focus on the email if needed
if(error || emailError){
    
    Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'You need to fill up your email.',
        showConfirmButton: false,
        timer: 1500
      })

      if(error){
        setTimeout(function(){ 
            error.scrollIntoView(); 
            emailInput.focus();
            }, 2000);
        } else if(emailError){
            setTimeout(function(){ 
                emailError.scrollIntoView(); 
                emailContactInput.focus();
                }, 2000);
        }
}
// End Email confirmation


