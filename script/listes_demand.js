const tbody = document.querySelector("tbody");

const listedemande = async () => {
  const datos = await fetch("../actions/questions/showAllDemandeAction.php");
  const repository = await datos.text();
  tbody.innerHTML = repository;
};

listedemande();
