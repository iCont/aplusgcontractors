<footer>
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="upper_white">Contact Us</h2>
                </div>
                <div class="separador"></div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <p class="p_white text-center">
                        Thanks for Contacting us!! We are very excited to help you with your project. <br>
                        We will reach out
                        to you shortly.
                    </p>
                    <div class="row text-center mt-5">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="row">
                                <div class="col-12">
                                    <p class="txt_white txt_bold"> Javier Contreras</p>
                                </div>
                                <div class="col-12"><span class="txt_white">Owner</span></div>
                                <div class="col-12"> <a href="tel:8018376060"
                                        style="text-decoration:none; color:white;">801-837-6060</a></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="row">
                                <div class="col-12">
                                    <p class="txt_white txt_bold"> Mike Mendoza</p>
                                </div>
                                <div class="col-12"><span class="txt_white">General Manager</span></div>
                                <div class="col-12"> <a href="tel:8018922342"
                                        style="text-decoration:none; color:white;">801-892-2342</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center">
                    {{-- form --}}
                    <form class="form-content" action="" method="POST">
                        @method('PUT')
                        @csrf
                        <input type="text" name="name" class="fields" value=""
                            placeholder="Name">
                        <br />
                        <br />
                        <input type="tel" name="phone" class="fields" value=""
                            placeholder="Phone">
                        <br />
                        <br />
                        <input type="email" name="mail" class="fields" value=""
                            placeholder="Email">
                        <br />
                        <br />
                        <select name="select" class="fields">
                            <option  selected="selected"  value="0">Select service</option>
                            <option value="1">Basements</option>
                            <option value="2">Cabinetry</option>
                            <option value="3">Drywall</option>
                            <option value="4">Custom Paint & Textures</option>
                            <option value="5">Flooring</option>
                            <option value="6">Framing & Carpentry</option>
                            <option value="7">Masonery</option>
                            <option value="8">New Construction</option>
                            <option value="9">Remodels & Restorations</option>
                            <option value="10">Siding</option>
                            <option value="11">Tile</option>
                          </select>
                        <br />
                        <button class="btn_aplus">Send</button>
                </div>
                </section>
                </form>
                {{-- form --}}
            </div>
            <div class="separador"></div>
            <div class="col-12 text-center">
                <img id="logowhite" src="{{ asset('img/logowhite.png') }}" alt="logo aplus white">
                <p class="text-muted text-center" style="font-size:13px; color:white !important;">&copy;A Plus General
                    Contractors <?php echo date('Y'); ?></p>
            </div>
        </div>
    </div>
    </div>
</footer>
