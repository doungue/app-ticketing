const tbody = document.getElementById("show-answers");

const listeanswers = async () => {
  const datos = await fetch(
    "actions/questions/showAllAnswersOfQuestionAction.php"
  );
  const repository = await datos.text();
  tbody.innerHTML = repository;
};

listeanswers();
