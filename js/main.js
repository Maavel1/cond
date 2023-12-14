const products = [
  { name: "Сергей Васильев", category: "men", price: 1100, avatar: "../img/avata_cand1.png", link:'./profile.html' },
  { name: "Татьяна Петрова", category: "women", price: 1500, avatar: "../img/avata_cand2.png" },
  { name: "Андрей Чухлебов", category: "men", price: 1000, avatar: "../img/avata_cand3.png" },
  { name: "Сикорская Анна", category: "women", price: 1000, avatar: "../img/avatar_2.png" },
  { name: "Демидова Дарья", category: "women", price: 1500, avatar: "../img/avatar_3.png" },
  { name: "Харисов Евгений", category: "men", price: 1000, avatar: "../img/avatar_4.png" },
  { name: "Татьяна Петрова", category: "women", price: 1500, avatar: "../img/avata_cand2.png" },
  { name: "Андрей Чухлебов", category: "men", price: 1000, avatar: "../img/avata_cand3.png" },
  { name: "Сикорская Анна", category: "women", price: 1000, avatar: "../img/avatar_2.png" },
  { name: "Демидова Дарья", category: "women", price: 1500, avatar: "../img/avatar_3.png" },
  { name: "Татьяна Петрова", category: "women", price: 1500, avatar: "../img/avata_cand2.png" },
  { name: "Андрей Чухлебов", category: "men", price: 1000, avatar: "../img/avata_cand3.png" },
  { name: "Сикорская Анна", category: "women", price: 1000, avatar: "../img/avatar_2.png" },
  { name: "Татьяна Петрова", category: "women", price: 1500, avatar: "../img/avata_cand2.png" },
  { name: "Андрей Чухлебов", category: "men", price: 1000, avatar: "../img/avata_cand3.png" },
];

function displayProducts(productsToShow) {
  const productList = document.getElementById("product-list");
  productList.innerHTML = "";

  productsToShow.forEach(product => {
      const card = document.createElement("div");
      card.className = "product_card";
      card.innerHTML = `    <div class="block_condita">
      <div class="block_avatar_condita_skilss">
         <div class="skils_condita">
          <p class="skils_1">part-time</p>
          <p class="skils_2">full-time</p>
         </div>
          <img src="${product.avatar}" alt="" width="104px" height="104px">
      </div>
      <div class="name_profes">
          <p class="name_condita">${product.name}</p>
          <p class="profes">Директор по маркетингу </p>
       </div>
       <div class="experience_candita">
          <p>Опыт: более 13 лет</p>
       </div>
       <div class="Salary_candita">
          <p>Зарплата:${product.price}€</p>
       </div>
       <div class="btn_candita">
          <a href="${product.link}" class="link_candita" id="myLink">Посмотреть справку</a>
       </div>
  </div>`;
      productList.appendChild(card);
  });
}
// {/* <h2>${product.name}</h2>
//                         <p>Категория: ${product.category}</p>
//                         <p>Цена: $${product.price}</p>
//                         <img src="${product.avatar}" alt="Аватар"> */}
function filterProducts() {
  const selectedCategory = document.getElementById("category").value;
  const minPrice = parseFloat(document.getElementById("minPrice").value) || 0;
  const maxPrice = parseFloat(document.getElementById("maxPrice").value) || Number.MAX_SAFE_INTEGER;

  let filteredProducts = products;
  if (selectedCategory !== "all") {
      filteredProducts = products.filter(product => product.category === selectedCategory);
  }

  filteredProducts = filteredProducts.filter(product => product.price >= minPrice && product.price <= maxPrice);
  displayProducts(filteredProducts);
}

displayProducts(products);
