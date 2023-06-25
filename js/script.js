// Toggle class active untuk hamburger menu
const navbarNav = document.querySelector('.navbar-nav');
// ketika hamburger menu di klik
document.querySelector('#hamburger-menu').onclick = () => {
  navbarNav.classList.toggle('active');
};

// Toggle class active untuk search form
const searchForm = document.querySelector('.search-form');
const searchBox = document.querySelector('#search-box');

document.querySelector('#search-button').onclick = (e) => {
  searchForm.classList.toggle('active');
  searchBox.focus();
  e.preventDefault();
};

// Toggle class active untuk shopping cart
const shoppingCart = document.querySelector('.shopping-cart');
document.querySelector('#shopping-cart').onclick = (e) => {
  shoppingCart.classList.toggle('active');
  e.preventDefault();
};

// Klik di luar elemen
const hm = document.querySelector('#hamburger-menu');
const sb = document.querySelector('#search-button');
const sc = document.querySelector('#shopping-cart-button');

document.addEventListener('click', function (e) {
  if (!hm.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove('active');
  }

  if (!sb.contains(e.target) && !searchForm.contains(e.target)) {
    searchForm.classList.remove('active');
  }

  if (!sc.contains(e.target) && !shoppingCart.contains(e.target)) {
    shoppingCart.classList.remove('active');
  }
});

// Modal Box Chocolate
const itemDetailModalChocolate = document.querySelector('#item-detail-modal-chocolate');
const itemDetailButtonsChocolate = document.querySelectorAll('.item-detail-button-chocolate');

itemDetailButtonsChocolate.forEach((btn) => {
  btn.onclick = (e) => {
    itemDetailModalChocolate.style.display = 'flex';
    e.preventDefault();
  };
});

// klik tombol close modal
document.querySelector('.modal .chocolate').onclick = (e) => {
  itemDetailModalChocolate.style.display = 'none';
  e.preventDefault();
};

// klik di luar modal
// window.onclick = (e) => {
//   if (e.target === itemDetailModalChocolate) {
//     itemDetailModalChocolate.style.display = 'none';
//   }
// };

// Modal Box Green Tea
const itemDetailModalGreentea = document.querySelector('#item-detail-modal-greentea');
const itemDetailButtonsGreentea = document.querySelectorAll('.item-detail-button-greentea');

itemDetailButtonsGreentea.forEach((btn) => {
  btn.onclick = (e) => {
    itemDetailModalGreentea.style.display = 'flex';
    e.preventDefault();
  };
});

// klik tombol close modal Greentea
document.querySelector('.modal .greentea').onclick = (e) => {
  itemDetailModalGreentea.style.display = 'none';
  e.preventDefault();
};

// klik di luar modal
// window.onclick = (e) => {
//   if (e.target === itemDetailModalGreentea) {
//     itemDetailModalGreentea.style.display = 'none';
//   }
// };

// Modal Box RedVelved
const itemDetailModalRedVelved = document.querySelector('#item-detail-modal-redvelved');
const itemDetailButtonsRedVelved = document.querySelectorAll('.item-detail-button-redvelved');

itemDetailButtonsRedVelved.forEach((btn) => {
  btn.onclick = (e) => {
    itemDetailModalRedVelved.style.display = 'flex';
    e.preventDefault();
  };
});

// klik tombol close moda RedVelved
document.querySelector('.modal .redvelved').onclick = (e) => {
  itemDetailModalRedVelved.style.display = 'none';
  e.preventDefault();
};

// klik di luar modal
// window.onclick = (e) => {
//   if (e.target === itemDetailModalGreentea) {
//     itemDetailModalGreentea.style.display = 'none';
//   }
// };

// Modal Box GulaAren
const itemDetailModalGulaAren = document.querySelector('#item-detail-modal-gulaaren');
const itemDetailButtonsGulaAren = document.querySelectorAll('.item-detail-button-gulaaren');

itemDetailButtonsGulaAren.forEach((btn) => {
  btn.onclick = (e) => {
    itemDetailModalGulaAren.style.display = 'flex';
    e.preventDefault();
  };
});

// klik tombol close moda GulaAren
document.querySelector('.modal .gulaaren').onclick = (e) => {
  itemDetailModalGulaAren.style.display = 'none';
  e.preventDefault();
};

// klik di luar modal
// window.onclick = (e) => {
//   if (e.target === itemDetailModalGreentea) {
//     itemDetailModalGreentea.style.display = 'none';
//   }
// };

// Modal Box AvocadoCaramel
const itemDetailModalAvocadoCaramel = document.querySelector('#item-detail-modal-avocadocaramel');
const itemDetailButtonsAvocadoCaramel = document.querySelectorAll('.item-detail-button-avocadocaramel');

itemDetailButtonsAvocadoCaramel.forEach((btn) => {
  btn.onclick = (e) => {
    itemDetailModalAvocadoCaramel.style.display = 'flex';
    e.preventDefault();
  };
});

// klik tombol close modal  Avocado Caramel
document.querySelector('.modal .avocadocaramel').onclick = (e) => {
  itemDetailModalAvocadoCaramel.style.display = 'none';
  e.preventDefault();
};

// klik di luar modal
// window.onclick = (e) => {
//   if (e.target === itemDetailModalGreentea) {
//     itemDetailModalGreentea.style.display = 'none';
//   }
// };

// Modal Box Taro
const itemDetailModalTaro = document.querySelector('#item-detail-modal-taro');
const itemDetailButtonsTaro = document.querySelectorAll('.item-detail-button-taro');

itemDetailButtonsTaro.forEach((btn) => {
  btn.onclick = (e) => {
    itemDetailModalTaro.style.display = 'flex';
    e.preventDefault();
  };
});

// klik tombol close modal  
document.querySelector('.modal .taro').onclick = (e) => {
  itemDetailModalTaro.style.display = 'none';
  e.preventDefault();
};

// klik di luar modal
// window.onclick = (e) => {
//   if (e.target === itemDetailModalGreentea) {
//     itemDetailModalGreentea.style.display = 'none';
//   }
// };



