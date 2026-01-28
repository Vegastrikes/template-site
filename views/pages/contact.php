<?php

function get_content() {
    ob_start(); ?>
    
    <section class="bg-gray-100 pb-16">
        <div class="relative">
            <img src="/resources/images/banner_contact_us.jpg" alt="<?php echo(dict('banner-background'))?>" class="w-full h-48 object-cover" />
            <div class="absolute inset-0 bg-black/50 flex items-center justify-center text-white text-center p-6">
                <h1 class="text-6xl lg:text-3xl font-bold"><?php dict('contact')?></h1>
            </div>
        </div>

        <!-- Contact Info Priority -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-16 text-center p-16">
            <div class="p-6 bg-gray-50 rounded-lg shadow hover:shadow-md transition border borber-blue-900">
                <h2 class="text-6xl lg:text-xl font-semibold mb-2 text-blue-900"><?php dict('email')?></h2>
                <a href="mailto:company@engineering.com" class="text-gray-600 text-5xl lg:text-xl">company@engineering.com</a>
            </div>
            <div class="p-6 bg-gray-50 rounded-lg shadow hover:shadow-md transition border borber-blue-900">
                <h2 class="text-6xl lg:text-xl font-semibold mb-2 text-blue-900"><?php dict('working-hours')?></h2>
                <p class="text-5xl lg:text-lg leading-relaxed text-gray-600">
                    <?php dict('work-days')?>: 9:00 – 17:00<br />
                </p>
            </div>
            <div class="p-6 bg-gray-50 rounded-lg shadow hover:shadow-md transition border borber-blue-900">
                <h2 class="text-6xl lg:text-xl font-semibold mb-2 text-blue-900"><?php dict('phone')?></h2>
                <a href="tel:+900001112233" class="text-gray-600 text-5xl lg:text-lg">+90 000 111 2233</a>
            </div>
        </div>

        <!-- Addresses with Google Maps -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 px-16">
            <!-- Address 1 -->
            <div class="bg-gray-50 rounded-lg shadow p-6 border borber-blue-900">
                <h3 class="text-5xl lg:text-2xl font-semibold mb-4 text-blue-900"><?php dict('address-1')?></h3>
                <address class="not-italic text-gray-700 mb-6 leading-relaxed text-4xl lg:text-lg">
                    Ankara<br />
                    Ankara<br />
                    Ankara
                </address>
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195884.30043066034!2d32.5979562160569!3d39.903523298090114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d347d520732db1%3A0xbdc57b0c0842b8d!2sAnkara!5e0!3m2!1sen!2str!4v1769518476520!5m2!1sen!2str"
                    class="w-full h-72"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <!-- Address 2 -->
            <div class="bg-gray-50 rounded-lg shadow p-6 border borber-blue-900">
                <h3 class="text-5xl lg:text-2xl font-semibold mb-4 text-blue-900"><?php dict('address-2')?></h3>
                <address class="not-italic text-gray-700 mb-6 leading-relaxed text-4xl lg:text-lg">
                    Eskişehir<br />
                    Eskişehir<br />
                    Eskişehir
                </address>
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <iframe
                    class="w-full h-72"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98139.24318907374!2d30.46241362335565!3d39.765445822989314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cc3e08220c0e5f%3A0xbc89395938049a08!2sEski%C5%9Fehir!5e0!3m2!1sen!2str!4v1769518526694!5m2!1sen!2str"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
    
    <?php
    return ob_get_clean();
}

?>