let loadtime: number = new Date().getTime();

let filterItems = document.querySelectorAll('.filterItem');
filterItems.forEach((item) => {
  item.addEventListener("click", filterSelect);
});

// Reference Filter
function filterSelect() {
  const filters = document.querySelectorAll('.filter');
  const buttons = document.querySelectorAll('.filterItem');
  const category = this.dataset.tech;

  buttons.forEach(button => {
    button.classList.remove('active');
    if (button.dataset.tech === category) {
      button.classList.add('active');
    }
  });

  filters.forEach(div => {
    if (category === 'all' || div.classList.contains(category)) {
      div.style.display = 'block';
    } else {
      div.style.display = 'none';
    }
  });
}

// PreLoader
const preLoader = async () => {
  const preLoader: HTMLElement | null = document.querySelector('#preLoader');
  loadtime = (new Date().getTime() - loadtime) / 1000;
  console.log(loadtime);

  const idealTime = 2;
  const loadtime_bonus = loadtime <= idealTime ? (idealTime - loadtime)*1000 : 0;
  const delay = (ms: number) => new Promise(resolve => setTimeout(resolve, ms));
  await delay(loadtime_bonus);

  if (preLoader !== null) {
    preLoader.style.transform = "translateY(-110%)";
    setTimeout(() => {
      preLoader.style.display = "none";
    }, 500);
  }
}

class mobileMenu {
  constructor() {
    this.body = document.body;
    this.menu = this.body.querySelector(".mobMenu");
    this.menuItems = this.menu.querySelectorAll(".mobNavItem");
    this.menuBorder = this.menu.querySelector(".mobNavBord");
    this.activeItem = this.menu.querySelector(".mobNavActive");

    window.addEventListener("hashchange", () => {
      this.checkUrlHash();
    });

    this.menuItems.forEach((item, index) => {
      item.addEventListener("click", () => this.clickItem(item, index));
    });

    this.offsetMenuBorder(this.activeItem, this.menuBorder);
    this.menu.style.removeProperty("--timeOut");

    window.addEventListener("resize", () => {
      this.offsetMenuBorder(this.activeItem, this.menuBorder);
      this.menu.style.setProperty("--timeOut", "none");
    });
  }

  clickItem(item, index) {
    this.menu.style.removeProperty("--timeOut");

    if (this.activeItem === item) return;

    if (this.activeItem) {
      this.activeItem.classList.remove("mobNavActive");
    }

    item.classList.add("mobNavActive");
    this.activeItem = item;
    this.offsetMenuBorder(this.activeItem, this.menuBorder);
  }

  offsetMenuBorder(element, menuBorder) {
    const offsetActiveItem = element.getBoundingClientRect();
    const left = Math.floor(
      offsetActiveItem.left -
        this.menu.offsetLeft -
        (menuBorder.offsetWidth - offsetActiveItem.width) / 2
    );
    menuBorder.style.transform = `translate3d(${left}px, 0, 0)`;
  }
}

new mobileMenu();
window.addEventListener("load", preLoader);