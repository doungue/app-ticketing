const tbody = document.querySelector("tbody");

const listeticket = async () => {
  const datos = await fetch(
    "../actions/questions/showAllTicketClientAction.php"
  );
  const repository = await datos.text();
  tbody.innerHTML = repository;
};

listeticket();
