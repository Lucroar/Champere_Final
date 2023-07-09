function employeeLogin() {
  
  var link = document.getElementById("framework").value;
  
  switch (link) {
    
    case "1": //Admin
      document.getElementById("action_page").action = "./admin/cha_sys_admin_index.html";
      break;
    case "2": //Accountancy
      document.getElementById("action_page").action = "/act/cha_act_input.html";
      break;
    case "3": //Human Resource
      document.getElementById("action_page").action = "/hrd/cha_hrd_editemployee.html";
      break;
    case "4": //Marketing
      document.getElementById("action_page").action = "cha_sys_new_about-us.html";
      break;
    case "5": //Payroll
      document.getElementById("action_page").action = "/payroll/cha_pyr_inputdata.html";
      break;
    case "6": //Supply Chain Management
      document.getElementById("action_page").action = "/scm/scm_warehouse_inventory.html";
      break;
    default:
      document.getElementById("action_page").action = "";
      break;
  }

}

let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let buyShopping = document.querySelector('.buy');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

buyShopping.addEventListener('click', () => {
    alert("Thank you for your purchase!")
    window.location.href = 'cha_sys_view_shoppingCart.html';
});

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})

let products = [
    {
        id: 1,
        name: 'Vin de raisin',
        img: 'grape_wine.jpeg',
        price: 8000
    },
    {
        id: 2,
        name: 'Vin de grenade',
        img: 'pomegranate_wine.jpeg',
        price: 7500
    },
    {
        id: 3,
        name: 'Vin de fraise',
        img: 'strawberry_wine.webp',
        price: 10000
    },
    {
        id: 4,
        name: 'Raisins et vin de pêche',
        img: 'premium_grape_wine.jpeg',
        price: 4000
    },
    {
        id: 5,
        name: 'Vin de pêche',
        img: 'peach_wine.jpeg',
        price: 8000
    },
    {
        id: 6,
        name: 'Vin de orchidee',
        img: 'flower_wine.jpeg',
        price: 12000
    }
];
let listCards  = [];
function initApp(){
    products.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="img/${value.img}">
            <div class="title">${value.name}</div>
            <div class="price">${value.price.toLocaleString()}</div>
            <button onclick="addToCard(${key})">Add To Cart</button>`;
        list.appendChild(newDiv);
    })
}
initApp();
function addToCard(key){
    if(listCards[key] == null){
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
    }
    reloadCard();
}
function reloadCard(){
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="img/${value.img}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
                listCard.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}
function changeQuantity(key, quantity){
    if(quantity == 0){
        delete listCards[key];
    }else{
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}
