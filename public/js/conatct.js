function sendMail() {
  var params = {
    name: document.getElementById("name").value,
    number: document.getElementById("number").value,
    email: document.getElementById("email").value,
    subject: document.getElementById("subject").value,
    message: document.getElementById("message").value,
  };

  const serviceID = "service_84y3f98";
  const templateID = "template_sv9iejb";

  emailjs
    .send(serviceID, templateID, params)
    .then((res) => {
      document.getElementById("name").value = "";
      document.getElementById("email").value = "";
      document.getElementById("message").value = "";
      document.getElementById('number').value = "";
      document.getElementById('subject').value = "";
      console.log(res);
      alert("Your message sent successfully!!");
    })
    .catch((err) => console.log(err));
}


// // Get the form element
// const form = document.getElementById('contactForm');

// // Add event listener to the form submission
// form.addEventListener('submit', function(event) {
//     // Prevent the form from submitting
//     event.preventDefault();

//     // Check if the required fields are empty
//     const name = document.getElementById('name').value;
//     const number = document.getElementById('number').value;
//     const email = document.getElementById('email').value;
//     const subject = document.getElementById('subject').value;
//     const message = document.getElementById('message').value;

//     if (!name || !number || !email || !subject || !message) {
//         // Display an error message or perform any other validation logic
//         alert('Please fill in all required fields');
//     } else {
//         // All required fields are filled, proceed with form submission
//         form.submit();
//     }
// });
