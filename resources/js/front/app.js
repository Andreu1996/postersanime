require('./bootstrap.js');

import {tabs} from "./tabs.js";
import {tabsMobile} from "./tabsMobile.js";
import {plusMinus} from "./plusMinus.js";
import {FAQS} from "./FAQS.js";
import {popUpCart} from "./pop-up-cart.js";
import {renderForm} from "./form.js";
import {renderProduct} from "./products.js";
import {menu} from "./menu.js";



tabs ();
tabsMobile ();
plusMinus();
FAQS();
popUpCart();
renderForm();
renderProduct();
menu();

