                            <form  action="signup_save.php" method="post" autocomplete="on"> 
                                <center>
                                <h4> Registrate </h4> 
                                </center>
								<hr>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">New usuario</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="Usuario" />
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">New contraseña </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="Contraseña"/>
                                </p>
								<p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="u">Nombre </label>
                                    <input id="passwordsignup" name="firstname" required="required" type="text" placeholder="Nombre"/>
                                </p>
								<p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="u">Apellido </label>
                                    <input id="passwordsignup" name="lastname" required="required" type="text" placeholder="Apellido"/>
                                </p>
								<p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="">Tu género </label>
									<select id="passwordsignup"  name="gender">
										<option></option>
										<option>Hombre</option>
										<option>Mujer</option>
                                                                                <option>prefiero no decirlo</option>
									</select>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Crear Cuenta"/> 
								</p>
                                <p class="change_link">  
									Ya estás registrado ?
									<a href="#tologin" class="to_register"> Inicia sesión </a>
								</p>
                            </form>