<script>
const cards = document.getElementById("cards");

document.querySelector(".next").onclick = () => {
  cards.scrollBy({ left: 300, behavior: "smooth" });
};

document.querySelector(".prev").onclick = () => {
  cards.scrollBy({ left: -300, behavior: "smooth" });
};
</script>