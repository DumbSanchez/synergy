function generatePassword() {
  event.preventDefault();
  // Сгенерировать случайный пароль
  let password = generateRandomPassword(8); // Здесь длина пароля

  // Установить сгенерированный пароль в поле ввода
  document.getElementById("password").value = password;

}

function generateRandomPassword(length) {
  let characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()";
  let password = "";

  for (let i = 0; i < length; i++) {
    let randomIndex = Math.floor(Math.random() * characters.length);
    password += characters.charAt(randomIndex);
  }

  return password;
}

const passGenBtn = document.getElementById("GeneratePassword");

passGenBtn.addEventListener('click', generatePassword);
// Показать пароль
function togglePasswordVisibility() {
  event.preventDefault();
  let password = document.getElementById("password");
  let toggle = document.getElementById("toggle-btn")

  if (password.type === "password") {
    password.type = "text";
    toggle.innerText = "Скрыть";
  } else {
    password.type = "password";
    toggle.innerText = "Показать";
  }
}
