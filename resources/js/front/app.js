require('./bootstrap.js');

import {tabs} from "./tabs.js";
import {tabsMobile} from "./tabsMobile.js";
import {plusMinus} from "./plusMinus.js";
import {FAQS} from "./FAQS.js";
import {popUpCart} from "./pop-up-cart.js";
import {renderForm} from "./form.js";
import {renderProducts} from "./products.js";
import {menu} from "./menu.js";
import {renderSelectFilter} from "./selectFilter.js";
import {addProductToCart} from "./addProductToCart.js";



tabs ();
tabsMobile ();
plusMinus();
FAQS();
popUpCart();
renderForm();
renderProducts();
menu();
renderSelectFilter();
addProductToCart();
