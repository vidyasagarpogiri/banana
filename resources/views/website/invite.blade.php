@if($guests_invite)
<div id="qbootstrap-started" class="qbootstrap-bg" data-section="rsvp" style="background-image: url(website/images/invited.jpg);background-position: center;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-12 text-center section-heading svg-sm colored">
                    <img src="/website/images/flaticon/svg/005-two.svg" class="svg" alt="">
                    <h2>You Are Invited</h2>
                    <div class="row">
                    <div class="col-md-10 col-md-offset-1 subtext">
                        <h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="row animate-box">
            <div class="col-md-10 col-md-offset-1">
                @if(!(count($guests_invite) > 1))
                <form class="form-inline">
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label for="name" class="sr-only">Name</label>
                            <input type="name" class="form-control" id="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <button type="submit" class="btn btn-default btn-block">I am Attending</button>
                    </div>
                </form>
                @else
                <form class="form-inline">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="name" class="sr-only">Name</label>
                            <input type="name" class="form-control" id="name" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="name" class="sr-only">Name</label>
                            <input type="name" class="form-control" id="name" placeholder="Your Plus One Name">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Your Plus One Surname">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <h3 class="white">Please Note: If you leave your plus one's name blank, we will assume that you are not bringing a plus one.</h3>
                    </div>
                    <div class="clearfix"></div><br>
                    <div class="col-md-6 col-md-offset-3 col-sm-12">
                        <button type="submit" class="btn btn-default btn-block">We are Attending</button>
                    </div>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>
@else
<div id="qbootstrap-started" class="qbootstrap-bg" data-section="rsvp" style="background-image: url(website/images/contact_us.jpg);background-position: center;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-12 text-center section-heading svg-sm colored">
                    <img src="/website/images/flaticon/svg/005-two.svg" class="svg" alt="">
                    <h2>Contact Us</h2>
                    <div class="row">
                    <div class="col-md-10 col-md-offset-1 subtext">
                        <h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="row animate-box">
            <div class="col-md-10 col-md-offset-1">
                <form class="form-inline">
                    
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="name" class="sr-only">Name</label>
                            <input type="name" class="form-control" id="name" placeholder="Name" name="name">
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                        </div>
                    </div>
                    
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="email" class="sr-only">Message</label>
                            <textarea class="form-control" placeholder="Message" name="message" rows="6"></textarea>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-md-offset-8 col-sm-12">
                        <button type="submit" class="btn btn-default btn-block">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endif

<div id="qbootstrap-started" class="qbootstrap-bg" data-section="rsvp" style="background-image: url(website/images/friday.jpg);background-position: center;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-12 text-center section-heading svg-sm colored">
                    <img src="/website/images/flaticon/svg/005-two.svg" class="svg" alt="">
                    <h2>Friday</h2>
                    <div class="row">
                    <div class="col-md-10 col-md-offset-1 subtext">
                        <h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="row animate-box">
            <div class="col-md-10 col-md-offset-1">
                <form class="form-inline">
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label for="name" class="sr-only">Name</label>
                            <input type="name" class="form-control" id="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <button type="submit" class="btn btn-default btn-block">I am Attending</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="qbootstrap-started" class="qbootstrap-bg" data-section="rsvp" style="background-image: url(website/images/sunday.jpg);background-position: center;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-12 text-center section-heading svg-sm colored">
                    <img src="/website/images/flaticon/svg/005-two.svg" class="svg" alt="">
                    <h2>Sunday</h2>
                    <div class="row">
                    <div class="col-md-10 col-md-offset-1 subtext">
                        <h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="row animate-box">
            <div class="col-md-10 col-md-offset-1">
                <form class="form-inline">
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label for="name" class="sr-only">Name</label>
                            <input type="name" class="form-control" id="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <button type="submit" class="btn btn-default btn-block">I am Attending</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>