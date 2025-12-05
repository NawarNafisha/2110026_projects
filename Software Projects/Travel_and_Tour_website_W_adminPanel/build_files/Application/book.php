<!--header-->
<?php $this->load->view('layout/header'); ?>

<!--main content-->
<style>
    .hotelBook {
        width: 90%;
        position: relative;
        margin: 10px auto;

    }

    .hotelBook .hotelContent {
        display: flex;
    }

    .hotelBook .hotelContent img {
        width: 420px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        border: 5px solid #fff;
        margin-right: 20px;
    }

    .hotelBook .hotelContent .rightImages img {
        width: 220px;
    }

    .hotelBook .hotelContent .rightRating {
        width: calc(100% - 640px);
        border: 1px solid lightgray;
        border-radius: 20px;
        padding: 6px 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .hotelBook .hotelContent .rightRating h5 {
        white-space: nowrap;
        width: 80%;
        margin: 7px 0;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);
        padding: 18px;
        border-radius: 10px;

    }

    .hotelBook .hotelContent .rightRating h5 span {
        margin-bottom: 20px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);
        padding: 9px 22px;
        border-radius: 10px;
        margin-right: 10px;

    }

    .hotelBook .contentSec {
        display: flex;
        align-items: center;
        justify-content: space-between;

    }

    .hotelBook .contentSec .contentSecLeft {
        width: calc(100% -250px);

    }

    .hotelBook .contentSec .contentSecLeft .hotelAmenities {
        display: flex;
        align-items: center;

    }

    .hotelBook .contentSec .contentSecLeft .hotelAmenities li {
        margin: 0 10px;

    }

    .hotelBook .contentSec .contentSecRight {
        width: 250px;
    }

    .hotelBook .contentSec .contentSecRight iframe {
        border-radius: 20px;
        box-shadow: 0 0 20px rgb(0, 0, 0, 0.08);
        width: 90%;
        height: 200px;
        float: right;
        margin-top: 20px;
    }

    .hotelBook .bookingdetails {
        padding: 20px;
        border: 1px solid lightgray;
        border-radius: 20px;
        width: 80%;
    }

    .hotelBook .bookingdetails .hotelBookContent {

        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .hotelBook .bookingdetails .hotelBookContent img {
        width: 90px;
        height: 90px;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);

    }

    .hotelBook .bookingdetails .hotelBookContent .contents h4,
    h5,
    h6 {
        margin: 0;
        margin-bottom: 10px;
    }

    .hotelBook .bookingdetails .hotelBookContent .contents h5 i {
        color: orange;

    }

    .hotelBook .bookingdetails .hotelBookContent .contents h5 span {
        padding: 2px 14px;
        border: 1px solid lightgray;
        border-radius: 15px;
        font-size: 11px;
        font-weight: 500;
        color: #8d8d8d;
        background: #fff;
        margin: 0 15px;

    }

    .hotelBook .bookingdetails .hotelBookCheckIN-out {
        width: 100%;
        display: flex;
        /* flex-wrap: wrap;*/
        align-items: center;
        background: #f1fafdff;
        border-top: 1px solid gray;
        border-bottom: 1px solid gray;
        margin-top: 15px;
        /* padding: 10px 15px;*/


    }

    .hotelBook .bookingdetails .hotelBookCheckIN-out .checkIN {
        margin-right: 10px;
        padding: 14px 17px;
        white-space: nowrap;
    }

    .hotelBook .bookingdetails .hotelBookCheckIN-out .checkIN label,
    p {
        font-size: 13px;

    }

    .hotelBook .bookingdetails .hotelBookCheckIN-out .checkIN h6 {
        font-size: 13px;
        font-weight: 500;
        margin: 5px 0;

    }


    .hotelBook .bookingdetails .hotelBookCheckIN-out .checkIN h6 span {
        font-size: 16px;
        font-weight: 600;
        color: black;
    }

    .hotelBook .bookingdetails .hotelBookCheckIN-out .night {
        padding: 2px 14px;
        border: 1px solid lightgray;
        border-radius: 15px;
        font-size: 11px;
        font-weight: 500;
        color: #8d8d8d;
        background: white;
        margin: 0 10px;
        white-space: nowrap;

    }

    .hotelBook .bookingdetails .hotelBookCheckIN-out .checkIN2 span {
        color: #2f2f2f;
    }


    .hotelBook .bookingdetails .hotelBookCheckIN-out .checkIN2 span b {
        color: black;
    }

    .hotelBook .bookingdetails .hotelBookCheckIN-out .checkIN2 span:nth-child(2) {
        border-left: 1px solid black;
        border-right: 1px solid black;
        margin: 0 15px;
        padding: 0 15px;
    }

    .hotelBook .alternativeDetails {
        width: 100%;
        display: flex;
        align-items: end;
        justify-content: space-between;
        margin-top: 20px 0;
        gap: 10px;
    }

    .hotelBook .alternativeDetails .formCard {
        width: 25%;
        display: flex;
        flex-direction: column;


    }

    .hotelBook .alternativeDetails .formCard label {
        font-size: 14px;
        font-weight: 600;
    }


    .hotelBook .alternativeDetails .formCard input {
        margin-top: 5px;
        padding: 10px 15px;
        border-radius: 10px;
        border: 1px solid lightgray;
    }

    .hotelBook .alternativeDetails .formCard input[type="submit"] {
        background: rgb(182, 94, 18);
        border: 1px solid rgb(182, 94, 18);
        color: #fff;
        cursor: pointer;
        transition: 0.3s linear;
    }

    .hotelBook .alternativeDetails .formCard input[type="submit"]:hover {
        background: transparent;
        color: rgb(182, 94, 18);


    }
