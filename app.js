import registerModal from "./modules/registerModal.js";
import registerTaskModal from "./modules/registerTaskModal.js";
import searchTasks from "./modules/searchTasks.js";
import completeTask from "./modules/completeTask.js";
import task from "./modules/task.js";
import login from "./modules/login.js";
const btnRegistrar = document.querySelector(".login-container p a");
const btnNewTask = document.querySelector(".btn-addTask");
const searchInput = document.querySelector("#searchTask");
if (btnRegistrar) {
  registerModal();
}
const btnLogin = document.querySelector(".btn-entrar");
if (btnLogin) {
  login();
}
if (btnNewTask) {
  registerTaskModal();
}
if (searchInput) {
  searchTasks();
  completeTask();
  task();
}
