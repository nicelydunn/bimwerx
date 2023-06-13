<section class="mt-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <a href="<?php block_field( 'first-card-link' ); ?>" class="shadow-md border border-gray-200">
                <div class="aspect-[16/9]">
                    <img class="w-full h-full object-cover" src="<?php block_field( 'first-card-image' ); ?>" alt="<?php block_field( 'first-card-title' ); ?>">
                </div>
                <div class="px-6 mb-4">
                <h3 class="text-3xl font-semibold mt-4"><?php block_field( 'first-card-title' ); ?></h3>
                <p class="text-xs uppercase font-semibold"><?php block_field( 'first-card-subtitle' ); ?></p>
                <p class="mt-4"><?php block_field( 'first-card-text' ); ?></p>
                </div>
            </a>
            <a href="<?php block_field( 'second-card-link' ); ?>" class="shadow-md border border-gray-200">
                <div class="aspect-[16/9]">
                    <img class="w-full h-full object-cover" src="<?php block_field( 'second-card-image' ); ?>" alt="<?php block_field( 'second-card-title' ); ?>">
                </div>
                <div class="px-6 mb-4">
                <h3 class="text-3xl font-semibold mt-4"><?php block_field( 'second-card-title' ); ?></h3>
                <p class="text-xs uppercase font-semibold"><?php block_field( 'second-card-subtitle' ); ?></p>
                <p class="mt-4"><?php block_field( 'second-card-text' ); ?></p>
                </div>
            </a>
            <a href="<?php block_field( 'third-card-link' ); ?>" class="shadow-md border border-gray-200">
                <div class="aspect-[16/9]">
                    <img class="w-full h-full object-cover" src="<?php block_field( 'third-card-image' ); ?>" alt="<?php block_field( 'third-card-title' ); ?>">
                </div>
                <div class="px-6 mb-4">
                <h3 class="text-3xl font-semibold mt-4"><?php block_field( 'third-card-title' ); ?></h3>
                <p class="text-xs uppercase font-semibold"><?php block_field( 'third-card-subtitle' ); ?></p>
                <p class="mt-4"><?php block_field( 'third-card-text' ); ?></p>
                </div>
            </a>
        </div>
    </div>
</section>