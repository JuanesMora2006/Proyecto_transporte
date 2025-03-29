<?php include('includes/header.php'); ?>

        <section class="content">

            <article class="post">
                <h1 class="post-title"><a href="#">TIPOS DE TRANSPORTE</a></h1>
                <div class="entry post-meta">
                    <span class="post-date">Subido en 26/02/2025</span>
                </div>
                <div class="entry post-content">

                    <div class="transport-item">
                        <img src="assets/bus.svg" alt="Bus" class="transport-image">
                        <div class="transport-text">
                            <h3>Bus</h3>
                            <p>El bus es un medio de transporte público que permite trasladar a un gran número de
                                personas de manera eficiente en áreas urbanas e interurbanas.</p>
                        </div>

                        <div class="admin-buttons">
                            <button class="edit">Editar</button>
                            <button class="delete">Eliminar</button>
                        </div>
                    </div>

                    <div class="transport-item">
                        <img src="assets/car.svg" alt="Carro" class="transport-image">
                        <div class="transport-text">
                            <h3>Carro</h3>
                            <p>El carro es un vehículo de transporte privado que ofrece comodidad y flexibilidad para
                                viajes cortos y largos.</p>
                        </div>

                        <div class="admin-buttons">
                            <button class="edit">Editar</button>
                            <button class="delete">Eliminar</button>
                        </div>
                    </div>

                    <div class="transport-item">
                        <img src="assets/moto.svg" alt="Moto" class="transport-image">
                        <div class="transport-text">
                            <h3>Moto</h3>
                            <p>La moto es un vehículo de dos ruedas ideal para moverse rápidamente en zonas urbanas con
                                tráfico denso.</p>
                        </div>
                        <div class="admin-buttons">
                            <button class="edit">Editar</button>
                            <button class="delete">Eliminar</button>
                        </div>
                    </div>
                </div>
            </article>

            <div class="admin-buttons add-new">
                <button class="add">Añadir Nuevo Transporte</button>
            </div>
        </section>
        <?php
        include 'includes/footer.php';
        ?>