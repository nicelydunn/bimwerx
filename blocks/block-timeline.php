<section class="mt-16 px-4">
    <div class="container mx-auto">
        <div class="grid-timeline">

            <div id="" class="step-1-text pl-6 md:pl-0 pr-6 mb-6">
                <p class="text-sm uppercase text-gray-light md:text-right font-semibold">Step 1</p>
                <h4 class="font-semibold text-orange-light text-3xl md:text-right"><?php block_field( 'step-1-title' ); ?></h4>
                <div class="mt-4 md:text-right"><?php block_field( 'step-1-text' ); ?></div>
            </div>
            <div class="step-1-number steps">
                <div class="flex justify-center items-center bg-orange-light text-white text-4xl font-semibold aspect-[1/1]">1</div>
            </div>
            <div class="step-1-blank"></div>
            <div class="step-2-blank"></div>

            <?php if( block_value( 'step-2-title' ) ) { ?>
                <div class="step-2-number steps">
                    <div class="flex justify-center items-center bg-orange-light text-white text-4xl font-semibold aspect-[1/1]">2</div>
                </div>
                <div class="step-2-text pl-6 mb-6">
                <p class="text-sm uppercase text-gray-light font-semibold">Step 2</p>
                    <h4 class="font-semibold text-orange-light text-3xl"><?php block_field( 'step-2-title' ); ?></h4>
                    <div class="mt-4"><?php block_field( 'step-2-text' ); ?></div>
                </div>
            <?php } ?>

            <?php if( block_value( 'step-3-title' ) ) { ?>
                <div class="step-3-text pl-6 md:pl-0 pr-6 mb-6">
                    <p class="text-sm uppercase text-gray-light md:text-right font-semibold">Step 3</p>
                    <h4 class="font-semibold text-orange-light text-3xl md:text-right"><?php block_field( 'step-3-title' ); ?></h4>
                    <div class="mt-4 md:text-right"><?php block_field( 'step-3-text' ); ?></div>
                </div>
                <div class="step-3-number steps">
                    <div class="flex justify-center items-center bg-orange-light text-white text-4xl font-semibold aspect-[1/1]">3</div>
                </div>
                <div class="step-3-blank"></div>
            <?php } ?>

            <?php if( block_value( 'step-4-title' ) ) { ?>
                <div class="step-4-blank"></div>
                <div class="step-4-number steps">
                    <div class="flex justify-center items-center bg-orange-light text-white text-4xl font-semibold aspect-[1/1]">4</div>
                </div>
                <div class="step-4-text pl-6 mb-6">
                <p class="text-sm uppercase text-gray-light font-semibold">Step 4</p>
                    <h4 class="font-semibold text-orange-light text-3xl"><?php block_field( 'step-4-title' ); ?></h4>
                    <div class="mt-4"><?php block_field( 'step-4-text' ); ?></div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>