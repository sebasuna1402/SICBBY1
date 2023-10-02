
<?php 
 nav_info($data);
 ?> 

    <!-- Cabecera-->
    <div
      class="container-fluid header-bg py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
      >
      <div class="container py-5">
        <h1 class="display-4 text-white mb-3 animated slideInDown">
          Voluntarios
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
              <a class="text-white" href="home">Home</a>
            </li>
            <li class="breadcrumb-item text-primary active" aria-current="page">
            Voluntarios
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- fin-->



    <!-- Volunteer Start -->
    <section class="bg0 p-t-104 p-b-116">
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">

          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <p><span class="text-primary me-2">#</span>Voluntarios</p>
            <h1 class="display-5 mb-4">Quieres ser parte de nuestro Voluntariado? Inscribete Ahora!</h1>

            
            <form id="formVoluntario" >
              <div class="row g-3">
              <h4 class="mtext-105 cl2 txt-center p-b-30">
						Formulario
					 </h4>

                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control bg-light border-0"
                      id="identificacion_volunteer"
                      name="identificacion_volunteer" 
                      placeholder="Identificacion"
                    />
                   <label for="identificacion_volunteer">Identificacion</label>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control bg-light border-0"
                      id="frist_name_volunteer"
                      name="frist_name_volunteer" 
                      placeholder="Nombre"
                    />
                    <label for="frist_name_volunteer">Nombre</label>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control bg-light border-0"
                      id="last_name_volunteer"
                      name="last_name_volunteer" 
                      placeholder="Apellido"
                    />
                    <label for="last_name_volunteer">Apellido</label>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control bg-light border-0"
                      id="email"
                      name="email" 
                      placeholder="Correo"
                    />
                    <label for="emailV">Correo</label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control bg-light border-0"
                      id="address_volunteer"
                      name="address_volunteer" 
                      placeholder="Direccion"
                    />
                    <label for="address_volunteer">Direccion</label>
                  </div>
                </div>

       
              <div class="col-12">
                   <div class="form-floating">
                      <select
                        class="form-select"
                         id="age_volunteer"
                          name="age_volunteer"
                        >
                        <option value="">Edad</option>
                        <?php
                      for ($i = 10; $i <= 100; $i++) {
                        echo "<option value='$i'>$i </option>";
                      }
                      ?>
                    </select>
                    <label for="age_volunteer">Selecciona tu edad</label>
                  </div>
                </div> 


                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control bg-light border-0"
                      id="ocupation_volunteer"
                      name="ocupation_volunteer" 
                      placeholder="Ocupacion"
                    />
                    <label for="ocupation_volunteer">Ocupacion</label>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control bg-light border-0"
                      id="phone_number_volunteer"
                      name="phone_number_volunteer" 
                      placeholder="Telefono"
                    />
                    <label for="phone_number_volunteer">Telefono</label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating">
                    <textarea
                      class="form-control bg-light border-0"
                      placeholder="Leave a message here"
                      id="mensaje"
                      name="mensaje"
                      style="height: 100px"
                    ></textarea>
                    <label for="mensaje">¿Representa alguna organizacion? ¿Cual?</label>
                  </div>
                </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-primary w-100 py-3">
                   Inscribirse
                  </button>
                </div>

              </div>
            </form>
          </div>

        </div>
      </div>
    </div>

    </section>

<?php 
  
	footer_info($data);
?>