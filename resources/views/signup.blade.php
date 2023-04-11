<x-app-layout>
    <!-- Inner Banner -->
    <x-sub-menu :fill="$fill"/>
    <!-- Inner Banner End -->

    <!-- Sign Up Area -->
    <div class="sign-up-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="user-all-form">
                        <div class="contact-form">
                            <div class="section-title text-center">
                                <span class="sp-color">S'inscrire</span>
                                <h2>Créer un compte !</h2>
                            </div>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your Username" placeholder="Username">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter email" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" type="password" name="password" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 text-center">
                                        <button type="submit" class="default-btn btn-bg-three border-radius-5">
                                            Sign Up
                                        </button>
                                    </div>

                                    <div class="col-12">
                                        <p class="account-desc">
                                            Vous avez déjà un compte ?
                                            <a href="sign-in.html">S'inscrire</a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign Up Area End -->

</x-app-layout>
