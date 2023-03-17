export default function searchTasks() {
  const searchInput = document.querySelector("#searchTask");
  const tasksList = document.querySelector(".todo-tasks-list");

  searchInput.addEventListener("keyup", async (event) => {
    const value = searchInput.value;
    const arrayLi = await Array.from(tasksList.children);
    console.log(value);
    await arrayLi.forEach((li) => {
      console.log(li);
      const textoLi = JSON.stringify(li.innerText);
      if (!textoLi.toLowerCase().includes(`${value}`)) {
        li.style.display = "none";
      } else {
        li.style.display = "flex";
      }
    });
  });
}