</style>

<!--Hotel book-->
<div class="hotelBook">
    <!-- <h4>Guest Details</h4>-->



    <div class="contentSec">
        <div class="contentSecLeft">
            <h4>Amenities</h4>
            <div class="hotelAmenities">

            </div>
            <h4>Description</h4>

        </div>
        <div class="contentSecRight">


        </div>
    </div>

    <h4>Booking Details</h4>
    <div class="bookingdetails"></div>

   
    <h4>Guest Details</h4>

    <div class="alternativeDetails">
        <div class="formCard">
            <label for="">Name</label>
            <input type="text" placeholder="Name" id="name">
        </div>
        <div class="formCard">
            <label for="">Email</label>
            <input type="email" placeholder="Email" id="email">
        </div>
        <div class="formCard">
            <label for="">Mobile</label>
            <input type="number" placeholder="Mobile" id="mobile">
        </div>
        <div class="formCard">

            <input type="submit" id="submit" value="Book Now">
        </div>
    </div>
</div>


<script>
    const mainUrl = window.location.href.split('?');
    const hotelID = mainUrl[1];
    const cityValue = mainUrl[2];
    const dateValue1 = mainUrl[3];
    const dateValue2 = mainUrl[4];
    const peopleValue = mainUrl[5];


    const fetchData = async (hotelID) => {
        const requestData = {
            hotelID
        };
        try {
            const response = await fetch("<?php echo base_url('Welcome/hotelFind') ?>", {
                method: 'POST',
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(requestData)
            });

            const data = await response.json();

            if (data) {

                console.log(data)

                let div = document.createElement('div');
                div.className = 'hotelContent';

                div.innerHTML = ` <img src="<?php echo base_url('/assets/images/Hotels-photos/'); ?>${data[0].poster}" alt="">
        <div class="rightImages">
            <img src="<?php echo base_url('/assets/images/Hotels-photos/'); ?>${data[0].room_addHotelImages.split(',')[0]}" alt="">
            <img src="<?php echo base_url('/assets/images/Hotels-photos/'); ?>${data[0].room_addHotelImages.split(',')[1]}" alt="">
        </div>
        <div class="rightRating">
            <h5><span>${data[0].rate}</span>  ${data[0].rate > 4.1 ? "Very Good" : data[0].rate >= 3.5 ? "Good" : data[0].rate > 2 ? "Average" : "Poor"} </h5>
            <h5><span>${data[0].room}</span> Rooms left</h5>
            <h5><span>$${Math.floor(data[0].mrp)}</span>/ Night</h5>
            <h5><span>${Math.floor(data[0].discount)}</span>% Discount</h5>

        </div>`;
                let h3 = document.createElement('h3');
                // adjust depending on actual structure
                h3.innerText = data[0]?.name || data[0][0]?.name || "No hotel name";

                let container = document.getElementsByClassName('hotelBook')[0];
                if (container) {
                    container.prepend(div);
                    container.prepend(h3);
                }
                //amenintites
                data[0].services.split(',').forEach(element => {
                    let li = document.createElement('li');
                    li.innerText = element;
                    document.getElementsByClassName('hotelAmenities')[0].appendChild(li);
                });

                //food
                data[0].food.split(',').forEach(element => {
                    let li = document.createElement('li');
                    li.innerText = element;
                    document.getElementsByClassName('hotelAmenities')[0].appendChild(li);
                });

                let desc = document.createElement('p');
                desc.innerText = data[0].description;
                document.getElementsByClassName('contentSecLeft')[0].append(desc);

                //map
                let lat = data[0].lat;
                let log = data[0].log;

                let map = document.createElement('iframe');
                map.setAttribute('id', "map");
                map.setAttribute('style', "border:0;");

                map.setAttribute('src', `https://www.google.com/maps?q=${lat},${log}&h1=en&z=14&output=embed`);

                map.setAttribute("allowfullscreen", "");
                map.setAttribute("loading", "lazy");

                document.getElementsByClassName('contentSecRight')[0].append(map);

                //booking details

                //stars

       const fullStars = Math.floor(data[0].rate);
const halfStar = data[0].rate % 1 >= 0.5 ? 1 : 0;
const emptyStars = 5 - (fullStars + halfStar);

const starHtml = `
    ${'<i class="bi bi-star-fill"></i>'.repeat(fullStars)}
    ${halfStar ? '<i class="bi bi-star-half"></i>' : ''}
    ${'<i class="bi bi-star"></i>'.repeat(emptyStars)}
`;

//dates
const formatDateParts = (date) => {
    return {
        weekday: date.toLocaleDateString("en-GB" , {
            weekday: 'short'
        }),
        day: date.toLocaleDateString("en-GB" , {
            day: '2-digit'
        }),
    month: date.toLocaleDateString("en-GB" , {
            month: 'short'
        }),
    year: date.toLocaleDateString("en-GB" , {
            year: 'numeric'
        })
    }
}

const date1= new Date(dateValue1);
const date2= new Date(dateValue2);

//Nights
const diffTime = date2 - date1;
const nights = diffTime / (1000 * 60 * 60 * 24);

                let bookingdetails = document.getElementsByClassName('bookingdetails')[0];
                bookingdetails.innerHTML = `   <div class="hotelBookContent">
            <div class="contents">
                <h4>${data[0].name}</h4>
                <h5>${starHtml}
                    <span>Family Friendly</span>
                </h5>
                <h6>${data[0].location}</h6>


            </div>
            <img src="<?php echo base_url('/assets/images/Hotels-photos/'); ?>${data[0].poster}" alt="">

        </div>
        <div class="hotelBookCheckIN-out">
            <div class="checkIN">
                <label for="">CHECK IN</label>
                <h6>${formatDateParts(date1).weekday}<span>${formatDateParts(date1).day} ${formatDateParts(date1).month}</span> ${formatDateParts(date1).year}</h6>
                <p>12 PM</p>
            </div>

            <p class="night">${nights} Nights</p>

            <div class="checkIN">
                <label for="">CHECK Out</label>
                <h6>${formatDateParts(date2).weekday}<span>${formatDateParts(date2).day} ${formatDateParts(date2).month}</span> ${formatDateParts(date2).year}</h6>
                <p>12 PM</p>
            </div>

            <div class="checkIN checkIN2">
                <span><b>${nights}</b> Nights</span>
                <span><b>${peopleValue}</b> People</span>
                <span><b>1</b> Room</span>
            </div>
        </div>`;

let checkLogin = <?php echo json_encode((int)($this->session->userdata('userdata')['id'] ?? 0)); ?>;
const login_signup = document.querySelector('.login_signup');

let submit = document.getElementById('submit').value
document.getElementById('submit').addEventListener('click', (e) => {
    e.preventDefault(); 

    if (checkLogin) {
        
        if (document.getElementById('mobile').value != '' && document.getElementById('email').value != '' && document.getElementById('name').value != '' ) {
         roomBook(
            data[0].id,
            data[0].name,
            date1,
            date2,
            checkLogin,
            data[0].mrp * nights,
            peopleValue,
            nights,
            data[0].discount,
            document.getElementById('name').value,
            document.getElementById('email').value,
            document.getElementById('mobile').value
            

         ) 
        }
        else{
            alert ('please fill all inputs'); 

        }
      
      
    } else {
        login_signup.classList.toggle('login_signup_ll');
        login_signup.classList.remove('login_signup_ss');
    }
});


        
        
        
        }

        } catch (error) {
            console.error(error);

        }
    }

    fetchData(hotelID);


    let roomBook = async (hotelID , hotelName , startDate , endDate , userID , price , peopleValue ,nights, discount , bookingName , bookingEmail , bookingPhone ) => {
      
        let data = {
            hotelID , hotelName , startDate , endDate , userID , price , peopleValue , nights , discount , bookingName , bookingEmail , bookingPhone
        }

        try {
            let response = await fetch("<?php echo base_url('Welcome/bookRoom')?>" , {
                method: 'POST',
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(data)
            })

            let result = await response.json();

            if (result.message == 'Booking Succesful') {
               // alert(result.message);
                window.location.href = "<?php echo base_url('/order')?>"
                
            }
            else{
// alert(result.message);
            }
            
        } catch (error) {
            console.error(error);
            
        }
    }
</script>









<!--footer-->
<?php $this->load->view('layout/footer'); ?>