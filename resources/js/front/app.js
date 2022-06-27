require('./bootstrap.js');

import {renderTabs} from "./tabs.js";
import {plusMinus} from "./plusMinus.js";
import {FAQS} from "./FAQS.js";
import {popUpCart} from "./pop-up-cart.js";
import {renderForm} from "./form.js";
import {renderProducts} from "./products.js";
import {menu} from "./menu.js";
import {renderCart} from "./cart.js";
import {buyButton} from "./buyButton.js";
import {Sale} from "./Sale.js"
import {checkout} from "./checkout.js";



renderTabs();
plusMinus();
FAQS();
popUpCart();
renderForm();
renderProducts();
menu();
renderCart();
buyButton();
Sale();
checkout();
