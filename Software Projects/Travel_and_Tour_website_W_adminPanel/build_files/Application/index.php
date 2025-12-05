
<!--header-->
<?php $this->load->view('layout/header');?>



<!--main content-->
<div class="content">
            <div class="cont_bx">
                <h1> The Right Destination For You and Your Family</h1>
                <p> Safe, Reliable, Fun and Exciting Journeys Ahead</p>
                <button>Start Your Search</button>
            </div>
            <div class="trip_bx">
                <div class="search_bx">
                    <div class="card">
                        <h4>Location <i class="bi bi-caret-down-square-fill"></i></h4>
                        <input type="text" placeholder="Enter your destination" id="destination">
                    </div>
                    <div class="card">
                        <h4>Start Date <i class="bi bi-caret-down-square-fill"></i></h4>
                        <input type="date" id="startDate">
                    </div>
                    <div class="card">
                        <h4>End Date <i class="bi bi-caret-down-square-fill"></i></h4>
                        <input type="date" id="endDate">
                    </div>
                    <div class="card">
                        <h4>People <i class="bi bi-caret-down-square-fill"></i></h4>
                        <input type="number" placeholder="How many people?" id="people">
                    </div>
                    <input type="button" value="Explore Now" id="submit">
                </div>

<script>
   let destination = document.getElementById('destination'); // fixed typo
   let startDate = document.getElementById('startDate'); 
   let endDate = document.getElementById('endDate'); 
   let people = document.getElementById('people'); 
   let submit = document.getElementById('submit');
   
   submit.addEventListener('click', ()=> {
    if(destination.value != '' && startDate.value != '' && endDate.value != '' && people.value != ''){
        // Create and trigger the navigation
        window.location.href = `<?php echo base_url('Welcome/result');?>?${destination.value}?${startDate.value}?${endDate.value}?${people.value}`;
    } 
    else {
        alert('Please fill all inputs'); // fixed typo in message
    }
  });
