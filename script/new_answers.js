const myForm = document.getElementById("myForm");
const msgAlert = document.getElementById("msgAlert");
myForm.addEventListener("submit", async (e) => {
  e.preventDefault();

  const dataForm = new FormData(myForm);
  dataForm.append("add", 1);

  const data = await fetch("actions/questions/test.php", {
    method: "POST",
    body: dataForm,
  });

  const resp = await data.json();
  console.log(resp);

  if (resp["erro"]) {
    msgAlert.innerHTML = resp["msg"];
  } else {
    listeanswers();
  }
});
