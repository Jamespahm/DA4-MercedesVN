const searchBox = document.querySelector(".js-header--search-box");
const mainContainer = document.querySelector("#main");
const searchBoxContainer = document.querySelector(".js-header-search");





function showSearchBoxL() {
    hideNav();
    searchBox.classList.add("header--search-box__large");
}
searchBox.addEventListener("click", showSearchBoxL);

function hideSearchBoxL() {
    searchBox.classList.remove("header--search-box__large");
}
mainContainer.addEventListener("click", hideSearchBoxL);

searchBoxContainer.addEventListener("click", (event) =>
    event.stopPropagation()
);






const modal = document.querySelector(".js-modal");
const model = document.querySelector(".js-modalNav-models");
const buyonl = document.querySelector(".js-modalNav-buy-onl");
const guide = document.querySelector(".js-modalNav-guide");
const service = document.querySelector(".js-modalNav-service");
const mercedes = document.querySelector(".js-modalNav-mercedes");
const modalCloses = document.querySelectorAll(".js-modalNav-close");
const modalContainers = document.querySelectorAll(".modalNav-container");
const bodyFixed = document.querySelector(".js-body-fixed");
const modalLogin = document.querySelector(".js-modalLogin--login");
const modalBookMark = document.querySelector(".js-modalLogin--bookMark");
const modalContainerLogin = document.querySelectorAll(".modalLogin");

const btnModel = document.querySelector(".js-btn-models");
const btnBuyonl = document.querySelector(".js-btn-buy-onl");
const btnGuide = document.querySelector(".js-btn-guide");
const btnService = document.querySelector(".js-btn-service");
const btnMercedes = document.querySelector(".js-btn-mercedes");
const btnNavHeader = document.querySelectorAll(".js-header-nav");
const btnLogin = document.querySelector(".js-btn-login");
const btnBookMark = document.querySelector(".js-btn-bookmark");
const btnsLogin = document.querySelectorAll(".header--btn");

const btnNavModel = document.querySelectorAll(".js-content-model--nav-btn");

function openModal() {
    bodyFixed.classList.add("body-fixed");
    modal.classList.add("open");
}

function hideModal() {
    modal.classList.remove("open"); //
}

function hideHeaderNav() {
    for (const i of modalContainers) {
        i.classList.remove("open");
    }
}

function hideBorderNav() {
    for (const y of btnNavHeader) {
        y.classList.remove("border-top");
    }
}

function hideModalLogin() {
    for (const x of modalContainerLogin) {
        x.classList.remove("openModalLogin");
    }
}

function hideNavBtnModel() {
    for (const i of btnNavModel) {
        i.classList.remove("nav-btn__black");
    }
}





const btnBuyCar = document.querySelector(".js-product-overview--buybtn");
const modalForm = document.querySelector(".js-modalForm");
const modalFormContainer = document.querySelector(".js-modalForm");

function showModalForm() {
    hideNav();
    openModal();
    modalForm.classList.add("openModalForm");
}
if (typeof btnBuyCar === "object" && btnBuyCar !== null) {
    btnBuyCar.addEventListener("click", showModalForm);
  }

function hideModalForm() {
    if (typeof modalForm === "object" && modalForm !== null) {
      modalForm.classList.remove("openModalForm");
    }
  }

mainContainer.addEventListener("click", hideModalForm);



if (typeof btnBuyCar === "object" && btnBuyCar !== null) {
    btnBuyCar.addEventListener("click", (event) => event.stopPropagation());
  }
  

if (typeof modalFormContainer === "object" && modalFormContainer !== null) {
    modalFormContainer.addEventListener("click", (event) => event.stopPropagation());
  }
  
//Hàm ẩn modal (gỡ class open khỏi modal)
function hideNav() {
    hideSearchBoxL();
    hideBorderNav(); //Ẩn border-top của nút ở nav header
    hideModalLogin();
    hideModal();
    hideHeaderNav();
    hideModalForm();
    bodyFixed.classList.remove("body-fixed");
}

btnNavHeader.forEach((i) => {
    i.addEventListener("click", () => {
        hideNav();
        openModal();
        i.classList.add("border-top");
    });
});

btnsLogin.forEach((i) => {
    i.addEventListener("click", () => {
        hideNav();
        openModal();
    });
});

btnModel.addEventListener("click", () => model.classList.add("open"));
btnBuyonl.addEventListener("click", () => buyonl.classList.add("open"));
btnGuide.addEventListener("click", () => guide.classList.add("open"));
btnService.addEventListener("click", () => service.classList.add("open"));
btnMercedes.addEventListener("click", () => mercedes.classList.add("open"));

btnBookMark.addEventListener("click", () =>
    modalBookMark.classList.add("openModalLogin")
);
btnLogin.addEventListener("click", () =>
    modalLogin.classList.add("openModalLogin")
);
//
bodyFixed.addEventListener("click", hideNav);

btnNavModel.forEach((i) => {
    i.addEventListener("click", () => {
        hideNavBtnModel();
        i.classList.add("nav-btn__black");
    });
});

// CHẶN HIỆU ỨNG SỦI BỌT

for (const i of btnsLogin) {
    i.addEventListener("click", (event) => event.stopPropagation());
}

for (const i of modalContainerLogin) {
    i.addEventListener("click", (event) => event.stopPropagation());
}

for (const i of modalCloses) {
    //Ở CÁC NÚT CLOSE
    i.addEventListener("click", hideNav);
}

for (const i of btnNavHeader) {
    //Ở CÁC NÚT NAV HEADER
    i.addEventListener("click", (event) => event.stopPropagation());
}

for (const i of modalContainers) {
    //Ở PHẦN MENU NAV HEADER
    i.addEventListener("click", (event) => event.stopPropagation());
}







