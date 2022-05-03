
 @extends('admin.layout.master')

 @section('content')

        <main>

            <div class="menu">
                <nav class="navbar">   
                    <div class="ham" >  
                    <span class="bar1"></span>  
                    <span class="bar2"></span>  
                    <span class="bar3"></span>  
                    </div>  
                </nav>
            </div>

            <div class="table-title">
                <h3>Panel de Administracion</h3>
            </div>

            <div class="menuadmin menuhide">
                <div class="menu-element">
                    <div class="menu-element-algo">
                        <p>usuarios</p>
                    </div>
                </div>

                <div class="menu-element">
                    <div class="menu-element-algo">
                        <p>productos</p> 
                    </div>
                </div>

                <div class="menu-element">
                    <div class="menu-element-algo">
                        <p>empleados</p>
                    </div>
                </div>

                <div class="menu-element">
                    <div class="menu-element-algo">
                        <p>contactos</p>
                    </div>
                </div>

                <div class="menu-element">
                    <div class="menu-element-algo">
                        <p>afianzados</p>
                    </div>
                </div>


            </div>

            <div class="tables">
                <table class="tablefill">
              
                    <thead>
                        <tr>
                            <th class="text-center first-column">User ID</th>
                            <th class="text-center">User Name</th>
                            <th class="text-center column-hide">Mail</th>
                            <th class="text-center column-hide">Movile</th>
                            <th class="text-center last-column">more</th>
                        </tr>
                    </thead>
      
                    
                    <tbody class="table-hover">
                        <tr>
                            <td class="text-center">001</td>
                            <td class="text-left">JoanKilito_19</td>
                            <td class="text-left column-hide">Joan.Kilo@gmail.com</td>
                            <td class="text-left column-hide">688523114</td>
                            
                            <td>
                                <div class="user">
                                    <div class="useredit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                            </svg>
                                    </div>
                                    <div class="userdelete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            </svg>
                                    </div>
                                </div>                               
                        </tr>
                        <tr>
                            <td class="text-center">002</td>
                            <td class="text-left">ToniiGar</td>
                            <td class="text-left column-hide">toniigar@gmail.com</td>
                            <td class="text-left column-hide">633549721</td>
                            <td>
                                <div class="user">
                                    <div class="useredit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                          </svg>
                                    </div>
                                    <div class="userdelete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                          </svg>
                                    </div>
                                </div>                               
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">003</td>
                            <td class="text-left">yotajota</td>
                            <td class="text-left column-hide">jotajota-yota@gmail.com</td>
                            <td class="text-left column-hide">971548216</td>
                            <td>
                                <div class="user">
                                    <div class="useredit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                          </svg>
                                    </div>
                                    <div class="userdelete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                          </svg>
                                    </div>
                                </div>                               
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">004</td>
                            <td class="text-left">Holly-Spirit-year0</td>
                            <td class="text-left column-hide">thechrist-god@gmail.com</td>
                            <td class="text-left column-hide">668264912</td>
                            <td>
                                <div class="user">
                                    <div class="useredit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                          </svg>
                                    </div>
                                    <div class="userdelete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                          </svg>
                                    </div>
                                </div>                               
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">005</td>
                            <td class="text-left">mamma.letmedie</td>
                            <td class="text-left column-hide">sebastianzapaterogonzalez@gmail.com</td>
                            <td class="text-left column-hide">680264953</td>
                            <td>
                                <div class="user">
                                    <div class="useredit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                          </svg>
                                    </div>
                                    <div class="userdelete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                          </svg>
                                    </div>
                                </div>                               
                            </td>
                        </tr>
                    </tbody>
                </table>
    
                <form>
                    <div class="sidetable sidetablehide">

                        <div class="container">
    
                            <div class="sidetable-header">
                                <ul class="container--tabs">
                                    <li class="tab tabs--active" data-tab="tab1">Contacto</li>
                                    <li class="tab" data-tab="tab2">Imagenes</li>
                                    <li class="tab" data-tab="tab3">Seo</li>
                                </ul>
        
                                <div class="sidetable-header-options">
                                    <div class="sidetable-header-element">
                                        <div class="sidetableHeaderSave">
                                            <div class="sidetable-header-svg">
                                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidetable-header-element">
                                        <div class="sidetable-header-clean">
                                            <div class="sidetable-header-svg">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eraser" viewBox="0 0 16 16">
                                                    <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm2.121.707a1 1 0 0 0-1.414 0L4.16 7.547l5.293 5.293 4.633-4.633a1 1 0 0 0 0-1.414l-3.879-3.879zM8.746 13.547 3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidetable-header-element">
                                        <div class="sidetable-header-onoff">
                                            <div class="containerButton">
                                                <label class="btn-onoff">
                                                    <input type="checkbox" name="visible" id="input-on-off" checked><span></span>	
                                                </label>
                                            </div>
                                        </div>
                                    </div>                               
                                </div>
                            </div>
                            
                        
                            <div class="container--content">
                                <div class="content content--active" data-tab="tab1">
                                    <div class="sidetableContact">
                                        <div class="desktop-two-columns">
                
                                            <div class="column">
                                                <div class="category">
                                                    <div class="category-title">
                                                        <h3>Categoria</h3>
                                                    </div>
                                                    <div class="category-options">
                                                        <select>
                                                            <option>categoria1</option>
                                                            <option>categoria2</option>
                                                            <option>categoria3</option>
                                                            <option>categoria4</option>
                                                            <option>categoria5</option>
                                                            <option>categoria6</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="column">
                                                <div class="name">
                                                    <div class="name-title">
                                                        <h3>Nombre</h3>
                                                    </div>
                                                    <div class="name-options">
                                                        <input type="text" placeholder="Nombre">
                                                    </div>
                                                </div>
                                            </div>
            
                                        </div>
    
                                        
                                        <div class="container-local">
    
                                            <div class="lenguage">
                                                <ul class="container-tabs-local">
                                                    <li class="tab-local tabs--active-local" data-tab="tab1">Español</li>
                                                    <li class="tab-local" data-tab="tab2">Ingles</li>
                                                    <li class="tab-local" data-tab="tab3">Catalan</li>
                                                </ul>
                                            </div>
    
                                            <div class="container--content-local">
    
                                                <div class="content-local content--active-local" data-tab="tab1">
                                                    <div class="description">
                                                        <div class="description-title">
                                                            <h3>Titulo</h3>
                                                        </div>
                                                        <div class="description-title-text">
                                                            <input type="text" placeholder="Titulo">
                                                        </div>
                                                        <div class="description-title">
                                                            <h3>Descripción</h3>
                                                        </div>
                                                        <div class="description-info">
                                                            <textarea placeholder="Descripción"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <div class="content-local" data-tab="tab2">
                                                    <div class="description">
                                                        <div class="description-title">
                                                            <h3>Titulo2</h3>
                                                        </div>
                                                        <div class="description-title-text">
                                                            <input type="text" placeholder="Titulo">
                                                        </div>
                                                        <div class="description-title">
                                                            <h3>Descripción</h3>
                                                        </div>
                                                        <div class="description-info">
                                                            <textarea placeholder="Descripción"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <div class="content-local" data-tab="tab3">
                                                    <div class="description">
                                                        <div class="description-title">
                                                            <h3>Titulo3</h3>
                                                        </div>
                                                        <div class="description-title-text">
                                                            <input type="text" placeholder="Titulo">
                                                        </div>
                                                        <div class="description-title">
                                                            <h3>Descripción</h3>
                                                        </div>
                                                        <div class="description-info">
                                                            <textarea placeholder="Descripción"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
    
                                            </div>
                                    
                                        </div>
                                        
                                        
                                        
                                    </div>
                                </div>
                                
                                <div class="content" data-tab="tab2">
                                    Imagenes
                                </div>
                                <div class="content" data-tab="tab3">
                                    Contenido
                                </div>
                            </div>
    
                            <div class="save saveHide cancelSave">
                                <div class="save-button button-decoration">
                                    <button class="btn-save">Guardar</button>
                                </div>
                                <div class="cancel-button button-decoration">
                                    <button class="btn-save">Cancelar</button>
                                </div>
                            </div>
    
                        </div>
    
                    </div> 
                </form>
                




                    {{-- <div class="sidetable-header">
                        <div class="sidetable-header-elements">
                            <div class="sidetable-header-windows">
                                <div class="sidetable-header-element">
                                    <div class="sidetable-header-User">
                                        <h3>Contacto</h3>
                                    </div>
                                </div>
        
                                <div class="sidetable-header-element">
                                    <div class="sidetable-header-Images">
                                        <h3>Imagenes</h3>
                                    </div>
                                </div>
        
                                <div class="sidetable-header-element">
                                    <div class="sidetable-header-Seo">
                                        <h3>Seo</h3>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    
                        <div class="sidetable-header-elements">
                            <div class="sidetable-header-options">
                                <div class="sidetable-header-element">
                                    <div class="sidetable-header-save">
                                        <div class="sidetable-header-svg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidetable-header-element">
                                    <div class="sidetable-header-clean">
                                        <div class="sidetable-header-svg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eraser" viewBox="0 0 16 16">
                                                <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm2.121.707a1 1 0 0 0-1.414 0L4.16 7.547l5.293 5.293 4.633-4.633a1 1 0 0 0 0-1.414l-3.879-3.879zM8.746 13.547 3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidetable-header-element">
                                    <div class="sidetable-header-onoff">
                                        <div class="sidetable-header-on">
                                            <p>ON</p>
                                        </div>
                                        <div class="sidetable-header-off">
                                            <p>OFF</p>
                                        </div>
                                    </div>
                                </div>                               
                            </div>
                        </div>
                    </div>

                    <div class="sidetableContact sidetableContactHide">
                        <div class="desktop-two-columns">

                            <div class="column">
                                <div class="category">
                                    <div class="category-title">
                                        <h3>Categoria</h3>
                                    </div>
                                    <div class="category-options">
                                        <select>
                                            <option>categoria1</option>
                                            <option>categoria2</option>
                                            <option>categoria3</option>
                                            <option>categoria4</option>
                                            <option>categoria5</option>
                                            <option>categoria6</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="column">
                                <div class="name">
                                    <div class="name-title">
                                        <h3>Nombre</h3>
                                    </div>
                                    <div class="name-options">
                                        <input type="text" placeholder="Nombre">
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                        <div class="description">
                            <div class="description-title">
                                <h3>Titulo</h3>
                            </div>
                            <div class="description-title-text">
                                <input type="text" placeholder="Titulo">
                            </div>
                            <div class="description-title">
                                <h3>Descripción</h3>
                            </div>
                            <div class="description-info">
                                <textarea placeholder="Descripción"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="sidetableImages sidetableImagesHide">
                        Imagenes pruba
                    </div>

                    <div class="sidetableSeo sidetableSeoHide">
                        Seo pruba
                    </div> --}}

        
                    



                    {{-- <div class="form-title">
                        <h2>Datos</h2>
                    </div>

                    <div class="form-element">
                        <div class="form-element-label">
                            <label for="fname">Nombre</label>
                        </div>
                        <div class="form-element-input">
                            <input type="text" id="fname" name="firstname" placeholder="tu nombre..">
                        </div>
                    </div>


                    <div class="form-element">
                        <div class="form-element-label">
                            <label for="fname">Apellido</label>
                        </div>
                        <div class="form-element-input">
                            <input type="text" id="fname" name="firstname" placeholder="tus apellidos..">
                        </div>
                    </div>

                    <div class="form-element">
                        <div class="form-element-label">
                            <label for="fname">Correo</label>
                        </div>
                        <div class="form-element-input">
                            <input type="text" id="fname" name="firstname" placeholder="tu correo electronico..">
                        </div>
                    </div>

                    <div class="form-element">
                        <div class="form-element-label">
                            <label for="fname">Edad</label>
                        </div>
                        <div class="form-element-input">
                            <input type="text" id="fname" name="firstname" placeholder="tu edad..">
                        </div>
                    </div>



                    <div class="form-element">
                        <div class="form-element-label">
                            <label for="fname">Direccion</label>
                        </div>
                        <div class="form-element-input">
                            <input type="text" id="fname" name="firstname" placeholder="tu direccion..">
                        </div>
                    </div>


                    <div class="form-element">
                        <div class="form-element-label">
                            <label for="fname">Codigo Postal</label>
                        </div>
                        <div class="form-element-input">
                            <input type="text" id="fname" name="firstname" placeholder="tu codigo postal..">
                        </div>
                    </div> --}}

            </div>
            

        @endsection
