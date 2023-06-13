
        <section>
            <div class="flex pt-[5.25rem] pb-8 justify-center bg-cover bg-center bg-no-repeat h-auto w-full relative" style="background-image: url('<?php block_field( 'background-image' ); ?>');">
                <div class="absolute h-full w-full top-0 left-0" style="background: rgba(0,0,0,0.4);"></div>
                <div class=" max-w-[550px] mx-4 py-8 px-4 animate__animated animate__fadeInDown animate__delay animate__slow" style="background: rgba(255,255,255,0.9);">
                    <p class="flex justify-center"><img class="w-auto h-auto object-contain" src="<?php block_field( 'icon' ); ?>" alt=""></p>
                    <h1 class="text-center font-semibold text-5xl mt-4"><?php block_field( 'title' ); ?></h1>
                    <p class="text-center text-xl mt-4"><?php block_field( 'text' ); ?></p>
                    <div class="flex justify-center gap-4 mt-8">
                        <a href="<?php block_field( 'first-button-link' ); ?>" class="btn btn-primary"><?php block_field( 'first-button-title' ); ?></a>
                        <?php if( block_value( 'second-button-title' ) ) { ?>
                            <a href="<?php block_field( 'second-button-link' ); ?>" class="btn btn-secondary"><?php block_field( 'second-button-title' ); ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    