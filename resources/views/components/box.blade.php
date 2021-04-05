<div>
    <section class="section-box">
        <div class="container text-center">
            <h2 class="animate__animated animate__fadeInDown">Specialists Near You</h2>
            <p class="animate__animated animate__fadeInUp">At Key Assist, we are here to help you with any
                key-related problems you may have. See below
                to
                find out what services we offer.</p>

            <div class="row">

                @for ($i=0;$i<6;$i++) <div class="col-12 col-md-6 col-lg-4">
                    <div class="inner">
                        <img src="{{asset("images/house-locks.png")}}" width="100px" height="100px"
                            class="animate__animated animate__fadeIn" alt="Drive Less icon">
                        <h3 class="animate__animated animate__fadeInDown">House Locks</h3>
                        <hr>
                        <p class="animate__animated animate__fadeIn">If you have problems with any of the locks
                            in your home or you find yourself locked
                            out
                            of your house because a lock is damaged or broken, our specialist locksmiths can
                            help
                            you, no matter where you are in the UK and no matter what type of locks you have on
                            your
                            property.</p>
                        <div class="mx-auto text-center col-10">


                            <x-button-component className="btn-call-action animate__animated animate__fadeInUp"
                                link="tel:03301 072349" text="CALL US NOW"
                                icon='<i class="fa fa-arrow-circle-o-right animate__animated animate__fadeInRight" aria-hidden="true"></i>' />


                        </div>
                    </div>

            </div>
            @endfor

        </div>

</div>
</section>
</div>
