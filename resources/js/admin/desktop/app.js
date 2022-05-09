require('../bootstrap');

import {hamburgerMenu} from "./hamburger.js";
import {sideTable} from "./sidetable.js";
import {saveButton} from "./save.js";
import {tabsAdmin} from "./tabsAdmin.js";
import {tabsAdminLocal} from "./tabsAdmin.js";
import {removeUser} from "./removeUser.js";
import {renderImageUpload} from "./renderImageUpload.js";
import {ckeditor} from "./ckeditor.js";

hamburgerMenu();
sideTable();
saveButton();
tabsAdmin ();
tabsAdminLocal ();
removeUser ();
renderImageUpload();
ckeditor();

