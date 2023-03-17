export default function registerTaskModal() {
  const btnNewTask = document.querySelector(".btn-addTask");
  const taskModal = document.querySelector(".register-modal-container-task");
  const btnCloseTaskModal = document.querySelector(".btn-close-task");
  const btnAddTask = document.querySelector(".btn-cadastrar-task");
  function openTaskModal() {
    taskModal.classList.add("ativo");
  }
  function closeTaskModal() {
    taskModal.classList.remove("ativo");
  }
  if (btnCloseTaskModal) {
    btnCloseTaskModal.addEventListener("click", closeTaskModal);
  }
  if (btnAddTask) {
    btnNewTask.addEventListener("click", openTaskModal);
  }
  if (btnAddTask) {
    btnAddTask.addEventListener("click", () => {
      closeTaskModal();
    });
  }
}
