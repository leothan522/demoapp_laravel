<section id="contact" class="contact" xmlns:wire="http://www.w3.org/1999/xhtml">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contacto</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6 info">
                        <i class="bx bx-map"></i>
                        <h4>DIRECCIÓN</h4>
                        <p>Edificio “Cilinia” piso 3,<br>San Juan de los Morros, Estado Guárico</p>
                    </div>
                    <div class="col-lg-6 info">
                        <i class="bx bx-phone"></i>
                        <h4>LLÁMENOS</h4>
                        <p>+58 424 338 6600<br>+58 424 905 7276</p>
                    </div>
                    <div class="col-lg-6 info">
                        <i class="bx bx-envelope"></i>
                        <h4>ENVÍANOS UN CORREO ELECTRÓNICO</h4>
                        <p>leothan522@gmail.com<br>frank.sierra@gmail.com</p>
                    </div>
                    <div class="col-lg-6 info">
                        <i class="bx bx-time-five"></i>
                        <h4>HORAS LABORALES</h4>
                        <p>Lun - Vie: 9AM a 5PM<br>Sabados: 9AM a 1PM</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <form wire:submit.prevent="sendMessage" {{--role="form"--}} class="php-email-form" {{--data-aos="fade-up"--}}>
                    <div class="form-group">
                        <input wire:model.defer="nombre" placeholder="Su Nombre" type="text" class="form-control" required>
                    </div>
                    <div class="form-group mt-3">
                        <input wire:model.defer="email" placeholder="Su Correo Electrónico" type="email" class="form-control" required>
                    </div>
                    <div class="form-group mt-3">
                        <input wire:model.defer="asunto" placeholder="Asunto" type="text" class="form-control" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea wire:model.defer="mensaje" placeholder="Mensaje" class="form-control" rows="5" required></textarea>
                    </div>
                    {{--<div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>--}}
                    <div class="my-3" wire:loading>
                        <i class='bx bx-refresh'></i> Cargando...
                    </div>
                    <div class="text-center"><button type="submit">Enviar mensaje</button></div>
                </form>
            </div>

        </div>

    </div>
</section>
