<?= $this->Element('Page/breadcrumbs') ?>
<section>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0irDdchNMM2Gnz3aGqfTuPm6zKvImS64&libraries=places&callback=myMap"></script>
    <div class="container">
    <div id="googleMap" style="width:100%;height:400px;"></div>

        <script>
        function myMap() {
        var mapProp= {
        center:new google.maps.LatLng(51.508742,-0.120850),
        zoom:5,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
        }
        </script>
        <div class="row">
            <div class="col-lg-8">
                <!-- post -->
                <div class="post post-single">
                    <h2 class="post-title">Injustice 2 Launch Trailer Highlights Customization and More</h2>
                    <div class="post-meta">
                        <span><i class="fa fa-clock-o"></i> May 30, 2017 by <a href="profile.html">Venom</a></span>
                        <span><a href="#comments"><i class="fa fa-comment-o"></i> 9 comments</a></span>
                    </div>
                    <div class="post-thumbnail">
                        <img src="<?= $this->Url->image('blog/blog-md.jpg') ?>" alt="Injustice 2 Launch Trailer Highlights Customization and More">
        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas elit ante, congue sodales orci ac, ultrices pretium lectus. Maecenas lorem enim, dignissim sed lacus non, feugiat iaculis lorem. Integer eu aliquet diam. Suspendisse fringilla
                            porta justo, vel tempus risus. Ut et enim sit amet libero fermentum aliquam et ut sem.</p>
                        <h5>The absolute lowest price we've ever seen</h5>
                        <p>Dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
                        <blockquote class="blockquote">
                            <p>“This is a pretty fast price drop for a game that released last month and has garnered some respectable ratings.”</p>
                        </blockquote>
                        <p>Maecenas viverra, mi non consectetur scelerisque, erat enim interdum erat, imperdiet elementum sapien metus a odio. Sed sapien sapien, tincidunt quis fringilla vel, eleifend tincidunt nunc. Fusce dapibus leo vestibulum, scelerisque metus nec,
                            imperdiet tortor.usce et urna vel neque fermentum consectetur. Donec vel convallis elit. Nulla et odio a magna aliquam varius a vel ex. Cras sed dolor sapien. Sed sit amet interdum sapien, ut laoreet dui. Fusce vulputate consequat mi et
                            rutrum.</p>
                    </div>

                    <div class="post-actions">
                        <div class="post-tags">
                            <a href="#">#dlc</a>
                            <a href="#">#blood and wine</a>
                            <a href="#">#witcher 3</a>
                            <a href="#">#rpg</a>
                            <a href="#">#geralt</a>
                        </div>
                        <div class="social-share">
                            <a class="btn btn-social btn-facebook btn-circle" href="#" data-toggle="tooltip" title="Share on Facebook" data-placement="bottom" role="button"><i class="fa fa-facebook"></i></a>
                            <span>5.345k</span>
                            <a class="btn btn-social btn-twitter btn-circle" href="#" data-toggle="tooltip" title="Share on Twitter" data-placement="bottom" role="button"><i class="fa fa-twitter"></i></a>
                            <a class="btn btn-social btn-google-plus btn-circle" href="#" data-toggle="tooltip" title="Share on Google Plus" data-placement="bottom" role="button"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                    <div class="post-related">
                        <h6 class="subtitle">Related Posts</h6>
                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <div class="card card-widget">
                                    <div class="card-img">
                                        <a href="blog-post-carousel.html"><img src="<?= $this->Url->image('blog/blog-related-1.jpg') ?>" alt="Injustice 2 Story Mode Superman Ending"></a>
                                    </div>
                                    <div class="card-block">
                                        <h4 class="card-title"><a href="blog-post-carousel.html">Injustice 2 Story Mode Clark Ending Scene</a></h4>
                                        <div class="card-meta"><span><i class="fa fa-clock-o"></i> July 21, 2017</span></div>
                                        <p>Injustice 2's Story Mode features hours of cinematic cutscenes.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="card card-widget">
                                    <div class="card-img">
                                        <a href="blog-post-disqus.html"><img src="<?= $this->Url->image('blog/blog-related-3.jpg')?>" alt="An Extra Week Of Double Rewards In GTA V"></a>
                                    </div>
                                    <div class="card-block">
                                        <h4 class="card-title"><a href="blog-post-disqus.html">An Extra Week Of Double Rewards In GTA V</a></h4>
                                        <div class="card-meta"><span><i class="fa fa-clock-o"></i> June 18, 2017</span></div>
                                        <p>Grand Theft Auto V players are getting an extra week to earn.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="card card-widget">
                                    <div class="card-img">
                                        <a href="blog-post-hero.html"><img src="<?= $this->Url->image('blog/blog-related-4.jpg')?>" alt="BioShock: The Collection PC System Requirements Revealed"></a>
                                    </div>
                                    <div class="card-block">
                                        <h4 class="card-title"><a href="blog-post-hero.html">BioShock: The Collection PC System Requirements Revealed</a></h4>
                                        <div class="card-meta"><span><i class="fa fa-clock-o"></i> June 09, 2017</span></div>
                                        <p>2K revealed the PC system requirements for BioShock.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="comments" class="comments anchor">
                        <div class="comments-header">
                            <h5><i class="fa fa-comment-o m-r-5"></i> Comments (5)</h5>
                            <div class="dropdown float-right">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Sorted by Best <span class="caret"></span></button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item active" href="#">Best</a>
                                    <a class="dropdown-item" href="#">Latest</a>
                                    <a class="dropdown-item" href="#">Oldest</a>
                                    <a class="dropdown-item" href="#">Random</a>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary text-left m-t-15 btn-block" href="#comments" role="button"><i class="fa fa-spinner fa-pulse m-r-5"></i> Load more 4 comments</a>
                        <ul>
                            <li>
                                <div class="comment">
                                    <div class="comment-avatar">
                                        <a href="profile.html"><img src="<?= $this->Url->image('user/user-1.jpg')?>" alt=""></a>
                                        <a class="badge badge-primary" href="profile.html" data-toggle="tooltip" data-placement="bottom" title="Add as friend"><i class="fa fa-user-plus"></i></a>
                                    </div>
                                    <div class="comment-post">
                                        <div class="comment-header">
                                            <div class="comment-author">
                                                <h5><a href="profile.html">Venom</a></h5>
                                                <span>Member</span>
                                            </div>
                                            <div class="comment-action">
                                                <div class="dropdown float-right">
                                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Moderate</a>
                                                        <a class="dropdown-item" href="#">Embed</a>
                                                        <a class="dropdown-item" href="#">Report</a>
                                                        <a class="dropdown-item" href="#">Mark as spam</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Awesome these are news we were looking for, thanks yakuthemes best thing i've heard today, but more game modes are welcome.</p>
                                        <p>Maecenas at tristique dolor, nec condimentum tellus. Fusce in aliquet augue. Sed non rhoncus ante, sed posuere neque. Suspendisse ac maximus arcu, at ornare nulla. Sed metus tellus, lobortis ut dignissim sed, consequat sit amet mi.</p>
                                        <div class="comment-footer">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-heart-o"></i> Like</a></li>
                                                <li><a href="#"><i class="icon-reply"></i> Reply</a></li>
                                                <li><a href="#"><i class="fa fa-clock-o"></i> 3 hours ago</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <li>
                                        <div class="comment">
                                            <div class="comment-avatar"><img src="<?= $this->Url->image('user/user-2.jpg')?>" alt=""></div>
                                                <div class="comment-post">
                                                    <div class="comment-header">
                                                        <div class="comment-author">
                                                            <h5><a href="profile.html">Elizabeth</a></h5>
                                                            <span>Member</span>
                                                        </div>
                                                        <div class="comment-action">
                                                            <div class="dropdown float-right">
                                                                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Moderate</a>
                                                                    <a class="dropdown-item" href="#">Embed</a>
                                                                    <a class="dropdown-item" href="#">Report</a>
                                                                    <a class="dropdown-item" href="#">Mark as spam</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p>Please also consider replacing Battles with Blast (in Skirmish): it can use the same AI and would be much more fun (tokens are annoying and maps are limited)!</p>
                                                    <div class="comment-footer">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-heart-o"></i> Like</a></li>
                                                            <li><a href="#"><i class="icon-reply"></i> Reply</a></li>
                                                            <li><a href="#"><i class="fa fa-clock-o"></i> 24 minutes ago</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="comment">
                                    <div class="comment-avatar"><a href="profile.html"><img src="<?= $this->Url->image('user/user-3.jpg')?>" alt=""></a></div>
                                    <div class="comment-post">
                                        <div class="comment-header">
                                            <div class="comment-author">
                                                <h5>
                                                    <a href="profile.html">Clark</a>
                                                    <span class="badge badge-outline-primary">Admin</span>
                                                </h5>
                                            </div>
                                            <div class="comment-action">
                                                <div class="comment-action">
                                                    <div class="dropdown float-right">
                                                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Moderate</a>
                                                            <a class="dropdown-item" href="#">Embed</a>
                                                            <a class="dropdown-item" href="#">Report</a>
                                                            <a class="dropdown-item" href="#">Mark as spam</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Thank you this news and I can't wait for offline content to drop next week. Aliquam a tortor at erat pulvinar volutpat eget sit amet libero. Quisque pretium lacus augue. Integer lobortis ligula non eleifend hendrerit. Cras venenatis
                                            laoreet risus, lacinia consectetur nunc scelerisque sed.</p>
                                        <div class="comment-footer">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-heart-o"></i> Like</a></li>
                                                <li><a href="#"><i class="icon-reply"></i> Reply</a></li>
                                                <li><a href="#"><i class="fa fa-clock-o"></i> June 16, 2017 8:13pm</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="comment">
                                    <div class="comment-avatar"><a href="profile.html"><img src="<?= $this->Url->image('user/user-4.jpg')?>" alt=""></a></div>
                                    <div class="comment-post">
                                        <div class="comment-header">
                                            <div class="comment-author">
                                                <h5><a href="profile.html">Strange</a></h5>
                                                <span>Member</span>
                                            </div>
                                            <div class="comment-action">
                                                <div class="comment-action">
                                                    <div class="dropdown float-right">
                                                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Moderate</a>
                                                            <a class="dropdown-item" href="#">Embed</a>
                                                            <a class="dropdown-item" href="#">Report</a>
                                                            <a class="dropdown-item" href="#">Mark as spam</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p>To all those reading who have not yet bought this game yet, and are a fan of Uncharted - Don't listen to the nay-sayers on these comments, this game is simply amazing!</p>
                                        <div class="comment-footer">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-heart-o"></i> Like</a></li>
                                                <li><a href="#"><i class="icon-reply"></i> Reply</a></li>
                                                <li><a href="#"><i class="fa fa-clock-o"></i> June 11, 2017 14:26am</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <form>
                            <h5>Leave a comment</h5>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" placeholder="Your Comment"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Comment</button>
                        </form>
                    </div>
                </div>
                <!-- sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar">
                        <!-- widget search -->
                        <div class="widget widget-search">
                            <form>
                                <div class="form-group input-icon-right">
                                    <i class="fa fa-search"></i>
                                    <input type="text" class="form-control" placeholder="Type to search...">
            </div>
                            </form>
                        </div>

                        <!-- widget post  -->
                        <div class="widget widget-post">
                            <h5 class="widget-title">Recommends</h5>
                            <a href="blog-post.html"><img src="<?= $this->Url->image('https://i1.ytimg.com/vi/4BLkEJu9szM/mqdefault.jpg')?>" alt=""></a>
                            <h4><a href="blog-post.html">Titanfall 2's Trophies Only Have 3 Earned Through Multiplayer</a></h4>
                            <span><i class="fa fa-clock-o"></i> June 12, 2017</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel neque sed ante facilisis efficitur.</p>
                        </div>

                        <!-- widget facebook -->
                        <div class="widget">
                            <h5 class="widget-title">Follow Us on Facebook</h5>
                            <div id="fb-root"></div>

                            <div class="fb-page" data-href="https://www.facebook.com/yakuthemes" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
                        </div>

                        <!-- widget post -->
                        <div class="widget widget-post">
                            <h5 class="widget-title">Popular on Gameforest</h5>
                            <a href="blog-post.html"><img src="<?= $this->Url->image('blog/blog-widget-popular-1.jpg')?>" alt=""></a>
                            <h4><a href="blog-post.html">Red Dead Redemption Being Modded Into GTA5 Multiplayer</a></h4>
                            <span><i class="fa fa-clock-o"></i> June 16, 2017</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel neque sed anter.</p>
                            <ul class="widget-list">
                                <li>
                                    <div class="widget-img"><a href="blog-post.html"><img src="<?= $this->Url->image('blog/blog-widget-1.jpg')?>" alt=""></a></div>
                                    <div>
                                        <h4><a href="blog-post.html">Dead Island 2 and Escape Impressions</a></h4>
                                        <span>July 16, 2017</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget-img"><a href="blog-post.html"><img src="<?= $this->Url->image('blog/blog-widget-2.jpg')?>" alt=""></a></div>
                                    <div>
                                        <h4><a href="blog-post.html">How to Finish Mafia 3 With All of Your Underbosses</a></h4>
                                        <span>June 29, 2017</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget-img"><a href="blog-post.html"><img src="<?= $this->Url->image('blog/blog-widget-3.jpg')?>" alt=""></a></div>
                                    <div>
                                        <h4><a href="blog-post.html">Spider-Man Spin-Off, Venom, Gets Release Date</a></h4>
                                        <span>June 15, 2017</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget-img"><a href="blog-post.html"><img src="<?= $this->Url->image('blog/blog-widget-4.jpg')?>" alt=""></a></div>
                                    <div>
                                        <h4><a href="blog-post.html">Is Ghost Recon: Wildlands Worth Your Time?</a></h4>
                                        <span>June 13, 2017</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- widget newsletter -->
                        <div class="widget widget-newsletter">
                            <div class="widget-block" style="background-image: url('<?= $this->Url->image('widget/widget-newsletter.jpg') ?>')">
                                <div class="overlay"></div>
                                <form>
                                    <p>Get notification when new games are available on gameforest.</p>
                                    <div class="form-group input-icon-right">
                                        <input type="email" class="form-control" placeholder="Email address...">
                                    </div>
                                        <button type="submit" class="btn btn-primary btn-block">Subscribe</button>
                                </form>
                            </div>
                        </div>

                        <!-- widget tabs -->
                        <div class="widget widget-tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"><a class="nav-link active" href="#comment" aria-controls="comments" role="tab" data-toggle="tab"><i class="fa fa-comment-o"></i> Comments</a></li>
                                <li class="nav-item"><a class="nav-link" href="#popular" aria-controls="popular" role="tab" data-toggle="tab">Popular</a></li>
                                <li class="nav-item"><a class="nav-link" href="#recent" aria-controls="recent" role="tab" data-toggle="tab">Recent</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="comment">
                                    <ul class="widget-comments">
                                        <li>
                                            <div><a href="profile.html"><img src="<?= $this->Url->image('user/user-2.jpg')?>" alt=""></a></div>
                                            <div><a href="blog-post.html#comments"><b>Elizabeth:</b> It would have taken a ridiculous amount of careful precise actions.</a></div>
                                        </li>
                                        <li>
                                            <div><a href="profile.html"><img src="<?= $this->Url->image('user/user-3.jpg')?>" alt=""></a></div>
                                            <div><a href="blog-post-disqus.html#comments"><b>Clark:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur risque.</a></div>
                                        </li>
                                        <li>
                                            <div><a href="profile.html"><img src="<?= $this->Url->image('user/user-1.jpg')?>" alt=""></a></div>
                                            <div><a href="blog-post-video.html#comments"><b>Venom:</b> Practically no verticality, which on levels like The Spire (Geonosis) incredible.</a></div>
                                        </li>
                                        <li>
                                            <div><a href="profile.html"><img src="<?= $this->Url->image('user/user-3.jpg')?>" alt=""></a></div>
                                            <div><a href="blog-post-disqus.html#comments"><b>Clark:</b> I'm low level at this point and have almost nothing unlocked, and veteran players have an unfair advantage over me thanks.</a></div>
                                        </li>
                                        <li>
                                            <div><a href="profile.html"><img src="<?= $this->Url->image('user/user-5.jpg')?>" alt=""></a></div>
                                            <div><a href="blog-post-disqus.html#comments"><b>Trevor:</b> A lot of people would have stopped playing now if it wasn't for the online stuff!</a></div>
                                        </li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="popular">
                                    <div class="widget-post">
                                        <ul class="widget-list">
                                            <li>
                                                <img src="<?= $this->Url->image('https://i1.ytimg.com/vi/B6qY-P4eo1Q/mqdefault.jpg')?>" alt="">
                                                <h4><a href="blog-post.html">How to Finish Mafia 3 With All of Your Underbosses</a></h4>
                                                <span><i class="fa fa-clock-o"></i> July 12, 2017</span>
                                                <span>19 comments</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel neque sed anter.</p>
                                            </li>
                                            <li>
                                                <h4><a href="blog-post.html">Uncharted: The Lost Legacy's Demo</a></h4>
                                                <span>June 28, 2017</span>
                                                <span>41 comments</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel neque sed anter.</p>
                                            </li>
                                            <li>
                                                <h4><a href="blog-post.html">Mafia III Stones Unturned DLC Launch Trailer</a></h4>
                                                <span>June 17, 2017</span>
                                                <span>7 comments</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel neque sed anter.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="recent">
                                    <div class="widget-post">
                                        <ul class="widget-list">
                                            <li>
                                                <img src="<?= $this->Url->image('https://i1.ytimg.com/vi/ckUrcdnWZ2g/mqdefault.jpg')?>" alt="">
                                                <h4><a href="blog-post.html">Free Mass Effect: Andromeda Trial Now Available On All Platforms</a></h4>
                                                <span><i class="fa fa-clock-o"></i> July 12, 2017</span>
                                                <span>76 comments</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel neque sed anter.</p>
                                            </li>
                                            <li>
                                                <h4><a href="blog-post.html">GTA 5 Online Players Find Secret Alien Mission</a></h4>
                                                <span>June 23, 2017</span>
                                                <span>34 comments</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel neque sed anter.</p>
                                            </li>
                                            <li>
                                                <h4><a href="blog-post.html">Mafia III Stones Unturned DLC Launch Trailer</a></h4>
                                                <span>June 17, 2017</span>
                                                <span>7 comments</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel neque sed anter.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>