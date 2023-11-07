const body = document.body;


// Reference Filter
function filterSelect(category) {
  const filters = document.querySelectorAll('.filter');
  const buttons = document.querySelectorAll('.btn');

  buttons.forEach(button => {
    button.classList.remove('active');
    if (button.getAttribute('onclick').includes(`'${category}'`)) {
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

// Mobile Menu
class mobileMenu {
  constructor() {
    this.body = document.body;
    this.menu = this.body.querySelector(".mobMenu");
    this.menuItems = this.menu.querySelectorAll(".mobNavItem");
    this.menuBorder = this.menu.querySelector(".mobNavBord");
    this.activeItem = this.menu.querySelector(".mobNavActive");

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