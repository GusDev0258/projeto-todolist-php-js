export default function completeTask() {
  const completeButton = document.querySelector("#checkbox");
  const message = document.querySelector(".completedMessage");
  function showMessage() {
    message.classList.add("show");
  }
  if (completeButton) {
    completeButton.addEventListener("click", showMessage);
  }
}
