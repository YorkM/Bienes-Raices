<?php

require 'includes/funciones.php';
incluirTemplates('header');

?>

<main class="contenedor seccion contenido-centrado">
    <h1>Casa de Lujo con Alberca</h1>
    <picture>
        <source srcset="build/img/destacada2.webp" type="image/webp">
        <source srcset="build/img/destacada2.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen destacada">
    </picture>
    <div class="resumen-propiedad">
        <p class="informacion-meta">Escrito el: <span>2026-01-27</span> por el: <span>Admin</span></p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum dignissimos doloremque vero eius, quaerat
            reiciendis earum in minima et veritatis nemo consequuntur delectus provident commodi animi tempora quod
            tempore,
            repellendus repudiandae, iure id vel. Molestiae, eos numquam beatae vel, eaque aliquid doloribus sunt
            illum
            impedit explicabo libero, maiores unde in!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum dignissimos doloremque vero eius, quaerat
            reiciendis earum in minima et veritatis nemo consequuntur delectus provident commodi animi tempora quod
            tempore,
            repellendus repudiandae, iure id vel.
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum dignissimos doloremque vero eius, quaerat
            reiciendis earum in minima et veritatis nemo consequuntur delectus provident commodi animi tempora quod
            tempore.
        </p>
    </div>
</main>

<?php incluirTemplates('footer'); ?>