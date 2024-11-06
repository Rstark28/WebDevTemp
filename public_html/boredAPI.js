const catFactElement = document.getElementById("catFact");

fetch("https://catfact.ninja/fact")
  .then(response => response.json())
  .then(data => {
    catFactElement.textContent = data.fact;
  })
  .catch(error => {
    console.error("Error fetching cat fact:", error);
    catFactElement.textContent = "Failed to load cat fact.";
  });
