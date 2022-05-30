require('./bootstrap');

import {hamburgerMenu} from "./hamburger.js";
import {sideTable} from "./sidetable.js";
import {saveButton} from "./save.js";
import {tabsAdmin} from "./tabsAdmin.js";
import {renderImageUpload} from "./renderImageUpload.js";
import {ckeditor} from "./ckeditor.js";
import {renderCloseForm} from "./closeForm.js";
import {dropdownMenu} from "./dropdownMenu.js";
import {renderForm} from "./form.js";
import {renderTable} from "./table.js";
import {newForm} from "./newForm.js";
import {renderDeleteButton} from "./deleteButton.js";


hamburgerMenu();
sideTable();
saveButton();
tabsAdmin ();
renderImageUpload();
ckeditor();
renderCloseForm();
dropdownMenu();
renderForm();
renderTable();
newForm();
renderDeleteButton();
