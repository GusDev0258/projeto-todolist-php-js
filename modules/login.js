export default function login() {
  const userInput = document.querySelector("#userName");
  const passInput = document.querySelector("#userPassword");
  const btnLogin = document.querySelector(".btn-entrar");
  const p = document.querySelector(".incorreto");
  async function validationLogin(event) {
    p.classList.toggle("ativo");
    const userValue = userInput.value;
    const passValue = passInput.value;
    const data = { userName: `${userValue}`, userPassword: `${passValue}` };
    const req = await fetch("./login/login.php", {
      method: "POST",
      body: JSON.stringify(data)
    });
    const res = await req.json();
    console.log(res);
    if (res.validado) {
      location.href =
        "http://127.0.0.1:83/treinamento/phpProjects/projeto-todo-list/pages/home.php";
    } else {
      p.innerText = "Usuário ou Senhas incorretos";
      p.removeAttribute("class");
      p.style.display = "inline-block";
      p.classList.add("incorreto", "ativo");
    }
  }

  btnLogin.addEventListener("click", validationLogin);
}
