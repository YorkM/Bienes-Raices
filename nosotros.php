<?php

require 'includes/funciones.php';
incluirTemplates('header');

?>

<main class="contenedor seccion">
    <h1>Conozca sobre Nosotros</h1>
    <div class="contenedor-nosotros">
        <div class="imagen-nosotros">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/nosotros.jpg" alt="Imagen Nosotros">
            </picture>
        </div>
        <div class="texto-nosotros">
            <blockquote>25 Años de Experiencia</blockquote>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum dignissimos doloremque vero eius, quaerat reiciendis earum in minima et veritatis nemo consequuntur delectus provident commodi animi tempora quod tempore, repellendus repudiandae, iure id vel. Molestiae, eos numquam beatae vel, eaque aliquid doloribus sunt illum impedit explicabo libero, maiores unde in!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum dignissimos doloremque vero eius, quaerat reiciendis earum in minima et veritatis nemo consequuntur delectus provident commodi animi tempora quod tempore, repellendus repudiandae, iure id vel.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum dignissimos doloremque vero eius, quaerat reiciendis earum in minima et veritatis nemo consequuntur delectus provident commodi animi tempora quod tempore.
            </p>
        </div>
    </div>
</main>

<section class="contenedor seccion">
    <h1>Más Sobre Nosotros</h1>
    <div class="iconos-nosotros">
        <div class="icono">
            <img src="./build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis est nulla inventore temporibus
                voluptates sit praesentium et ipsa quibusdam! Enim, numquam dicta. Culpa illo, quis earum
                necessitatibus autem expedita exercitationem.
            </p>
        </div>
        <div class="icono">
            <img src="./build/img/icono2.svg" alt="Icono Precio" loading="lazy">
            <h3>Precio</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis est nulla inventore temporibus
                voluptates sit praesentium et ipsa quibusdam! Enim, numquam dicta. Culpa illo, quis earum
                necessitatibus autem expedita exercitationem.
            </p>
        </div>
        <div class="icono">
            <img src="./build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
            <h3>A Tiempo</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis est nulla inventore temporibus
                voluptates sit praesentium et ipsa quibusdam! Enim, numquam dicta. Culpa illo, quis earum
                necessitatibus autem expedita exercitationem.
            </p>
        </div>
    </div>
</section>

<?php incluirTemplates('footer'); ?>