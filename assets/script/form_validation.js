
const form = document.querySelector('form');
const email = document.getElementById('email');
const password = document.getElementById('password');
const confirm_password = document.getElementById('cpassword');
const username = document.getElementById('uname');

// Regular expression for username validation: At least 5 characters long, contains letters, and can optionally include numbers
const usernameRegExp = /^(?=.*[a-zA-Z])[a-zA-Z0-9]{5,}$/;

// Function to validate username
function validateUsername() {
  const error = username.nextElementSibling;

  // Check the validity of the username
  const isUsernameValid = usernameRegExp.test(username.value);

  // Display error message based on the validation result
  if (isUsernameValid) {
    username.className = 'form-control';
    error.textContent = '';
    error.className = 'error';
  } else {
    username.className = 'form-control error-input';
    error.textContent = 'Username must be at least 5 characters long and contain letters. It can optionally include numbers.';
    error.className = 'error active';
  }

  return isUsernameValid;
}

// Regular expression for email validation
const emailRegExp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

// Function to validate email
function validateEmail() {
  const isValid = emailRegExp.test(email.value);
  const error = email.nextElementSibling;
  
  if (isValid) {
    email.className = 'form-control';
    document.getElementById('email-error').textContent = '';
    error.className = 'error';
  } else {
    email.className = 'form-control error-input';
    document.getElementById('email-error').textContent = 'Invalid email address';
    error.className = 'error active';
  }
  
  return isValid;
}

// Regular expressions for password validation
const lengthRegExp = /.{8,}/; // At least 8 characters
const upperCaseRegExp = /[A-Z]/; // At least one uppercase letter
const specialCharRegExp = /[!@#$%^&*(),.?":{}|<>]/; // At least one special character

// Function to validate password
function validatePassword() {
  const error = password.nextElementSibling;
  const isPasswordLengthValid = lengthRegExp.test(password.value);
  const isPasswordUpperCaseValid = upperCaseRegExp.test(password.value);
  const isPasswordSpecialCharValid = specialCharRegExp.test(password.value);
  
  // Check each validation separately and store error messages
  let errorMessages = [];
  if (!isPasswordLengthValid) {
    errorMessages.push('Password must be at least 8 characters long.');
  }
  if (!isPasswordUpperCaseValid) {
    errorMessages.push('Password must contain at least one uppercase letter.');
  }
  if (!isPasswordSpecialCharValid) {
    errorMessages.push('Password must contain at least one special character.');
  }

  // Display error messages based on missing requirements
  if (errorMessages.length === 0) {
    password.className = 'form-control';
    document.getElementById('password-error').textContent = '';
    error.className = 'error';
  } else {
    password.className = 'form-control error-input';
    document.getElementById('password-error').textContent = errorMessages.join(' ');
    error.className = 'error active';
  }

  // Display error message for confirm password
  const confirm_password_error = confirm_password.nextElementSibling;
  if (confirm_password.value !== '' && confirm_password.value !== password.value) {
    confirm_password_error.textContent = "Passwords don't match";
    confirm_password_error.className = 'error active';
  } else {
    confirm_password_error.textContent = '';
    confirm_password_error.className = 'error';
  }

  return errorMessages.length === 0 && confirm_password.value === password.value;
}

// Function to validate all inputs
function validateInputs() {
  let isValid = true;

  // Validate username
  if (!validateUsername()) {
    isValid = false;
  }

  // Validate email
  if (!validateEmail()) {
    isValid = false;
  }

  // Validate password
  if (!validatePassword()) {
    isValid = false;
  }

  // Check for empty fields
  const inputs = form.querySelectorAll('input');
  inputs.forEach((input) => {
    if (input.value.trim() === '' && input.type !== 'submit') {
      input.nextElementSibling.textContent = 'Required';
      input.nextElementSibling.className = 'error active';
      isValid = false;
    } else if (input.type !== 'password' && input.type !== 'submit') {
      input.nextElementSibling.textContent = '';
      input.nextElementSibling.className = 'error';
    }
  });

  return isValid;
}

// Add event listener for form submission
form.addEventListener('submit', (event) => {
  // Perform validation
  const isValid = validateInputs();

  // If any validation fails, prevent default form submission
  if (!isValid) {
    event.preventDefault(); // Prevent default form submission
    alert('Registration failed. Please ensure all fields are correctly filled.');
  }
});

// Add event listeners for real-time validation
username.addEventListener('input', validateUsername);
email.addEventListener('input', validateEmail);
password.addEventListener('input', validatePassword);
confirm_password.addEventListener('input', validatePassword);





const loginButton = document.querySelector('.submit-btn[name="login"]')

loginButton.addEventListener('click', (event) => {
  // Perform validation
  const isEmailValid = validateEmail()
  const areInputsValid = validateInputs()

  // If any validation fails, prevent default form submission
  if (!isEmailValid || !areInputsValid) {
    event.preventDefault() // Prevent default form submission
  }
})

const uploadartButton = document.querySelector('.submit-btn[name="submit-art"]')
uploadartButton.addEventListener('click', (event) => {
  // Perform validation
  const areInputsValid = validateInputs()

  // If any validation fails, prevent default form submission
  if (!areInputsValid) {
    event.preventDefault() // Prevent default form submission
  }
})
