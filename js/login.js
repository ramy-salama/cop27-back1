const pass_field = document.querySelector('.pass-key');
const showBtn = document.querySelector('.show-login');
showBtn.addEventListener('click', function(){
  if(pass_field.type === "password"){
    pass_field.type = "text";
    showBtn.textContent = "hide";
    showBtn.style.color = "#f78a42";
    }else{
      pass_field.type = "password";
      showBtn.textContent = "show";
      showBtn.style.color = "#3498db";
      }
  });