</script>



                <div class="travel_bx">
                    <h4>Countries To Travel</h4>
                    <div class="cards">

                        <div class="card">
                            <h3>GREECE<img src="<?= base_url('assets/icon/greece.jpeg');?>"></h3>
                            <img src="<?= base_url('assets/images/greece_view.jpg');?>">
                            <div class="btn_city">
                                <a href=" "> Read Now</a>
                                <h5>Santorini <br> <span>$560</span></h5>
                            </div>
                        </div>
                        <div class="card">
                            <h3>CANADA<img
                                    src="<?= base_url('assets/icon/Canada announces 24 scholars recruited worldwide, many from top American universities.jpeg');?>">
                            </h3>
                            <img src="<?= base_url('assets/images/canada-spot.jpg');?>">
                            <div class="btn_city">
                                <a href=" "> Read Now</a>
                                <h5>Mountain Lake <br> <span>$600</span></h5>
                            </div>
                        </div>
                        <div class="card">
                            <h3>UNITED KINGDOM<img
                                    src="<?= base_url('assets/icon/How to Recover Missing Silhouette Studio Files (and an eBook update).jpeg');?>"> </h3>
                            <img src="<?= base_url('assets/images/Uk-spot.jpg');?>">
                            <div class="btn_city">
                                <a href=" "> Read Now</a>
                                <h5>Tower of London <br> <span>$700</span></h5>
                            </div>
                        </div>
                        <div class="card">
                            <h3>UAE<img src="<?= base_url('assets/icon/united-arab-emirates-uae-flag.jpg');?>"> </h3>
                            <img src="<?= base_url('assets/images/dubai-spot.jpg');?>"> 
                            <div class="btn_city">
                                <a href=" "> Read Now</a>
                                <h5>Dubai <br> <span>$800</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <div class="offers">
        <h1>Best Tour Pacakge Offers For You</h1>
        <p>Choose Your Next Destination</p>
        <div class="cards">

            <div class="card">
                <h3>Niagara Falls</h3>
                <div class="img_text">
                    <img src="<?= base_url('assets/images/Account Suspended.jpeg');?>">
                    <h4>Included: Air ticket, Hotel, Breakfast, Tours, Airport Transfer</h4>
                </div>
                <div class="cont_bx">
                    <div class="price">
                        <div class="heart_chat">
                            <i class="bi bi-chat-square-heart-fill"><span>96415</span></i>
                            <i class="bi bi-chat-square-dots-fill"><span>8586</span></i>
                        </div>
                        <div class="info_price">
                            <a href="">More info</a>
                            <h4>$2114</h4>
                        </div>
                    </div>
                    <div class="days">7 Days <br> Canada</div>
                </div>
            </div>

            <div class="card">
                <h3>Emporio Castle</h3>
                <div class="img_text">
                <img src="<?= base_url('assets/images/Emporium-castle2.jpg');?>"> 
                    <h4>Included: Air ticket, Hotel, Breakfast, Tours, Airport Transfer</h4>
                </div>
                <div class="cont_bx">
                    <div class="price">
                        <div class="heart_chat">
                            <i class="bi bi-chat-square-heart-fill"><span>86415</span></i>
                            <i class="bi bi-chat-square-dots-fill"><span>4586</span></i>
                        </div>
                        <div class="info_price">
                            <a href="">More Info</a>
                            <h4>$2648</h4>
                        </div>
                    </div>
                    <div class="days">5 Days <br> Greece</div>
                </div>
            </div>

            <div class="card">
                <h3>Grand Canal</h3>
                <div class="img_text">
                <img src="<?= base_url('assets/images/paris.jpeg');?>"> 
                    <h4>Included: Air ticket, Hotel, Breakfast, Tours, Airport Transfer</h4>
                </div>
                <div class="cont_bx">
                    <div class="price">
                        <div class="heart_chat">
                            <i class="bi bi-chat-square-heart-fill"><span>96415</span></i>
                            <i class="bi bi-chat-square-dots-fill"><span>8586</span></i>
                        </div>
                        <div class="info_price">
                            <a href="">More Info</a>
                            <h4>$2880</h4>
                        </div>
                    </div>
                    <div class="days">7 Days <br> Venice</div>
                </div>
            </div>

            <div class="card">
                <h3>Hanalei Bay</h3>
                <div class="img_text">
                <img src="<?= base_url('assets/images/cristofer-maximilian-uQDRDqpYJHI-unsplash.jpg');?>">    
                    <h4>Included: Air ticket, Hotel, Breakfast, Tours, Airport Transfer</h4>
                </div>
                <div class="cont_bx">
                    <div class="price">
                        <div class="heart_chat">
                            <i class="bi bi-chat-square-heart-fill"><span>96415</span></i>
                            <i class="bi bi-chat-square-dots-fill"><span>8586</span></i>
                        </div>
                        <div class="info_price">
                            <a href="">More info</a>
                            <h4>$3984</h4>
                        </div>
                    </div>
                    <div class="days">7 Days <br> Hawaii</div>
                </div>
            </div>

        </div>
    </div>
    <div class="destination">
        <div class="des_bx">
            <h4>Our Destination</h4>
            <p>Choose your next destinaion</p>
            <li>USA</li>
            <li>Canada</li>
            <li>Dubai</li>
            <li>Canada</li>
            <li>Venice</li>
            <li>Greece</li>
            <h6>Included: Air ticket, Hotel, Breakfast, Tours, Airport Transfer</h6>
            <button>MORE INFO</button>

        </div>
        <div class="img_bx">
        <img src="<?= base_url('assets/images/pexels-spencer-4353813.jpg');?>">    
            <div class="msg">
            <img src="<?= base_url('assets/icon/united-states.png');?>">  
                <div class="cont">
                    <h4>United States</h4>
                    <div class="icon">
                        <i class="bi bi-chat-square-heart-fill"><span>96415</span></i>
                        <i class="bi bi-chat-square-dots-fill"><span>8586</span></i>
                    </div>
                </div>
            </div>
            <div class="msg">
            <img src="<?= base_url('assets/icon/canada.png');?>">   
                <div class="cont">
                    <h4>Canada</h4>
                    <div class="icon">
                        <i class="bi bi-chat-square-heart-fill"><span>96415</span></i>
                        <i class="bi bi-chat-square-dots-fill"><span>8586</span></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <!--footer-->
  <?php $this->load->view('layout/footer');?>