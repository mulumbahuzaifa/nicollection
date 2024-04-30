<div>
    <div class="smain-content main-content-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items breadcrumb">
                            <li class="trail-item trail-begin">
                                <a href="/">Home</a>
                            </li>
                            <li class="trail-item trail-end active">
                                Contact us
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="content-area content-contact col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="site-main">
                        <h3 class="custom_blog_title">Contact us</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-main-content">
            {{-- <div class="google-map"><div style="widths: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=makerere%20university+(Nicollection)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps trackers</a></iframe></div> --}}
            {{-- <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=makerere%20university+(Nicollection)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps devices</a></iframe></div> --}}
                <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=makerere%20university+(Nicollection)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-contact">
                            <div class="col-lg-8 no-padding">
                                <div class="form-message">
                                    <h2 class="title">
                                        Send us a Message!
                                    </h2>
                                    @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                    @endif
                                    <form action="#" wire:submit.prevent="sendMessage" class="stelina-contact-fom">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p>
                                                    <span class="form-label">Your Name *</span>
                                                    <span class="form-control-wrap your-name">
														<input title="your-name" type="text" name="your-name" size="40"
                                                               class="form-control form-control-name" wire:model="name" required>
													</span>
                                                </p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>
                                                    <span class="form-label">
														Your Email *
													</span>
                                                    <span class="form-control-wrap your-email">
														<input title="your-email" type="email" name="your-email" size="40"
                                                               class="form-control form-control-email" wire:model="email" required>
													</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p>
                                                    <span class="form-label">Phone</span>
                                                    <span class="form-control-wrap your-phone">
														<input title="your-phone" type="text" name="your-phone"
                                                               class="form-control form-control-phone" wire:model="phone" required>
													</span>
                                                </p>
                                            </div>
                                            {{-- <div class="col-sm-6">
                                                <p>
                                                    <span class="form-label">
														Company
													</span>
                                                    <span class="form-control-wrap your-company">
														<input title="your-company" type="text" name="your-company"
                                                               class="form-control your-company">
													</span>
                                                </p>
                                            </div> --}}
                                        </div>
                                        <p>
                                            <span class="form-label">
												Your Message
											</span>
                                            <span class="wpcf7-form-control-wrap your-message">
												<textarea title="your-message" name="your-message" cols="40" rows="9"
                                                          class="form-control your-textarea" wire:model="comment" required></textarea>
											</span>
                                        </p>
                                        <p>
                                            <input type="submit" value="SEND MESSAGE" class="form-control-submit button-submit">
                                        </p>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 no-padding">
                                <div class="form-contact-information">
                                    <form action="#" class="stelina-contact-info">
                                        <h2 class="title">
                                            Contact information
                                        </h2>
                                        <div class="info">
                                            <div class="item address">
                                                <span class="icon">

												</span>
                                                <span class="text">
													 Kampala - Uganda
												</span>
                                            </div>
                                            <div class="item phone">
                                                <span class="icon">

												</span>
                                                <span class="text">
													(+256) 755-849-551
												</span>
                                            </div>
                                            <div class="item email">
                                                <span class="icon">

												</span>
                                                <span class="text">
													nicollectionug.gmail.com
												</span>
                                            </div>
                                        </div>
                                        <div class="socials">
                                            <a href="#" class="social-item" target="_blank">
												<span class="icon fa fa-facebook">

												</span>
                                        </a>
                                            <a href="#" class="social-item" target="_blank">
												<span class="icon fa fa-twitter-square">

												</span>
                                        </a>
                                            <a href="#" class="social-item" target="_blank">
												<span class="icon fa fa-instagram">

												</span>
                                        </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
