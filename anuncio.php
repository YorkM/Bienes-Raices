<?php

require 'includes/funciones.php';
incluirTemplates('header');

?>

<main class="contenedor seccion contenido-centrado">
    <h1>Casa en Venta Frente al Bosque</h1>
    <picture>
        <source srcset="build/img/destacada.webp" type="image/webp">
        <source srcset="build/img/destacada.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen destacada">
    </picture>
    <div class="resumen-propiedad">
        <p class="precio">$3.000.000</p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" loading="lazy" src="./build/img/icono_wc.svg" alt=" Icono WC">
                <p>3</p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="./build/img/icono_estacionamiento.svg" alt=" Icono Estacionamiento">
                <p>2</p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="./build/img/icono_dormitorio.svg" alt=" Icono Habitaciones">
                <p>4</p>
            </li>
        </ul>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum dignissimos doloremque vero eius, quaerat
            reiciendis earum in minima et veritatis nemo consequuntur delectus provident commodi animi tempora quod tempore,
            repellendus repudiandae, iure id vel. Molestiae, eos numquam beatae vel, eaque aliquid doloribus sunt illum
            impedit explicabo libero, maiores unde in!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum dignissimos doloremque vero eius, quaerat
            reiciendis earum in minima et veritatis nemo consequuntur delectus provident commodi animi tempora quod tempore,
            repellendus repudiandae, iure id vel.
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum dignissimos doloremque vero eius, quaerat
            reiciendis earum in minima et veritatis nemo consequuntur delectus provident commodi animi tempora quod tempore.
        </p>
    </div>
</main>

<?php incluirTemplates('footer'); ?>