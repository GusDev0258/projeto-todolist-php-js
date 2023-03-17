export default function registerModal() {
  const btnAbrir = document.querySelector(".login-container p a");
  const btnFechar = document.querySelector(".register-modal .btn-close");
  const modal = document.querySelector(".register-modal-container");
  const btnCadastrar = document.querySelector(".register-modal btn-registrar");
  function openModal(event) {
    event.preventDefault();
    modal.classList.add("ativo");
  }
  function closeModal(event) {
    event.preventDefault();
    modal.classList.remove("ativo");
  }
  function closeModalAfterRegister(event) {
    event.preventDefault();
    modal.classList.remove("ativo");
  }
  if (btnAbrir) {
    btnAbrir.addEventListener("click", openModal);
  }
  if (btnFechar) {
    btnFechar.addEventListener("click", closeModal);
  }
  if (btnCadastrar) {
    btnCadastrar.addEventListener("click", closeModalAfterRegister);
  }
}
