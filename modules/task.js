export default function task() {
  const ul = document.querySelector(".todo-tasks-list");
  const btnAddTask = document.querySelector(".btn-cadastrar-task");
  const taskModal = document.querySelector(".register-modal-container-task");
  function closeTaskModal() {
    taskModal.classList.remove("ativo");
  }
  async function resgatarDados() {
    const req = await fetch("../login/task.php", {
      method: "POST"
    });
    const res = await req.json();
    return res;
  }
  async function geraTasks() {
    const data = await resgatarDados();
    data.forEach((e) => {
      const li = document.createElement("li");
      const span = document.createElement("span");
      const spanD = document.createElement("span");
      const a = document.createElement("a");
      const div = document.createElement("div");
      div.classList.add("task-container");
      li.classList.add("todo-task");
      span.classList.add("taksTitle");
      spanD.classList.add("taskDescription");
      a.setAttribute("id", "checkbox");
      a.href = `../login/deleteTask.php?id_task=${e.id_task}`;
      span.innerText = e.titulo;
      spanD.innerText = e.descricao;
      ul.appendChild(li);
      li.appendChild(div);
      div.appendChild(span);
      div.appendChild(spanD);
      li.appendChild(a);
    });
  }
  btnAddTask.addEventListener("click", () => {
    closeTaskModal();
  });
  geraTasks();
}
