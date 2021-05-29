import SearchIcon from "../assets/icon/search.svg";
import MenuIcon from "../assets/icon/menu.svg";

// Customize search button
const seachEl = document.getElementById("searchId");
const searchBtn = seachEl?.querySelector(".search-submit");
searchBtn.value = "";

const imageEl = document.createElement("img");
imageEl.classList.add("search-icon");
imageEl.setAttribute("src", SearchIcon);

seachEl.appendChild(imageEl);

//Customize menu toggle
const menuBtn = document
  .getElementById("site-navigation")
  .querySelector(".menu-toggle");
menuBtn.innerHTML = "";
const menuIconEl = document.createElement("img");
menuIconEl.classList.add("menu-icon");
menuIconEl.setAttribute("src", MenuIcon);
menuBtn.appendChild(menuIconEl);
