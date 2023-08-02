   const emailInput = document.getElementById('email_add');
   const emailMess = document.getElementById('check_message');
   const submitButton = document.getElementById('submitbutton');

   const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

   emailInput.addEventListener('input', () => {
      const email = emailInput.value.trim();

      if (email.length === 0) {
         emailMess.innerText = "Please enter an email address.";
         return;
      }

      fetch('check_email', {
         method: 'POST',
         headers: {
            "Content-type": "application/json",
            'X-CSRF-TOKEN': csrfToken
         },
         body: JSON.stringify({ email })
      })
      .then(response => response.json())
      .then(data => {
         if (data.exists) {
            emailMess.innerText = "Email is already used.";
            submitButton.disabled=true;

         } else {
            emailMess.innerText = "Email is available.";
            submitButton.disabled = false;
         }
      })
      .catch(error => {
         console.error('Error:', error);
         emailMess.innerText = 'Error checking email.';
         submitButton.disabled=true;
      });
   });
