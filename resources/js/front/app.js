require('./bootstrap.js');

import {renderTabs} from "./tabs.js";
import {plusMinus} from "./plusMinus.js";
import {FAQS} from "./FAQS.js";
import {popUpCart} from "./pop-up-cart.js";
import {renderForm} from "./form.js";
import {renderProducts} from "./products.js";
import {menu} from "./menu.js";
import {renderSelectFilter} from "./selectFilter.js";
import {renderCart} from "./cart.js";



renderTabs();
plusMinus();
FAQS();
popUpCart();
renderForm();
renderProducts();
menu();
renderSelectFilter();
renderCart();
